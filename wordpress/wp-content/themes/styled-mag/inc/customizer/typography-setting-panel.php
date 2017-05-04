<?php
/**
 * styledmag pro Theme Customizer
 *
 * @package styledmag pro
 */

function styledmag_customize_typography_panel( $wp_customize ) {
	//New Options By Bidur
/**
* ============================================================================
*   This is a custom section called Typography
*  which contains settings for typography
* ==============================================================================
*/

	$wp_customize->add_panel( 'typography_settings', array(// Header Panel
	    'priority'       => 6,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Typography Settings', 'styled-mag'),
	    'description'    => __('Deals with the Typography settings of your theme', 'styled-mag'),
	));

	$wp_customize->add_section( 'typography', array(
		'title'          => __( 'Typography', 'styled-mag' ),
		'priority'       => 6,
		'panel' => 'typography_settings',
	) );
        

        
        //text size and color selection 
        $wp_customize->add_setting('h1_fontsize', array(
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h1_fontsize', array(
		'label'     => __( 'H1 Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'h1_fontsize',
		'priority' => 2,			
	) );
        
        $wp_customize->add_setting( 'h1_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h1_fontcolor', array(
		'label'   => __( 'H1 Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'h1_fontcolor',
		'priority' => 3,			
	) ) );
        
        $wp_customize->add_setting('h2_fontsize', array(
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h2_fontsize', array(
		'label'     => __( 'H2 Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'h2_fontsize',
		'priority' => 4,			
	) );
        
        $wp_customize->add_setting( 'h2_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h2_fontcolor', array(
		'label'   => __( 'H2 Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'h2_fontcolor',
		'priority' => 5,			
	) ) );
        
        $wp_customize->add_setting('h3_fontsize', array(
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h3_fontsize', array(
		'label'     => __( 'H3 Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'h3_fontsize',
		'priority' => 6,			
	) );
        
        $wp_customize->add_setting( 'h3_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h3_fontcolor', array(
		'label'   => __( 'H3 Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'h3_fontcolor',
		'priority' => 7,			
	) ) );
        
        $wp_customize->add_setting('h4_fontsize', array(
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h4_fontsize', array(
		'label'     => __( 'H4 Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'h4_fontsize',
		'priority' => 8,			
	) );
        
        $wp_customize->add_setting( 'h4_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h4_fontcolor', array(
		'label'   => __( 'H4 Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'h4_fontcolor',
		'priority' => 9,			
	) ) );
        
        $wp_customize->add_setting('h5_fontsize', array(
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h5_fontsize', array(
		'label'     => __( 'H5 Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'h5_fontsize',
		'priority' => 10,			
	) );
        
        $wp_customize->add_setting( 'h5_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h5_fontcolor', array(
		'label'   => __( 'H5 Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'h5_fontcolor',
		'priority' => 11,			
	) ) );
        
        $wp_customize->add_setting( 'h6_fontsize', array(
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'h6_fontsize', array(
		'label'     => __( 'H6 Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'h6_fontsize',
		'priority' => 12,			
	) );
        
        $wp_customize->add_setting( 'h6_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'h6_fontcolor', array(
		'label'   => __( 'H6 Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'h6_fontcolor',
		'priority' => 13,			
	) ) );
        
        $wp_customize->add_setting('p_fontsize', array(
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'p_fontsize', array(
		'label'     => __( 'Paragraph Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'p_fontsize',
		'priority' => 14,			
	) );
        
        $wp_customize->add_setting( 'p_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'p_fontcolor', array(
		'label'   => __( 'Paragraph Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'p_fontcolor',
		'priority' => 15,			
	) ) );
        
        $wp_customize->add_setting('a_fontsize', array(
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'a_fontsize', array(
		'label'     => __( 'Anchor Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'a_fontsize',
		'priority' => 16,			
	) );
        
        $wp_customize->add_setting( 'a_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'a_fontcolor', array(
		'label'   => __( 'Anchor Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'a_fontcolor',
		'priority' => 17,			
	) ) );
        
        $wp_customize->add_setting( 'ahover_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'ahover_fontcolor', array(
		'label'   => __( 'Anchor Hover Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'ahover_fontcolor',
		'priority' => 18,			
	) ) );
        
        $wp_customize->add_setting('li_fontsize', array(
            'default'           => '1em',
            'sanitize_callback' => 'styledmag_sanitize_text',
        ));
        
        $wp_customize->add_control( 'li_fontsize', array(
		'label'     => __( 'Link Font-Size', 'styled-mag' ),
		'section'   => 'typography',
		'settings'  => 'li_fontsize',
		'priority' => 19,			
	) );
        $wp_customize->add_setting( 'li_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'li_fontcolor', array(
		'label'   => __( 'Link Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'li_fontcolor',
		'priority' => 20,			
	) ) );

	    $wp_customize->add_setting( 'lihov_fontcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'lihov_fontcolor', array(
		'label'   => __( 'Link Hover Color', 'styled-mag' ),
		'section' => 'typography',
		'settings'   => 'lihov_fontcolor',
		'priority' => 21,			
	) ) );


















/**
 * This is a section called Colors
 * This is for the primary colors
 */
	
	$wp_customize->add_panel( 'color_settings', array(// Header Panel
	    'priority'       => 6,
	    'capability'     => 'edit_theme_options',
	    'title'          => __('Color Settings', 'styled-mag'),
	    'description'    => __('Deals with the color settings of your theme', 'styled-mag'),
	));
	

	$wp_customize->add_section( 'colors', array(
		'title'          => __( 'Colors', 'styled-mag' ),
		'priority'       => 5,
		'panel'			=> 'color_settings',
	) );
        
	$wp_customize->add_section( 'breadcumb_colors', array(
		'title'          => __( 'Breadcumb Colors', 'styled-mag' ),
		'priority'       => 5,
		'panel'			=> 'color_settings',
	) );

    // BreadCumb background
	$wp_customize->add_setting( 'breadcumb_bg', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcumb_bg', array(
		'label'   => __( 'Breadcrumb Background', 'styled-mag' ),
		'section' => 'breadcumb_colors',
		'settings'   => 'breadcumb_bg',
		'priority' => 4,			
	) ) );
        
        // Breadcrumbs text
	$wp_customize->add_setting( 'breadcrumbs_text', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_text', array(
		'label'   => __( 'Breadcrumbs Text', 'styled-mag' ),
		'section' => 'breadcumb_colors',
		'settings'   => 'breadcrumbs_text',
		'priority' => 37,			
	) ) );
        // Breadcrumbs text link 
	$wp_customize->add_setting( 'breadcrumbs_link', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_link', array(
		'label'   => __( 'Breadcrumbs Link Color', 'styled-mag' ),
		'section' => 'breadcumb_colors',
		'settings'   => 'breadcrumbs_link',
		'priority' => 38,			
	) ) );	
        // Breadcrumbs text link on hover
	$wp_customize->add_setting( 'breadcrumbs_link_hov', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbs_link_hov', array(
		'label'   => __( 'Breadcrumbs Link Hover', 'styled-mag' ),
		'section' => 'breadcumb_colors',
		'settings'   => 'breadcrumbs_link_hov',
		'priority' => 39,			
	) ) );
        
       
    //Bottom  Widget background
    $wp_customize->add_setting( 'bottom_widget_bg', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bottom_widget_bg', array(
		'label'   => __( 'Bottom Widget Background', 'styled-mag' ),
		'section' => 'colors',
		'settings'   => 'bottom_widget_bg',
		'priority' => 15,			
	) ) );











}
add_action('customize_register','styledmag_customize_typography_panel');