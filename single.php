<?php get_template_part('templates/html', 'header'); ?>
    
<section>
    <div class="blog-corpo">
        <div class="blog-corpo-titulo">
            <div class="blog-corpo-titulo-alto">BLOG</div>
            <h2 class="blog-corpo-titulo-baixo">Veja nosso conteudo</h2>
        </div>
    </div>
    
    <div class="container">
        <div class="Corpo-single">
            <div class="Corpo-single-img">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="Corpo-single-title">
                <?php the_title(); ?>
            </div>
            <div class="Corpo-single-desc">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_template_part('templates/html', 'footer'); ?>