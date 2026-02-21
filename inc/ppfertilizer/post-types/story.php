<?php

/**
 * Register a custom post type called "Story".
 *
 * @see get_post_type_labels() for label keys.
 */

function post_type__story() {
    
    $labels = array(
        'name'                  => pll__( 'Success Stories', 'Post type general name', 'ppfertilizer' ),
        'singular_name'         => pll__( 'Success Stories', 'Post type singular name', 'ppfertilizer' ),
        'menu_name'             => pll__( 'Success Stories', 'Admin Menu text', 'ppfertilizer' ),
        'name_admin_bar'        => pll__( 'Story', 'Add New on Toolbar', 'ppfertilizer' ),
        'add_new'               => __( 'Add Story', 'ppfertilizer' ),
        'add_new_item'          => __( 'Add New Story', 'ppfertilizer' ),
        'new_item'              => __( 'New Story', 'ppfertilizer' ),
        'edit_item'             => __( 'Edit Story', 'ppfertilizer' ),
        'view_item'             => __( 'View Story', 'ppfertilizer' ),
        'all_items'             => __( 'All Story', 'ppfertilizer' ),
        'search_items'          => __( 'Search Story', 'ppfertilizer' ),
        'parent_item_colon'     => __( 'Parent Story:', 'ppfertilizer' ),
        'not_found'             => __( 'No Story found.', 'ppfertilizer' ),
        'not_found_in_trash'    => __( 'No Story found in Trash.', 'ppfertilizer' ),
        'featured_image'        => _x( 'Story Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ppfertilizer' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ppfertilizer' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ppfertilizer' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ppfertilizer' ),
        'archives'              => _x( 'Story archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ppfertilizer' ),
        'insert_into_item'      => _x( 'Insert into Story', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ppfertilizer' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Story', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ppfertilizer' ),
        'filter_items_list'     => _x( 'Filter Story list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ppfertilizer' ),
        'items_list_navigation' => _x( 'Story list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ppfertilizer' ),
        'items_list'            => _x( 'Story list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ppfertilizer' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true, // false = Hide in SERP
        'menu_position'      => 5,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'story' ),
        'capability_type'    => 'post',
        'exclude_from_search' => false,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'   		 => 'dashicons-testimonial',
        'show_in_rest'       => true,
    );
 
    register_post_type( 'story', $args );
}
 
add_action( 'init', 'post_type__story' );