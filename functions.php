<?php 

function psydevBlog() {

	wp_enqueue_style('style', get_stylesheet_uri() );
	wp_deregister_script('jquery'); // Remove WordPress core's jQuery
	wp_register_script('jquery', 'http://code.jquery.com/jquery-2.1.3.min.js', false, null, false);
}

add_action('wp_enqueue_scripts', 'psydevBlog');



// Customize excerpt word length

function custom_excerpt_length() {
	return 100;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);


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

function filter_wp_title( $title ) {
	global $page, $paged;

	if ( is_feed() )
		return $title;

	$site_description = get_bloginfo( 'description' );

	$filtered_title = $title . get_bloginfo( 'name' );
	$filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
	$filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

	return $filtered_title;
}

add_filter( 'wp_title', 'filter_wp_title' );

// limit the amount of archives displayed in widget

function my_limit_archives( $args ) {
    $args['limit'] = 12;
    return $args;
}
add_filter( 'widget_archives_args', 'my_limit_archives' );
add_filter( 'widget_archives_dropdown_args', 'my_limit_archives' );