<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

?>

		</section>
		<div id="footer-container" class="footer-container">
			<footer id="footer" class="footer">
				<?php do_action( 'semantique_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'semantique_after_footer' ); ?>

				<?php c2c_reveal_template(); ?>
				
			</footer>
		</div>

		<?php do_action( 'semantique_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'semantique_before_closing_body' ); ?>
</body>
</html>
