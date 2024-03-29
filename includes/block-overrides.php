<?php
/**
 * Implements block overrides as required.
 *
 */
require_once __DIR__ . '/block-override-functions.php';
//require_once __DIR__ . '/class-block-recursion-control.php';
//require_once __DIR__ . '/class-block-recursion-error.php';
//require_once __DIR__ . '/class-block-recursion-error-block.php';

/**
 * Here we include the blocks we want to override.
 *
 * Either comment out the ones that aren't needed any more - when Gutenberg/core's
 * satisfies the requirement
 * or find another way to automatically determine whether or not to include the file.
 */
//require_once __DIR__ . '/query-pagination.php';
//require_once __DIR__ . '/query-pagination-numbers.php';
//require_once __DIR__ . '/query-loop.php';
//require_once __DIR__ . '/post-excerpt.php';
//require_once __DIR__ . '/post-content.php';
require_once __DIR__ . '/template-part.php';
//require_once __DIR__ . '/navigation.php';
//require_once __DIR__ . '/navigation-link.php';
//require_once __DIR__ . '/post-hierarchical-terms.php';
//require_once __DIR__ . '/block.php';

/**
 * Hook into register_block_types_args before WP_Block_Supports
 */
add_filter( 'register_block_type_args', 'wizzie_register_block_type_args', 10 );

/**
 * Implements overrides for core blocks which we need to improve.
 *
 * @param array $args Block attributes.
 * @return array
 */
function wizzie_register_block_type_args( $args ) {
    //$args = wizzie_maybe_override_block(  $args,'core/query-pagination', 'render_block_core_query_pagination');
	//$args = wizzie_maybe_override_block(  $args,'core/query-pagination-numbers', 'render_block_core_query_pagination_numbers');

	//$args = wizzie_maybe_override_block(  $args,'core/query-loop', 'render_block_core_query_loop' );
    //$args = wizzie_maybe_override_block(  $args,'core/post-excerpt', 'render_block_core_post_excerpt' );
    //$args = wizzie_maybe_override_block(  $args,'core/post-content', 'render_block_core_post_content' );
    $args = wizzie_maybe_override_block(  $args,'core/template-part', 'render_block_core_template_part' );
    //$args = wizzie_maybe_override_block(  $args,'core/navigation', 'render_block_core_navigation' );
    //$args = wizzie_maybe_override_block(  $args,'core/navigation-link', 'render_block_core_navigation_link' );
    //$args = wizzie_maybe_override_block(  $args,'core/post-hierarchical-terms', 'render_block_core_post_hierarchical_terms' );
    //$args = wizzie_maybe_override_block(  $args,'core/block', 'render_block_core_block' );
    return $args;
}