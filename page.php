<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>
		<h3> Semantique Theme</h3> 
 <?php get_template_part( 'template-parts/featured-image' ); ?>

 <div id="page" class="classes-are-better" role="main">
<!-- Test The theme changes -->
 <?php do_action( 'foundationpress_before_content' ); ?>
 <?php while ( have_posts() ) : the_post(); ?>
	 <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			 <header>
					 <h1 class="entry-title"><?php the_title(); ?></h1>
			 </header>
			 <?php do_action( 'foundationpress_page_before_entry_content' ); ?>

	<?php if ( is_home() ) { ?>
		<!-- This is the blog posts index -->
		 <h1> This is Home</h1>



	<?php } else { ?>

	<h1> This is NOT Home</h1> 

 <?php 
}
?>

<?php if(is_home()) { ?> <hr><div id=”nash”> <p>A <a href=”http://www.carolenash.com”>classic motorbike insurance</a> quote from Carole Nash will amaze you with how competitive the prices are!</p></div> <?php } ?>




			 <div class="entry-content">
					 <?php the_content(); ?>
					 <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
			 </div>




			 <footer>
					 <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
					 <p><?php the_tags(); ?></p>
			 </footer>
			 <?php do_action( 'foundationpress_page_before_comments' ); ?>
			 <?php comments_template(); ?>
			 <?php do_action( 'foundationpress_page_after_comments' ); ?>
	 </article>
 <?php endwhile;?>

 <?php do_action( 'foundationpress_after_content' ); ?>
 <?php get_sidebar(); ?>

 </div>

 <?php get_footer();
