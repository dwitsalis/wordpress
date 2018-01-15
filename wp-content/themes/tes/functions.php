<?php 

//load script
function load_file() {
	wp_enqueue_style('style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'load_file');

register_nav_menus(array(
	'main_menu' => 'Menu Utama',
	'footer_menu' => 'Menu Footer'
));

//excerpt
function get_excerpt_lenght(){
	return 5;
}

function return_excerpt_text(){
	return '';
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_lenght', 'get_excerpt_lenght');

?>