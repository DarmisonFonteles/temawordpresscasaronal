
<?php $settings = get_option('options_gerais');?>

<?php foreach($settings['section_banner_imagem'] as $img): ?>
<?php $url = wp_get_attachment_url($img, 'full'); ?>
<?php endforeach; ?>



<section class="segunda-sessao-posicionamento">
    <div class="segunda-sessao-posicionamento-img" 
    style="background-image: url( <?php echo $url ?>; )"></div>
    <div class="container">
        <div>
            <div class="segunda-sessao-posicionamento">
                <header class="segunda-sessao-posicionamento-text">
                    <div class="segunda-sessao-edit-text-1">
                        <h2><?php echo $settings['section_banner_tittle']; ?></h2>
                    </div>
                    <div class="segunda-sessao-edit-text-2"><?php echo $settings['section_banner_description']; ?></div>
                </header>
            </div>
        </div>
    </div>
</section>