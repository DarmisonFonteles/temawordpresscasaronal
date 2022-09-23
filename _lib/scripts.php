<?php

/*

* Scripts

* Desenvolvedor: Thiago Mendes

*/



function call_script() {


    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.0', null);
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array(), '3.1', true);

    wp_enqueue_script('main');

}



add_action('wp_enqueue_scripts', 'call_script', 100);




 

// NOTIFICAÇÃO SELO
function load_admin_styles_custom_banner() {
	
	if (is_super_admin()) {
		
		$screen = get_current_screen();
		
		if ($screen->id == 'edit-banner' ) {
			
			wp_enqueue_style( 'notificacao-style', get_template_directory_uri() . '/_lib/_admin/assets/css/notificacao.css', array(), '1.0', null);
			wp_enqueue_script( 'notificacao-js', get_template_directory_uri() . '/_lib/_admin/assets/js/notificacao.js', array( 'jquery' ), '2.0', null, false);
			
			
		}
	}
}  
add_action( 'admin_enqueue_scripts', 'load_admin_styles_custom_banner' );