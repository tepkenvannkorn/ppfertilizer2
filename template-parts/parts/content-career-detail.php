<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ppfertilizer
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
        <?php 
            $apply_now_text = pll__( 'Apply Now' );
            if ( get_field( 'apply_now_text' ) ) {
                $apply_now_text = get_field( 'apply_now_text' );
            }
            $apply_now_link = get_site_url() . '/contact-us-kh';
            if ( get_locale() == 'en_US') {
                $apply_now_link = get_site_url() . '/contact-us';
            }
            if ( get_field( 'contact_page', 'option' ) ) {
                $apply_now_link = get_permalink( get_field( 'contact_page', 'option' ) );
            }
            $terms = get_the_terms( get_the_ID(), 'career_status' );
            
            if ( is_array( $terms ) && count( $terms ) > 0 ) {
                $slug = '';
                foreach( $terms as $term ) {
                    $slug = $term->slug;
                }
            }
           
        ?>
        <?php if ( str_contains( $slug, 'open' ) ): ?>
		    <a href="<?php echo $apply_now_link; ?>" class="cta"><?php echo $apply_now_text; ?></a>
        <?php endif; ?>

        <?php echo get_field( 'job_description' ); ?>

        <?php if ( get_field( 'attachement' ) ) : ?>

            <h3><?php echo pll__( 'Download Attachement' ); ?></h3>

            <p><a href="<?php echo get_field( 'attachement' )['url'] ?>" download class="attachement"><?php echo get_field( 'attachement' )['filename'] ?></a></p>

        <?php endif; ?>

        <?php if ( str_contains( $slug, 'open' ) ): ?>
		    <a href="<?php echo $apply_now_link; ?>" class="cta"><?php echo $apply_now_text; ?></a>
        <?php endif; ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
