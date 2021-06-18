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

    // If I uncomment the next add_theme_support() line then
    // the site doesn't work with the current version of WooCommerce.
    // I haven't yet found out what I don't get by not adding theme support.
    // Herb 2021/06/10 with WooCommerce 5.4, Gutenberg 10.8.0 and WordPress 5.7.2
	// See also https://github.com/woocommerce/woocommerce/pull/30013
    //add_theme_support( 'woocommerce');

	/**
	 * Because we haven't added 'woocommerce' theme support we have to reimplement some of the logic that WooCommerce
	 * would have used.  See the logic in WC_Template_Loader.
	 * For Reviews we reapply the Review tab logic.
	 * which means we need to implement the `comments_template` filter that replaces
	 * the normal comment form by WooCommerce's Reviews plus the 'Add a review' comment form.
	 */
	add_filter( 'woocommerce_product_tabs',  'wizzie_unsupported_theme_reapply_review_tab', 11 );
	add_filter( 'comments_template', array( 'WC_Template_Loader','comments_template_loader' )  );
}

function wizzie_unsupported_theme_reapply_review_tab( $tabs ) {
	$tabs['reviews'] = [ 'title' => "Reviews", 'priority' => 30, 'callback'=> 'comments_template'];
	return $tabs;
}

/**
 * Enables oik based shortcodes.
 */
function wizzie_init() {
    if (function_exists('bw_add_shortcode')) {
        do_action("oik_add_shortcodes");
    }
}

/**
 * Enqueues the parent theme's stylesheet.
 */
function wizzie_enqueue_styles() {
	if ( defined( 'SCRIPT_DEBUG') && SCRIPT_DEBUG ) {
        $theme_version = filemtime( get_template_directory() . "/style.css" );
	} else {
        $theme_version = wp_get_theme()->get( 'Version' );
    }
	wp_enqueue_style( 'wizzie', get_template_directory_uri() . '/style.css', array(), $theme_version );
}

add_action( 'after_setup_theme', 'wizzie_after_setup_theme');
add_action( 'init', 'wizzie_init', 20 );

require_once __DIR__ . '/includes/block-overrides.php';

if ( !function_exists( "bw_trace2" ) ) {
    function bw_trace2( $content, $args) {
        return $content;
    }
}