<?php
/**
 * Template name: Page Right Sidebar
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package styledmag-pro
 * @since 1.0.0
 */

get_header(); ?>

<section id="sm-content-area" class="sm-contents" role="main">
    <div class="container">
        <div class="row">    
			<div class="col-sm-8 sm-content-inside">
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
            <div class="col-md-4 right_sidebar">
                <aside id="sm-right" role="complementary">
                    <?php get_sidebar( 'right' ); ?>
                </aside>
            </div>
            
    	</div><!-- #main -->
	</div><!-- #primary -->
</section>

<?php get_sidebar( 'inset-bottom' ); ?>
<?php get_sidebar( 'content-bottom' ); ?>


<?php
get_footer();