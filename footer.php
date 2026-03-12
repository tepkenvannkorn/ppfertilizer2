<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ppfertilizer
 */

?>

	<footer>
        <div class="footer footer__top">
            <div class="container">
                <div class="footer__brand-wrapper">
                    <div class="footer__brand">
						<?php the_custom_logo(); ?>
                    </div>
                    <div class="footer__contact">
                        <ul class="nav no-arrow">
							<?php 
								echo '<li><span class="bi bi-house-door"></span> '. get_field( 'address', 'option' ) . '</li>';
							?>
                            <?php if ( get_field( 'phone', 'option' ) ):
                                echo '<li><span class="bi bi-telephone"></span> <a href="tel:' .  get_field( 'phone', 'option' ) . '">' . get_field( 'phone', 'option' ) . '</a></li>';
                            endif; ?>
							<?php if ( get_field( 'phone_2', 'option' ) ):
                                echo '<li><span class="bi bi-telephone"></span> <a href="tel:' .  get_field( 'phone_2', 'option' ) . '">' . get_field( 'phone_2', 'option' ) . '</a></li>';
                            endif; ?>
							<?php if ( get_field( 'mobile', 'option' ) ):
                                echo '<li><span class="bi bi-phone"></span> <a href="tel:' .  get_field( 'mobile', 'option' ) . '">' . get_field( 'mobile', 'option' ) . '</a></li>';
                            endif; ?>
							<?php if ( get_field( 'mobile_2', 'option' ) ):
                                echo '<li><span class="bi bi-phone"></span> <a href="tel:' .  get_field( 'mobile_2', 'option' ) . '">' . get_field( 'mobile_2', 'option' ) . '</a></li>';
                            endif; ?>
							<?php if ( get_field( 'mobile_3', 'option' ) ):
                                echo '<li><span class="bi bi-phone"></span> <a href="tel:' .  get_field( 'mobile_3', 'option' ) . '">' . get_field( 'mobile_3', 'option' ) . '</a></li>';
                            endif; ?>
                            <?php if ( get_field( 'email', 'option' ) ):
                                echo '<li><span class="bi bi-envelope"></span> <a href="mailto:' .  get_field( 'email', 'option' ) . '">' . get_field( 'email', 'option' ) . '</a></li>';
                            endif; ?>
                        </ul>
                        
                        <?php 
                        
                            if ( have_rows( 'social_medias', 'option' ) ) {
                                echo '<ul class="nav social">';
                                while ( have_rows( 'social_medias', 'option' ) ) {
                                    the_row();
                                    echo '<li><a href="' . get_sub_field( 'social_media_link' ) . '" target="_blank" rel="nofollow"><span class="bi bi-' . get_sub_field( 'social_media_name' ) . '"></span></a></li>';
                                }
                                echo '</ul>';
                            }
                        
                        ?>

                    </div>
                </div>
				<div class="menu">
					<h3>
						<?php echo get_field( 'footer_menu_1_heading', 'option' ); ?>
					</h3>
					<?php echo ppfertilizer_menu( 'footer-menu-1' ); ?>
				</div>
				<div class="menu">
					<h3>
						<?php echo get_field( 'footer_menu_2_heading', 'option' ); ?>
					</h3>
					<?php echo ppfertilizer_menu( 'footer-menu-2' ); ?>
				</div>
				<div class="menu">
					<h3>
						<?php echo get_field( 'footer_menu_3_heading', 'option' ); ?>
					</h3>
					<?php echo ppfertilizer_menu( 'footer-menu-3' ); ?>
				</div>
				<div class="menu">
					<h3>
						<?php echo get_field( 'footer_menu_4_heading', 'option' ); ?>
					</h3>
					<?php echo ppfertilizer_menu( 'footer-menu-4' ); ?>
				</div>
            </div>
        </div>
		<div class="footer footer__bottom">
			<div class="container">
                <div class="copyrights">
					<?php echo get_field( 'copyrights_text', 'option' ); ?>
				</div>
				<div class="legal">
					<?php echo ppfertilizer_menu( 'legal-menu' ); ?>
				</div>
            </div>
		</div>
		<div class="to-top"><span class="bi bi-arrow-up-circle-fill"></span></div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>
