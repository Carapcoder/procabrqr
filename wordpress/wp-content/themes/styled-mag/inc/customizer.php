<?php
/*
=================================================
STYLED MAG THEME CUSTOMIZER
=================================================
*/

/**
 * Lets create a customizable theme and begin with some pre-setup
*/ 
add_action('customize_register', 'styledmag_theme_customize');
function styledmag_theme_customize($wp_customize) {
	
    function styledmag_customize_register( $wp_customize ) {
        $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    }
    add_action( 'customize_register', 'styledmag_customize_register' );
    
    /**
    * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
    */
    
    function styledmag_customize_preview_js() {
        wp_enqueue_script( 'styledmag_customizer', get_template_directory_uri() . '/js/styled_mag-customizer.js', array( 'customize-preview' ), '20131012', true );
    }
    add_action( 'customize_preview_init', 'styledmag_customize_preview_js' );

}