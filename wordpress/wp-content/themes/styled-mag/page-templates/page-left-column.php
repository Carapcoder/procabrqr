<?php
/**
 *Template Name: Page Left Sidebar
 *
 * Description: A page template with a left column
 * @package styledmag-pro
 * @since 1.0.0
 */

get_header(); ?>

<section id="sm-content-area" class="sm-contents" role="main">
    <div class="container">
        <div class="row">
        	
            <div class="col-md-4 left_sidebar">
                <aside id="sm-left" role="complementary">
                    <?php get_sidebar( 'left' ); ?>
                </aside>
            </div>
            
			<div class="col-md-8 sm-content-inside">
				<?php while ( have_posts() ) : the_post(); ?>
       
                    <?php get_template_part( 'content', 'page' ); ?>
        
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template
                        if ( comments_open() || '0' != get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
        
                <?php endwhile; // end of the loop. ?>
			</div>       
    	</div><!-- .row -->
	</div><!-- .container -->
</section>
<?php get_sidebar( 'inset-bottom' ); ?>
<?php get_sidebar( 'content-bottom' ); ?>


<?php get_footer(); ?>