<?php
/**
 * Post Format Link
 * @package styledmag
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
          <h1 class="entry-title"><?php the_title(); ?>
          <?php if( get_theme_mod( 'hide_title_dotline' ) == '') { ?>          
          <span class="sm-divider-dotline" style="border-color:<?php echo esc_attr( get_theme_mod( 'hdg_line', '#e2e5e7' ) ); ?>;"><span class="sm-dot" style="background-color:<?php echo esc_attr( get_theme_mod( 'hdg_dot', '#e2e5e7' ) ); ?>;"></span></span><?php } ?>
          
          </h1>
        </header><!-- .entry-header -->
    <div class="entry-content clearfix link_post_format">
       <?php the_content( __( 'Continue reading...', 'styled-mag' ) ); ?>
       <?php 
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'styled-mag' ),
                'after'  => '</div>',
            ) );
        ?>
    </div>
</article><!-- #post-## -->