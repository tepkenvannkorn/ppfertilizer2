<div class="story-item <?php echo $args['i'] == 1 ? 'featured' : '' ?>">

    <?php 
        if ( $args['i'] == 1 ) {
            echo '<div class="overlay"></div>';
        }
    ?>
    <div class="media">
        <?php 
            if ( get_the_post_thumbnail() !== '' ) {
                echo '<a href="'. get_the_permalink() . '"><img src="' . get_thumb_url( get_the_ID(), 'large' ) . '" alt="' . get_thumb_caption( get_the_ID() ) . '"></a>';
            }
        ?>
    </div>    

    <div class="content">
        <?php get_template_part( 'template-parts/parts/content', 'post-type-meta' ); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php echo '<p><span>' . get_the_excerpt() . '</span></p>'; ?>
    </div>
    

</div>