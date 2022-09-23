<?php
    /* Template Name: Pagina Blog */
?>

<?php get_template_part('templates/html', 'header'); ?>

<main>
    <section class="container">
        <div class="blog-corpo">
            <div class="blog-corpo-titulo">
                <div class="blog-corpo-titulo-alto">BLOG</div>
                <h2 class="blog-corpo-titulo-baixo">Últimas Publicações</h2>
            </div>
        </div>
        <div class="blog-container">

            <div class="blog-card">
                <?php
                    $args = array('post_type'=> 'post', 'showposts'=>-1);
                    $my_posts = get_posts( $args);
                ?>
                <?php if ($my_posts) : foreach ($my_posts as $post) : setup_postdata( $post); ?>
                <div class="blog-card-corpo">
                    <a href="<?php the_permalink() ?>">
                        <figure class="blog-card-img">
                            <?php the_post_thumbnail(); ?>
                        </figure>
                        <div class="blog-card-text">
                            <h3 class="blog-card-text-titulo"><?php the_title(); ?></h3>
                            <h4 class="blog-card-text-desc"><?php the_excerpt(); ?></h4>
                            <p class="blog-card-text-mais">Ver Mais ></p>
                        </div>
                    </a>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_template_part('templates/html', 'footer'); ?>