<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ppfertilizer
 */

get_header();

if ( ! is_front_page() ) {
	get_template_part( 'template-parts/parts/content', 'subpage-hero');
}
?>

	<section tabindex="0" class="section section-search">
		<div class="container">
			<div class="search-wrapper">
				<?php if ( have_posts() ) : ?>

				<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					ppfertilizer_pagination();

					else :

					get_template_part( 'template-parts/content', 'none' );

					endif;
				?>
			</div>
		</div>
	</section>

<?php
get_footer();
