<?php 
function learningWordPress_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');

//navigation menus
register_nav_menus(array('primary' => __('Primary Menu')));  

$args = array(
	// 'width'         => 1980,
	// 'height'        => 400,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'       => true,
);
add_theme_support( 'custom-header', $args );

add_theme_support( 'post-thumbnails' );
