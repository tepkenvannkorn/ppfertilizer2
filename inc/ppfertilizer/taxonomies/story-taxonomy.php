<?php
/*
* Story Taxonomy called "Story Type"
*/

function ppfertilizer_register_taxonomy__story() {
	 $labels = array(
		 'name'              => pll__( 'Story Type', 'ppfertilizer' ),
		 'singular_name'     => pll__( 'Story Type', 'ppfertilizer' ),
		 'search_items'      => __( 'Search Story Type', 'ppfertilizer' ),
		 'all_items'         => __( 'All Story Type', 'ppfertilizer' ),
		 'parent_item'       => __( 'Parent Story Type', 'ppfertilizer' ),
		 'parent_item_colon' => __( 'Parent Story Type:', 'ppfertilizer' ),
		 'edit_item'         => __( 'Edit Story Type', 'ppfertilizer' ),
		 'update_item'       => __( 'Update Story Type', 'ppfertilizer' ),
		 'add_new_item'      => __( 'Add New Story Type', 'ppfertilizer' ),
		 'new_item_name'     => __( 'New Story Type Name', 'ppfertilizer' ),
		 'menu_name'         => __( 'Story Type', 'ppfertilizer' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
         'has_archive'       => true,
         'show_in_rest'      => true,
		 'rewrite'           => [ 'slug' => 'story-type' ],
	 );
	 register_taxonomy( 'story_type', [ 'story' ], $args );
}
add_action( 'init', 'ppfertilizer_register_taxonomy__story' );