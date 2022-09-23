<?php

  add_filter('rwmb_meta_boxes', 'wpcf_meta_boxes_pages');
  function wpcf_meta_boxes_pages($meta_boxes) {

   
    $meta_boxes[] = array(
      'id' => 'contatos_page',
      'title' => 'Contatos',
      'pages' => array('page'),
      'context' => 'normal',
      'priority' => 'high',

      'include' => array(
          'relation'  => 'OR',
          'template'  => array('page-contato.php'),
      ),

      'fields' => array(

        array(
          'name'  => '',
          'id'    => 'contatos-titulo',
          'desc'  => 'Título contato',
          'type'  => 'text',
        ),
        array(
          'name'  => '',
          'id'    => 'contatos-titulo-desc',
          'desc'  => 'Título contato',
          'type'  => 'textarea',
        ),
        array(
          'id'               => 'contatos-titulo-img',
          'name'             => 'Image Advanced',
          'type'             => 'image_advanced',
          'force_delete'     => false,
          'max_file_uploads' => 1,
        ),
      )
  );

  $meta_boxes[] = array(
    'id' => 'contatos_page_dois',
    'title' => 'Contatos',
    'pages' => array('page'),
    'context' => 'normal',
    'priority' => 'high',

    'include' => array(
        'relation'  => 'OR',
        'template'  => array('page-contato.php'),
    ),

    'fields' => array(
      array(
        'name'  => '',
        'id'    => 'contatos-corpo-titulo',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-corpo-titulo_dois',
        'desc'  => 'Título video',
        'type'  => 'wysiwyg',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-corpo-titulo_dois_desc',
        'desc'  => 'Título contato',
        'type'  => 'textarea',
      ),

      array(
        'name'  => '',
        'id'    => 'contatos-info-um',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-info-dois',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-info-tres',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-info-quatro',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-info-cinco',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-info-seis',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-info-sete',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
      array(
        'name'  => '',
        'id'    => 'contatos-info-oito',
        'desc'  => 'Título contato',
        'type'  => 'text',
      ),
    )
  );
  
 
  return $meta_boxes;
}
