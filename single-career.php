<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ppfertilizer
 */

get_header();

get_template_part( 'template-parts/parts/content', 'subpage-hero');

?>

<section tabindex="0" class="section animate section-careers section-career-detail">
	<div class="container">
		<div class="career-wrapper">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/parts/content', 'career-detail' );

			endwhile; // End of the loop.
			?>
		</div>
	</div>
</section>	

<?php
get_footer();
