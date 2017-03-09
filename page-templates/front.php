<?php
/*
Template Name: Front
*/
get_header(); ?>
<!-- Test The theme changes -->
<h1>FRONT</h1>
<?php c2c_reveal_template(); ?>

<header id="front-hero" class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			<a role="button" class="download large button sites-button hide-for-small-only" href="https://github.com/timoti/Semantique">Download Semantique</a>
		</div>

		<div id="watch" class="watch">
			<section id="stargazers" class="stargazers">
				<a href="https://github.com/timoti/Semantique">1.5k stargazers</a>
			</section>
			<section id="twitter" class="twitter">
				<a href="https://twitter.com/olefredrik">@olefredrik</a>
			</section>
		</div>
	</div>

</header>

<?php do_action( 'semantique_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>" class="post-<?php the_ID(); ?>">
			<?php do_action( 'semantique_page_before_entry_content' ); ?>
			<div class="entry-content">
			<!-- 	<?php the_content(); ?> -->
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav" class="page-nav"><p>' . __( 'Pages:', 'semantique' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'semantique_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'semantique_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'semantique_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>






<?php get_footer();
