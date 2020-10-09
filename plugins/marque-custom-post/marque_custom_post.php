<?php
/*
Plugin Name: Marque Custom Portfolio Posts
Description: Adds support for Google Analytics. Track Tag can be added under Settings
*/

/*
 * Create custom post type "Portfolio" panel in Wordpress
 */
function create_posttype()
{
	register_post_type(
		'portfolio', array(
			'labels' => array(
				'name' => __('Portfolio Items'),
				'singular_name' => __('Portfolio')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'portfolio'),
		)
	);
}
add_action('init', 'create_posttype');

/*
* Create the ability to create separated portfolio items from blog posts
* By adding custom post type Portoflio
*/
function custom_post_type()
{

	$labels = array(
		'name'                => _x('Portfolio', 'Post Type General Name', 'marque'),
		'singular_name'       => _x('Portfolio', 'Post Type Singular Name', 'marque'),
		'menu_name'           => __('Portfolio Items', 'marque'),
		'parent_item_colon'   => __('Parent Portfolio Item', 'marque'),
		'all_items'           => __('All Portfolio Items', 'marque'),
		'view_item'           => __('View Portfolio Item', 'marque'),
		'add_new_item'        => __('Add New Portfolio Item', 'marque'),
		'add_new'             => __('Add New', 'marque'),
		'edit_item'           => __('Edit Portfolio Item', 'marque'),
		'update_item'         => __('Update Portfolio Item', 'marque'),
		'search_items'        => __('Search Portfolio Item', 'marque'),
		'not_found'           => __('Not Found', 'marque'),
		'not_found_in_trash'  => __('Not found in Trash', 'marque'),
	);

	// Set other options for Custom Post Type
	$args = array(
		'label'               => __('portfolio', 'marque'),
		'description'         => __('Portfolio items', 'marque'),
		'labels'              => $labels,
		'supports'            => array('title', 'editor', 'thumbnail', 'revisions', 'custom-fields',),
		'taxonomies'          => array('portfolio-item'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);

	// Register the custom post type portfolio
	register_post_type('portfolio', $args);
}

// Hook to init
add_action('init', 'custom_post_type', 0);
