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


function psydevImage_setup() {
	// add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true); // width, height, crop?
	add_image_size('banner-image', 1140, 300, true);

	// navigation menu
	register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu')
	));

	// Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'psydevImage_setup');


function widgetsInit() {

	register_sidebar(array(
		'name' => 'Sidebar',  // used in themes dashboard
		'id' => 'sidebar1',	  // used in *.php	
		'before_widget' => '<div class="widget-item">', // name of widget container
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">', // name of widget title
		'after_title' => '</h4>'
	));
}

add_action('widgets_init', 'widgetsInit');