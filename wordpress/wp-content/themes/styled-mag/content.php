<?php
/**
 * Main content 
 * @package styledmag
 * @since 1.0.1
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- .entry-header -->
<div class="entry-content clearfix">
	<?php if ( has_post_thumbnail()) :
        echo '<a href="'.esc_url( get_the_permalink() ).'" class="post-thumbnail sm-images-flip">';
        the_post_thumbnail('460x507');
        echo '</a>';
	endif; 
    ?>
    <header class="entry-header-">
    
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php if(the_title( '', '', false ) !='') the_title(); else _e('Untitled', 'styled-mag'); ?> </a>
            
        </h2>
        
	</header>
    <?php if ( 'post' == get_post_type() ) : ?>
        <div class="categories">
            <?php 
                $styledmag_categories = get_the_category();
                $styledmag_separator = ' ';
                $styledmag_output = '';
                if ( ! empty( $styledmag_categories ) ) {
                    foreach( $styledmag_categories as $category ) { ?>
                        <?php $cat_data = get_option('category_'.absint( $category->term_id ) ); ?>
                        <a href="<?php echo esc_url( get_category_link( $category->cat_ID ) ); ?>" >
                            <?php  echo esc_html( $category->name ) ; ?>
                        </a>
                        <?php  }
                } ?>
        </div>
            <div class="entry-meta">
                <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                    <span class="featured-post">
                        <?php _e( '<i class="fa fa-bolt"></i> Featured', 'styled-mag' ); ?>
                    </span>
                <?php endif; ?>	
		          <?php styledmag_posted_on(); ?>        
                    <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                        <?php 
                            echo '<span class="entry-comments">';
                            _e( '<i class="fa fa-comment"></i> ', 'styled-mag' );
                            comments_popup_link( __( 'Comment', 'styled-mag' ), __( '1 Comment', 'styled-mag' ), __( '% Comments', 'styled-mag' ) ); 
                        endif; ?> 
          
                    <?php if( get_theme_mod( 'hide_edit' ) == '') { ?>
                        <?php edit_post_link( __( 'Edit', 'styled-mag' ), '<span class="edit-link">', '</span>' ); ?>
                    <?php } ?> 
            </div><!-- .entry-meta -->
		<?php endif; ?>
 		<?php 
			echo '<p>' . get_the_excerpt() . '</p>' ;
		?>   
	</div><!-- .entry-content -->
    
</article><!-- #post-## -->