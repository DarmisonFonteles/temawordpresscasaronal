<?php $settings = get_option('options_gerais');?>

<?php foreach($settings['section_comunidade_titulo'] as $img): ?>
<?php $url = wp_get_attachment_url($img, 'full'); ?>
<?php endforeach; ?>



<section class="comunidade-shalon-beta">
    <div class="container">
        <header class="comunidade-shalon-img-centro">
            <img src="<?php echo $url; ?>" class="comunidade-shalon" alt="comunidade-shalon" title="" />
        </header>
        <div>
            <div class="comunidade-shalon-beta-um">
                <div class="comunidade-shalon-beta-dois1">
                    <div class="comunidade-shalon-beta-titulo1">
                        <h2><strong><span style="color: #204f91;"><?php echo $settings['section_comunidade_tittle_card_um']; ?></span></strong></h2>
                    </div>
                    <div class="comunidade-shalon-beta-text1"><?php echo $settings['section_comunidade_desc_card_um']; ?></div>
                </div>
                <div >
                    <figure>
                        <?php foreach($settings['section_comunidade_imagem_um'] as $img): ?>
                        <?php $url_b = wp_get_attachment_url($img, 'full'); ?>
                        <?php endforeach; ?>
                        <img src="<?php echo $url_b; ?>" class="comunidade-shalon-img" alt="padre-francs" title="padre-francs"/>
                    </figure>
                </div>
            </div>
            <div class="comunidade-shalon-beta-um1">
                <div class="comunidade-shalon-beta-dois2">
                    <div class="comunidade-shalon-beta-titulo2">
                        <h2><strong><span style="color: #204f91;"><?php echo $settings['section_comunidade_tittle_card_dois']; ?></span></strong></h2>
                    </div>
                    <div class="comunidade-shalon-beta-text2"><?php echo $settings['section_comunidade_desc_card_dois']; ?></div>
                </div>
                <div>
                    <figure>
                        <?php foreach($settings['section_comunidade_imagem_dois'] as $img): ?>
                        <?php $url_c = wp_get_attachment_url($img, 'full'); ?>
                        <?php endforeach; ?>
                        <img src="<?php echo $url_c; ?>" class="comunidade-shalon-img" alt="sobre-projetos-humanos" title="sobre-projetos-humanos"/>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>