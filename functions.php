<?php 

function psydevBlog() {

	wp_enqueue_style('style', get_stylesheet_uri() );

}

add_action('wp_enqueue_scripts', 'psydevBlog');



// Customize excerpt word length

function custom_excerpt_length() {
	return 100;
}

add_filter('excerpt_length', 'custom_excerpt_length');


function psydevImage() {
	// add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true); // width, height, crop?
	add_image_size('banner-image', 1140, 300, true);

	register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
	));
}

add_action('after_setup_theme', 'psydevImage');
