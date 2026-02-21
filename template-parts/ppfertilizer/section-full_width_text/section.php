<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section section-full-width-text animate <?php echo ( ! is_front_page() ? 'subpage' : '' ) ?>" id="section-full-width-text" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>" data-alignment="<?php echo isset( $field['text_alignment'] ) && !empty( $field['text_alignment'] ) ? $field['text_alignment'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            <?php if ( isset( $field['text'] ) && !empty( $field['text'] ) ): ?>
                <?php echo $field['text'] ?>
            <?php endif; ?>
        </div>
    </div>
</section>