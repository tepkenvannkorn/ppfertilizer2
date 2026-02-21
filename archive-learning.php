<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ppfertilizer
 */

get_header();

get_template_part( 'template-parts/parts/content', 'subpage-hero');
?>

<section tabindex="0" class="section animate section-grid">
    <div class="container">
		<?php
			$posts_per_page = get_option( 'posts_per_page' );
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

            $learning = new WP_Query(
                array(
                    'post_type' => 'learning',
                    'posts_per_page' => $posts_per_page,
                    'paged' => $paged,
                )
            );
        
            if ( $learning->have_posts() ) {
                echo '<div class="news-wrapper">';
                
					$i = 1;
					$num_posts = $learning->post_count; // num news on the current page
					$last_item_margin_auto = true;
					$is_last_item = false;
					
					if ( $num_posts % 3 == 1 ) {  // if it matches (3n+1) sequence
						$last_item_margin_auto = false; // we don't need margin right auto
					}

                    while ( $learning->have_posts() ) :
						$learning->the_post();

						// if it's the last item on the page
						if ( $learning->current_post +1 == $learning->post_count ) { 
							$is_last_item = true;
						}

						get_template_part( 'template-parts/parts/content', 'news', array( 'i' => $i, 'is_last_item' => $is_last_item ) );
						$i++;
					endwhile;

                echo '</div>';
                echo ppfertilizer_pagination( $learning );
                wp_reset_postdata();
            
            } else {
				get_template_part( 'template-parts/content', 'none' );
            }

		?>
	</div>
</section>

<?php 
get_footer();