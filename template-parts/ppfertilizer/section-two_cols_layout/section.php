<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section section-two-cols-layout animate <?php echo ( ! is_front_page() ? 'subpage' : '' ) ?>" id="section-two-cols-layout" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>" data-alignment="<?php echo isset( $field['text_alignment'] ) && !empty( $field['text_alignment'] ) ? $field['text_alignment'] : '' ; ?>">
    <div class="container">
        <div class="wrapper <?php echo $field['image_location'] ?>">
            <?php if ( isset( $field['image'] ) && !empty( $field['image'] ) ): ?>
                <img src="<?php echo $field['image']['url'] ?>" alt="<?php echo get_thumb_caption_by_img_id( $field['image']['id']); ?>">
            <?php endif; ?>
            <?php if ( isset( $field['texts'] ) && !empty( $field['texts'] ) ): ?>
                <div class="texts">
                    <?php echo $field['texts'] ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>