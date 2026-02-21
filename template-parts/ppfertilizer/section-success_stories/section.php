<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section animate section-success-stories" id="section-success-stories" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            
            <?php if ( isset( $field['heading'] ) && !empty( $field['heading'] ) ): ?>
                <h2><?php echo $field['heading'] ?></h2>
            <?php endif; ?>
            
            <?php 

                $post_list = array();

                if ( $field['select_posts'] == 'latest' ) {
                    $args = array(
                        'post_type' => 'story',
                        'posts_per_page' => 3,
                    );
                } else {
                    $ids = $field['pick_from_the_list'];
                    foreach ( $ids as $id ) {
                        $post_list[] = $id->ID;
                    }
                    $args = array(
                        'post_type' => 'story',
                        'post__in' => $post_list,
                        'posts_per_page' => 3,
                        'orderby' => 'post__in',
                        'order' => 'ASC',
                    );
                }
                
                $posts = new WP_Query( $args );

                if ( $posts->have_posts() ) {
                    echo '<div class="story-wrapper">';
                        $i = 1;
                        while ( $posts->have_posts() ) {
                            $posts->the_post();
                            get_template_part( 'template-parts/parts/content', 'story', array( 'i' => $i) );
                            $i++;
                        }
                    echo '</div>';
                    echo '<div class="text-center">
                        <a href="' . get_post_type_archive_link( 'story' ) . '" class="cta">' . $field['cta_label'] . '</a>
                    </div>';
                    wp_reset_query();
                }
         
            ?>
        </div>
    </div>
</section>