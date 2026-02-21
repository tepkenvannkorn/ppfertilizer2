<?php

function ppfertilizer_menu( $menu_name ) {
	
	$args = array(
        'theme_location'  => $menu_name,
        'menu_class'  => 'nav',
        'container'   => '',
        'fallback_cb' => false
    );

    $menu = wp_nav_menu( $args );

    return $menu;
}