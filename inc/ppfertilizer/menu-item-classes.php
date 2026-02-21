<?php 

/**
 * navigation menu add class
 */

add_filter( 'nav_menu_css_class', 'ppfertilizer_func__add_additional_class_on_li', 1, 3 );
function ppfertilizer_func__add_additional_class_on_li( $classes, $item, $args ) {
    if ( isset( $args->add_li_class ) ) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

/**
 * Add a parent CSS class for nav menu items.
 *
 * @param array  $items The menu items, sorted by each menu item's menu order.
 * @return array (maybe) modified parent CSS class.
 */
function ppfertilizer_add_menu_parent_class( $items ) {
	$parents = array();

	// Collect menu items with parents.
	foreach ( $items as $item ) {
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}

	// Add class.
	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			$item->classes[] = 'dropdown';
		}
	}
	return $items;
}
add_filter( 'wp_nav_menu_objects', 'ppfertilizer_add_menu_parent_class' );

function ppfertilizer_nav_menu_submenu_css_class( $classes ) {
    $classes[] = 'dropdown-menu';
    return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'ppfertilizer_nav_menu_submenu_css_class' );