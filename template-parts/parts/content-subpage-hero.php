<div class="sub-page-hero <?php echo is_single() ? 'single-post' : '' ?>">
    <div class="container">
        <div class="title-wrapper animate">
            <?php if ( is_404() ) : ?>
                <h1 class="page-title"><?php echo pll__( "Oops! That page can't be found." ); ?></h1>
            <?php elseif ( is_home() ) : ?>
                <h1 class="page-title"><?php echo get_the_title( get_option('page_for_posts') ); ?></h1>
            <?php elseif ( is_search() ) : ?>
                <h1 class="page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf( pll__( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
            <?php elseif ( is_single() ) : ?>
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="meta-wrapper">
                    <?php 
                        if ( 'career' == get_post_type() ) {
                            get_template_part( 'template-parts/parts/content', 'career-meta' );
                        } else {
                            get_template_part( 'template-parts/parts/content', 'meta' );
                        }
                    ?>
                    <?php get_template_part( 'template-parts/parts/content', 'share' ) ; ?>
                </div>
            <?php elseif ( is_archive() ) : ?>
                <?php if ( is_post_type_archive( 'story' ) ) : ?>
                    <h1><?php echo pll__( 'Success Stories' ); ?></h1>
                <?php else: ?>
                    <h1 class="page-title"><?php echo single_cat_title( '', false ); ?></h1>
                <?php endif; ?>
            <?php elseif ( is_post_type_archive( 'story' ) ) : ?>
                <h1 class="page-title"><?php echo post_type_archive_title( '', false ); ?></h1>
            <?php else: ?>
                <h1><?php the_title(); ?></h1>
            <?php endif; ?>
            <div class="breadcrumb-wrapper">
				<div class="container">
					<?php echo ppfertilizer_breadcrumbs(); ?>
				</div>
			</div>
        </div>
    </div>
    <div class="overlay"></div>
</div>