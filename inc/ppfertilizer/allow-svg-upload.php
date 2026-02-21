<?php

function allow_svg_upload( $mimes = array() ) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['json'] = 'application/json';

    return $mimes;
}

add_filter( 'upload_mimes', 'allow_svg_upload' );