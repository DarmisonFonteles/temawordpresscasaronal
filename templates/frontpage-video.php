<?php $settings = get_option('options_gerais');?>

<?php foreach($settings['section_video_imagem'] as $img): ?>
<?php $url = wp_get_attachment_url($img, 'full'); ?>
<?php endforeach; ?>

<section class="select-video-edit" id="video">
            <div class="select-video-edit container">
                <header class="select-video-edit-text">
                    <div>
                        <h2><span style="color: #293444"><strong><?php echo $settings['section_video_tittle']; ?></strong></span> 
                            <span style="color: #d2267a"><strong><?php echo $settings['section_video_tittle_dois']; ?></strong></span></h2>
                    </div>
                </header>
                <div class="img-video-edit">
                    <div class="img-video-edit">
                        <img style="border-radius: 3% 3%;" src="<?php echo $url; ?>" class="img-video-edit" alt="video-pop" title="video-pop"/> 
                            <a href="#video_popup" class="" id="video"></a>
                        <div id="video_popup"></div>
                    </div>
                </div>
            </div>
        </section>