<?php $settings = get_option('options_gerais');?>

<?php foreach($settings['section_projetos_imagem_um'] as $img): ?>
<?php $url = wp_get_attachment_url($img, 'full'); ?>
<?php endforeach; ?>

<section class="nossos-projetos-beta">
    <div class="container">
        <header>
            <div class="nossos-projetos-beta-titulo ">
                <h2><span style="color: #204f91"><strong><?php echo $settings['section_projetos_tittle']; ?></strong></span></h2>
            </div>
        </header>
        <div class="nossos-projetos-beta-corpo">
            <?php foreach($settings['group_projetos_card'] as $card): ?>
                <div class="nossos-projetos-beta-area">
                    <a>
                        <div class="nossos-projetos-beta-sobreposto">
                            <div class="nossos-projetos-beta-text1"><?php echo $card['grup_projetos_titulo']; ?></div>
                        </div>
                        <figure>
                            <?php foreach($card['grup_projetos_img'] as $img): ?>
                                <?php $url = wp_get_attachment_url($img, 'full'); ?>
                            <?php endforeach; ?>
                            <img src="<?php echo $url; ?>" class="nossos-projetos-beta-img" alt="projeto-jose-do-egito" title="projeto-jose-do-egito"/>
                        </figure>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
