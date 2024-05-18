<?php 

add_filter( 'woocommerce_product_add_to_cart_text', 'micronordic_change_product_button_text', 9999, 2 );

function micronordic_change_product_button_text( $label, $product ) {
    if ( $label === 'Select Option' ) {
        return 'حدد الخيار';
    }
    return $label;
}