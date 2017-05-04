<?php
/**
 * The Inset Top Sidebar
 * @package styled_mag
 * @since 1.0.0
 */

if ( ! is_active_sidebar( 'insetfull' ) ) {
	return;
}
?>

<div class="fr_widgets_insetfull">
	<?php dynamic_sidebar( 'insetfull' ); ?>
</div>