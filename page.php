<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>


<h1 class="tpl-name container">PAGE <?php c2c_reveal_template(); ?></h1>
 <div id="page" class="page" role="main">

 <div class="container">

 <?php do_action( 'semantique_before_content' ); ?>

 <?php while ( have_posts() ) : the_post(); ?>

	 <article id="post-<?php the_ID(); ?>" <?php post_class('main-content') ?> >

			 <h1 class="entry-title"><?php the_title(); ?></h1>

			 <?php do_action( 'semantique_page_before_entry_content' ); ?>


			 <div class="entry-content">
					 <?php the_content(); ?>
					 <?php edit_post_link( __( 'Edit', 'semantique' ), '<span class="edit-link">', '</span>' ); ?>
			 </div>

			 <footer>
					 <?php wp_link_pages( array('before' => '<nav id="page-nav" class="page-nav"><p>' . __( 'Pages:', 'semantique' ), 'after' => '</p></nav>' ) ); ?>
					 <p><?php the_tags(); ?></p>
			 </footer>
			 <?php do_action( 'semantique_page_before_comments' ); ?>
			 <?php comments_template(); ?>
			 <?php do_action( 'semantique_page_after_comments' ); ?>
	 </article>
 <?php endwhile;?>

 <?php do_action( 'semantique_after_content' ); ?>
 

	</div><!-- /container -->

 <?php get_footer();
