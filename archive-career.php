<?php
/**
 * The archive template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ppfertilizer
 */

get_header();

get_template_part( 'template-parts/parts/content', 'subpage-hero');

?>


<section tabindex="0" class="section animate section-careers">
<div class="container">
        <?php 

            $posts_per_page = get_option( 'posts_per_page' );
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

            $careers = new WP_Query(
                array(
                    'post_type' => 'career',
                    'posts_per_page' => $posts_per_page,
                    'paged' => $paged,
                )
            );
        
            if ( $careers->have_posts() ) {
                echo '<div class="career-wrapper">';
                
                    while ( $careers->have_posts() ) {
                        $careers->the_post();

                        get_template_part( 'template-parts/parts/content', 'career');
                    }

                echo '</div>';
                echo ppfertilizer_pagination( $careers );
                wp_reset_postdata();
            
            } else {
				get_template_part( 'template-parts/content', 'none' );
            }
            
        ?>
    </div>
</section>

<?php 
get_footer();
