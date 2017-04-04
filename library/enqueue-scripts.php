<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

if ( ! function_exists( 'semantique_scripts' ) ) :
	function semantique_scripts() {

	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/assets/css/app.css', array(), '2.9.0', 'all' );

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	// If you'd like to cherry-pick the foundation components you need in your project, head over to gulpfile.js and see lines 35-54.
	// It's a good idea to do this, performance-wise.

	wp_enqueue_script( 'foundation_mobmenu_js', get_template_directory_uri() . '/assets/js/foundation/offCanvas.js', array('jquery'));
	//add_action( 'wp_enqueue_scripts', 'foundation_mobmenu_js' );

// just enqueue jquery as its already registered 
	wp_enqueue_script('jquery'); 

	/*   REGISTER ALL JS FOR SITE */
	//wp_register_script('js_matchheight',get_stylesheet_directory_uri().'/assets/js/matchHeight.js');
	wp_register_script('js_app',get_stylesheet_directory_uri().'/assets/js/app.js');


	// Add the comment-reply library on required pages
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'semantique_scripts' );
endif;
