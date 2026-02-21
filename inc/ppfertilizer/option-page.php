<?php 

/**
 * Enable Option Page
 */
if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page(array(
        'page_title' 	=> __('ppfertilizer Options', 'ppfertilizer'),
        'menu_title' 	=> __('Site Settings', 'ppfertilizer'),
        'menu_slug' 	=> 'ppfertilizer-settings',
        'capability' 	=> 'edit_posts',
        'redirect' 	    => false
    ));

}