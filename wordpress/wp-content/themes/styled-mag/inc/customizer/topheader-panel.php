<?php
/**
 * styledmag pro Theme Customizer
 *
 * @package styledmag pro
 */

function styledmag_customize_topheader_panel( $wp_customize ) {
	//New Options By Bidur

/*
=================================================
HEADER TOP CUSTOMIZER SETTINGS
=================================================
*/	
	$wp_customize->add_panel( 'header_top_bar', array(// Header Panel
	    'priority'       => 1,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Header Top Bar', 'styled-mag'),
	    'description'    => __('Top Bar portion of your theme', 'styled-mag'),
	));


	$wp_customize->add_section( 'header_top_settings', array(
		'title'          => __( 'Top Bar Display', 'styled-mag' ),
		'description'	 => __('Header Top Represents the top position ahead of Menu', 'styled-mag'),	
		'priority'       => 5,
		'panel'			 => 'header_top_bar',	
	) );

	// Hide the Top bar
	$wp_customize->add_setting( 'show_styletop', array(
		'default'        => 0,
		'sanitize_callback' => 'styledmag_sanitize_checkbox',
	) );
	
	$wp_customize->add_control('show_styletop', array(
		'label'   => __( 'Show Top Bar', 'styled-mag' ),
		'section' => 'header_top_settings',
		'priority' => 1,
		'type'    => 'checkbox',
	));
    
    // Breaking News title
    $wp_customize->add_setting( 'ticker_news_title', array(
            'default' => esc_html__( 'Breakig News', 'styled-mag' ),
            'sanitize_callback' => 'styledmag_sanitize_text',
        ) );
        
    $wp_customize->add_control( 'ticker_news_title', array(
        'label'   => __( 'Ticker News Title', 'styled-mag' ),
        'section' => 'header_top_settings',
        'settings' => 'ticker_news_title',
        'type' => 'text',
        'priority'       => 1,  
    ));
  	
           
  // Top bar coloring
    $wp_customize->add_section( 'top_bar_coloring', array(
		'title'          => __( 'Top Bar Colouring Options', 'styled-mag' ),
		'description'	 => __('Enable you to Color the Top Bar on Your Choice', 'styled-mag'),	
		'priority'       => 5,
		'panel'			 => 'header_top_bar',	
	) );
    
    // Top Bar Date Background Color
    $wp_customize->add_setting( 'datebackground_top', array(
        'default'        => esc_html( '#e8cb00' ),
        'sanitize_callback' => 'styledmag_sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'datebackground_top', array(
        'label'   => __( 'Top Bar Date Background Color', 'styled-mag' ),
        'section' => 'top_bar_coloring',
        'settings'   => 'datebackground_top',
        'priority' => 1,            
    ) ) );
    
}
add_action( 'customize_register', 'styledmag_customize_topheader_panel' );