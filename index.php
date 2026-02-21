<?php
/**
 * The main template file
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

if ( ! is_front_page() ) {
	get_template_part( 'template-parts/parts/content', 'subpage-hero');
}

?>

<section tabindex="0" class="section animate section-grid">
    <div class="container">
        <?php 

			if ( have_posts() ) :

				echo '<div class="news-wrapper">';
					$i = 1;
					$num_posts = $wp_query->post_count; // num news on the current page
					$last_item_margin_auto = true;
					$is_last_item = false;

					if ( $num_posts % 3 == 1 ) {  // if it matches (3n+1) sequence
						$last_item_margin_auto = false; // we don't need margin right auto
					}
					
					while ( have_posts() ) :
						the_post();

						// if it's the last item on the page
						if ( $wp_query->current_post +1 == $wp_query->post_count ) { 
							$is_last_item = true;
						}

						get_template_part( 'template-parts/parts/content', 'news', array( 'i' => $i, 'is_last_item' => $is_last_item ) );

						$i++;
					endwhile;

				echo '</div>';

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;

			echo ppfertilizer_pagination();

			wp_reset_postdata();
            
        ?>
    </div>
</section>

<?php get_footer(); 