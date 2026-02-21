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

	<?php 
        ppfertilizer_post_thumbnail(); 
        if ( !empty ( get_thumb_caption( get_the_ID() ) ) ) {
            echo '<p class="caption">' . get_thumb_caption( get_the_ID() ) . '</p>';
        }
    ?>

	<div class="entry-content">
		<?php 

            $fields = get_field( 'ppfertilizer_layout' );
            if ( is_array( $fields ) && sizeof( $fields ) > 0 ) {
                foreach ( $fields as $field ) {
                    if ( is_array( $field ) && sizeof( $field ) > 0 ) {
                        get_template_part('/template-parts/ppfertilizer/section-' . $field['acf_fc_layout'].'/section', '', array( 'field' => $field ) );
                    }
                }
            } 

        ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->

<div class="other-stories animate">
    <div class="similar-stories">
        <?php get_template_part( 'template-parts/parts/content', 'similar-posts' ); ?>
    </div>
    <div class="latest-stories">
        <?php get_template_part( 'template-parts/parts/content', 'latest-posts' ); ?>
    </div>
</div>
