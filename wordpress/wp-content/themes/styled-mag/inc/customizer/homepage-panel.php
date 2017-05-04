<?php
/**
 * styledmag pro Theme Customizer
 *
 * @package styledmag pro
 */

// Home page section

function styledmag_customize_homepage_panel( $wp_customize ) {
	//New Options By Bidur

	$wp_customize->add_panel( 'homepage_panel', array( // Homepage setting
	    'priority'       => 1,
	    'title'          => __('Home Page Settings', 'styled-mag'),
	    'description'    => __('Edit the homepage section of your theme', 'styled-mag'),
	));


	$wp_customize->add_section( 'homepage_top_settings', array(
		'title'          => __( 'Homepage Top Section', 'styled-mag' ),
		'description'	 => __('Edit to change the homepage top section', 'styled-mag'),	
		'priority'       => 5,
		'panel'			 => 'homepage_panel',	
	) );
    
    $wp_customize->add_setting(
        'homepage_top_posts_category',
        array(
            'sanitize_callback' => 'styledmag_sanitize_dropdown_general',
            )
    );
    
    $wp_customize->add_control( new Styledmag_category_Dropdown( $wp_customize, 'homepage_top_posts_category',
        array(
            'label' => __( 'Choose Category', 'styled-mag'),
            'section' => 'homepage_top_settings',
            'description' => __(' Select Category to show posts posted in home page top section (Leave it empty to display recent posts) ','styled-mag'),
            'type' => 'select',
            'priority' => 1,
        )
    ) );   
    
    //Featured post category
    $wp_customize->add_section( 'homepage_featured_post_section', array(
		'title'          => __( 'Homepage Featured Section', 'styled-mag' ),	
		'priority'       => 5,
		'panel'			 => 'homepage_panel',	
	) );
    
    $wp_customize->add_setting(
        'homepage_featured_posts_category',
        array(
            'sanitize_callback' => 'styledmag_sanitize_dropdown_general',
            )
    );
    
    $wp_customize->add_control( new Styledmag_category_Dropdown( $wp_customize, 'homepage_featured_posts_category',
        array(
            'label' => __('Choose Category', 'styled-mag'),
            'section' => 'homepage_featured_post_section',
            'description' => __(' Select Category to show posts posted in home page feature section','styled-mag'),
            'type' => 'select',
            'priority' => 1,
        )
    ) );    
    
     //Home Latest news section
    $wp_customize->add_section( 'homepage_latest_news_section', array(
		'title'          => __( 'Homepage Latest News Section', 'styled-mag' ),	
		'priority'       => 5,
		'panel'			 => 'homepage_panel',	
	) );
    
    
    // Video section title
	$wp_customize->add_setting( 'latest_news_section_title', array(
        'default' => esc_html__( 'LATEST NEWS', 'styled-mag' ),
		'sanitize_callback' => 'styledmag_sanitize_text',
	) );

	$wp_customize->add_control( 'latest_news_section_title', array(
		'label'    => __( 'Latest News Section title', 'styled-mag' ),
		'section'  => 'homepage_latest_news_section',
		'type'     => 'text',
		'priority' => 2,
	) );
    

     //Home Author section
    $wp_customize->add_section( 'homepage_author_section', array(
		'title'          => __( 'Homepage Author Section', 'styled-mag' ),	
		'priority'       => 5,
		'panel'			 => 'homepage_panel',	
	) );
    
    // Video section title
	$wp_customize->add_setting( 'author_section_title', array(
        'default' => esc_html__( 'WHO IS BEHIND ARTICLES', 'styled-mag' ),
		'sanitize_callback' => 'styledmag_sanitize_text',
	) );

	$wp_customize->add_control( 'author_section_title', array(
		'label'    => __( 'Author Section title', 'styled-mag' ),
		'section'  => 'homepage_author_section',
		'type'     => 'text',
		'priority' => 2,
	) );   
    


}

add_action('customize_register','styledmag_customize_homepage_panel');