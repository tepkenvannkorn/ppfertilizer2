<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section section-report animate"  data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>" id="section-document-download">
    <div class="container">
        <div class="wrapper">
            <?php 
                if ( isset( $field['report'] ) && !empty( $field['report'] ) ) {
                    echo '<ul class="report">';
                        foreach( $field['report'] as $key => $value ) {
                            echo '<li class="item">';
                                echo '<div class="media">';
                                    echo '<img src="' . $value['report_cover_image']['sizes']['large'] . '" alt="' . $value['report_title'] . '">';
                                echo '</div>';
                                echo '<div class="wrap">';
                                    echo '<h3><span>' . $value['report_title'] . '</span></h3>';
                                    echo $value['report_description'];
                                    echo '<a href="' . $value['report_file']['url'] . '" download>' . $value['button_download_label'] . '</a>';
                                echo '</div>';
                            echo '</li>';
                        }
                    echo '</ul>';
                }
            ?>
        </div>
    </div>
</section>