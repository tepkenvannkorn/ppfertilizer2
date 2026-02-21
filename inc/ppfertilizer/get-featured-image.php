<?php 

    function get_thumb_url( $post_ID, $size = 'large' ) {

        $thumb_id = get_post_thumbnail_id( $post_ID );
        $thumb = wp_get_attachment_image_src( $thumb_id, $size, false );

        if ( is_array( $thumb ) && count( $thumb )> 0 ) {
            $thumb_url = $thumb[0];
        } else {
            if ( get_theme_mod( 'default_thumbnail' ) && get_theme_mod( 'default_thumbnail' ) !== null ) {
                $thumb_url = get_theme_mod( 'default_thumbnail' );
            } else {
                // Use default built-in image
                $thumb_url = esc_url( get_template_directory_uri() . '/assets/images/default.jpg' );
            }
        }

        return $thumb_url;
    }