<?php
/**
 * Full post content
 * @package styledmag
 * @since 1.0.1
 */
 //wpb_set_post_views(get_the_ID());
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>   
    <header class="entry-header">
		<h1 class="entry-title">
		<?php the_title(); ?>
        </h1>		
	</header><!-- .entry-header -->
    <div class="categories">
        <?php $categories = get_the_category();
        $separator = ' ';
        $output = '';
        if ( ! empty( $categories ) ) {
            foreach( $categories as $category ) { ?>
            <?php $cat_data = get_option('category_'.$category->term_id); ?>
            <a href="<?php echo get_category_link($category->term_id); ?>" style="background-color:<?php echo esc_attr( $cat_data['catBG'] ); ?>" >
                <?php  echo esc_html( $category->name ) ; ?>
            </a>
            <?php  }  
        } ?>
    </div>
    <div class="entry-meta">
        <?php styledmag_posted_on(); 
            if (get_theme_mod('hide_edit') == '') {
                edit_post_link( __( 'Edit', 'styled-mag' ), '<span class="edit-link">', '</span>' ); 
            }
            ?>
    </div><!-- .entry-meta -->
    <div class="entry-content clearfix">
		<?php
        $styledmag_post_format =  get_post_format();
        if ( has_post_thumbnail()) :
            $featuredimage = get_theme_mod( 'featured_image', 'big' );
                switch ($featuredimage) {
                    case "big" :
                    echo '<div class="post-thumbnail clearfix">';
                        the_post_thumbnail('styled-mag-460x507');
                    echo '</div>';
                break;
                    case "small" : 
                    echo '<div class="post-thumbnail alignleft clearfix">';
                        the_post_thumbnail('tyled-mag-460x507');
                    echo '</div>';
                break;
            } 		
        endif;
        the_content(); ?>
        <?php 
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'styled-mag' ),
                'after'  => '</div>',
            ) );
        ?>
	</div><!-- .entry-content -->
	<div class="author-section">
        <div class="media">
            <div class="media-left">
                <a href="#">
                <?php 
            	$args = array(
                    // get_avatar_data() args.
                    'class'         => 'media-object',
                );
            	 ?>
                  <?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?>
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading author-display-name"><?php echo esc_html( get_the_author_meta( 'display_name' , get_the_author_meta( 'ID' ) ) ); ?></h4>
                <div class="author_descriptions"><?php echo esc_html( get_the_author_meta( 'description' , get_the_author_meta( 'ID' ) ) ); ?> </div>
            </div>
        </div>
    </div>
    
    <?php styledmag_related_posts() ?>
	<footer class="entry-meta">	
    <?php 
    if( get_theme_mod( 'hide_postinfo' ) == '') { ?>	
            <div class="footer_meta_top_line">
			<?php the_tags(__('<span class="meta-tagged"><i class="fa fa-tags"></i>&nbsp;<span class="entry-meta-value">', 'styled-mag') . '',',' , '</span></span>'); ?> 
			<?php printf(__('<span class="meta-posted"><i class="fa fa-folder"></i>&nbsp;<span class="entry-meta-value"> %s', 'styled-mag'), get_the_category_list(', ')); ?></span></span> 
            <?php printf( __( '<span class="meta-author"><i class="fa fa-user"></i>&nbsp; %s', 'styled-mag' ), '<span class="vcard entry-meta-value"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span></span>' ); ?> 
            <span class="meta-date"><?php _e('<i class="fa fa-calendar-o"></i>&nbsp; ', 'styled-mag');?> <span class="entry-meta-value"><?php the_time(get_option('date_format')); ?></span></span>    
            </div>
            <?php } ?>
            
    </footer><!-- .entry-meta -->
    
    
</article><!-- #post-## -->