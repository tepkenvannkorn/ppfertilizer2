<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: Video
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

$fields = get_field( 'ppfertilizer_layout' );
if ( is_array( $fields ) && sizeof( $fields ) > 0 ) {
	foreach ( $fields as $field ) {
		if ( is_array( $field ) && sizeof( $field ) > 0 ) {
			get_template_part('/template-parts/ppfertilizer/section-' . $field['acf_fc_layout'].'/section', '', array( 'field' => $field ) );
		}
	}
} 

?>

<section tabindex="0" class="section section-grid">
    <div class="container">
        <?php get_template_part( 'template-parts/parts/content', 'video-filter' ); ?>

        <?php 

            $videos = new WP_Query(
                array(
                    'post_type'	        => 'video',
                    'posts_per_page'    => -1,
                )
            );

            if ( $videos->have_posts() ) {

                echo '<div class="grid">';
                
                while ( $videos->have_posts() ) {

                    $videos->the_post();

                    get_template_part( 'template-parts/parts/content', 'video' );

                }

                echo '</div>';
            }

        ?>
    </div>
</section>

<?php get_footer(); 
