<div class="slidein-menu-backdrop">
    <!-- Draw user attention to the slidein menu -->
</div>

<div class="slidein-menu">

    <div class="lang-menu">
        <?php echo ppfertilizer_menu( 'language-menu' ); ?>
    </div>

    <div class="search-box">
        <?php get_search_form(); ?>
    </div>

    <div class="site-branding">
        <?php the_custom_logo(); ?>
    </div><!-- .site-branding -->

    <ul class="nav slidein-nav">
        <?php echo ppfertilizer_menu( 'primary-menu' ); ?>
    </ul>

    <?php 
        if ( get_locale() == 'en_US' ) {
            if ( get_field( 'donate_button_link', 'option' ) ):
                echo'<a href="' . get_the_permalink( get_field( 'donate_button_link', 'option' ) ) . '" class="cta">' . get_field( 'donate_button_text', 'option' ) . '</a>';
            endif; 
        } else {
            if ( get_field( 'donate_button_link', 'option' ) ):
                echo'<a href="' . get_the_permalink( get_field( 'donate_button_link', 'option' ) ) . '" class="cta">' . get_field( 'donate_button_text_kh', 'option' ) . '</a>';
            endif; 
        }
    ?>

    <a href="#" class="close-button">Close</a>

</div>