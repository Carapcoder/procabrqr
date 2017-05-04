<?php
/**
 * styledmag pro Theme Customizer
 *
 * @package styledmag pro
 */

function styledmag_customize_basic_panel( $wp_customize ) {

    /*
    =================================================
    Basic Settings
    =================================================
    */
	$wp_customize->add_panel( 'basic_settings_panel', array(// Header Panel
	    'priority'       => 5,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Basic Settings', 'styled-mag'),
	    'description'    => __('Organize Your Basis Settings', 'styled-mag'),
	));

    $wp_customize->add_panel( 'header_settings_panel', array(// Header Panel
        'priority'       => 5,
        'capability'     => 'edit_theme_options',
        'title'          => __('Header Setting', 'styled-mag'),
        'description'    => __('Organize Your Header Settings', 'styled-mag'),
    ));

    $wp_customize->add_section( 'site_layout', array(
        'title'          => __( 'Site Layout', 'styled-mag' ),
        'priority'       => 1,
        'panel'			=> 'basic_settings_panel'
    ) );

    // Setting for page width
	$wp_customize->add_setting( 'page_width', array(
            'default' => 'default',
            'sanitize_callback' => 'styledmag_sanitize_pagewidth',
	) );
    // Control for page width	
	$wp_customize->add_control( 'page_width', array(
            'label'   => __( 'Page Width', 'styled-mag' ),
            'section' => 'site_layout',
            'type'    => 'radio',
                'choices' => array(
                    'default' => __( 'Full Width', 'styled-mag' ),
                    'boxedmedium' => __( 'Boxed Width', 'styled-mag' )
                ),
                'priority'       => 1,	
        ));

	$wp_customize->add_section( 'blog_layout', array(
        'title'          => __( 'Blog Layout', 'styled-mag' ),
        'priority'       => 2,
        'panel'			=> 'basic_settings_panel'
    ) );
		
    // Setting for blog layout
	$wp_customize->add_setting( 'blog_style', array(
            'default' => 'blogright',
            'sanitize_callback' => 'styledmag_sanitize_blogstyle',
	) );
    // Control for blog layout	
	$wp_customize->add_control( 'blog_style', array(
            'label'   => __( 'Blog Style', 'styled-mag' ),
            'section' => 'blog_layout',
            'priority' => 2,
            'type'    => 'radio',
            'choices' => array(
                'blogright' => __( 'Blog with Right Sidebar', 'styled-mag' ),
                'blogleft' => __( 'Blog with Left Sidebar', 'styled-mag' ),
                'blogleftright' => __( 'Blog with Left &amp; Right Sidebar', 'styled-mag' ),
                'blogwide' => __( 'Blog with Full Width &amp; no Sidebars', 'styled-mag' ),
            ),
    ));	

    // move to top section
    
	$wp_customize->add_section( 'move_top_top', array(
        'title'          => __( 'Move To Top', 'styled-mag' ),
        'priority'       => 4,
        'panel'			=> 'basic_settings_panel'
    ) );

    $wp_customize->add_setting( 'movetotop', array(
		'default'        => '1',
		'sanitize_callback' => 'styledmag_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'movetotop', array(
		'settings' => 'movetotop',
		'label'    => __( 'Enable Move To Top', 'styled-mag' ),
		'section'  => 'move_top_top',		
		'type'     => 'checkbox',
		'priority' => 14,
	) );

$wp_customize->get_section('title_tagline')->panel = 'site_title_and_taglines';
	$wp_customize->add_panel( 'site_title_and_taglines', array(// Header Panel
	    'priority'       => 1,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Site Title & Taglines', 'styled-mag'),
	    'description'    => __('Deals with the Site Title settings of your theme', 'styled-mag'),
	));
 }
 add_action('customize_register','styledmag_customize_basic_panel');