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



/**
 * Apartment Definition
*/
function create_bauparzellen() {
  $labels = array(
    'name' => 'Bauparzellens',
    'singular_name' => 'Bauparzellen',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Bauparzellen',
    'edit_item' => 'Edit Bauparzellen',
    'new_item' => 'New Bauparzellen',
    'all_items' => 'All Bauparzellens',
    'view_item' => 'View Bauparzellen',
    'search_items' => 'Search Bauparzellens',
    'not_found' =>  'No Bauparzellens found',
    'not_found_in_trash' => 'No Bauparzellens found in Trash', 
    'parent_item_colon' => '',
    'menu_name' => 'Bauparzellen'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'bauparzellen' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title'  )
  ); 

  register_post_type( 'bauparzellen', $args );
}
add_action( 'init', 'create_bauparzellen' ); 