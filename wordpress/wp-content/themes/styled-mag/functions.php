<?php
/**
 * styledmag-pro functions and definitions.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * @package styledmag
 * @since 1.0.0
 */

/**
 * Sets up the content width value based on the theme's design.
 * @see styledmag_content_width() for template-specific adjustments.
 */
 if ( ! isset( $content_width ) )
    $content_width = 793;
    
if ( ! function_exists( 'styledmag_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 */
function styledmag_setup() {
    /*
     * Makes styledmag-pro available for translation.
     *
     * Translations can be added to the /languages/ directory.
     * If you're building a theme based on styledmag-pro, use a find and
     * replace to change 'styled-mag' to the name of your theme in all
     * template files.
     */
    load_theme_textdomain( 'styled-mag', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );

    /*
     * Enable support for custom logo.
     * @see https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
        'width'       => 223,
        'height'      => 69,
        'flex-width' => true,
        'flex-height' => true
    ) );
    /**
     * This feature enables post-thumbnail support for a theme.
     * @see http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'automatic-feed-links' );

    // to support woocommerce plugin
    add_theme_support( 'woocommerce' );  



    /**
     * This feature enables custom-menus support for a theme.
     * @see http://codex.wordpress.org/Function_Reference/register_nav_menus
     */
    register_nav_menus( array(
        'primary'     => __( 'Primary menu', 'styled-mag' ),
        'footer'      => __( 'Footer menu', 'styled-mag' ),
    ) );

    /*
     * Switches default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list',
    ) );

    /*
     * Enable support for Post Formats.
     * See http://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio',
    ) );

    /**
     * Setup the WordPress core custom background feature.
     */
    add_theme_support( 'custom-background', apply_filters( 'styledmag_custom_background_args', array(
        'default-color' => '444444',
        'default-image' => '',
    ) ) );  
    
    add_image_size( 'styled-mag-555x555', 555, 555, true );     
    add_image_size ( 'styled-mag-263x263', 263, 263, true ); 
    add_image_size ( 'styled-mag-300x300', 300, 300, true ); 
    add_image_size( 'styled-mag-360x360', 360, 360, true );
    add_image_size( 'styled-mag-460x507', 460, 507, true  );


    }
endif; // styledmag_setup
add_action( 'after_setup_theme', 'styledmag_setup' );

/**
 * Adjusts content_width value for full-width and attachment templates.
 *
 * @return void
 */
    function styledmag_content_width() {

        if ( is_page_template( 'page-full-width.php' ) || is_attachment() )
            $GLOBALS['content_width'] = 1140;
    }
    add_action( 'template_redirect', 'styledmag_content_width' );


/**
 * Adds customizable styles to your <head>
 */
    function styledmag_theme_customize_css()
    {
        require get_template_directory() . '/inc/customizecss.php';
    }
    add_action( 'wp_head', 'styledmag_theme_customize_css');

    function styledmag_fonts_url() {

        $fonts_url = '';
        /**
         * Translators: If there are characters in your language that are not
         * supported by open sans, translate this to 'off'. Do not translate
         * into your own language.
         */
        $open_sans = _x( 'on', 'Open Sans: on or off', 'styled-mag' );
        $oswald = _x( 'on', 'Oswald: on or off', 'styled-mag' );
        $lato = _x( 'on', 'Lato: on or off', 'styled-mag' );
        $font_families = array();

        if ( 'off' !== $oswald ) {
            $font_families[] = 'Open+Sans:400,700,600';
        }

        if ( 'off' !== $open_sans ) {
            $font_families[] = 'Oswald:400,700,300';
        }

        if ( 'off' !== $lato ) {
            $font_families[] = 'Lato:400,700,900';
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );

        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
       

        return esc_url_raw( $fonts_url );
    }
    
    /**
    * Enque styles and scripts to frontend of styled themes
    */
    
    function styledmag_scripts() {
        
        // Add custom fonts, used in the main stylesheet.
        wp_enqueue_style( 'styled-mag-fonts', styledmag_fonts_url(), array(), null );
        wp_enqueue_style( 'styledmag-bootstrap-style', get_template_directory_uri() . '/library/bootstrap/css/bootstrap.min.css', array(), '3.3.6');
        wp_enqueue_style( 'styledmag-bxslider-style', get_template_directory_uri() . '/library/bxslider/css/jquery.bxslider.min.css', array(), '4.2.5', true );
        wp_enqueue_style( 'sm-core', get_template_directory_uri() . '/library/smart-menu/sm-core-css.css', array(), '4.3.3');
        wp_enqueue_style( 'sm-blue', get_template_directory_uri() . '/library/smart-menu/sm-blue.css', array(), '4.3.3');
        
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/library/font-awesome/font-awesome.min.css', array(), '4.5.0');
        wp_enqueue_style( 'styledmag-style', get_stylesheet_uri() );
        
        /*bxslider*/
        wp_enqueue_script('jquery-bxslider', get_template_directory_uri() . '/library/bxslider/js/jquery.bxslider.min.js', array('jquery'), '4.1.2');
        wp_enqueue_script('jquery-smartmenus', get_template_directory_uri() . '/library/smart-menu/jquery.smartmenus.js', array('jquery'), '1.0.0');
        
        wp_enqueue_script('styledmag-jquery', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0');
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/library/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.6');
        
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
                
    }
    add_action( 'wp_enqueue_scripts', 'styledmag_scripts' );

/* Enqueue Admin Scripts */

if ( ! function_exists( 'styledmag_enqueue_admin_scripts' ) ) {

    function styledmag_enqueue_admin_scripts() {
       $get_current_screen = get_current_screen();
       if( $get_current_screen->base == 'widgets' ) {
            wp_enqueue_script( 'styledmag-admin-media', get_template_directory_uri() . '/library/js/media-uploader.js', array('jquery'));
        }
    }
}
add_action( 'admin_enqueue_scripts', 'styledmag_enqueue_admin_scripts' );


/**
 * Extends the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a featured image.
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function styledmag_post_classes( $classes ) {
    if ( ! post_password_required() && has_post_thumbnail() )
        $classes[] = 'has-featured-image';

    return $classes;
}
add_filter( 'post_class', 'styledmag_post_classes' );



/** 
 * Implement category deopdown in customizer
 */
    require get_template_directory() .'/inc/custom-resources/category-dropdown.php';

/**
 * Add some extras to the theme.
 */
    require get_template_directory() . '/inc/extras.php';
    
/**
 * Custom template tags for this theme.
 */
    require get_template_directory() . '/inc/template-tags.php';

/** Theme Customizer. */
    require get_template_directory() . '/inc/customizer.php';
    
/** Extra buttons in customizer **/
    require get_template_directory() . '/inc/styledmag-customizer.php';
    
/** Styled mag sanitizer **/
    require get_template_directory() . '/inc/styledmag-sanitizer.php';   
    
/**
 * Load theme widgets.
 */
    require get_template_directory() . '/inc/styledmag-widgets.php';


/*
============================================================
@ FRAMEWORK DEFINE
============================================================
*/

require get_template_directory() . '/styledmag-template/init.php';

/** Default menu **/

function styledmag_modify_nav_menu_args( $args )
{
   if( 'primary' == $args['theme_location'] )
   {
       $args['show_home'] = true;
       $args['depth'] = 1;
       $args['menu_class']  = 'sm sm-blue';
       $args['container'] = 'ul';
   }
   
   return $args;
}
add_filter( 'wp_page_menu_args', 'styledmag_modify_nav_menu_args' );

if ( ! function_exists( 'styledstore_the_custom_logo' ) ) :

/**
 * Displays the optional custom logo.
 * Does nothing if the custom logo is not available.
 * @since styledmag
 */

function styledmag_the_custom_logo() {
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    }
}
endif;