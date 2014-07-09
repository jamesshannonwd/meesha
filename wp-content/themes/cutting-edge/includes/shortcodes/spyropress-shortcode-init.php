<?php

/**
 * Shortcodes
 */

init_shortcode();
function init_shortcode() {
    
    $shortcodes = array(
        'responsive_image'  => 'spyropress_responsive_image',
        'awards_image'  => 'spyropress_awards_image',
        'white_cutting' => 'spyropress_white_cutting',
        'siteColor'     => 'spyropress_span_maker',
        'highlight'     => 'spyropress_span_maker',
        'dropcap'       => 'spyropress_span_maker',
    );
    
    foreach( $shortcodes as $tag => $func )
        add_shortcode( $tag, $func );
}

function spyropress_responsive_image( $atts = array(), $content = '' ) {

    return '<img alt="" class="scale-with-grid salonImage" src="' . $content . '" />';
}

function spyropress_awards_image( $atts = array(), $content = '' ) {

    return '<div class="awardsImage"><img alt="" class="scale-with-grid" src="' . $content . '" /></div>';
}

function spyropress_white_cutting( $atts = array(), $content = '' ) {

    return '<h2 class="white cutting">' . spyropress_remove_formatting( $content ) . '</h2>';
}

function spyropress_span_maker( $atts = array(), $content = '', $tag ) {

    return '<span class="' . $tag . '">' . $content . '</span>';
}

?>