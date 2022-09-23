<?php $settings = get_option('options_gerais');?>

<?php foreach($settings['section_doacao_banco_img'] as $img): ?>
<?php $url = wp_get_attachment_url($img, 'full'); ?>
<?php endforeach; ?>


<section id="doacao">
    <div class="">
    <div class="container select-edite-tops">
        <header class="doar-aprenda">
            <div class="doar-aprenda-text1">
                <h2><span style="color: #293444"><?php echo $settings['section_doacao_tittle']; ?></span>
                    <span style="color: #d2267a"><strong><?php echo $settings['section_doacao_tittle_dois']; ?></strong></span></h2>
            </div>
            <div class="doar-aprenda-text2 select-edite-tops"><?php echo $settings['section_doacao_tittle_desc']; ?>
            </div>
        </header>
    </div>

    <div class="doar-benfeitor-um select-edite-color select-edite-tops">
        <div class="doar-benfeitor-um-beta container">
            <h3 class="doar-benfeitor-um-beta-um"><?php echo $settings['section_doacao_benfeitor']; ?></h3>
            <div class="doar-benfeitor-um-beta-dois">
                <div class="doar-benfeitor-um-beta-tres">
                    <p><?php echo $settings['section_doacao_benfeitor_desc']; ?>A Casa Ronaldo Pereira vive da Providência Divina. A Providência Divina é a fonte de todo
                        sustento e desenvolvimento dos meios necessários para a manutenção da nossa Casa.<br /><br />
                        O Benfeitor é aquele que nos ajuda fielmente com a partilha financeira,
                        contribuindo para manutenção e operação de nossas atividades. Seja um benfeitor! Ajude a
                        realizar os desígnios de Deus na vida dessas 150 Crianças, contribuindo para a
                        transformação de suas vidas através de sua partilha.</p>
                </div>

                <div class="doar-benfeitor-um-beta-tres2">
                    <a class="doar-benfeitor-um-beta-botton1" href="./index.html">Falar no whatsapp</a>
                    <a class="doar-benfeitor-um-beta-botton2" href="./index.html">Ajude</a>
                </div>

            </div>
        </div>
    </div>
    
    <div class="class-doar-banco select-edite-color select-edite-tops">
        <div class="doar-benfeitor-um-beta container">
            <h3 class="doar-benfeitor-um-beta-um"><?php echo $settings['section_doacao_banco']; ?></h3>
            <div class="doar-benfeitor-um-beta-dois">
                <div class="doar-benfeitor-um-beta-tres">
                    <p><?php echo $settings['section_doacao_banco_desc']; ?></p>
                </div>
                <div class="doar-benfeitor-um-beta-tres2">
                    <div class="doar-benfeitor-um-beta-banco">
                        <img src="<?php echo $url ?>" class="">
                        <p><?php echo $settings['section_doacao_banco_dados']; ?></p>
                        <!-- <p>Você pode doar com depósito bancário<br />
                            Banco: Banco do Brasil<br />
                            Agência: 3473-8 / Conta-corrente: 44.089-2<br />
                            CNPJ: 07.044.456/0001-00 - Associação Shalom</p> -->
                    </div>
                    <a href="./index.html" class="doar-benfeitor-um-beta-botton-extra">
                        <p class="">Doações por cartão de crédito ></p>
                    </a>
                    <a href="./index.html" class="doar-benfeitor-um-beta-botton-extra">
                        <p class="">Doações por boleto bancário ></p>
                    </a>
                </div>
            </div>   
        </div>
    </div>
    
    <div class="class-doar-banco select-edite-tops">
        <div class="doar-benfeitor-um-beta">
            <h3 class="doar-benfeitor-um-beta-um"><?php echo $settings['section_doacao_volutario']; ?></h3>
            <div class="doar-benfeitor-um-beta-dois">
                <div class="voluntario-benfeitor-um-beta">
                    <?php echo $settings['section_doacao_voluntario_desc']; ?>
                </div>
                
                <div class="voluntario-benfeitor-um-beta">
                        <?php echo do_shortcode( '[contact-form-7 id="40" title="Contatos"]' ); ?>
                </div>  
            </div>
        </div>
    </div>
    </div>
</section> 