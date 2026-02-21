<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section animate section-donor-carousel" id="section-donor-carousel" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            <?php if ( isset( $field['heading'] ) && !empty( $field['heading'] ) ): ?>
                <h2><?php echo $field['heading'] ?></h2>
            <?php endif; ?>

            <?php if ( isset( $field['text'] ) && !empty( $field['text'] ) ): ?>
                <?php echo $field['text'] ?>
            <?php endif; ?>
            <?php 
                if ( isset( $field['select_donors'] ) && ! empty( $field['select_donors'] ) ) {
                    
                    $post_list = array();

                    echo '<ul class="donor">';
                    
                    if ( $field['select_donors'] == 'all' ) {
                        $args = array(
                            'post_type' => 'donor',
                            'posts_per_page' => -1,
                        );
                    } else {
                        $ids = $field['donor_lists'];
                        foreach ( $ids as $id ) {
                            $post_list[] = $id->ID;
                        }
                        $args = array(
                            'post_type' => 'donor',
                            'post__in' => $post_list,
                            'orderby' => 'post__in',
                            'order' => 'ASC',
                        );
                    }

                    $donors = new WP_Query( $args );

                    if ( $donors->have_posts() ) {
                        while ( $donors->have_posts() ) {
                            $donors->the_post();
                            echo '<li><img src="' . get_field('donor_logo')['sizes']['large'] . '" alt="' . get_thumb_caption( get_the_ID() ) . '"></li>';
                        }

                    }

                    echo '</ul>';
                    
                } 
            ?>
        </div>
    </div>
</section>