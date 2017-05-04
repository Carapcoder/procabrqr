<?php
/**
 * The Header for our theme
 * @package styledmag
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php
    /*
    =================================================
    Move to Top Display
    =================================================
    */

    do_action ('styledmag_move_to_top', 'styled-mag'); 

    /*
    =================================================
    Styled mag Wrapper Choose
    =================================================
    */
    
    do_action('styledmag_wrapper_choose','styled-mag');
    
    /*
    =================================================
    Styled mag Top Bar Display Option
    =================================================
    */
    
    do_action('styledmag_top_bar','styled-mag');
    
    /*
    ====================================================
    Fr social Icons on Top Along with SHort Description
    ====================================================
    */

    do_action('styledmag_social_icons_top', 'styled-mag');

    /*
    =======================================================
    Fr Header Display with logo and Menu and Search Icons
    =======================================================
    */
    
    do_action('styledmag_header','styled-mag');  
?>