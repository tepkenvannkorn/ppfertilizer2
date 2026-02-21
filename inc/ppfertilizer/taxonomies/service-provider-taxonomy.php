<?php
/*
* Service Provider Taxonomy called "Group"
*/

function ppfertilizer_register_taxonomy__service_provider() {
	 $labels = array(
		 'name'              => pll__( 'Groups', 'ppfertilizer' ),
		 'singular_name'     => pll__( 'Groups', 'ppfertilizer' ),
		 'search_items'      => __( 'Search Group', 'ppfertilizer' ),
		 'all_items'         => __( 'All Groups', 'ppfertilizer' ),
		 'parent_item'       => __( 'Parent Group', 'ppfertilizer' ),
		 'parent_item_colon' => __( 'Parent Group:', 'ppfertilizer' ),
		 'edit_item'         => __( 'Edit Group', 'ppfertilizer' ),
		 'update_item'       => __( 'Update Group', 'ppfertilizer' ),
		 'add_new_item'      => __( 'Add New Group', 'ppfertilizer' ),
		 'new_item_name'     => __( 'New Group Name', 'ppfertilizer' ),
		 'menu_name'         => __( 'Groups', 'ppfertilizer' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
         'has_archive'       => true,
         'show_in_rest'      => true,
		 'rewrite'           => [ 'slug' => 'service-group' ],
	 );
	 register_taxonomy( 'service-group', [ 'service_provider' ], $args );
}
add_action( 'init', 'ppfertilizer_register_taxonomy__service_provider' );