<?php
/*
* Video Taxonomy called "Video Type"
*/

function ppfertilizer_register_taxonomy__video() {
	 $labels = array(
		 'name'              => _x( 'Video Types', 'ppfertilizer' ),
		 'singular_name'     => _x( 'Video Types', 'ppfertilizer' ),
		 'search_items'      => __( 'Search Video Types', 'ppfertilizer' ),
		 'all_items'         => __( 'All Video Types', 'ppfertilizer' ),
		 'parent_item'       => __( 'Parent Video Type', 'ppfertilizer' ),
		 'parent_item_colon' => __( 'Parent Video Type:', 'ppfertilizer' ),
		 'edit_item'         => __( 'Edit Video Type', 'ppfertilizer' ),
		 'update_item'       => __( 'Update Video Type', 'ppfertilizer' ),
		 'add_new_item'      => __( 'Add New Video Type', 'ppfertilizer' ),
		 'new_item_name'     => __( 'New Video Type Name', 'ppfertilizer' ),
		 'menu_name'         => __( 'Video Types', 'ppfertilizer' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
         'has_archive'       => true,
         'show_in_rest'      => true,
		 'rewrite'           => [ 'slug' => 'video-type' ],
	 );
	 register_taxonomy( 'video_type', [ 'video' ], $args );
}
add_action( 'init', 'ppfertilizer_register_taxonomy__video' );