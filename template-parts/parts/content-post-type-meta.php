<ul class="nav meta">
    <?php

        if ( is_post_type_archive() || is_tax() || get_post_type( get_the_ID() ) !== 'post' ) {

            $slugs = get_post_taxonomies( get_the_ID() );
            $this_taxonomy_slug = '';

            if ( is_array( $slugs ) && count( $slugs ) > 0 ) {
                foreach ( $slugs as $term_slug ) {
                    if ($term_slug == 'language' || $term_slug == 'post_translations') {
                        continue; //skip built-in taxonomies from Polylang
                    }
                    $this_taxonomy_slug = $term_slug;
                }
            }

            $taxs = get_the_terms( get_the_ID(), $this_taxonomy_slug );

            if ( is_array( $taxs ) && count( $taxs ) > 0 ) {
                echo '<li><a href="' . get_term_link( $taxs[0] ) . '">' . $taxs[0]->name . '</a></li>';
            }

        } else {
            $cats = get_the_category( $post->ID ); 
            if ( is_array( $cats ) && count( $cats ) > 0 ) {
                foreach ( $cats AS $cat ) {
                    echo '<li><a href="'. get_category_link( $cat->cat_ID ) . '">' . $cat->name . '</a></li>';
                }
            }
        }
    ?>

</ul>