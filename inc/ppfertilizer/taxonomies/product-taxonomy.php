<?php
/*
* Product Taxonomy called "Type"
*/

function ppfertilizer_register_taxonomy__product() {
	 $labels = array(
		 'name'              => pll__( 'Types', 'ppfertilizer' ),
		 'singular_name'     => pll__( 'Types', 'ppfertilizer' ),
		 'search_items'      => __( 'Search Type', 'ppfertilizer' ),
		 'all_items'         => __( 'All Types', 'ppfertilizer' ),
		 'parent_item'       => __( 'Parent Type', 'ppfertilizer' ),
		 'parent_item_colon' => __( 'Parent Type:', 'ppfertilizer' ),
		 'edit_item'         => __( 'Edit Type', 'ppfertilizer' ),
		 'update_item'       => __( 'Update Type', 'ppfertilizer' ),
		 'add_new_item'      => __( 'Add New Type', 'ppfertilizer' ),
		 'new_item_name'     => __( 'New Type Name', 'ppfertilizer' ),
		 'menu_name'         => __( 'Types', 'ppfertilizer' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
         'has_archive'       => true,
         'show_in_rest'      => true,
		 'rewrite'           => [ 'slug' => 'product-type' ],
	 );
	 register_taxonomy( 'product-type', [ 'product' ], $args );
}
add_action( 'init', 'ppfertilizer_register_taxonomy__product' );