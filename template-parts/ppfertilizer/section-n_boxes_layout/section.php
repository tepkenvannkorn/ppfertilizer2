<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section section-n-boxes-layout animate <?php echo ( ! is_front_page() ? 'subpage' : '' ) ?>" id="section-n-boxes-layout" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            <?php 
                if ( isset( $field['box'] ) && !empty( $field['box'] ) ) {
                    echo '<div class="boxes">';
                    foreach( $field['box'] as $key => $value ) {
                        echo '<div class="box" data-bg-color="' . $value['box_color'] . '">';
                            echo '<img src="' . $value['icon']['sizes']['large'] . '" alt="">';
                            echo '<h3>' . $value['heading'] . '</h3>';
                            echo $value['text_excerpt'];
                        echo '</div>';
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</section>