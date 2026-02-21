<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ppfertilizer
 */

if ( 'post' == get_post_type() ) {

	$related_by_tags = true;
	$tags = get_the_tags( $post->ID); 

	if ( empty( $tags ) ) {
		$related_by_tags = false; // Pull from Categories instead
	}
	
	if ( $related_by_tags ) {
		/* Get 6 Related Articles by Tags */
		$tag_ids = array();
		foreach ( $tags AS $individual_tag ) {
			$tag_ids[] = $individual_tag->term_id; 
		}

		$args = array(
			'tag__in' => $tag_ids, 
			'post__not_in' => array( $post->ID ), 
			'posts_per_page' => 3, 
			'ignore_sticky_posts' => 1, 
			'orderby' => 'rand' 
		);

	} else {
		/* Pull article from the same category */
		$cat = get_the_category( $post->ID );

		if ( is_array( $cat ) && count( $cat ) > 0 ) {
			$args = array (
				'category_name' => $cat[0]->slug, // Related by category name
				'post__not_in' => array( $post->ID ),
				'posts_per_page' => 3
			);
		}
	}

} else {
	
	global $post;
	
	$post_id = ( empty( $post->ID ) ) ? get_the_ID() : $post->ID;
	
	// Get all taxonomies associated with the post type
	$taxonomies = get_object_taxonomies( $post->post_type );

	if ( !empty( $taxonomies ) ) {
		foreach ( $taxonomies as $taxonomy ) {
			// Get terms of the current post for this taxonomy
			$terms = wp_get_post_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
	
			if ( !empty( $terms ) ) {
				// Set up the related posts query
				$args = array(
					'post_type'      => get_post_type(),
					'posts_per_page' => 3, 
					'post__not_in'   => array( $post->ID ),
					'tax_query'      => array(
						array(
							'taxonomy' => $taxonomy,
							'field'    => 'term_id',
							'terms'    => $terms,
						),
					),
				);
				break; // Stop after the first matching taxonomy
			}
		}
	}
}

$related_posts = new WP_Query( $args );

if ( $related_posts->have_posts() ) {

	echo '<h2><span>' . pll__( 'Similar Stories' ) . '</span></h2>';

	while ( $related_posts->have_posts() ) {
		$related_posts->the_post(); ?>

		<div class="item">
			<a href="<?php the_permalink(); ?>" class="media">
				<img src="<?php echo get_thumb_url( get_the_ID(), 'medium' ); ?>" alt="<?php echo get_thumb_caption( get_the_ID() ); ?>">
			</a>
			<div class="text">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php get_template_part( 'template-parts/parts/content', 'meta' ); ?>
			</div>
		</div>

	<?php }
	wp_reset_postdata();
}