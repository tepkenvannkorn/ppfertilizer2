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
                echo '<li><span class="status ' . $taxs[0]->slug . '">' . $taxs[0]->name . '</span></li>';
            }

        } else {
            $cats = get_the_category( $post->ID ); 
            if ( is_array( $cats ) && count( $cats ) > 0 ) {
                foreach ( $cats AS $cat ) {
                    echo '<li><span class="status ' . $taxs[0]->slug . '">' . $cat->name . '</span></li>';
                }
            }
        }
    ?>
    
    <?php if ( get_field( 'location' ) ): ?>
        <li>
            <span class="bi bi-geo-alt"></span> <?php echo get_field( 'location' ); ?>
        </li>
    <?php endif; ?>
    <?php if ( get_field( 'salary_range' ) ): ?>
        <li>
            <span class="bi bi-currency-dollar"></span> <?php echo get_field( 'salary_range' ); ?>
        </li>
    <?php endif; ?>

    <?php if ( !str_contains( $taxs[0]->slug,  'close' ) ): ?>
    
        <?php if ( get_field( 'close_date' ) ): ?>
            <li class="margin-left-auto">
                <span><?php echo pll__( 'Close Date' ); ?>:</span> <?php echo get_locale() == 'en_US' ? get_field( 'close_date' ) : KhmerNumDate( get_field( 'close_date' ) ); ?>
            </li>
        <?php endif; ?>
    
    <?php endif; ?>

</ul>