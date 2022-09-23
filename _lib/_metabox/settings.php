<?php
/*
* Metabox Settings
* Desenvolvedor: Thiago Mendes
*/

// CREATE PAGE
add_filter( 'mb_settings_pages', 'prefix_options_page' );
function prefix_options_page($settings_pages){ 

  $settings_pages[] = array(
    'id'          => 'theme-options',
    'option_name' => 'options_gerais',
    'menu_title'  => 'Frontpage',
  );
  return $settings_pages;

}

// START DEFINITION OF META BOXES
add_filter( 'rwmb_meta_boxes', 'prefix_options_meta_boxes' );
function prefix_options_meta_boxes( $meta_boxes ) {

  // GTM

  //section Slider 
  $meta_boxes[] = array(
    'id'        => 'section_slide',
    'title'     => 'Section Atividades',
    'context'   => 'normal',
    'priority'  => 'high',
    'settings_pages' => 'theme-options',
    'fields'    => array(

      array(
        'id'          => 'group_slider_card',
        'name'        => '',
        'type'        => 'group',
        'clone'       => true,
        'sort_clone'  => true,
        'collapsible' => true,
        'max_clone'   => '4',
        'group_title' => 'Atividades',
        'save_state'  => true,
        'fields'      => array(

          array(
            'id'               => 'grup_slider_img',
            'name'             => 'Image Advanced',
            'type'             => 'image_advanced',
            'force_delete'     => false,
            'max_file_uploads' => 1,
          ),
          array(
            'name'  => '',
            'id'    => 'grup_slider_titulo',
            'desc'  => 'Título video',
            'type'  => 'text',
          ),
          array(
            'name'  => '',
            'id'    => 'grup_slider_dois',
            'desc'  => 'Descrição',
            'type'  => 'text',
          ),
          array(
            'name'  => '',
            'id'    => 'grup_slider_desc',
            'desc'  => 'Descrição',
            'type'  => 'text',
          ),
        )
      )
    )
  );
  // section banner
  $meta_boxes[] = array(
    'id'        => 'section_banner',
    'title'     => 'Section Banner',
    'context'   => 'normal',
    'priority'  => 'high',
    'settings_pages' => 'theme-options',
    'fields'    => array(

      array(
        'name'  => '',
        'id'    => 'section_banner_tittle',
        'desc'  => 'Título',
        'type'  => 'textarea',
      ),

      array(
        'name'  => '',
        'id'    => 'section_banner_description',
        'desc'  => 'Descrição',
        'type'  => 'text',
      ),
    
      array(
        'id'               => 'section_banner_imagem',
        'name'             => 'Image Advanced',
        'type'             => 'image_advanced',
        'force_delete'     => false,
        'max_file_uploads' => 1,
      ),
    )
  );

  //section nossas atividade 
  $meta_boxes[] = array(
    'id'        => 'section_nossa_att',
    'title'     => 'Section Atividades',
    'context'   => 'normal',
    'priority'  => 'high',
    'settings_pages' => 'theme-options',
    'fields'    => array(

      array(
        'name'  => '',
        'id'    => 'section_att_tittle',
        'desc'  => 'Título',
        'type'  => 'textarea',
      ),
      array(
        'id'          => 'group_att_card',
        'name'        => '',
        'type'        => 'group',
        'clone'       => true,
        'sort_clone'  => true,
        'collapsible' => true,
        'max_clone'   => '5',
        'group_title' => 'Atividades',
        'save_state'  => true,
        'fields'      => array(

          array(
            'id'               => 'grup_att_img',
            'name'             => 'Image Advanced',
            'type'             => 'image_advanced',
            'force_delete'     => false,
            'max_file_uploads' => 1,
          ),
          array(
            'name'  => '',
            'id'    => 'grup_att_titulo',
            'desc'  => 'Título video',
            'type'  => 'text',
          ),
          array(
            'name'  => '',
            'id'    => 'grup_att_desc',
            'desc'  => 'Descrição',
            'type'  => 'text',
          ),
        )
      )
    )
  );

  //section video
  $meta_boxes[] = array(
    'id'        => 'section_video',
    'title'     => 'Section video',
    'context'   => 'normal',
    'priority'  => 'high',
    'settings_pages' => 'theme-options',
    'fields'    => array(

      array(
        'name'  => '',
        'id'    => 'section_video_tittle',
        'desc'  => 'Título video',
        'type'  => 'textarea',
      ),

      array(
        'name'  => '',
        'id'    => 'section_video_tittle_dois',
        'desc'  => 'Descrição',
        'type'  => 'text',
      ),
    
      array(
        'id'               => 'section_video_imagem',
        'name'             => 'Image Advanced',
        'type'             => 'image_advanced',
        'force_delete'     => false,
        'max_file_uploads' => 1,
      ),
    )
  );

  // Section doação 
  $meta_boxes[] = array(
    'id'        => 'section_doacao',
    'title'     => 'Section DOAÇÂO',
    'context'   => 'normal',
    'priority'  => 'high',
    'settings_pages' => 'theme-options',
    'fields'    => array(

      array(
        'name'  => '',
        'id'    => 'section_doacao_tittle',
        'desc'  => 'Título parte um',
        'type'  => 'textarea',
      ),
      array(
        'name'  => '',
        'id'    => 'section_doacao_tittle_dois',
        'desc'  => 'Título parte dois',
        'type'  => 'textarea',
      ),
      array(
        'name'  => '',
        'id'    => 'section_doacao_tittle_desc',
        'desc'  => 'Descrição texto',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'section_doacao_benfeitor',
        'desc'  => 'Titulo Benfeitor',
        'type'  => 'textarea',
      ),
      array(
        'name'  => '',
        'id'    => 'section_doacao_benfeitor_desc',
        'desc'  => 'Descrição',
        'type'  => 'text',
      ),
      
      array(
        'name'  => '',
        'id'    => 'section_doacao_banco',
        'desc'  => 'Titulo Banco',
        'type'  => 'textarea',
      ),
      array(
        'name'  => '',
        'id'    => 'section_doacao_banco_desc',
        'desc'  => 'Descrição banco',
        'type'  => 'text',
      ),
      array(
        'id'               => 'section_doacao_banco_img',
        'name'             => 'Image banco',
        'type'             => 'image_advanced',
        'force_delete'     => false,
        'max_file_uploads' => 1,
      ),
      array(
        'name'  => '',
        'id'    => 'section_doacao_banco_dados',
        'desc'  => 'Descrição dados bancarios',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'section_doacao_volutario',
        'desc'  => 'Titulo Voluntario',
        'type'  => 'textarea',
      ),
      array(
        'name'  => '',
        'id'    => 'section_doacao_voluntario_desc',
        'desc'  => 'Descrição voluntario',
        'type'  => 'text',
      ),
    )
  );

  
  
  //comunidade
  $meta_boxes[] = array(
    'id'        => 'section_comunidades',
    'title'     => 'Section Atividades',
    'context'   => 'normal',
    'priority'  => 'high',
    'settings_pages' => 'theme-options',
    'fields'    => array(

      array(
        'id'               => 'section_comunidade_titulo',
        'name'             => 'Image Comunidade titulo',
        'type'             => 'image_advanced',
        'force_delete'     => false,
        'max_file_uploads' => 1,
      ),
      array(
        'name'  => '',
        'id'    => 'section_comunidade_tittle_card_um',
        'desc'  => 'Comunidade card um',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'section_comunidade_desc_card_um',
        'desc'  => 'comunidade card desc um',
        'type'  => 'text',
      ),
      array(
        'id'               => 'section_comunidade_imagem_um',
        'name'             => 'comunidade img um',
        'type'             => 'image_advanced',
        'force_delete'     => false,
        'max_file_uploads' => 1,
      ),
      array(
        'name'  => '',
        'id'    => 'section_comunidade_tittle_card_dois',
        'desc'  => 'comunidade card desc dois',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'section_comunidade_desc_card_dois',
        'desc'  => 'comunidade card desc dois',
        'type'  => 'text',
      ),
      array(
        'id'               => 'section_comunidade_imagem_dois',
        'name'             => 'comunidade img dois',
        'type'             => 'image_advanced',
        'force_delete'     => false,
        'max_file_uploads' => 1,
      ),
    )
  );

  //Nossos projetos
  $meta_boxes[] = array(
    'id'        => 'section_Projetos',
    'title'     => 'Section Atividades',
    'context'   => 'normal',
    'priority'  => 'high',
    'settings_pages' => 'theme-options',
    'fields'    => array(
      array(
        'name'  => '',
        'id'    => 'section_projetos_tittle',
        'desc'  => 'titulo projetos',
        'type'  => 'text',
      ),
      array(
        'id'          => 'group_projetos_card',
        'name'        => '',
        'type'        => 'group',
        'clone'       => true,
        'sort_clone'  => true,
        'collapsible' => true,
        'max_clone'   => '3',
        'group_title' => 'Atividades',
        'save_state'  => true,
        'fields'      => array(
          
          array(
            'name'  => '',
            'id'    => 'grup_projetos_titulo',
            'desc'  => 'Título video',
            'type'  => 'text',
          ),
          array(
            'id'               => 'grup_projetos_img',
            'name'             => 'Image Advanced',
            'type'             => 'image_advanced',
            'force_delete'     => false,
            'max_file_uploads' => 1,
          ),
        )
      )
    )
  );

  $meta_boxes[] = array(
    'id'        => 'section_Contatos',
    'title'     => 'Section Contatos',
    'context'   => 'normal',
    'priority'  => 'high',
    'settings_pages' => 'theme-options',
    'fields'    => array(
      array(
        'name'  => '',
        'id'    => 'section_Contatos_tittle',
        'desc'  => 'titulo Contatos',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'section_Contatos_desc_um',
        'desc'  => 'texto 1',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'section_Contatos_desc_dois',
        'desc'  => 'ptexto 2',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'section_Contatos_desc_tres',
        'desc'  => 'texto 3',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'section_Contatos_tittle_dois',
        'desc'  => 'titulo Cotatos dois',
        'type'  => 'text',
      ),
    )
  );

  return $meta_boxes;
}

