<?php global $last_item_margin_auto; ?>

<div class="career-item">

    <div class="content">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part( 'template-parts/parts/content', 'career-meta' ); ?>

        <?php echo '<p class="highlight"><span>' . get_the_excerpt() . '</span></p>'; ?>
    </div>
</div>