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

// Create Custom Post Type for Apps, Products, and Services
function products_post_type() {
	// Set UI labels
	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'AM-Custom-WordPress-Theme' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'AM-Custom-WordPress-Theme' ),
		'menu_name'             => __( 'Products', 'AM-Custom-WordPress-Theme' ),
		'name_admin_bar'        => __( 'Product', 'AM-Custom-WordPress-Theme' ),
		'archives'              => __( 'Product Archives', 'AM-Custom-WordPress-Theme' ),
		'attributes'            => __( 'Item Attributes', 'AM-Custom-WordPress-Theme' ),
		'parent_item_colon'     => __( 'Parent Product:', 'AM-Custom-WordPress-Theme' ),
		'all_items'             => __( 'All Products', 'AM-Custom-WordPress-Theme' ),
		'add_new_item'          => __( 'Add New Product', 'AM-Custom-WordPress-Theme' ),
		'add_new'               => __( 'New Product', 'AM-Custom-WordPress-Theme' ),
		'new_item'              => __( 'New Item', 'AM-Custom-WordPress-Theme' ),
		'edit_item'             => __( 'Edit Product', 'AM-Custom-WordPress-Theme' ),
		'update_item'           => __( 'Update Product', 'AM-Custom-WordPress-Theme' ),
		'view_item'             => __( 'View Product', 'AM-Custom-WordPress-Theme' ),
		'view_items'            => __( 'View Items', 'AM-Custom-WordPress-Theme' ),
		'search_items'          => __( 'Search products', 'AM-Custom-WordPress-Theme' ),
		'not_found'             => __( 'No products found', 'AM-Custom-WordPress-Theme' ),
		'not_found_in_trash'    => __( 'No products found in Trash', 'AM-Custom-WordPress-Theme' ),
		'featured_image'        => __( 'Featured Image', 'AM-Custom-WordPress-Theme' ),
		'set_featured_image'    => __( 'Set featured image', 'AM-Custom-WordPress-Theme' ),
		'remove_featured_image' => __( 'Remove featured image', 'AM-Custom-WordPress-Theme' ),
		'use_featured_image'    => __( 'Use as featured image', 'AM-Custom-WordPress-Theme' ),
		'insert_into_item'      => __( 'Insert into item', 'AM-Custom-WordPress-Theme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'AM-Custom-WordPress-Theme' ),
		'items_list'            => __( 'Items list', 'AM-Custom-WordPress-Theme' ),
		'items_list_navigation' => __( 'Items list navigation', 'AM-Custom-WordPress-Theme' ),
		'filter_items_list'     => __( 'Filter items list', 'AM-Custom-WordPress-Theme' ),
	);
	// Set other options for Custom Post Type
	$args = array(
		'label'                 => __( 'Product', 'AM-Custom-WordPress-Theme' ),
		'description'           => __( 'Products and Services', 'AM-Custom-WordPress-Theme' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'product', ' service', ' app' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'products_post_type', 0 );

