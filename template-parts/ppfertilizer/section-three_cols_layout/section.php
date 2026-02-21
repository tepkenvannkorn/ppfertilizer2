<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section section-three-cols-layout animate <?php echo ( ! is_front_page() ? 'subpage' : '' ) ?>" id="section-three-cols-layout" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            <?php if ( isset( $field['heading'] ) && !empty( $field['heading'] ) ): ?>
                <h2><?php echo $field['heading'] ?></h2>
            <?php endif; ?>
            
            <?php 
                if ( isset( $field['column_data'] ) && !empty( $field['column_data'] ) ) {
                    $i = 1;
                    echo '<div class="cols">';
                    foreach( $field['column_data'] as $key => $value ) {
                        if ( $i == 4 ) {
                            break;
                        }
                        echo '<div class="col">';
                            echo $value['item'];
                        echo '</div>';
                        $i++;
                    }
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</section>