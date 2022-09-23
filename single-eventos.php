<?php $grup_slider = get_post_meta(get_the_id(), 'eventos_slider', true ); ?>
<?php $grup_corpo = get_post_meta(get_the_id(), 'Eventos_titulo_corpo', true ); ?>
<?php $grup_desc = get_post_meta(get_the_id(), 'Eventos_desc_corpo', true ); ?>

<?php get_template_part('templates/html', 'header'); ?>


<section class="blog-titulo">
    <div class="container">
        <div class="blog-titulo-corpo">
            <div class="blog-titulo-corpo-titulo">Eventos</div>
            <h2 class="blog-titulo-corpo-desc">Venha conhecer de perto e vivenciar todas as melhorias nas vidas dessas crianças.</h2>
        </div>
    </div>
</section>

<section class="container">
    <div class="position-corpo-master">
        <div class=" owl-carousel owl-theme" id="sobre">
            <?php foreach($grup_slider as $card): ?>
                <div class="position-corpo">
                        <figure class="figure-test">
                        <?php foreach($card['Eventos_img_slider'] as $img): ?>
                            <?php $url = wp_get_attachment_url($img, 'full'); ?>
                        <?php endforeach; ?>
                            <img src="<?php echo $url; ?>" alt="Manual de doacoes" title="Manual de doacoes"/>
                        </figure>
                    <div class="posicao-texto-rotativo">
                        <div class="posicao-texto-rotativo-caixa">
                            <div class="text-single-eventos">
                                <h2><strong><span style="color: #293444;"><?php echo $card['Eventos_titulo_slider'];?></span>
                            </div>
                            <div class="text-singles-eventos-desc"><?php echo $card['Eventos_desc_slider']; ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="desc-single">
            <div class="desc-single-titu"><?php echo $grup_corpo; ?></div>
            <div class="desc-single-desc"><?php echo $grup_desc; ?></div>
        </div>
    </div>
</section>


<?php get_template_part('templates/html', 'footer'); ?>