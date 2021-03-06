<?php
/**
 * The template for displaying search form
 *
 * @package Semantique
 * @since Semantique 1.0.0
 */

do_action( 'semantique_before_searchform' ); ?>
<form role="search" method="get" class="searchform" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<?php do_action( 'semantique_searchform_top' ); ?>
	<div class="input-group">
		<input type="text" class="s input-group-field" value="" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'semantique' ); ?>">
		<?php do_action( 'semantique_searchform_before_search_button' ); ?>
		<div class="input-group-button">
			<input type="submit" id=" " value="<?php esc_attr_e( 'Search', 'semantique' ); ?>" class="button searchsubmit">
		</div>
	</div>
	<?php do_action( 'semantique_searchform_after_search_button' ); ?>
</form>
<?php do_action( 'semantique_after_searchform' );
