<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section section-document-download animate"  data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>" id="section-document-download">
    <div class="container">
        <div class="wrapper">
            <?php 
                if ( isset( $field['document'] ) && !empty( $field['document'] ) ) {
                    echo '<ul class="document">';
                        foreach( $field['document'] as $key => $value ) {
                            echo '<li class="item">';
                                echo '<div class="media">';
                                    echo '<img src="' . $value['document_cover_image']['sizes']['large'] . '" alt="' . $value['document_title'] . '">';
                                echo '</div>';
                                echo '<div class="wrap">';
                                    echo '<h3><span>' . $value['document_title'] . '</span></h3>';
                                    echo '<a href="' . $value['document_file']['url'] . '" download>' . $value['button_label'] . '</a>';
                                echo '</div>';
                            echo '</li>';
                        }
                    echo '</ul>';
                }
            ?>
        </div>
    </div>
</section>