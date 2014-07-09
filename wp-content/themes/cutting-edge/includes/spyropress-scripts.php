<?php

/**
 * Enqueue scripts and stylesheets
 *
 * @category Core
 * @package SpyroPress
 *
 */

add_action( 'wp_enqueue_scripts', 'dequeue_rev_styles', 12 );
function dequeue_rev_styles() {
    
    if( defined( 'WPCF7_VERSION' ) ) {
        wp_dequeue_style( 'contact-form-7' );
    }
}

/**
 * Register StyleSheets
 */
function spyropress_register_stylesheets() {

    $skin = get_setting( 'skin' );
    
    if( current_theme_supports( 'theme-demo' ) && isset( $_GET['skin'] ) && 'b' == $_GET['skin'] )
        $skin = 'black';
    
    // Default stylesheets
    wp_enqueue_style( 'skeleton', assets_css() . 'skeleton.css' );
    wp_enqueue_style( 'layout', assets_css() . 'layout.css' );
    
    if( $skin ) {
        wp_enqueue_style( 'layout-black', assets_css() . 'layout-' . $skin . '.css' );
    }
    wp_enqueue_style( 'prettyPhoto', assets_css() . 'prettyPhoto.css' );
    
    wp_enqueue_style( 'custom', child_url() . 'assets/css/custom.css' );
    
    // Dynamic StyleSheet
    if ( file_exists( dynamic_css_path() . 'dynamic.css' ) )
        wp_enqueue_style( 'dynamic', dynamic_css_url() . 'dynamic.css', false, '2.0.0' );

    // Builder StyleSheet
    if ( file_exists( dynamic_css_path() . 'builder.css' ) )
        wp_enqueue_style( 'builder', dynamic_css_url() . 'builder.css', false, '2.0.0' );

    // jQuery and Essentials
    wp_enqueue_script( 'prefixfree', assets_js() . 'prefixfree.min.js', false, false, true );
    wp_enqueue_script( 'modernizr', assets_js() . 'modernizr-2.6.2.js', false, false, true );
    wp_enqueue_script( 'iOS-timer', assets_js() . 'iOS-timer.js', false, false, true );
    wp_enqueue_script( 'jquery-sticky', assets_js() . 'jquery.sticky.js', false, false, true );
    wp_enqueue_script( 'jquery' );
}

/**
 * Enqueque Scripts
 */
function spyropress_register_scripts() {

    if ( is_single() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
    /**
     * Register Scripts
     */

    // Plugins
    wp_register_script( 'jquery-hoverdir', assets_js() . 'jquery.hoverdir.js', false, false, true );
    wp_register_script( 'jquery-prettyPhoto', assets_js() . 'jquery.prettyPhoto.js', false, false, true );
    wp_register_script( 'jquery-easing', assets_js() . 'jquery.easing.min.js', false, false, true );
    wp_register_script( 'jquery-mobile-touch-swipe', assets_js() . 'jquery.mobile-touch-swipe-1.0.js', false, false, true );
    wp_register_script( 'jquery-parallax', assets_js() . 'jquery.parallax-1.1.3.js', false, false, true );
    wp_register_script( 'supersized', assets_js() . 'supersized.3.2.7.min.js', false, false, true );
    wp_register_script( 'supersized-shutter', assets_js() . 'supersized.shutter.min.js', false, false, true );
    wp_register_script( 'twitter', assets_js() . 'twitter.js', false, false, true );    

    $deps = array(
        'jquery-prettyPhoto',
        'jquery-easing',
        'jquery-mobile-touch-swipe',
        'jquery-parallax',
        'twitter'
    );
    
    if( is_front_page() ) {
        $deps[] = 'jquery-hoverdir';
        $deps[] = 'supersized';
        $deps[] = 'supersized-shutter';
    }
    else {
        wp_register_script( 'flexslider', assets_js() . 'jquery.flexslider.js', false, false, true );
        $deps[] = 'flexslider';
    }
    
    // custom scripts
    wp_register_script( 'custom-script', assets_js() . 'custom.js', $deps, '2.1', true );
    
    /**
     * Enqueue All
     */
    wp_enqueue_script( 'custom-script' );
    $theme_settings = array(
        'goto_top' => (int)get_setting( 'go_to_top', 1 )
    );
    wp_localize_script( 'custom-script', 'theme_settings', $theme_settings );
}

function spyropress_conditional_scripts() {

    $content = '<!--[if lt IE 9]>
		<script src="' . assets_js() . 'ie8.js"></script>
	<![endif]-->';

    echo get_relative_url( $content );
}
?>