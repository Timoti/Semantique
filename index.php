<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

get_header(); ?>

<div id="page" class="page core" role="main">

<?php c2c_reveal_template(); ?>

 <div class="container">
<h1 class="tpl-name container">INDEX  <?php c2c_reveal_template(); ?></h1>

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
			<nav clas="post-nav" id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'semantique' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'semantique' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>

<?php get_sidebar(); ?>

</div><!-- /container -->
<?php get_footer();
