<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section section-about animate <?php echo ( ! is_front_page() ? 'subpage' : '' ) ?>" id="section-about" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            <?php if ( isset( $field['heading'] ) && !empty( $field['heading'] ) ): ?>
                <h2><?php echo $field['heading'] ?></h2>
            <?php endif; ?>
            <div class="about-wrapper">
                <div class="left">
                    <?php 
                        if ( $field['media_option'] == 'image' ) {
                            echo '<img src="' . $field['choose_image']['sizes']['large'] . '" alt="' . get_thumb_caption_by_img_id( $field['choose_image']['id'] ) . '">';
                        } else {
                            if ( $field['video_option'] == 'upload' ) {
                                echo '<video controls autoplay muted loop id="myVideo">
                                    <source src="' . $field['video_upload']['url'] . '" type="video/mp4">
                                </video>';
                            } else {
                                echo '<div class="video__external" data-youtube-id="' . $field['youtube_video_id'] . '"></div>';
                            }
                        }
                    ?>
                </div>
                <div class="right">
                    <?php if ( isset( $field['summary_of_the_project'] ) && !empty( $field['summary_of_the_project'] ) ): ?>
                        <?php echo $field['summary_of_the_project'] ?>
                    <?php endif; ?>
                    <?php 
                        if ( isset( $field['project_sub_items'] ) && !empty( $field['project_sub_items'] ) ) {
                            echo '<ul class="sub-items">';
                                foreach ( $field['project_sub_items'] as $item ) {
                                    echo '<li><img src="' . $item['icon']['sizes']['medium'] . '" alt="' . $item['sub_item_title'] . '"><div class="item-summary"><h3>' . $item['sub_item_title'] . '</h3><p><span>' . $item['a_little_introduction'] . '</span></p></div></li>';
                                }
                            echo '</ul>';

                        }
                    ?>
                </div>
            </div>
            <?php 
                if ( isset( $field['cta_label'] ) && !empty( $field['cta_label'] ) ) {
                    echo '<div class="text-center">
                        <a href="' . get_permalink( $field['cta_link'] ) . '" class="cta">' . $field['cta_label'] . '</a>
                    </div>';
                }
            ?>
        </div>
    </div>
</section>