<?php 


// Custom Shipping as per product category 

add_filter( 'woocommerce_package_rates', 'enable_specific_shipping_method_only', 10, 2 );

function enable_specific_shipping_method_only( $rates, $package ) {

    $category_slug = 'kragborg-raafoder';

    // Check if any product in the cart belongs to the specified category
    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
        if ( has_term( $category_slug, 'product_cat', $cart_item['product_id'] ) ) {
    // Specify the shipping method ID you want to enable
    $shipping_method_id = '14'; // Replace '14' with the ID of your shipping method

    // Loop through shipping rates
    foreach ( $rates as $rate_key => $rate ) {
        // If the shipping method ID doesn't match the desired one, remove it
        if ( $rate_key !== 'local_pickup:' . $shipping_method_id ) {
            unset( $rates[$rate_key] );
        }
    }
    }
    }

    return $rates;
}