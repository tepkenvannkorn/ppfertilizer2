<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: Our Team
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
    
            $teams = new WP_Query(
                array(
                    'post_type'         => 'team',
                    'posts_per_page'    => -1,
                )
            );

            if ( $teams->have_posts() ) {

                echo '<ul class="profile">';

                while ( $teams->have_posts() ) {

                    $teams->the_post();

                    echo '<li>
                            <div class="profile__picture">
                                <img src="' . get_thumb_url( get_the_ID(), 'large' ) . '" alt="' . get_the_title() . '" class="img-fluid">
                                <div class="overlay"></div>
                            </div>
                            <div class="profile__name">
                                <h3>' . get_the_title() . '</h3>
                                <p>' . get_field( 'position' ) . '</p>
                            </div>
                    </li>';

                } 

                echo '</ul>';

                wp_reset_query();

            }

        ?>
    </div>
</section>

<?php get_footer(); 
