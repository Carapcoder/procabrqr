<?php
/**
 * The template for displaying search forms in styled_mag
 * @package styled_mag
 * @since 1.0.0
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'styled-mag' ); ?></span>

	<div class="input-group">
	<input type="text" class="form-control"  placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder', 'styled-mag' ) ?>" value="<?php echo get_search_query(); ?>" name="s">
	<div class="input-group-addon">
	<button class="btn btn-primary" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'styled-mag' ); ?>"><i class="fa fa-search"></i> </button>
	</div>
	</div>
</form>    
