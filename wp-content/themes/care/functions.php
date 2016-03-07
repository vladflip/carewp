<?php

define('THEME_URI', get_template_directory_uri());

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter('show_admin_bar', '__return_false');

add_action('init', 'include_scripts_and_styles');
add_action('init', 'register_custom_posts');

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