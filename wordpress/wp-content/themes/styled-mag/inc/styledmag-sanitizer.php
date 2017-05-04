<?php
/**
 * adds sanitization callback function : colors
 * @package styledmag 
*/
	function styledmag_sanitize_hex_color( $hex_color, $setting ) {
        
        // Sanitize $input as a hex value without the hash prefix.
        $hex_color = sanitize_hex_color( $hex_color );

        // If $input is a valid hex value, return it; otherwise, return the default.
        return ( null != ( $hex_color ) ? $hex_color : $setting->default );
    }   

/**
 * adds sanitization callback function : text
 * @package styled_mag 
*/
function styledmag_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}

/**
 * adds sanitization callback function : url
 * @package styled_mag 
*/
	function styledmag_sanitize_url( $value) {
		$value = esc_url_raw( $value);
		return $value;
	}

/**
 * adds sanitization callback function : checkbox
 * @package styled_mag 
*/
function styledmag_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
        return 1;
    } else {
        return '';
    }
}	



/**
 * adds sanitization callback function for the page width : radio
 * @package styled_mag 
*/
function styledmag_sanitize_pagewidth( $input ) {
    $valid = array(
        'default' => __( 'Full Width', 'styled-mag' ),
        'boxedmedium' => __( 'Boxed Medium 1070px', 'styled-mag' ),
		'boxedsmall' => __( 'Boxed Small 970px', 'styled-mag' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
/**
 * adds sanitization callback function for the featured image : radio
 * @package styled_mag 
*/
function styledmag_sanitize_featured_image( $input ) {
    $valid = array(
		'big' => __( 'Wide Featured Image', 'styled-mag' ),
		'small' => __( 'Small Featured Image', 'styled-mag' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the excerpt : radio
 * @package styled_mag 
*/
function styledmag_sanitize_excerpt( $input ) {
    $valid = array(
		'content' => __( 'Content', 'styled-mag' ),
        'excerpt' => __( 'Excerpt', 'styled-mag' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

/**
 * adds sanitization callback function for the layout : radio
 * @package styled_mag 
*/
function styledmag_sanitize_blogstyle( $input ) {
    $valid = array(
		'blogright' => __( 'Blog with Right Sidebar', 'styled-mag' ),
		'blogleft' => __( 'Blog with Left Sidebar', 'styled-mag' ),
		'blogleftright' => __( 'Blog with Left &amp; Right Sidebar', 'styled-mag' ),
		'blogwide' => __( 'Blog with Full Width &amp; no Sidebars', 'styled-mag' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}


/**
 * adds sanitization callback function for numeric data : number
 * @package styled_mag 
*/

function styledmag_sanitize_number( $value ) {
    $value = (int) $value; // Force the value into integer type.
    return ( 0 < $value ) ? $value : null;
}


/**
 * adds sanitization callback function for uploading : uploader
 * @package styled_mag * Special thanks to: https://github.com/chrisakelley
 */
add_filter( 'styledmag_sanitize_image', 'styledmag_sanitize_upload' );
add_filter( 'styledmag_sanitize_file', 'styledmag_sanitize_upload' );
function styledmag_sanitize_upload( $input ) {
        
        $output = '';
        $filetype = wp_check_filetype($input);
        
        if ( $filetype["ext"] ) {
                $output = $input;
        }
        
        return $output;
}

//General dropdown sanitize for integer value
function styledmag_sanitize_dropdown_general( $input ) {
    return absint( $input );
}