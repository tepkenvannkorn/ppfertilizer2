<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: Career
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

<section tabindex="0" class="section animate section-careers">
    <div class="container">
        <?php 

            $posts_per_page = get_option( 'posts_per_page' );
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

            $careers = new WP_Query(
                array(
                    'post_type' => 'career',
                    'posts_per_page' => $posts_per_page,
                    'paged' => $paged,
                )
            );
        
            if ( $careers->have_posts() ) {
                echo '<div class="career-wrapper">';
                
                    while ( $careers->have_posts() ) {
                        $careers->the_post();

                        get_template_part( 'template-parts/parts/content', 'career');
                    }

                echo '</div>';
                echo ppfertilizer_pagination( $careers );
                wp_reset_postdata();
            
            } else {
				get_template_part( 'template-parts/content', 'none' );
            }
            
        ?>
    </div>
</section>

<?php get_footer(); 
