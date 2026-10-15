<?php
/**
 * Telas Padrão — template de artigo único (Fase 3).
 * Arquivo: single.php do child theme (aplica a todo post do tipo "post").
 */
get_header();

while ( have_posts() ) :
    the_post();

    $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : '';
    $cats = get_the_category();
    ?>

    <header class="article-hero" <?php if ( $thumb_url ) : ?>style="background-image:url('<?php echo esc_url( $thumb_url ); ?>');"<?php endif; ?>>
        <div class="article-hero-overlay"></div>
        <div class="article-hero-content">
            <?php if ( $cats ) : ?>
                <div class="cats">
                    <?php foreach ( $cats as $cat ) : ?>
                        <span><?php echo esc_html( $cat->name ); ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <h1><?php the_title(); ?></h1>
            <div class="meta">
                <span><?php echo esc_html( get_the_date() ); ?></span>
                <span><?php echo esc_html( telas_read_time() ); ?></span>
            </div>
        </div>
    </header>

    <div class="article-wrap">
        <div class="article-body">
            <?php the_content(); ?>

            <div style="margin-top:3em;padding-top:2em;border-top:1px solid var(--border);">
                <a class="btn" href="https://api.whatsapp.com/send?phone=5511933460625" target="_blank" rel="noopener">
                    Peça seu orçamento no WhatsApp
                </a>
            </div>
        </div>

        <aside class="article-sidebar">
            <?php
            $content_with_ids = apply_filters( 'the_content', get_the_content() );
            echo telas_generate_toc( $content_with_ids );
            ?>
        </aside>
    </div>

    <?php
endwhile;

get_footer();
