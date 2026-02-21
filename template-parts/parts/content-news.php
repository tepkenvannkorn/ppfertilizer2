<?php global $last_item_margin_auto; ?>

<div class="news-item <?php echo $args['i'] == 1 ? 'featured' : '' ?> <?php echo ( ( $last_item_margin_auto ) && ( $args['is_last_item'] ) ) ? 'margin-right-auto' : '' ?>">

    <div class="content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part( 'template-parts/parts/content', 'meta' ); ?>

        <?php echo '<p><span>' . get_the_excerpt() . '</span></p>'; ?>

        <a href="<?php echo get_permalink( get_the_ID() ); ?>" class="cta"><?php echo pll__( 'Read entire article' ); ?> <span class="bi bi-chevron-right"></span></a>
    </div>
    <div class="media">
        <?php 
            if ( get_the_post_thumbnail() !== '' ) {
                echo '<a href="'. get_the_permalink() . '"><img src="' . get_thumb_url( get_the_ID(), 'large' ) . '" alt="' . get_thumb_caption( get_the_ID() ) . '"></a>';
            }
        ?>
    </div>
</div>