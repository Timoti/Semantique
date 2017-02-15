<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
function foundationpress_sidebar_widgets() {


	register_sidebar(array(
		'id' => 'frontpage-hero-area',
		'class' => 'frontpage-hero-area hero',
		'name' => __( 'Front Page Hero', 'foundationpress' ),
		'description' => __( 'Drag widgets to this Hero container.', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'frontpage-callouts-area',
		'class' => 'frontpage-callouts-area callouts',
		'name' => __( 'Front Page Callouts', 'foundationpress' ),
		'description' => __( 'Drag widgets to this Callouts container.', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));


	register_sidebar(array(
		'id' => 'sidebar-area',
		'class' => 'sidebar-area',
		'name' => __( 'Sidebar Area', 'foundationpress' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'footer-area',
		'class' => 'footer-area',
		'name' => __( 'Footer Area', 'foundationpress' ),
		'description' => __( 'Drag widgets to this footer container', 'foundationpress' ),
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;
