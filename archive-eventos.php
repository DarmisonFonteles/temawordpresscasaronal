<?php get_template_part('templates/html', 'header'); ?>

<section class="blog-titulo">
    <div class="container">
        <div class="blog-titulo-corpo">
            <div class="blog-titulo-corpo-titulo">Próximos eventos</div>
            <h2 class="blog-titulo-corpo-desc">Venha conhecer de perto e vivenciar todas as melhorias nas vidas dessas crianças.</h2>
        </div>
    </div>
</section>
<section class="container">
    <div class="blog-card">
            <?php
                $args = array('post_type'=> 'eventos', 'showposts'=>-1);
                $my_eventos = new wp_query($args);
                //$my_eventos = get_posts( $args);
            ?>
            <?php while ( $my_eventos->have_posts() ) : $my_eventos->the_post(); ?>
        <div class="blog-card-corpo">
            <a href="<?php the_permalink(); ?>">
                <div class="blog-cont">
                    <figure class="blog-cont-img">
                        <?php the_post_thumbnail(); ?>
                    </figure>
                    <div class="blog-cont-text">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                        <p></p>
                    </div>
                </div>
            </a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>
<?php get_template_part('templates/html', 'footer'); ?>