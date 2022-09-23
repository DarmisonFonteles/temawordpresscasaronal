<?php $settings = get_option('options_gerais'); ?>

<?php foreach($settings['section_att_card_um_img'] as $img): ?>
<?php $url = wp_get_attachment_url($img, 'full'); ?>
<?php endforeach; ?>



<section id="atividades">
    <div class="position-seletec-2 container">
        <header class="posicionamento-texto-center">
            <h2 class=""><?php echo $settings['section_att_tittle']; ?></h2>
        </header>
        <div class="posicionamento-lateral-beta">
            <?php foreach($settings['group_att_card'] as $card): ?>
                <div class="posicionamento-caixa">
                    <figure>
                        <?php foreach($card['grup_att_img'] as $img): ?>
                            <?php $url = wp_get_attachment_url($img, 'full'); ?>
                        <?php endforeach; ?>
                        <img src="<?php echo $url; ?>" class="text-select-img" alt="evangelizacao" title="evangelizacao"/>
                    </figure>
                    <div>
                        <div class="title-select-2"><?php echo $card['grup_att_titulo']; ?><br />
                            <span class="text-select-2"><?php echo $card['grup_att_desc']; ?> </span></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>