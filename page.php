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
<!-- 		<h3> Semantique Theme</h3>  -->
 <?php get_template_part( 'template-parts/featured-image' ); ?>
<h1>PAGE</h1>
 <div id="page" class="page" role="main">
<!-- Test The theme changes -->
 <?php do_action( 'semantique_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
	 <article class="post-<?php the_ID(); ?> <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			 <header>
					 <h1 class="entry-title"><?php the_title(); ?></h1>
			 </header>
			 <?php do_action( 'semantique_page_before_entry_content' ); ?>

<?php c2c_reveal_template(); ?>

	<?php if ( is_front_page() ) { ?>
		<!-- This is the blog posts index -->
		<!--  This is the Front Page< -->


<?php if ( is_active_sidebar( 'frontpage-callouts-area' ) ) : ?>
    <div class="frontpage-callouts-area-div">
        <?php dynamic_sidebar( 'frontpage-callouts-area' ); ?>
    </div><!-- frontpage-callouts-area -->

<?php endif; ?>



	<?php } else { ?>

	<!--  This is NOT the Front Page  -->

 <?php 
}
?>
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
 <?php get_sidebar(); ?>

 </div>

 <?php get_footer();
