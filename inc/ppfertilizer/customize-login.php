<?php
/**
 * Customize login page
 * Change WordPress Logo to Site Title
 */



function custom_login_message() {

    $message = '';

    if ( has_custom_logo() ) {

        $message .= '<a href="' . esc_url( home_url() ) . '" class="logo" title="' . get_bloginfo('name') . '">';
            $message .= '<img src="' . wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) , 'full' )[0] . '" alt="' . get_bloginfo('name') . '">';
        $message .= '</a>';

    }

    $message .= '<h2><a href="' . esc_url( home_url() ) . '">' . esc_attr( get_bloginfo('name'), 'chrc' ) . '</a></h2>';
    
    return $message;

}
add_filter( 'login_message', 'custom_login_message' );

function chrc_login_logo_url() {
    
    return esc_url( home_url(), 'chrc' );

}
add_filter( 'login_headerurl', 'chrc_login_logo_url' );

function ppfertilizer_login_stylesheet() {
    
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/admin.css' );

}
add_action( 'login_enqueue_scripts', 'ppfertilizer_login_stylesheet' );