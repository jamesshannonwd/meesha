<?php

/**
 * Theme Meta Info for internal usage
 *
 * Dont Mess with it.
 */
add_action( 'before_spyropress_core_includes', 'spyropress_setup_theme' );
function spyropress_setup_theme() {
    global $spyropress;

    $spyropress->internal_name = 'cutting-edge';
    $spyropress->theme_name = 'Cutting Edge';
    $spyropress->theme_version = '1.3';
	$spyropress->themekey = 'dbtm027uzz8fkfjut1zq7grvc9v8uv6rp';

    $spyropress->framework = 'skt';
    $spyropress->grid_columns = 16;
    $spyropress->row_class = 'container';
}
?>