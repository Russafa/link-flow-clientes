<?php
/**
 * Telas Padrão — template de listagem do Blog (Fase 3).
 * Nome de arquivo sugerido: home.php (página de posts) do child theme.
 * Se o tema usar uma "página estática de blog" em vez de home.php,
 * renomear para page-blog.php e atribuir à página "Blog" em
 * Configurações > Leitura, ou usar archive.php se preferir que
 * funcione também para /category/.
 *
 * Categorias reais do catálogo (filtro): eletrosoldada, galvanizada,
 * inox, protecao, peneiracao. SEM aba "construcao" — decisão da
 * Priscila (2026-10-08).
 */
get_header();
?>

<header class="blog-hero">
    <h1>Blog Telas Padrão</h1>
    <p>Conteúdo técnico sobre telas soldadas, onduladas, galvanizadas e inox — direto de quem fabrica.</p>
</header>

<div class="blog-filters">
    <button class="filter-tab active" data-cat="todos">Todos</button>
    <button class="filter-tab" data-cat="eletrosoldada">Eletrosoldada</button>
    <button class="filter-tab" data-cat="galvanizada">Galvanizada</button>
    <button class="filter-tab" data-cat="inox">Inox</button>
    <button class="filter-tab" data-cat="protecao">Proteção</button>
    <button class="filter-tab" data-cat="peneiracao">Peneiração</button>
</div>

<div class="blog-grid">
    <?php
    $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
    $blog_query = new WP_Query( array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
        'paged'          => $paged,
    ) );

    if ( $blog_query->have_posts() ) :
        $i = 0;
        while ( $blog_query->have_posts() ) :
            $blog_query->the_post();
            $i++;
            $cat_slug  = get_primary_category_slug();
            $cat_name  = get_the_category() ? get_the_category()[0]->name : '';
            $is_destaque = ( $i === 1 ) ? ' destaque' : '';
            ?>
            <article class="card rv<?php echo esc_attr( $is_destaque ); ?>" data-cat="<?php echo esc_attr( $cat_slug ); ?>">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img class="card-thumb" src="<?php the_post_thumbnail_url( 'blog-card' ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                    <?php else : ?>
                        <div class="card-thumb"></div>
                    <?php endif; ?>
                </a>
                <div class="card-body">
                    <?php if ( $cat_name ) : ?>
                        <span class="card-cat"><?php echo esc_html( $cat_name ); ?></span>
                    <?php endif; ?>
                    <h2 class="card-title"><a href="<?php the_permalink(); ?>" style="color:inherit;text-decoration:none;"><?php the_title(); ?></a></h2>
                    <p class="card-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 20 ) ); ?></p>
                    <div class="card-meta">
                        <span><?php echo esc_html( get_the_date() ); ?></span>
                        <a class="card-more" href="<?php the_permalink(); ?>">Ler mais →</a>
                    </div>
                </div>
            </article>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo '<p>Nenhum artigo publicado ainda.</p>';
    endif;
    ?>
</div>

<?php
the_posts_pagination( array(
    'prev_text' => '← Anterior',
    'next_text' => 'Próxima →',
) );

get_footer();
