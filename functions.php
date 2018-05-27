<?php
// Add scripts and stylesheets
function appsbymax_scripts() {
	wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7');
	wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.0.12/css/all.css', '5.0.12', 'all');
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script('Masonry', 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'), null, 'all');
	wp_enqueue_script('theme-javascript', get_template_directory_uri(). '/javascript/am-theme-jquery.js', array('jquery'), true );

}
add_action('wp_enqueue_scripts', 'appsbymax_scripts' );

function appsbymax_setup() {
	// Navigation Menus
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('Footer Menu'),
		));

	// Support Featured Images
	add_theme_support( 'post-thumbnails' );
	add_theme_support('banner-image', 5000, 5000);
}

add_action('after_setup_theme', 'appsbymax_setup');

// Add Widget Support and Locations
function ourWidgetsInit() {
	register_sidebar( array(
			'name' 		=> 'Blog Sidebar',
			'id'		=> 'blog_sidebar_1',
		));
}