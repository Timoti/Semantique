<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

get_header(); ?>

<div id="single-post" class="single-post role="main">
<div class="container">

<h1 class="tpl-name">SINGLE POST <?php c2c_reveal_template(); ?></h1>

<?php do_action( 'semantique_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

	<article class="post-<?php the_ID(); ?>" <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php semantique_entry_meta(); ?>
		</header>
		<?php do_action( 'semantique_post_before_entry_content' ); ?>


		<div class="entry-content">

		<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
		?>
		<?php the_content(); ?>
		<?php edit_post_link( __( 'Edit', 'semantique' ), '<span class="edit-link">', '</span>' ); ?>
		</div> <<!-- /entry-content -->

		<footer>
			<?php wp_link_pages( array('before' => '<nav class="page-nav"> id="page-nav"><p>' . __( 'Pages:', 'semantique' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>

		<?php the_post_navigation(); ?>
		<?php do_action( 'semantique_post_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'semantique_post_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'semantique_after_content' ); ?>

<?php get_sidebar(); ?>

</div><!-- /container -->

<?php get_footer();
