<?php
/*
Template Name: Front
*/
get_header(); ?>
<!-- Test The theme changes -->

<div id="hero" class="hero" role="banner">

<div class="container">

<h1 class="tpl-name">FRONTR TPL <?php c2c_reveal_template(); ?></h1>

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
				<a href="https://twitter.com/timgummerdesign">@timgummerdesign</a>
			</section>
		</div>
	</div>
	</div><!-- /container -->
</div> <!-- /hero -->

<?php do_action( 'semantique_before_content' ); ?>

<div class="core">
<div class="container">
<!-- calling out for callouts!  -->
<?php if ( is_active_sidebar( 'frontpage-callouts-area' ) ) : ?>
		<div class="frontpage-callouts-area">
				<?php dynamic_sidebar( 'frontpage-callouts-area' ); ?>
		</div><!-- frontpage-callouts-area -->

<?php endif; ?>

</div><!-- /container (core)-->
</div><!-- core -->


 <?php do_action( 'semantique_after_content' ); ?>
 
<?php /* no closing container tag needed here */ ?>

 <?php get_footer();