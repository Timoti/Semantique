<?php
/**
 * Basic WooCommerce support
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

get_header(); ?>


	<!-- nominal classname -->
	<div class="full-width mainthing" role="main">

	<?php do_action( 'semantique_before_content' ); ?>

	<?php while ( woocommerce_content() ) : the_post(); ?>
	 <article id="post-<?php the_ID(); ?>" <?php post_class('main-content') ?> >

	 <header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>

			<?php do_action( 'semantique_page_before_entry_content' ); ?>

			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<footer>
				<?php wp_link_pages( array('before' => '<nav class="page-nav" id="page-nav"><p>' . __( 'Pages:', 'semantique' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>

			<?php do_action( 'semantique_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'semantique_page_after_comments' ); ?>
		</article>
		
	<?php endwhile;?>

	<?php do_action( 'semantique_after_content' ); ?>

	</div> <!-- /mainthing -->
	<?php get_sidebar(); ?>

<?php get_footer();
