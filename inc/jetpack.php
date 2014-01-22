<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package WordPress Mash
 * @since WordPress Mash 1.0.0
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function mash_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'mash_jetpack_setup' );
