<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ppfertilizer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/print.css'); ?>" media="print">

	<?php wp_head(); ?>

	<style type="text/css">
		<?php 
			$color_brand = '#3742FA';
			$color_secondary = '#5352ED';
			$color_text = '#000';
			$color_border = '#6E7673';
			$color_text_grey = '#6C6C6C';
			$color_white = '#fff';
			$color_grey = '#F8F8F8';
			
			if ( get_field( 'color_brand', 'option' ) ) {
				$color_brand = get_field( 'color_brand', 'option' );
			}
			if ( get_field( 'color_secondary', 'option' ) ) {
				$color_secondary = get_field( 'color_secondary', 'option' );
			}
			if ( get_field( 'color_text', 'option' ) ) {
				$color_text = get_field( 'color_text', 'option' );
			}
			if ( get_field( 'color_border', 'option' ) ) {
				$color_border = get_field( 'color_border', 'option' );
			}
			if ( get_field( 'color_text_grey', 'option' ) ) {
				$color_text_grey = get_field( 'color_text_grey', 'option' );
			}
			if ( get_field( 'color_white', 'option' ) ) {
				$color_white = get_field( 'color_white', 'option' );
			}
			if ( get_field( 'color_grey', 'option' ) ) {
				$color_grey = get_field( 'color_grey', 'option' );
			}
		?>
		:root {
			--color-brand: <?php echo $color_brand ?>;
			--color-secondary: <?php echo $color_secondary ?>;
			--color-text: <?php echo $color_text ?>;
			--color-border: <?php echo $color_border ?>;
			--color-text-grey: <?php echo $color_text_grey ?>;
			--color-white: <?php echo $color_white ?>;
			--color-grey: <?php echo $color_grey ?>;
		}
	</style>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=332367590161171';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<noscript class="alert alert-warning">This website works best with JavaScript enabled.</noscript>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ppfertilizer' ); ?></a>

	<?php get_template_part('template-parts/parts/content', 'slidein-menu'); ?>

	<header id="masthead" class="site-header">
		<div class="header-top">
			<div class="container">
				<div class="push-right">
					<?php echo ppfertilizer_menu( 'language-menu' ); ?>
					<div class="search-box">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="header-bottom">
				<div class="site-branding">
					<?php the_custom_logo(); ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ppfertilizer' ); ?></button>
					<?php echo ppfertilizer_menu( 'primary-menu' ); ?>
				</nav><!-- #site-navigation -->

				<div class="hamburger">
					<div class="top"></div>
					<div class="mid"></div>
					<div class="bot"></div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
