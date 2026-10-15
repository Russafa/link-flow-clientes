<?php
/**
 * Telas Padrão — adições ao functions.php do child theme (Fase 3).
 * Cole o conteúdo abaixo de <?php no functions.php do child theme
 * (ou inclua via um arquivo separado com require_once).
 *
 * Categorias reais do catálogo (usadas no filtro do blog e no
 * data-cat dos cards): eletrosoldada, galvanizada, inox, protecao,
 * peneiracao. NÃO existe categoria "construcao" — decisão da
 * Priscila (2026-10-08): a Telas Padrão não trabalha com Malha POP
 * nem telas para construção civil.
 */

/* ---------- Assets do Blog/Artigo ---------- */
function telas_enqueue_assets() {
    if ( is_home() || is_archive() || is_singular( 'post' ) ) {
        wp_enqueue_style(
            'telas-blog-artigo',
            get_stylesheet_directory_uri() . '/assets/blog-artigo.css',
            array(),
            '1.0.0'
        );
        wp_enqueue_script(
            'telas-blog-artigo',
            get_stylesheet_directory_uri() . '/assets/blog-artigo.js',
            array(),
            '1.0.0',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'telas_enqueue_assets' );

/* ---------- Thumbnail do card (16:9) ---------- */
add_action( 'after_setup_theme', function () {
    add_image_size( 'blog-card', 800, 450, true );
} );

/* ---------- Tempo de leitura ---------- */
function telas_read_time( $post_id = null ) {
    $post_id = $post_id ? $post_id : get_the_ID();
    $content = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( wp_strip_all_tags( $content ) );
    $minutes = max( 1, (int) ceil( $word_count / 200 ) );
    return $minutes . ' min de leitura';
}

/* ---------- Slug da categoria primária (para data-cat do card) ---------- */
function get_primary_category_slug( $post_id = null ) {
    $post_id = $post_id ? $post_id : get_the_ID();
    $cats = get_the_category( $post_id );
    if ( empty( $cats ) ) {
        return 'geral';
    }
    return $cats[0]->slug;
}

/* ---------- Gera o índice (TOC) a partir dos H2/H3 do conteúdo ---------- */
function telas_generate_toc( $content ) {
    if ( ! preg_match_all( '/<h([23])[^>]*id="([^"]*)"[^>]*>(.*?)<\/h[23]>/i', $content, $matches, PREG_SET_ORDER ) ) {
        return '';
    }

    $toc = '<nav class="toc"><p class="toc-title">Neste artigo</p><ul>';
    $open_sub = false;

    foreach ( $matches as $m ) {
        $level = (int) $m[1];
        $id    = esc_attr( $m[2] );
        $text  = wp_strip_all_tags( $m[3] );

        if ( $level === 3 ) {
            if ( ! $open_sub ) {
                $toc .= '<ul>';
                $open_sub = true;
            }
            $toc .= '<li><a class="toc-link" href="#' . $id . '">' . esc_html( $text ) . '</a></li>';
        } else {
            if ( $open_sub ) {
                $toc .= '</ul>';
                $open_sub = false;
            }
            $toc .= '<li><a class="toc-link" href="#' . $id . '">' . esc_html( $text ) . '</a></li>';
        }
    }

    if ( $open_sub ) {
        $toc .= '</ul>';
    }

    $toc .= '</ul></nav>';
    return $toc;
}

/* ---------- Adiciona IDs automaticamente aos H2/H3 do conteúdo ---------- */
function telas_add_heading_ids( $content ) {
    if ( ! is_singular( 'post' ) || ! in_the_loop() || ! is_main_query() ) {
        return $content;
    }

    $used_ids = array();

    $content = preg_replace_callback(
        '/<h([23])([^>]*)>(.*?)<\/h[23]>/i',
        function ( $matches ) use ( &$used_ids ) {
            $level = $matches[1];
            $attrs = $matches[2];
            $text  = $matches[3];

            if ( stripos( $attrs, 'id=' ) !== false ) {
                return $matches[0];
            }

            $slug = sanitize_title( wp_strip_all_tags( $text ) );
            $base_slug = $slug;
            $i = 2;
            while ( in_array( $slug, $used_ids, true ) ) {
                $slug = $base_slug . '-' . $i;
                $i++;
            }
            $used_ids[] = $slug;

            return '<h' . $level . $attrs . ' id="' . esc_attr( $slug ) . '">' . $text . '</h' . $level . '>';
        },
        $content
    );

    return $content;
}
add_filter( 'the_content', 'telas_add_heading_ids', 9 );
