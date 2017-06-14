<?php

function mycy_setup() {

	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-formats', 'image');

	register_nav_menu('primary','Primary menu');

}

add_action('after_setup_theme', 'mycy_setup');



function wpmycy_scripts() {
	wp_enqueue_style( 'style-css', get_stylesheet_uri() );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/script.js');
	// wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpmycy_scripts' );


function mycy_post_type() {
	$labels = array(
		'name' => 'Single post',
		'singular_name' => 'single post',
		'add_new' => 'Add Item',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'Niew Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Item',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Paremt Item'
		);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'support' => array(
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'revisions',
			),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
			);

register_post_type('Single post', $args);
}

add_action('init', 'mycy_post_type');