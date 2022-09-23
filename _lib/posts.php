<?php

/**

* Custom Post Types

* Desenvolvedor: Thiago Mendes

*/

function post_type_eventos_register() {
    $labels = array(
        'name' => 'Eventos',
        'singular_name' => 'Evento',
        'menu_name' => 'Eventos',
        'add_new' => _x('Adicionar Evento', 'item'),
        'add_new_item' => __('Adicionar Novo Evento'),
        'edit_item' => __('Editar Evento'),
        'new_item' => __('Novo Evento')
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'eventos'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'thumbnail')
    );
    register_post_type('eventos', $args);
}
add_action('init', 'post_type_eventos_register');

