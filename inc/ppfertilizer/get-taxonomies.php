<?php

/**
 * Get taxonomies by post type
 */

function get_taxs( $id ) {

    $slugs = get_post_taxonomies( $id );
    $this_taxonomy_slug = '';

    foreach ( $slugs as $term_slug ) {
        if ($term_slug == 'language' || $term_slug == 'post_translations') {
            continue; //skip built-in taxonomies from Polylang
        }
        $this_taxonomy_slug = $term_slug;
    }

    $taxs = get_the_terms( get_the_ID(), $this_taxonomy_slug );

    return $taxs;
}