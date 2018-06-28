<?php
/**
 * Plugin Name:     AWFAW CPT Functionality
 * Plugin URI:      Ad Women For All Women
 * Description:     This contains functions for data storage
 * Author:          Joe Hills
 * Author URI:      https://github.com/joehills
 * Text Domain:     awfaw-functionality
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Awfaw_Functionality
 */

// Register Custom Taxonomy
function awfaw_year() {

	$labels = array(
		'name'                       => 'Years',
		'singular_name'              => 'Year',
		'menu_name'                  => 'Years',
		'all_items'                  => 'All Years',
		'parent_item'                => 'Parent Item',
		'parent_item_colon'          => 'Parent Item:',
		'new_item_name'              => 'New Item Name',
		'add_new_item'               => 'Add New Year',
		'edit_item'                  => 'Edit Year',
		'update_item'                => 'Update year',
		'view_item'                  => 'View Year',
		'separate_items_with_commas' => 'Separate years with commas',
		'add_or_remove_items'        => 'Add or remove years',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Years',
		'search_items'               => 'Search Years',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No years',
		'items_list'                 => 'Years list',
		'items_list_navigation'      => 'Years list navigation',
	);
	$rewrite = array(
		'slug'                       => 'year',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'awfaw_years', array( 'awfaw_speaker' ), $args );

}
add_action( 'init', 'awfaw_year', 0 );

// Register Custom Post Type
function awfaw_speaker() {

	$labels = array(
		'name'                  => 'Speakers',
		'singular_name'         => 'Speaker',
		'menu_name'             => 'Speakers',
		'name_admin_bar'        => 'Speaker',
		'archives'              => 'Speaker Archives',
		'attributes'            => 'Speaker Attributes',
		'parent_item_colon'     => 'Parent Speaker:',
		'all_items'             => 'All Speakers',
		'add_new_item'          => 'Add New Speaker',
		'add_new'               => 'Add New',
		'new_item'              => 'New Speaker',
		'edit_item'             => 'Edit Speaker',
		'update_item'           => 'Update Speaker',
		'view_item'             => 'View Speaker',
		'view_items'            => 'View Speaker',
		'search_items'          => 'Search Speaker',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Speakers list',
		'items_list_navigation' => 'Speakers list navigation',
		'filter_items_list'     => 'Filter speakers list',
	);
	$rewrite = array(
		'slug'                  => 'speakers',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Speaker',
		'description'           => 'Speakers',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'awfaw' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'awfaw_speaker', $args );

}
add_action( 'init', 'awfaw_speaker', 0 );
