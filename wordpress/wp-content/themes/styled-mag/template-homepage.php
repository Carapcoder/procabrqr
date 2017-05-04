<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package styledmag-pro
 * @since 1.0.0
 * Template name: Homepage
 */

get_header(); ?>
<?php //get_sidebar( 'inset-top' ); ?>
<section id="sm-content-area" class="sm-contents" role="main">
    <div class="container">
        
        <?php // top header part
            do_action ('styledmag_header_top_cat' );
            
            do_action ( 'styledmag_featured_post' );
         ?>

<!-- video section -->
    <div class="row video-section">
        <div class="col-sm-8 latest-news-video">
            <?php
                // Latest news
                do_action ('styledmag_homepage_latest_news_posts' );   
             ?>
             <?php get_sidebar( 'advertise' ); ?>
        </div>
        <!-- homepage sidebar -->
        <div class="col-sm-4">
            <aside id="sm-right" role="complementary">
                <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
               	    <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
              		    <?php dynamic_sidebar( 'home_right_1' ); ?>
                	</div><!-- #primary-sidebar -->
                 <?php endif; ?>
            </aside>    
        </div>
    </div>
    
    <?php
    // Author section 
        do_action ('styledmag_homepage_author' ); 
    ?>
    
</div>
<!-- #primary --> 
</section>
<?php get_sidebar( 'inset-bottom' ); ?>
<?php get_sidebar( 'content-bottom' ); ?>
<?php
get_footer();