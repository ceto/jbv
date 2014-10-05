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

