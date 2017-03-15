<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<?php c2c_reveal_template(); ?>
<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-sidebar-left" class="page-sidebar-left page" role="main">
1
 <div class="container">

<h1 class="tpl-name container">LEFT SIDEBAR <?php c2c_reveal_template(); ?></h1> 

<?php do_action( 'semantique_before_content' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<article class="post-<?php the_ID(); ?>" <?php post_class('content-main') ?> id="post-<?php the_ID(); ?>">
			<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'semantique_page_before_entry_content' ); ?>

			<div class="content-main entry-content">
					<?php the_content(); ?>
			</div> <!-- /content-main entry-content -->

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
<?php get_sidebar(); ?>

 </div> <!-- /container -->
 </div> <!-- /page -->

<?php get_footer();
