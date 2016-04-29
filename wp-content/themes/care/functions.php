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
			'taxonomies' => array('category'),
			'show_in_nav_menus' => TRUE
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

global $_OURCARE_LANG;

global $_OURCARE_OPTIONS;

$_OURCARE_OPTIONS = [
	'code' => '+380 (44)',
	'phone' => '456-45-54',
	'mail' => 'sample@mail.sample',
	'address' => 'Адрес'
];

if( ! is_admin()){

	// GET LANG ARRAYS

	$lang = 'ru';

	if(function_exists('pll_current_language'))
		$lang = pll_current_language();

	if(isset($lang))
		if($lang == '')
			$lang = 'ru';

	$_OURCARE_LANG = include "lang/$lang.php";

	if(function_exists('get_custom')){
		$_OURCARE_OPTIONS['code'] = substr(get_custom('phone'), 0, 9);
		$_OURCARE_OPTIONS['phone'] = substr(get_custom('phone'), 9);
		$_OURCARE_OPTIONS['mail'] = get_custom('mail');
		$_OURCARE_OPTIONS['address'] = get_custom('address');
	}
}
