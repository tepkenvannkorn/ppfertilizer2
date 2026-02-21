<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package banteaysrei
 */

get_header();

get_template_part( 'template-parts/parts/content', 'subpage-hero');

?>

<section tabindex="0" class="section animate section-news-and-events section-blog-detail">
	<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/parts/content', 'news-detail' );

		endwhile; // End of the loop.
		?>
	</div>
</section>	

<?php
get_footer();
