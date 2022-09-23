<?php
    /* Template Name: Pagina Fale conosco */
?>

<?php $contato_titulo = get_post_meta(get_the_id(), 'contatos-titulo', true ); ?>
<?php $contato_titulo_desc = get_post_meta(get_the_id(), 'contatos-titulo-desc', true ); ?>
<?php $contato_titulo_img = get_post_meta(get_the_id(), 'contatos-titulo-img', false ); ?>
<?php $contato_body_titulo = get_post_meta(get_the_id(), 'contatos-corpo-titulo', true ); ?>
<?php $contato_body_titulo_dois = get_post_meta(get_the_id(), 'contatos-corpo-titulo_dois', true ); ?>
<?php $contato_body_titulo_desc = get_post_meta(get_the_id(), 'contatos-corpo-titulo_dois_desc', true ); ?>
<?php $contato_inform_um = get_post_meta(get_the_id(), 'contatos-info-um', true ); ?>
<?php $contato_inform_dois = get_post_meta(get_the_id(), 'contatos-info-dois', true ); ?>
<?php $contato_inform_tres = get_post_meta(get_the_id(), 'contatos-info-tres', true ); ?>
<?php $contato_inform_quatro = get_post_meta(get_the_id(), 'contatos-info-quatro', true ); ?>
<?php $contato_inform_cinco = get_post_meta(get_the_id(), 'contatos-info-cinco', true ); ?>
<?php $contato_inform_seis = get_post_meta(get_the_id(), 'contatos-info-seis', true ); ?>
<?php $contato_inform_sete = get_post_meta(get_the_id(), 'contatos-info-sete', true ); ?>
<?php $contato_inform_oito = get_post_meta(get_the_id(), 'contatos-info-oito', true ); ?>


<?php get_template_part('templates/html', 'header'); ?>

<section>
    <div class="container">
        <div class="contato-header">
                <div class="contato-header-auto">
                    <h4>Fale Conosco</h4>
                    <h2><?php echo $contato_titulo; ?></h2>
                    <p><?php echo $contato_titulo_desc; ?></p>
                </div>
                <div class="contato-header-baixo">
                    <?php foreach($contato_titulo_img as $img): ?>
                        <!-- cometario no ALT da imagem -->
                        <?php $caption = wp_get_attachment_caption($img); ?>
                        <?php $url = wp_get_attachment_url($img, 'full'); ?>
                    <?php endforeach; ?>
                    <figure>
                        <img src="<?php echo $url; ?>" alt="<?php echo $caption ?>">
                    </figure>
                </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="contato-corpo">
            <div class="contato-corpo-auto">
                <h2><?php echo $contato_body_titulo; ?></h2>
                <?php echo do_shortcode( '[contact-form-7 id="40" title="Contatos"]' ); ?>
            </div>
            <div class="contato-corpo-baixo">
                <div class="contato-corpo-text">
                    <h3 class="contato-corpo-text-h3"><?php echo $contato_body_titulo_dois ?></h3>
                    <p class="contato-corpo-text-p"><?php echo $contato_body_titulo_desc; ?></p>
                </div>
                <div class="contato-corpo-text">
                    <h3 class="contato-corpo-text-h3"><?php echo $contato_inform_um; ?></h3>
                    <h4><?php echo $contato_inform_dois; ?></h4>
                    <p><?php echo $contato_inform_tres; ?></p>
                    <h4><?php echo $contato_inform_quatro; ?></h4>
                    <p><?php echo $contato_inform_cinco; ?></p>
                    <p><?php echo $contato_inform_seis; ?></p>
                    <p><?php echo $contato_inform_sete; ?></p>
                    <br/>

                    <h4><?php echo $contato_inform_oito; ?></h4>
                </div>
            </div> 
        </div>
    </div>
</section>


<?php get_template_part('templates/html', 'footer'); ?>