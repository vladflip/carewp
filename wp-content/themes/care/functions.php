<?php

define('THEME_URI', get_template_directory_uri());

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('wp_nav_menu','change_submenu_class');
add_filter('show_admin_bar', '__return_false');

add_action('init', 'include_scripts_and_styles');
add_action('init', 'register_custom_posts');
add_action('init', 'registerMenu');

function include_scripts_and_styles(){

	wp_register_style('main-style', 
		THEME_URI.'/css/style.css' );

	wp_register_script('stickyjs', THEME_URI . '/js/jquery.sticky.js', 
		array('jquery'), '1', true);

	wp_enqueue_script('main-script', THEME_URI . '/js/script.js', array(
		'jquery',
		'stickyjs'
	), '1', true);

}

function register_custom_posts() {

	register_post_type( 'projects',
		array(
			'label' => 'Проекты',
			'public' => true,
			'menu_position' => 15,
			'menu_icon' => 'dashicons-media-spreadsheet',
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'post-formats'),
			'taxonomies' => array('category')
		)
	);

}

function get_thumb_src($id) {

	return wp_get_attachment_url( get_post_thumbnail_id($id) );

}

function registerMenu() {
	$args = array('header_menu' => __('Главное меню'));
	register_nav_menus($args);
}

function change_submenu_class($menu) {  
	$menu = preg_replace('/ class="sub-menu"/','/ class="menu_sub" /',$menu);  
	return $menu;  
} 

function my_connection_types() {
    p2p_register_connection_type( array(
        'name' => 'posts_to_projects',
        'from' => 'post',
        'to' => 'projects'
    ) );
}
add_action( 'p2p_init', 'my_connection_types' );