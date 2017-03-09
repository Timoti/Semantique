<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

?>

<div class="post-<?php the_ID(); ?>" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php semantique_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'semantique' ) ); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
