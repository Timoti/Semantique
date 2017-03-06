<?php
/**
 * Change the class for sticky posts to .wp-sticky to avoid conflicts with Foundation's Sticky plugin
 *
 * @package Semantique
 * @since Semantique 2.2.0
 */

if ( ! function_exists( 'semantique_sticky_posts' ) ) :
function semantique_sticky_posts( $classes ) {
	if ( in_array( 'sticky', $classes, true ) ) {
	    $classes = array_diff($classes, array('sticky'));
	    $classes[] = 'wp-sticky';
	}
	return $classes;
}
add_filter('post_class','semantique_sticky_posts');

endif;
