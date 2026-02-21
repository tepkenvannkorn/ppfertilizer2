<?php $field = isset( $args['field'] ) ? $args['field'] : []; ?>

<section tabindex="0" class="section animate section-our-partners" id="section-our-partners" data-bg-color="<?php echo isset( $field['background_color'] ) && !empty( $field['background_color'] ) ? $field['background_color'] : '' ; ?>">
    <div class="container">
        <div class="wrapper">
            
            <?php if ( isset( $field['heading'] ) && ! empty( $field['heading'] ) ): ?>
                <h2><?php echo $field['heading'] ?></h2>
            <?php endif; ?>
            <?php if ( isset( $field['text'] ) && ! empty( $field['text'] ) ): ?>
                <?php echo $field['text'] ?>
            <?php endif; ?>
            <?php 

                if ( isset( $field['partners'] ) && ! empty( $field['partners'] ) ) {
                    echo '<ul class="partners">';
                        foreach( $field['partners'] as $key => $value ) {
                            echo '<li><img src="' . $value['partner_logo']['sizes']['large'] . '" alt="' . $value['partner_name'] . '"></li>';
                        }
                    echo '</ul>';
                }
         
            ?>
        </div>
    </div>
</section>