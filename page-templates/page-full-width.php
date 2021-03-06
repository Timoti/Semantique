<?php
/*
Template Name: Full Width
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>


<div id="page-full-width" class="page-full-width" role="main">

<div class="container">

<h1 class="tpl-name">PAGE <?php c2c_reveal_template(); ?></h1>

<?php do_action( 'semantique_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>

  <article class="post-<?php the_ID(); ?>" <?php post_class('content-main') ?> id="post-<?php the_ID(); ?>" > <!-- TODO CHECK -->

      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'semantique_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'semantique' ), 'after' => '</p></nav>' ) ); ?>
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
