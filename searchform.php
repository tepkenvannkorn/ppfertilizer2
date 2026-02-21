<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ouchrov
 */
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search <?php echo ( is_404() || is_search() ) ? 'onpage-search' : '' ?>" method="get">
	<div class="form-group">
		<input type="text" id="searchControl" class="form-control" name="s" placeholder="<?php echo pll__( 'Search ...' ); ?>" value="<?php echo get_search_query(); ?>">
		<button type="submit"><span class="bi bi-search"></span></button>
	</div>
</form>
