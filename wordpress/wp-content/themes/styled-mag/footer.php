<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package styledmag
 * @since 1.0.3
 */
?>
<?php get_sidebar( 'bottom' ); ?>


<div class="styledmag_footer">
	<div class="container-fluid">
		<div class="row">
            <div class="col-sm-12">
                <?php 
                    if ( has_nav_menu( 'footer' ) ) :
                        wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer') );
                    endif;
                ?>
            </div>
            <div class="col-sm-12">
                <div class="copyright">
                <p>
                    <?php if ( get_theme_mod( 'copyright' ) ):
                        $copyright_text = get_theme_mod( 'copyright' );
                        echo wp_kses( $copyright_text, array(
                            'p' => array(),
                            'a' => array(
                                    'href' => array(),
                                    'class' => array()
                                )
                        ) );
                    else :
                        printf( __( 'Styled Mag WordPress Themes By %1$s', 'styled-mag' ), '<a href="' .esc_url( 'https://styledthemes.com/' ). '">Styled Themes</a>' );
                    endif; ?>
                </p>
                </div>
            </div>

<?php wp_footer(); ?>
</body>
</html>