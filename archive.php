<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

get_header(); ?>

<div id="page" class="page" role="main">

<div class="container">

<h1 class="tpl-name">404 <?php c2c_reveal_template(); ?></h1>

	<article class="main-content">
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'semantique_pagination' ) ) { semantique_pagination(); } else if ( is_paged() ) { ?>
			<nav class="post-nav" id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'semantique' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'semantique' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>

<?php get_sidebar(); ?>

</div><!-- /container -->

<?php get_footer();
