<?php
/**
 * Implements common functions used in block overrides
 *
 */
//require_once __DIR__ . '/class-block-recursion-control.php';


/**
 * Overrides a core block's render_callback method, if required.
 *
 * For the given blockname, if the overriding function is available
 * and the current callback is the gutenberg function
 * replace the render_callback with our own function.
 *
 * @param array $args Block attributes.
 * @param string $blockname The block name to test for.
 * @param string $render_callback The common suffix for the block's callback function.
 * @return array Block attributes.
 */
function wizzie_maybe_override_block( $args, $blockname, $render_callback ) {

    $wizzie_render_callback = 'wizzie_' . $render_callback;
    if ( $blockname == $args['name'] && function_exists( $wizzie_render_callback ) ) {
		//bw_trace2();
        //if ( 'gutenberg_' . $render_callback == $args['render_callback'] ) {
            $args['render_callback'] = $wizzie_render_callback;
        //} else {
		//	bw_trace2( $args, "args" );
        //}
    }
    return $args;
}