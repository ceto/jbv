<?php

/**
 * Register a slide post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function jbv_slider_init() {
	$labels = array(
		'name'               => _x( 'Slides', 'roots' ),
		'singular_name'      => _x( 'Slide', 'roots' ),
		'menu_name'          => _x( 'Slider', 'roots' ),
		'name_admin_bar'     => _x( 'Slide', 'roots' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'slide' ),
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail',  )
	);

	register_post_type( 'slide', $args );
}

add_action( 'init', 'jbv_slider_init' );



/********* Custom Post Types for Apartment Management ****************/


/**
 * Apartment Definition
*/
function jbv_create_apartment() {
  $labels = array(
    'name' => 'Apartments',
    'singular_name' => 'Apartment',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Apartment',
    'edit_item' => 'Edit Apartment',
    'new_item' => 'New Apartment',
    'all_items' => 'All Apartments',
    'view_item' => 'View Apartment',
    'search_items' => 'Search Apartments',
    'not_found' =>  'No Apartments found',
    'not_found_in_trash' => 'No Apartments found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Apartments'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'apartments' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail')
  ); 

  register_post_type( 'apartment', $args );
}
add_action( 'init', 'jbv_create_apartment' ); 

/********* END OF Custom Post Types for Apartment Management ****************/



/************* Custom Taxonomies for Apartment Management *********/

add_action( 'init', 'jbv_create_object_taxonomies', 0 );

function jbv_create_object_taxonomies() {
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name'              => _x( 'Objects', 'taxonomy general name' ),
    'singular_name'     => _x( 'Object', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Objects' ),
    'all_items'         => __( 'All Objects' ),
    'parent_item'       => __( 'Parent Object' ),
    'parent_item_colon' => __( 'Parent Object:' ),
    'edit_item'         => __( 'Edit Object' ),
    'update_item'       => __( 'Update Object' ),
    'add_new_item'      => __( 'Add New Object' ),
    'new_item_name'     => __( 'New Object Name' ),
    'menu_name'         => __( 'Object' ),
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'object' ),
  );

  register_taxonomy( 'object', array( 'apartment' ), $args );
}

/********* END OF Custom Taxonomies for Apartment Management ****************/






