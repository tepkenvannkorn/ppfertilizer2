<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: Learning
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

<section tabindex="0" class="section animate section-grid">
    <div class="container">
        <?php 

            $posts_per_page = get_option( 'posts_per_page' );
            $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

            $stories = new WP_Query(
                array(
                    'post_type' => 'learning',
                    'posts_per_page' => $posts_per_page,
                    'paged' => $paged,
                )
            );
        
            if ( $stories->have_posts() ) {
                echo '<div class="news-wrapper">';
					$i = 1;
					$num_posts = $stories->post_count; // num news on the current page
					$last_item_margin_auto = true;
                    $is_last_item = false;

					if ( $num_posts % 3 == 1 ) {  // if it matches (3n+1) sequence
						$last_item_margin_auto = false; // we don't need margin right auto
					}
                
                    while ( $stories->have_posts() ) {
                        $stories->the_post();

                        // if it's the last item on the page
                        if ( $stories->current_post +1 == $stories->post_count ) { 
                            $is_last_item = true;
                        }

                        get_template_part( 'template-parts/parts/content', 'news', array( 'i' => $i, 'is_last_item' => $is_last_item ) );
                        $i++;
                    }
                echo '</div>';
                echo ppfertilizer_pagination( $stories );
                wp_reset_postdata();
            } else {
				get_template_part( 'template-parts/content', 'none' );
            }
            
        ?>
    </div>
</section>

<?php get_footer(); 
