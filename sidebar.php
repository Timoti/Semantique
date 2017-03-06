<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'semantique_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'semantique_after_sidebar' ); ?>
</aside>
