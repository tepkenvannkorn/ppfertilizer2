<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ppfertilizer
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

get_header();

if ( ! is_front_page() ) {
	get_template_part( 'template-parts/parts/content', 'subpage-hero');
}

?>

<section tabindex="0" class="section section-grid">
    <div class="container">
        <?php
        
            if ( have_posts() ) {
                global $wp_query;
                echo '<div class="news-wrapper">';
					$i = 1;
					$num_posts = $wp_query->post_count; // num news on the current page
					$last_item_margin_auto = true;
                    $is_last_item = false;

					if ( $num_posts % 3 == 1 ) {  // if it matches (3n+1) sequence
						$last_item_margin_auto = false; // we don't need margin right auto
					}
                
                    while ( have_posts() ) {
                        the_post();

                        // if it's the last item on the page
                        if ( $wp_query->current_post +1 == $wp_query->post_count ) { 
                            $is_last_item = true;
                        }

                        get_template_part( 'template-parts/parts/content', 'news', array( 'i' => $i, 'is_last_item' => $is_last_item ) );
                        $i++;
                    }
                echo '</div>';
                echo ppfertilizer_pagination( $wp_query );
                wp_reset_postdata();
            } else {
				get_template_part( 'template-parts/content', 'none' );
            }
        
        ?>
    </div>
</section>

<?php get_footer(); 
