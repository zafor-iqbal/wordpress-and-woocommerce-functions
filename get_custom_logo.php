<?php 

//  Demo Function
function modify_get_custom_logo_defaults($html, $blog_id) {

// Update the $html variable according to your website requirements and return this variable. You can modify the $html variable conditionally too if you want.

return $html;
}
// add the filter
add_filter( "get_custom_logo", "modify_get_custom_logo_defaults", 10, 2 );

// End of demo function



// Implemented Function 

// Define your custom function to modify the custom logo output
function bodenhoffs_custom_logo_function($html) {
    // Generate HTML markup for your custom logo
    $logo_html = '<div class="dev-fusion fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion-flex-column">';
    $logo_html .= '<div class="fusion-column-wrapper fusion-flex-justify-content-center fusion-content-layout-column" style="background-position:left top;background-repeat:no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;padding: 0px 0px 0px 0px;">';
    $logo_html .= '<div style="text-align:center;">';
    $logo_html .= '<style>.fusion-imageframe.imageframe-1 {margin-right: 40px;}</style>';
    $logo_html .= '<span class=" has-fusion-standard-logo fusion-imageframe imageframe-none imageframe-1 hover-type-none" style="max-width:210px;">';
    $logo_html .= '<a class="fusion-no-lightbox" href="' . esc_url(home_url('/')) . '" target="_self">';
    $logo_html .= '<img decoding="async" src="https://www.bodenhoffs.dk/wp-content/uploads/2022/07/bodenhoff-logo.svg" data-orig-src="https://www.bodenhoffs.dk/wp-content/uploads/2022/07/bodenhoff-logo.svg" srcset="https://www.bodenhoffs.dk/wp-content/uploads/2022/07/bodenhoff-logo.svg 1x, https://www.bodenhoffs.dk/wp-content/uploads/2022/07/bodenhoff-logo.svg 2x" data-srcset="https://www.bodenhoffs.dk/wp-content/uploads/2022/07/bodenhoff-logo.svg 1x, https://www.bodenhoffs.dk/wp-content/uploads/2022/07/bodenhoff-logo.svg 2x" style="max-height:121px;height:auto;" retina_url="https://www.bodenhoffs.dk/wp-content/uploads/2022/07/bodenhoff-logo.svg" width="253" height="121" class="img-responsive fusion-standard-logo lazyloaded" alt="Bodenhoff Bageri Logo">';
    $logo_html .= '</a></span></div></div>';
    $logo_html .= '<style type="text/css">.fusion-body .fusion-builder-column-1 {width: 30% !important;margin-top: 0px;margin-bottom: 0px;}.fusion-builder-column-1>.fusion-column-wrapper {padding-top: 0px !important;padding-right: 0px !important;margin-right: 0px;padding-bottom: 0px !important;padding-left: 0px !important;margin-left: 0;}.fusion-body .fusion-builder-column-1 {width: 25% !important;order: 0;}.fusion-builder-column-1>.fusion-column-wrapper {margin-right: 0px;margin-left: 0;}}@media only screen and (max-width:767px) {.fusion-body .fusion-builder-column-1 {width: 100% !important;order: 0;margin-bottom: 0px;}.fusion-builder-column-1>.fusion-column-wrapper {margin-right: 0px;margin-left: 0;}}</style></div>';

    // Return the custom logo HTML markup
    return $logo_html;
}

// Add your custom function to the get_custom_logo filter
add_filter('get_custom_logo', 'bodenhoffs_custom_logo_function', 10, 2);


// End of Impletemnted Function 