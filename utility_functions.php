<?php 

// Disable deactivation for plugins

add_filter( 'plugin_action_links', 'disable_plugin_deactivation', 10, 4 );
function disable_plugin_deactivation( $actions, $plugin_file, $plugin_data, $context ) {
 
    if ( array_key_exists( 'deactivate', $actions ) && in_array( $plugin_file, array(
        'wpforms/wpforms.php',
        'woocommerce/woocommerce.php'
    )))
        unset( $actions['deactivate'] );
    return $actions;
}

// End 