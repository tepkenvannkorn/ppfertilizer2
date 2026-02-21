<?php

/**
 * Function to retrieve the image caption
 */

// Given Post ID
function get_thumb_caption( $post_id ) {

    $thumb_id = get_post_thumbnail_id( $post_id );

    $caption = get_post( $thumb_id );

    return $caption->post_excerpt;
    
}

// Given Image ID
function get_thumb_caption_by_img_id( $thumb_id ) {

    $caption = get_post( $thumb_id );

    return $caption->post_excerpt;
    
}