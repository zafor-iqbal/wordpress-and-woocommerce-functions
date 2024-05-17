<?php 


// First string will be replaced by 2nd string . Add as many $translated block as you want! ;) 

add_filter( 'gettext', 'dbaby_translate_woocommerce_strings_emails', 9999, 3 );

function dbaby_translate_woocommerce_strings_emails( $translated, $untranslated, $domain ) {
    if ( 'woocommerce' === $domain ) {
        // New replacements
        $translated = str_ireplace( 'Original price was:', 'Oprindelig pris var:', $translated );
        $translated = str_ireplace( 'Current price is:', 'Nuværende pris er:', $translated );
    }
    return $translated;
}