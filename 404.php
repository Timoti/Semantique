<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

get_header(); ?>


<!-- nominal classname follows -->
<div class="full-width" role="main">

<div class="container">

<h1 class="tpl-name">404 <?php c2c_reveal_template(); ?></h1>

<h1 class="tpl-name">404</h1>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

	<header>
		<h1 class="entry-title"><?php _e( 'File Not Found', 'semantique' ); ?></h1>
	</header>

	<div class="entry-content">

		<div class="error">
			<p class="bottom"><?php _e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'semantique' ); ?></p>
		</div>

		<p><?php _e( 'Please try the following:', 'semantique' ); ?></p>

		<ul>
			<li><?php _e( 'Check your spelling', 'semantique' ); ?></li>
			<li><?php printf( __( 'Return to the <a href="%s">home page</a>', 'semantique' ), home_url() ); ?></li>
			<li><?php _e( 'Click the <a href="javascript:history.back()">Back</a> button', 'semantique' ); ?></li>
		</ul>

	</div><!-- /entry-content -->

</article>

<?php get_sidebar(); ?>

</div><!-- /container -->

<?php get_footer();
