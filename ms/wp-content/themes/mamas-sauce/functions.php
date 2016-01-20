<?php

// *************************************
//
//   WP Functions
//   -> Global functions / utilities (don’t add libraries here! Place them in ./inc and include them below)
//
// *************************************

// -------------------------------------
//   Variables / Settings
// -------------------------------------

$site_url = get_bloginfo('url');
$template_url = get_bloginfo('template_directory');

// ----- Page IDs ----- //

$page_quote = 5519;

// -------------------------------------
//   Includes / Dependencies
// -------------------------------------

// ----- PHP ----- //

include('inc/facebook.php');
include('inc/instagram.php');
include('inc/SimpleJPEGQuality.php');

// ----- JS ----- //

function script_check() {
	wp_dequeue_script('jquery');
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', null, null);
  wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'script_check');

// -------------------------------------
//   Headers
// -------------------------------------

remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_generator');


// -------------------------------------
//   Template-based Functions
// -------------------------------------

// ----- Menus ----- //

register_nav_menus(array(
	'primary' => 'Top Navigation',
	'secondary' => 'Footer Navigation'
));
register_sidebar();

// ----- Custom Post Types ----- //

function custom_post_types() {
	register_post_type('printing', array(
		'labels' => array(
			'name' => _x('Printing', 'post type general name'),
			'singular_name' => _x('Print Piece', 'post type singular name'),
			'add_new' => _x('Add New', 'printing'),
			'add_new_item' => __('Add New Print Piece'),
			'edit_item' => __('Edit Print Piece'),
			'new_item' => __('New Print Piece'),
			'all_items' => __('All Print Pieces'),
			'view_item' => __('View Print Piece'),
			'search_items' => __('Search Printing'),
			'not_found' =>  __('No pieces found'),
			'not_found_in_trash' => __('No pieces found in Trash')
		),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'public' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'supports' => array('title', 'editor', 'categories', 'thumbnail')
	));
	register_taxonomy('type', 'printing', array(
		'labels'                => 	array(
			'name' => _x('Project Type', 'taxonomy general name'),
			'singular_name' => _x('Project Type', 'taxonomy singular name'),
			'search_items' => __('Search Project Types'),
			'popular_items' => __('Popular Project Types'),
			'all_items' => __('All Project Types'),
			'parent_item' => null,
			'parent_item_colon' => null,
			'edit_item' => __('Edit Project Type'),
			'update_item' => __('Update Project Type'),
			'add_new_item' => __('Add New Project Type'),
			'new_item_name' => __('New Project Type'),
			'separate_items_with_commas' => __('Separate project types with commas'),
			'add_or_remove_items' => __('Add or remove project types'),
			'choose_from_most_used' => __('Choose from the most used project types'),
			'not_found' => __('No project types found.'),
			'menu_name' => __('Project Types'),
	  ),
		'hierarchical'          => true,
		'query_var'             => true,
		'rewrite'               => array('slug' => 'type'),
		'show_admin_column'     => true,
		'show_ui'               => true,
		'update_count_callback' => '_update_post_term_count'
	));
  register_taxonomy('process', 'printing', array(
		'labels'                => 	array(
			'name' => _x('Process', 'taxonomy general name'),
			'singular_name' => _x('Process', 'taxonomy singular name'),
			'search_items' => __('Search Processes'),
			'popular_items' => __('Popular Processes'),
			'all_items' => __('All Processes'),
			'parent_item' => null,
			'parent_item_colon' => null,
			'edit_item' => __('Edit Processes'),
			'update_item' => __('Update Process'),
			'add_new_item' => __('Add New Process'),
			'new_item_name' => __('New Process'),
			'separate_items_with_commas' => __('Separate processes with commas'),
			'add_or_remove_items' => __('Add or remove processes'),
			'choose_from_most_used' => __('Choose from the most used processes'),
			'not_found' => __('No processes found.'),
			'menu_name' => __('Processes'),
	  ),
		'hierarchical'          => false,
		'query_var'             => true,
		'rewrite'               => array('slug' => 'process'),
		'show_admin_column'     => true,
		'show_ui'               => true,
		'update_count_callback' => '_update_post_term_count'
	));
	register_post_type('client', array(
		'labels' => array(
			'name' => _x('Clients', 'post type general name'),
			'singular_name' => _x('Client', 'post type singular name'),
			'add_new' => _x('Add New', 'client'),
			'add_new_item' => __('Add New Client'),
			'edit_item' => __('Edit Client'),
			'new_item' => __('New Client'),
			'all_items' => __('All Clients'),
			'view_item' => __('View Client'),
			'search_items' => __('Search Clients'),
			'not_found' =>  __('No clients found'),
			'not_found_in_trash' => __('No clients found in Trash')
		),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'public' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'show_in_menu' => true,
		'show_ui' => true,
		'supports' => array('title', 'thumbnail')
	));
}
add_action('init', 'custom_post_types');

function add_to_search($query) {
	if ($query->is_search) {
		$query->set('post_type', array('post', 'portfolio'));
	}
	return $query;
}

add_filter('pre_get_posts','add_to_search');

// ----- Thumbnail Support ----- //

add_theme_support('post-thumbnails');

// ----- SVG Support ----- //

function add_svg_support($mime_types = array() ) {
	$mime_types['svg'] = 'image/svg+xml';
	return $mime_types;
}

add_filter('upload_mimes', 'add_svg_support');

// -------------------------------------
//   Utilities
// -------------------------------------

function get_featured_image_src($size = 'large', $id) {
	if(empty($id))
		$id = $post->ID;
	$src = wp_get_attachment_image_src(get_post_thumbnail_id($id), $size);
  return $src['0'];
}

function get_featured_image($size = 'large', $id, $attr = '') {
  if(empty($id))
  	$id = $post->ID;
  $img = wp_get_attachment_image(get_post_thumbnail_id($id), $size, false, $attr);
  return $img;
}

?>
