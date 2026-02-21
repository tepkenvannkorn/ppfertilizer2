<?php
/*
* Career Taxonomy called "Career Status"
*/

function ppfertilizer_register_taxonomy__career() {
	 $labels = array(
		 'name'              => _x( 'Career Status', 'ppfertilizer' ),
		 'singular_name'     => _x( 'Career Status', 'ppfertilizer' ),
		 'search_items'      => __( 'Search Career Status', 'ppfertilizer' ),
		 'all_items'         => __( 'All Career Status', 'ppfertilizer' ),
		 'parent_item'       => __( 'Parent Career Status', 'ppfertilizer' ),
		 'parent_item_colon' => __( 'Parent Career Status:', 'ppfertilizer' ),
		 'edit_item'         => __( 'Edit Career Status', 'ppfertilizer' ),
		 'update_item'       => __( 'Update Career Status', 'ppfertilizer' ),
		 'add_new_item'      => __( 'Add New Career Status', 'ppfertilizer' ),
		 'new_item_name'     => __( 'New Career Status Name', 'ppfertilizer' ),
		 'menu_name'         => __( 'Career Status', 'ppfertilizer' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
         'has_archive'       => true,
         'show_in_rest'      => true,
		 'rewrite'           => [ 'slug' => 'career-status' ],
	 );
	 register_taxonomy( 'career_status', [ 'career' ], $args );
}
add_action( 'init', 'ppfertilizer_register_taxonomy__career' );