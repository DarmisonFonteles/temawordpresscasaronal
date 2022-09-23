<?php



    $prefix = 'wpcf_';

    

    add_filter('rwmb_meta_boxes', 'wpcf_meta_boxes');
   
    

    function wpcf_meta_boxes($meta_boxes) {
        $meta_boxes[] = array(
            'id' => 'blog',
            'title' => 'Detalhes do Slide',
            'pages' => array('Blog'),
            'context' => 'normal',
            'priority' => 'high',
            'fields' => array(
    
                array(
                    'name'  => '',
                    'id'    => 'blog_tit',
                    'desc'  => 'Blog titulo',
                    'type'  => 'text',
                ),
            )
        );
        
        //Post type dos Eventos 

        $meta_boxes[] = array(
            'id'              => 'eventos-tes',
            'title'           => 'eventos mobile',
            'context'         => 'normal',
            'post_types'      => array('eventos'),
            'fields'          => array(
      
              array(
                'id'      => 'eventos_mobile_img',
                'type'    => 'image_advanced',
                'name'    => '',
                'columns' => 4,
                'max_file_uploads' => 1
              ),
              
            ),
        );

        $meta_boxes[] = array(
            'id'              => 'eventos-slider_section',
            'title'           => 'eventos mobile',
            'context'         => 'normal',
            'post_types'      => array('eventos'),
            'fields'          => array(
        
              array(
                'id'          => 'eventos_slider',
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
                    'id'               => 'Eventos_img_slider',
                    'name'             => 'Image Advanced',
                    'type'             => 'image_advanced',
                    'force_delete'     => false,
                    'max_file_uploads' => 1,
                  ),
                  array(
                    'name'  => '',
                    'id'    => 'Eventos_titulo_slider',
                    'desc'  => 'Título video',
                    'type'  => 'wysiwyg',
                  ),
                  array(
                    'name'  => '',
                    'id'    => 'Eventos_desc_slider',
                    'desc'  => 'Descrição',
                    'type'  => 'text',
                  ),
                )
              )
            )
          );

        $meta_boxes[] = array(
            'id'              => 'eventos-corpo-teste',
            'title'           => 'eventos texto corpo',
            'context'         => 'normal',
            'post_types'      => array('eventos'),
            'fields'          => array(
                array(
                    'name'  => '',
                    'id'    => 'Eventos_titulo_corpo',
                    'desc'  => 'Título video',
                    'type'  => 'wysiwyg',
                  ),
                  array(
                    'name'  => '',
                    'id'    => 'Eventos_desc_corpo',
                    'desc'  => 'Descrição',
                    'type'  => 'text',
                  ),
            )
        );

    return $meta_boxes;

}

