<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * 
 * Template Name: Contact
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

<section tabindex="0" class="section section-contact">
    <div class="container">
        
        <?php 
            if ( have_rows( 'contact_location' ) ) {

                $tab_heading = '<ul class="tab-heading">';
                $tab_content = '<div class="tab-content">';
                $i = 1;
    
                while ( have_rows( 'contact_location' ) ) {
                    the_row();
    
                    $tab_heading .= '<li class="tab-switcher ' . ( $i == 1 ? 'active' : '' ) . '" tabindex="' . $i . '" data-href="tab-' . $i . '">' . get_sub_field( 'branch_name' ) . '</li>';
    
                    if ( $i == count( get_field( 'contact_location' ) ) ) {
                        $tab_heading .= '</ul>';
                    }
    
                    $tab_content .= '<div class="tab tab-' . $i . ' ' . ( $i == 1 ? 'active' : '' ) . '">
                        <div class="tab-wrapper">
                            <div class="contact-top">
                                <h3>' . get_sub_field( 'branch_name' ) . '</h3>
                                <div class="contact-details"><ul>';
                                    
                                    if ( get_sub_field( 'address' ) ) {
                                        $tab_content .= '<li><span class="bi bi-geo-alt"></span> ' . get_sub_field( 'address' ) . '</li>';
                                    }
                                    if ( get_sub_field( 'phone_1' ) ) {
                                        $tab_content .= '<li><span class="bi bi-telephone"></span> <a href="tel:' . str_replace( ' ', '', get_sub_field( 'phone_1' ) ) . '">' . get_sub_field( 'phone_1' ) . '</a>';
    
                                        if ( get_sub_field( 'phone_2' ) ) {
                                            $tab_content .= ' / <a href="' . str_replace( ' ', '', get_sub_field( 'phone_2' ) ) . '">' . get_sub_field( 'phone_2' ) . '</a>';
                                        }
    
                                        if ( get_sub_field( 'phone_3' ) ) {
                                            $tab_content .= ' / <a href="' . str_replace( ' ', '', get_sub_field( 'phone_3' ) ) . '">' . get_sub_field( 'phone_3' ) . '</a>';
                                        }
                                    }
    
                                    if ( get_sub_field( 'po_box' ) ) {
                                        $tab_content .= '<li><span class="bi bi-mailbox-flag"></span> P.O Box: ' . get_sub_field( 'po_box' ) . '</a></li>';
                                    }
    
                                    if ( get_sub_field( 'email' ) ) {
                                        $tab_content .= '<li><span class="bi bi-envelope"></span> <a href="mailto:' . get_sub_field( 'email' ) . '">' . get_sub_field( 'email' ) . '</a></li></ul>';
                                    }
                        
                                    if ( have_rows( 'social_medias', 'option' ) ) {

                                        $tab_content .= '<ul class="social_network">';

                                        while ( have_rows( 'social_medias', 'option' ) ) {
                                            the_row();

                                            $tab_content .= '<li><a href="' . get_sub_field( 'social_media_link' ) . '" target="_blank" rel="nofollow"><span class="bi bi-' . get_sub_field( 'social_media_name' ) . '"></span></a></li>';
                                        }

                                        $tab_content .= '</ul>';

                                    }
    
                                    $tab_content .= '</ul></div>';
    
                                $tab_content .= '</div>'; // tab-wrapper
    
                                $tab_content .= '<div class="contact-form">';
                                    
                                    if ( get_locale() == 'en_US' ) {
                                        $tab_content .= '<h3>Let us know your concern.</h3>';
                                    } else {
                                        $tab_content .= '<h3>សូមសរសេរសំណូមពររបស់លោកអ្នកនៅក្នុងទម្រង់ខាងក្រោម
                                        </h3>';
                                    }
                                    
    
                                    if ( get_locale() == 'en_US' ) {
                                        if ( get_field( 'contact_form_en_shortcode', 'option' ) ) {
                                            $tab_content .= do_shortcode( get_field( 'contact_form_en_shortcode', 'option' ) );
                                        }
                                        
                                    } else {
                                        if ( get_field( 'contact_form_kh_shortcode', 'option' ) ) {
                                            $tab_content .= do_shortcode( get_field( 'contact_form_kh_shortcode', 'option' ) );
                                        }
                                    }
    
                                $tab_content .= '</div>';
    
                            $tab_content .= '</div>'; // contact-top
    
                            $tab_content .= '<div class="map">' . get_sub_field( 'google_map' ) . '</div>'; 
                        
                        $tab_content .= '</div>'; // $tab-$i
    
                    $i++;
    
                }
    
                $tab_content .= '</div>';
    
                echo $tab_heading;
    
                echo $tab_content;
    
            }
        ?>

    </div>
</section>

<?php get_footer(); 
