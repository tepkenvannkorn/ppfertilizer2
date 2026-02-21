<?php 

function ppfertilizer_scripts() {
	wp_enqueue_style( 'banteaysrei-bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'ppfertilizer-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ppfertilizer-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ppfertilizer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'ppfertilizer-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'ppfertilizer-lity', get_template_directory_uri() . '/assets/js/lity.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'ppfertilizer-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'ppfertilizer-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ppfertilizer_scripts' );

function ppfertilizer_admin_enqueue_scripts() {
    wp_enqueue_script( 'bts-acf-js', get_template_directory_uri() . '/assets/js/default-color.js', array(), '1.0.0', true );
}
add_action( 'acf/input/admin_enqueue_scripts', 'ppfertilizer_admin_enqueue_scripts' );