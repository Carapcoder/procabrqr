<?php
/**
 * styledmag pro Theme Customizer
 *
 * @package styledmag pro
 */

function styledmag_customize_header_panel( $wp_customize ) {
	//New Options By Bidur
    
     /*
=================================================
Header Settings Customizer
=================================================
*/
	$wp_customize->add_panel( 'header_settings_panel', array(// Header Panel
        'priority'       => 5,
        'capability'     => 'edit_theme_options',
        'title'          => __('Header Setting', 'styled-mag'),
        'description'    => __('Organize Your Header Settings', 'styled-mag'),
    ));

    
 /** Social Networking part **/
   	$wp_customize->add_section( 'social_networking', array(
		'title'          => __( 'Social Networking Links', 'styled-mag' ),
		'priority'       => 55,
	) );

	// Setting group for Twitter
	$wp_customize->add_setting( 'twitter_uid', array(
		'sanitize_callback' => 'styledmag_sanitize_url',
	) );

	$wp_customize->add_control( 'twitter_uid', array(
		'settings' => 'twitter_uid',
		'label'    => __( 'Twitter', 'styled-mag' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 2,
	) );	
	
// Setting group for Facebook
	$wp_customize->add_setting( 'facebook_uid', array(
		'sanitize_callback' => 'styledmag_sanitize_url',
	) );

	$wp_customize->add_control( 'facebook_uid', array(
		'settings' => 'facebook_uid',
		'label'    => __( 'Facebook', 'styled-mag' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 3,
	) );	
		
	
// Setting group for Linkedin
	$wp_customize->add_setting( 'linkedin_uid', array(
		'sanitize_callback' => 'styledmag_sanitize_url',
	) );

	$wp_customize->add_control( 'linkedin_uid', array(
		'settings' => 'linkedin_uid',
		'label'    => __( 'Linkedin', 'styled-mag' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 5,
	) );	
	
// Setting group for Pinterest
	$wp_customize->add_setting( 'pinterest_uid', array(
		'sanitize_callback' => 'styledmag_sanitize_url',
	) );

	$wp_customize->add_control( 'pinterest_uid', array(
		'settings' => 'pinterest_uid',
		'label'    => __( 'Pinterest', 'styled-mag' ),
		'section'  => 'social_networking',
		'type'     => 'text',
		'priority' => 6,
	) );

	$wp_customize->add_section( 'social_icons_colors', array(
		'title'          => __( 'Social Icon Colors', 'styled-mag' ),
		'priority'       => 5,
		'panel'			=> 'social_networking_panel',
	) );
    
     // Icon  Color for Top Bar Social Icons
    $wp_customize->add_setting( 'header_social_icons_color', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'header_social_icons_color', array(
		'label'   => __( 'Social Icon Color', 'styled-mag' ),
		'section' => 'social_icons_colors',
		'settings'   => 'header_social_icons_color',
		'priority' => 7,			
	) ) );

	//Icon Background Color For Top Bar Social Icons
	$wp_customize->add_setting( 'header_social_icons_bgcolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'header_social_icons_bgcolor', array(
		'label'   => __( 'Social Icon Background Color', 'styled-mag' ),
		'section' => 'social_icons_colors',
		'settings'   => 'header_social_icons_bgcolor',
		'priority' => 8,			
	) ) );

	//Icon Hover Color For Top Bar Social Icons
	$wp_customize->add_setting( 'header_social_icons_hovercolor', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control(  new WP_Customize_Color_Control( $wp_customize, 'header_social_icons_hovercolor', array(
		'label'   => __( 'Social Icon Hover Color', 'styled-mag' ),
		'section' => 'social_icons_colors',
		'settings'   => 'header_social_icons_hovercolor',
		'priority' => 9,			
	) ) );
    
    
    
/** Search setting part **/    
	$wp_customize->add_section( 'choose_search_icon', array(
		'title'          => __( 'Search Icon', 'styled-mag' ),
		'description'	 => __('Search Icon Settings ', 'styled-mag'),	
		'priority'       => 5,
		'panel'			=> 'header_settings_panel',
	) );

	$wp_customize->add_setting( 'search_icon_hide', array(
		'sanitize_callback' => 'styledmag_sanitize_checkbox',
	) );

	$wp_customize->add_control('search_icon_hide', array(
		'label'   => __( 'Hide Search Icon', 'styled-mag' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_hide',
		'priority' => 5,
		'type' => 'checkbox',			
	 ) );

	$wp_customize->add_setting( 'search_icon_color', array(
		'default'        => esc_html( '#E8CB00' ),
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_icon_color', array(
		'label'   => __( 'Search Icon Color', 'styled-mag' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_color',
		'priority' => 5,			
	) ) );

	$wp_customize->add_setting( 'search_icon_background', array(
		'default'        => '#3d3d3d',
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_icon_background', array(
		'label'   => __( 'Search Background', 'styled-mag' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_background',
		'priority' => 6,			
	) ) );

	$wp_customize->add_setting( 'search_icon_line', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'search_icon_line', array(
		'label'   => __( 'Search Icon Line', 'styled-mag' ),
		'section' => 'choose_search_icon',
		'settings'   => 'search_icon_line',
		'priority' => 7,			
	) ) );



/** nav color options **/

    $wp_customize->add_section( 'navigation_colours', array(
		'title'          => __( 'Navigation Colours', 'styled-mag' ),	
		'priority'       => 5,
		'panel'			=> 'header_settings_panel',
	) );


	// Menu 1st level link color
	$wp_customize->add_setting( 'menu_link', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link', array(
		'label'   => __( 'Menu Link Color', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_link',
		'priority' => 23,			
	) ) );

	$wp_customize->add_setting( 'menu_link_bg', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_link_bg', array(
		'label'   => __( 'Menu Link Background', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_link_bg',
		'priority' => 24,			
	) ) );
		

	// Menu 1st level link color on hover and acive
	$wp_customize->add_setting( 'menu_active', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_active', array(
		'label'   => __( 'Menu Active Background', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_active',
		'priority' => 25,			
	) ) );

	$wp_customize->add_setting( 'menu_active_text', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_active_text', array(
		'label'   => __( 'Menu Active Text Color', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_active_text',
		'priority' => 26,			
	) ) );
	
	$wp_customize->add_setting( 'menu_hover', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover', array(
		'label'   => __( 'Menu Hover Background', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_hover',
		'priority' => 27,			
	) ) );

	$wp_customize->add_setting( 'menu_hover_text', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_text', array(
		'label'   => __( 'Menu Hover Text', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'menu_hover_text',
		'priority' => 28,			
	) ) );
	
	$wp_customize->add_setting( 'submenu_bg_color', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_bg_color', array(
		'label'   => __( 'Submenu Background Color', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_bg_color',
		'priority' => 29,			
	) ) );

	$wp_customize->add_setting( 'submenu_link_color', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_link_color', array(
		'label'   => __( 'Submenu Link Color', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_link_color',
		'priority' => 30,			
	) ) );


	$wp_customize->add_setting( 'submenu_active', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_active', array(
		'label'   => __( 'Submenu Active Text', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_active',
		'priority' => 31,			
	) ) );

	$wp_customize->add_setting( 'submenu_active_bg', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_active_bg', array(
		'label'   => __( 'Submenu Active Background', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_active_bg',
		'priority' => 32,			
	) ) );


	$wp_customize->add_setting( 'submenu_hover', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_hover', array(
		'label'   => __( 'Submenu Hover Background', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_hover',
		'priority' => 33,			
	) ) );

	$wp_customize->add_setting( 'submenu_hover_text', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_hover_text', array(
		'label'   => __( 'Submenu Hover Text', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_hover_text',
		'priority' => 34,			
	) ) );


	// Submenu bottom border
	$wp_customize->add_setting( 'submenu_border', array(
		'sanitize_callback' => 'styledmag_sanitize_hex_color',
	) );
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_border', array(
		'label'   => __( 'Submenu Bottom Border', 'styled-mag' ),
		'section' => 'navigation_colours',
		'settings'   => 'submenu_border',
		'priority' => 35,			
	) ) );
    // Submenu Divider border
    $wp_customize->add_setting( 'submenu_divider', array(
     
        'sanitize_callback' => 'styledmag_sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submenu_divider', array(
        'label'   => __( 'Submenu Link Divider', 'styled-mag' ),
        'section' => 'navigation_colours',
        'settings'   => 'submenu_divider',
        'priority' => 35,           
    ) ) );
}
add_action('customize_register', 'styledmag_customize_header_panel');