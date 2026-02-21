<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section section-hero animate <?php echo ( ! is_front_page() ? 'subpage' : '' ) ?>" id="section-hero" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            <div class="left">
                <?php if ( isset( $field['heading'] ) && !empty( $field['heading'] ) ): ?>
                    <h2><?php echo $field['heading'] ?></h2>
                <?php endif; ?>
                <?php if ( isset( $field['text_excerpt'] ) && !empty( $field['text_excerpt'] ) ): ?>
                    <?php echo $field['text_excerpt'] ?>
                <?php endif; ?>
                <?php 
                    $button_link = '';
                    if ( $field['button_link_options'] == 'internal' ) {
                        $button_link = get_permalink( $field['button_link_internal'] );
                    } else {
                        if ( isset( $field['button_link_external'] ) && !empty( $field['button_link_external'] ) ) {
                            $button_link = $field['button_link_external'];
                        }
                    }
                ?>
                <a href="<?php echo $button_link ?>" class="cta"><?php echo $field['button_label'] ?></a>
            </div>
            <div class="right">
                <?php 
                    if ( $field['media_options'] == 'photo' ) {
                        echo '<img src="' . $field['hero_image']['url'] . '" alt="' . get_thumb_caption_by_img_id( $field['hero_image']['id'] ) . '">';
                    } else {
                        if ( $field['hero_video_option'] == 'internal' ) {
                            echo '<video controls autoplay muted loop id="myVideo">
                                <source src="' . $field['hero_video_internal']['url'] . '" type="video/mp4">
                            </video>';
                        } else {
                            echo '<div class="video__external" data-youtube-id="' . $field['hero_video_external'] . '"></div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>