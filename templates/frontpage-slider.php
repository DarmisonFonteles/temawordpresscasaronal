<?php $settings = get_option('options_gerais');?>


<section>
    <div class="container position-corpo-master">
        <div class=" owl-carousel owl-theme" id="sobre">
            <?php foreach($settings['group_slider_card'] as $card): ?>
                <div class="position-corpo">
                        <figure class="figure-test">
                        <?php foreach($card['grup_slider_img'] as $img): ?>
                            <?php $url = wp_get_attachment_url($img, 'full'); ?>
                        <?php endforeach; ?>
                            <img src="<?php echo $url; ?>" alt="Manual de doacoes" title="Manual de doacoes"/>
                        </figure>
                    <div class="posicao-texto-rotativo">
                        <div class="posicao-texto-rotativo-caixa">
                            <div class="title-texto-rotativo">
                                <h2><strong><span style="color: #293444;"><?php echo $card['grup_slider_titulo'];?></span>
                                            <span style="color: #d2267a;"><?php echo $card['grup_slider_dois'];?></span></strong></h2>
                            </div>
                            <div class=""><?php echo $card['grup_slider_desc']; ?></div>
                            <a href="./index.html" class="btn-doar" title="btn-doar">Saiba como doar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>