<?php
/**
 * Post Format Aside
 * @package styledmag
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="row" style="margin:0px; padding:0px;">

	<?php if ( has_post_thumbnail()) : ?>
        <div class="col-md-3" style="margin:0px; padding:0px;">  
           <div class="post-thumbnail">
               <?php the_post_thumbnail(); ?>
           </div>      
        </div>
        <div class="col-md-9" style="margin:0px; padding:0px;">
    <?php else : ?>
        <div class="col-md-12" style="margin:0px; padding:0px;">
    <?php endif; ?>
    
	<?php if ( is_single() ) : 
		the_title( '<header class="entry-header"><h1 class="entry-title">', '</h1></header>' ); 
		endif;	?>
    <div class="entry-content-link">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'styled-mag' ) ); ?>
        <?php 
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'styled-mag' ),
                'after'  => '</div>',
            ) );
        ?>
	</div>

        
    <footer class="entry-meta">
        <span class="post-format">
        <span class="icon-forward post-format-icon"></span><a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'aside' ) ); ?>"><?php echo get_post_format_string( 'aside' ); ?></a>
        </span>
    	<?php styledmag_posted_on(); ?>
       
    	<?php edit_post_link( __( 'Edit', 'styled-mag' ), '<span class="edit-link">', '</span>' ); ?>
    </footer>       
    
  </div>
</div>
			
	
</article>

<div class="article-separator"></div>