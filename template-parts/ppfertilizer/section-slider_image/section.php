<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section animate section-slider-image" id="section-slider-image" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            <?php if ( isset( $field['heading'] ) && !empty( $field['heading'] ) ): ?>
                <h2><?php echo $field['heading'] ?></h2>
            <?php endif; ?>

            <?php if ( isset( $field['text'] ) && !empty( $field['text'] ) ): ?>
                <?php echo $field['text'] ?>
            <?php endif; ?>
            <?php 
                if ( isset( $field['select_images'] ) && ! empty( $field['select_images'] ) ) {

                    echo '<ul class="image">';

                    foreach ( $field['select_images'] as $key => $value ) {

                        echo '<li><img src="' . $value['image']['sizes']['large'] . '" alt="' . get_thumb_caption( $value['image']['ID'] ) . '"></li>';
                    }

                    echo '</ul>';
                    
                } 
            ?>
        </div>
    </div>
</section>