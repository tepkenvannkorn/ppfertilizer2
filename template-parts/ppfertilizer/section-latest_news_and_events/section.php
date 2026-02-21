<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section animate section-news-and-events" id="section-news-and-events" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            
            <?php if ( isset( $field['heading'] ) && !empty( $field['heading'] ) ): ?>
                <h2><?php echo $field['heading'] ?></h2>
            <?php endif; ?>
            
            <?php 

                $post_list = array();

                if ( $field['select_posts'] == 'latest' ) {
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => get_option( 'posts_per_page' ),
                    );
                } else {
                    $ids = $field['pick_from_the_list'];
                    foreach ( $ids as $id ) {
                        $post_list[] = $id->ID;
                    }
                    $args = array(
                        'post_type' => 'post',
                        'post__in' => $post_list,
                        'orderby' => 'post__in',
                        'order' => 'ASC',
                    );
                }
                
                $news = new WP_Query( $args );

                if ( $news->have_posts() ) {
                    echo '<div class="news-wrapper">';
                        $slider_for = '';
                        $slider_nav = '';
                        while ( $news->have_posts() ) {
                            $news->the_post();
                            $slider_for .= '<div class="img-wrapper">';
                                $slider_for .= '<div class="date-posted"><span class="bi bi-clock"><span> ' . get_article_age( get_the_time( 'U' ), get_the_ID() ) . '</div>';
                                if ( '' == get_the_post_thumbnail() ) {
                                    if ( get_field( 'default_thumbnail', 'option' ) ) {
                                        $slider_for .= '<img src="' . get_field( 'default_thumbnail', 'option' ) . '" alt="' . get_the_title() . '">';
                                    }
                                } else {
                                    $slider_for .= '<img src="' . get_thumb_url( get_the_ID(), 'large' ) . '" alt="' . get_thumb_caption( get_the_ID() ) . '">';
                                }
                            $slider_for .= '</div>';

                            $slider_nav .= '<div>';
                                $slider_nav .= '<h3><span>' . get_the_title() . '</span> </h3>
										<a href="' . get_the_permalink() . '"><span class="bi bi-arrow-right"></span></a>';
                            $slider_nav .= '</div>';
                        }
                        echo '<div class="slider slider-for">' . $slider_for . '</div>';
                        echo '<div class="slider slider-nav">' . $slider_nav . '</div>';
                    echo '</div>';

                    echo '<div class="text-center">
                        <a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '" class="cta">' . $field['cta_label'] . '</a>
                    </div>';
                    
                    wp_reset_query();
                }
         
            ?>
        </div>
    </div>
</section>