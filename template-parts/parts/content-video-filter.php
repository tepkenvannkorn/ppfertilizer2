<ul class="filter-box">

    <?php

        echo '<li data-filter="*" class="checked">' . pll__( 'All Videos' ) . '</li>';

        $terms = get_terms(
            array(
                'taxonomy'  => 'video_type',
                'hide_empty' => true,
            )
        );

        if ( is_array( $terms ) && count( $terms ) > 0 ) {

            foreach( $terms as $term ) {

                if ($term == 'language' || $term == 'post_translations') {
                    continue; //skip built-in taxonomies from Polylang
                }

                echo "<li data-filter='." . $term->slug . "'>" . $term->name . "</li>";

            }

        }
        
    ?>
    
</ul>