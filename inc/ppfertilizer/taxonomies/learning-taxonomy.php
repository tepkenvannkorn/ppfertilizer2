<?php
/*
* Learning Taxonomy called "Topic"
*/

function ppfertilizer_register_taxonomy__learning() {
	 $labels = array(
		 'name'              => _x( 'Topic', 'ppfertilizer' ),
		 'singular_name'     => _x( 'Topic', 'ppfertilizer' ),
		 'search_items'      => __( 'Search Topic', 'ppfertilizer' ),
		 'all_items'         => __( 'All Topic', 'ppfertilizer' ),
		 'parent_item'       => __( 'Parent Topic', 'ppfertilizer' ),
		 'parent_item_colon' => __( 'Parent Topic:', 'ppfertilizer' ),
		 'edit_item'         => __( 'Edit Topic', 'ppfertilizer' ),
		 'update_item'       => __( 'Update Topic', 'ppfertilizer' ),
		 'add_new_item'      => __( 'Add New Topic', 'ppfertilizer' ),
		 'new_item_name'     => __( 'New Topic Name', 'ppfertilizer' ),
		 'menu_name'         => __( 'Topic', 'ppfertilizer' ),
	 );
	 $args   = array(
		 'hierarchical'      => true, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
         'has_archive'       => true,
         'show_in_rest'      => true,
		 'rewrite'           => [ 'slug' => 'topic' ],
	 );
	 register_taxonomy( 'topic', [ 'learning' ], $args );
}
add_action( 'init', 'ppfertilizer_register_taxonomy__learning' );