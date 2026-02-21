<?php

/**
 * Register a custom post type called "Team".
 *
 * @see get_post_type_labels() for label keys.
 */

function post_type__team() {
    
    $labels = array(
        'name'                  => pll__( 'Team', 'Post type general name', 'ppfertilizer' ),
        'singular_name'         => _x( 'Team', 'Post type singular name', 'ppfertilizer' ),
        'menu_name'             => _x( 'Teams', 'Admin Menu text', 'ppfertilizer' ),
        'name_admin_bar'        => _x( 'Team', 'Add New on Toolbar', 'ppfertilizer' ),
        'add_new'               => __( 'Add Member', 'ppfertilizer' ),
        'add_new_item'          => __( 'Add New Member', 'ppfertilizer' ),
        'new_item'              => __( 'New Member', 'ppfertilizer' ),
        'edit_item'             => __( 'Edit Member', 'ppfertilizer' ),
        'view_item'             => __( 'View Member', 'ppfertilizer' ),
        'all_items'             => __( 'All Member', 'ppfertilizer' ),
        'search_items'          => __( 'Search Member', 'ppfertilizer' ),
        'parent_item_colon'     => __( 'Parent Member:', 'ppfertilizer' ),
        'not_found'             => __( 'No Member found.', 'ppfertilizer' ),
        'not_found_in_trash'    => __( 'No Member found in Trash.', 'ppfertilizer' ),
        'featured_image'        => _x( 'Member Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'ppfertilizer' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'ppfertilizer' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'ppfertilizer' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'ppfertilizer' ),
        'archives'              => _x( 'Member archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'ppfertilizer' ),
        'insert_into_item'      => _x( 'Insert into Member', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'ppfertilizer' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this Member', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'ppfertilizer' ),
        'filter_items_list'     => _x( 'Filter Member list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'ppfertilizer' ),
        'items_list_navigation' => _x( 'Member list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'ppfertilizer' ),
        'items_list'            => _x( 'Member list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'ppfertilizer' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true, // false = Hide in SERP
        'menu_position'      => 5,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team' ),
        'capability_type'    => 'post',
        'exclude_from_search' => false,
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'   		 => 'dashicons-groups',
        'show_in_rest'       => true,
    );
 
    register_post_type( 'team', $args );
}
 
add_action( 'init', 'post_type__team' );