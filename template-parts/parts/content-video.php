<?php 

    $slugs = get_post_taxonomies( get_the_ID() );
    $this_taxonomy_slug = '';

    foreach ( $slugs as $term_slug ) {
        if ($term_slug == 'language' || $term_slug == 'post_translations') {
            continue; //skip built-in taxonomies from Polylang
        }
        $this_taxonomy_slug = $term_slug;
    }

    $taxs = get_the_terms( get_the_ID(), $this_taxonomy_slug );

?>

<div class="gallery <?php echo $taxs[0]->slug; ?>">
    <div class="gallery-wrapper">
        <?php 

            $gallery_link = get_field( 'link_to_video', get_the_ID() );
            $file = get_thumb_url( get_the_ID(), 'large' );
        
        ?>
        <a href="<?php echo $gallery_link; ?>" data-lity data-title="">
            <img src="<?php echo $file; ?>" class="img-fluid" alt="<?php the_title(); ?>">
            <div class="overlay"></div>
        </a>
    </div>
    <div class="text">
        <h3><a href="<?php the_permalink(); ?>" data-lity data-title="" data-lity-target="<?php echo $file; ?>"><?php the_title(); ?></a></h3>
    </div>
</div>