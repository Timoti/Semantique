<?php
/**
 * Register widget areas
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

if ( ! function_exists( 'semantique_sidebar_widgets' ) ) :
function semantique_sidebar_widgets() {


	register_sidebar(array(
		'id' => 'frontpage-hero-area',
		'class' => 'frontpage-hero-area hero',
		'name' => __( 'Front Page Hero', 'semantique' ),
		'description' => __( 'Drag widgets to this Hero container.', 'semantique' ),
		'before_widget' => '<article id="%1$s" class="widget %1$s %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'frontpage-callouts-area',
		'class' => 'frontpage-callouts-area callouts',
		'name' => __( 'Front Page Callouts', 'semantique' ),
		'description' => __( 'Drag widgets to this Callouts container.', 'semantique' ),
		'before_widget' => '<article id="%1$s" class="widget %1$s %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

// actual sidebar
register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'semantique' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'foundationpress' ),
	  'before_widget' => '<article id="%1$s " class="widget %1$s  %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h2>',
	  'after_title' => '</h2>',
	));

// attempted renamespace
	register_sidebar(array(
		'id' => 'sidebar-area',
		'class' => 'sidebar-area',
		'name' => __( 'Sidebar Area', 'semantique' ),
		'description' => __( 'Drag widgets to this sidebar container.', 'semantique' ),
		'before_widget' => '<article id="%1$s" class="widget %1$s %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'id' => 'footer-area',
		'class' => 'footer-area',
		'name' => __( 'Footer Area', 'semantique' ),
		'description' => __( 'Drag widgets to this footer container', 'semantique' ),
		'before_widget' => '<article id="%1$s" class="widget %1$s %2$s">',
		'after_widget' => '</article>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

add_action( 'widgets_init', 'semantique_sidebar_widgets' );
endif;
