<?php
/**
 * Styled Mag Custom Widgets
 *
 * @package Styled Mag Pro
 */
 
 /**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function styledmag_widgets_init() {
	
    register_sidebar( array(
		'name'          => __( 'Home right sidebar', 'styled-mag' ),
		'id'            => 'home_right_1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="section-title section-title-sm"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );
    
    register_sidebar( array(
		'name' => __( 'Page Right Sidebar', 'styled-mag' ),
		'id' => 'pageright',
		'description' => __( 'This is the right sidebar column that appears on pages, but not part of the blog', 'styled-mag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title'  => '<div class="section-title section-title-sm"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Page Left Sidebar', 'styled-mag' ),
		'id' => 'pageleft',
		'description' => __( 'This is the left sidebar column that appears on pages, but not part of the blog', 'styled-mag' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="section-title section-title-sm"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );
    
    register_sidebar( array(
    'name' => __( 'Blog/Archive Right Sidebar', 'styled-mag' ),
		'id' => 'blogright',
		'description' => __( 'This is the right sidebar column that appears on the blog and archive page', 'styled-mag' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="section-title section-title-sm"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );
	register_sidebar( array(
		'name' => __( 'Blog/Archive Left Sidebar', 'styled-mag' ),
		'id' => 'blogleft',
		'description' => __( 'This is the left sidebar column that appears on the blog and archive page', 'styled-mag' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="section-title section-title-sm"><h2 class="widget-title">',
		'after_title'   => '</h2></div>',
	) );
    
    	register_sidebar( array(
		'name' => __( 'Bottom 1', 'styled-mag' ),
		'id' => 'bottom1',
		'description' => __( 'This is the first bottom widget position located in a coloured background area just above the footer.', 'styled-mag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 2', 'styled-mag' ),
		'id' => 'bottom2',
		'description' => __( 'This is the second bottom widget position located in a coloured background area just above the footer.', 'styled-mag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 3', 'styled-mag' ),
		'id' => 'bottom3',
		'description' => __( 'This is the third bottom widget position located in a coloured background area just above the footer.', 'styled-mag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );	
	register_sidebar( array(
		'name' => __( 'Bottom 4', 'styled-mag' ),
		'id' => 'bottom4',
		'description' => __( 'This is the fourth bottom widget position located in a coloured background area just above the footer.', 'styled-mag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );
    
    register_sidebar( array(
		'name' => __( 'advertise home page', 'styled-mag' ),
		'id' => 'home_advertise',
		'description' => __( 'Home Page Advertise Section', 'styled-mag' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3><span class="dotbox"></span>',
		'after_title' => '</h3><div class="dotlinebox"><span class="dot"></span></div>',
	) );
    
    
 }
 add_action( 'widgets_init', 'styledmag_widgets_init' );
 
 

/**
 * Include helper functions that display widget fields in the dashboard
 *
 * @since Styledmag Widget Pack 1.0
 */
require get_template_directory() . '/inc/widgets/widget-fields.php';
 
 
 
 
// Styled mag extra widgets
/**
 * Include helper functions that display widget fields in the dashboard
 *
 * @since Styledmag pro Widget Pack 1.0
 */

 require get_template_directory() . '/inc/widgets/category_widget.php';
 
 // lets setup the inset top group 
function styledmag_topgroup() {
	$count = 0;
	if ( is_active_sidebar( 'top1' ) )
		$count++;
	if ( is_active_sidebar( 'top2' ) )
		$count++;
	if ( is_active_sidebar( 'top3' ) )
		$count++;		
	if ( is_active_sidebar( 'top4' ) )
		$count++;
	$class = '';
	switch ( $count ) {
		case '1':
			$class = 'col-md-12';
			break;
		case '2':
			$class = 'col-md-6';
			break;
		case '3':
			$class = 'col-md-4';
			break;
		case '4':
			$class = 'col-md-3';
			break;
	}
	if ( $class )
		echo $class;
}