<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ppfertilizer
 */

	$post_type = get_post_type();

    $args = array(
		'post_type' => $post_type,
        'post__not_in' => array( $post->ID ), 
        'posts_per_page' => 3, 
        'ignore_sticky_posts' => 1, 
        'orderby' => 'rand',
    );

	$latest_posts = new WP_Query( $args );
	if ( $latest_posts->have_posts() ) {
		
        echo '<h2><span>' . pll__( 'Latest Stories' ) . '</span></h2>';
		
        while ( $latest_posts->have_posts() ) {
			$latest_posts->the_post(); ?>

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