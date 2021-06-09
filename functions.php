<?php

/**
 * Adds theme support that's not yet enabled in theme.json nor in Fizzie
 *
 *  Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 */
function wizzie_after_setup_theme() {
    // No need to enqueue styles yet.
    // Assuming theme.json will provide some
    add_action('wp_enqueue_scripts', 'wizzie_enqueue_styles');
}

/**
 * Enables oik based shortcodes.
 */
function wizzie_init() {
    if (function_exists('bw_add_shortcode')) {
        do_action("oik_add_shortcodes");
    }
}

function wizzie_enqueue_styles() {
	//$theme_version = wp_get_theme()->get( 'Version' );

	if ( defined( 'SCRIPT_DEBUG') && SCRIPT_DEBUG ) {
        $theme_version = filemtime( get_template_directory() . "/style.css" );
	} else {
        $theme_version = wp_get_theme()->get( 'Version' );
    }
	wp_enqueue_style( 'wizzie', get_template_directory_uri() . '/style.css', array(), $theme_version );
}



add_action( 'after_setup_theme', 'wizzie_after_setup_theme');
//add_action( 'after_setup_theme', 'wizzie_stanley_theme_support');
add_action( 'init', 'wizzie_init', 20 );


require_once __DIR__ . '/includes/block-overrides.php';



if ( !function_exists( "bw_trace2" ) ) {
    function bw_trace2( $content, $args) {
        return $content;
    }

}