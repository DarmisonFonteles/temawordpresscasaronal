<?php $settings = get_option('options_gerais');?>

<section>
    <div class="loc-senssao-beta">
        <div class="loc-senha-auto container">
            <div class="loc-senssao-beta-um">
                <h4 class="loc-senssao-beta-titulo"><?php echo $settings['section_Contatos_tittle'] ?></h4>
                <div class="loc-senssao-beta-text1"> <?php echo $settings['section_Contatos_desc_um'] ?><br /> 
                <?php echo $settings['section_Contatos_desc_dois'] ?> </div>
                <div class="loc-senssao-beta-text2"> <?php echo $settings['section_Contatos_desc_tres'] ?> </div>
                <div class="">
                    <a href="./index.html" title="Facebook">
                        <img class="loc-senssao-beta-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logoface.webp">
                    </a>
                    <a href="./index.html" title="instagram">
                        <img class="loc-senssao-beta-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/instalogo.jpg">
                    </a>
                    <a href="./index.html" title="whatsapp">
                        <img class="loc-senssao-beta-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logowats.png">
                    </a>
                    <a href="./index.html" title="youtube">
                        <img class="loc-senssao-beta-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logoyoutube.webp">
                    </a>
                </div>
            </div>
            <div class="loc-senssao-beta-um">
                <h4 class="loc-senssao-beta-titulo"><?php echo $settings['section_Contatos_tittle_dois'] ?></h4>
                <div class="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.306977553674!2d-38.47643968524097!3d-3.7431509972767243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c74631d4e3524b%3A0xa1c559d43d8cc3f9!2sR.%20Joaquim%20Lima%2C%201415%20-%20Papicu%2C%20Fortaleza%20-%20CE%2C%2060175-005!5e0!3m2!1spt-BR!2sbr!4v1573487820811!5m2!1spt-BR!2sbr"
                        width="100%" height="260" frameborder="0" style="border:0;">
                    </iframe>


                </div>
            </div>
        </div>
    </div>
</section>