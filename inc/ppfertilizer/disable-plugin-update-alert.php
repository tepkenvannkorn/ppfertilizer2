<?php 

function ppfertilizer_filter_plugin_updates( $value ) {
    
    unset( $value->response['advanced-custom-fields-pro/acf.php'] );
    
    return $value;

}

add_filter( 'site_transient_update_plugins', 'ppfertilizer_filter_plugin_updates' );