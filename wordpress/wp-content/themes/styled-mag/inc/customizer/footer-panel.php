<?php
/**
 * styledmag pro Theme Customizer
 *
 * @package styledmag pro
 */

function styledmag_customize_footer_panel( $wp_customize ) {
	//New Options By Bidur
 
   /** footer customizer panel **/
    
	$wp_customize->add_panel( 'footer_panel', array(// Header Panel
	    'priority'       => 6,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Footer Settings', 'styled-mag'),
	    'description'    => __('Deals with the Footer portion of your theme', 'styled-mag'),
	));

	$wp_customize->add_section( 'copyright', array(
		'title'          => __( 'Copyright Text', 'styled-mag' ),
		'priority'       => 50,
		'panel'          => 'footer_panel',
	) );

	// Setting group for a Copyright
	$wp_customize->add_setting( 'copyright', array(
		'sanitize_callback' => 'styledmag_sanitize_text',
	) );

	$wp_customize->add_control( 'copyright', array(
		'settings' => 'copyright',
		'label'    => __( 'Your Copyright Notice', 'styled-mag' ),
		'section'  => 'copyright',		
		'type'     => 'text',
		'priority' => 13,
	) );


	$wp_customize->add_section( 'footer_color', array(
		'title'          => __( 'Color Settings', 'styled-mag' ),
		'priority'       => 50,
		'panel'          => 'footer_panel',
	) );

        //Footer background
        
        $wp_customize->add_setting( 'footer_bg', array(
		'default'        => '',
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'   => __( 'Footer Background', 'styled-mag' ),
		'section' => 'footer_color',
		'settings'   => 'footer_bg',
		'priority' => 16,			
	) ) );
        
        //Footer text
        
        $wp_customize->add_setting( 'footer_text', array(
		'default'        => '',
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text', array(
		'label'   => __( 'Footer Text ', 'styled-mag' ),
		'section' => 'footer_color',
		'settings'   => 'footer_text',
		'priority' => 16,			
	) ) );        
        

	//Footer Navigation menu color
 $wp_customize->add_setting( 'footer_navtext_color', array(
  'default'        => '',
  'sanitize_callback' => 'styledmag_sanitize_hex_color',
 ) );
 
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_navtext_color', 
  array(
  'label'   => __( 'Footer Navigation Color ', 'styled-mag' ),
  'section' => 'footer_color',
  'settings'   => 'footer_navtext_color',
  'priority' => 17,   
 ) ) );


 //Footer Navigation menu hover color
 $wp_customize->add_setting( 'footer_navtext_hover_color', array(
  'default'        => '',
  'sanitize_callback' => 'styledmag_sanitize_hex_color',
 ) );
 
 $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_navtext_hover_color', 
  array(
  'label'   => __( 'Footer Navigation Hover Color ', 'styled-mag' ),
  'section' => 'footer_color',
  'settings'   => 'footer_navtext_hover_color',
  'priority' => 18,   
 ) ) );
 
 }
 add_action('customize_register','styledmag_customize_footer_panel');