<?php
/*
* Report Taxonomy called "Report"
*/

function ppfertilizer_register_taxonomy__report_type() {
	 $labels = array(
		 'name'              => _x( 'Report Types', 'ppfertilizer' ),
		 'singular_name'     => _x( 'Report Types', 'ppfertilizer' ),
		 'search_items'      => __( 'Search Report Types', 'ppfertilizer' ),
		 'all_items'         => __( 'All Report Types', 'ppfertilizer' ),
		 'parent_item'       => __( 'Parent Report Type', 'ppfertilizer' ),
		 'parent_item_colon' => __( 'Parent Report Type:', 'ppfertilizer' ),
		 'edit_item'         => __( 'Edit Report Type', 'ppfertilizer' ),
		 'update_item'       => __( 'Update Report Type', 'ppfertilizer' ),
		 'add_new_item'      => __( 'Add New Report Types', 'ppfertilizer' ),
		 'new_item_name'     => __( 'New Report Type Name', 'ppfertilizer' ),
		 'menu_name'         => __( 'Report Type', 'ppfertilizer' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
         'has_archive'       => true,
         'show_in_rest'      => true,
		 'rewrite'           => [ 'slug' => 'report-type' ],
	 );
	 register_taxonomy( 'report_type', [ 'report' ], $args );
}
add_action( 'init', 'ppfertilizer_register_taxonomy__report_type' );