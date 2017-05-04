<?php
/**
 * The template for displaying Archive, tag, and category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * @package styledmag
 * @since 1.0.0
 */

get_header(); ?>

<section id="sm-content-area" class="sm-content" role="main"> 
 <?php 
 
 
    $styledmag_blogstyle = get_theme_mod( 'blog_style', 'blogright' );
	switch ($styledmag_blogstyle) {
		// Right Column
		case "blogright" :
			echo '<div class="container"><div class="row"><div class="col-sm-8">
			<div class="section-title">
                    '. get_the_archive_title() . '
                </div>
			<div id="sm-content" role="main">';
			// get all the posts
				if ( have_posts() ) : while ( have_posts() ) : the_post();				
					// get the article layout
					get_template_part( 'content', get_post_format() );					
				endwhile;
					// get the pagination
					styledmag_paging_nav();
				else :
					// if no posts
					get_template_part( 'content', 'none' );					
				endif; 
			?>
            </div>
            </div>
                <div class="col-sm-4 right_sidebar"><aside id="sm-right" role="complementary">
        			<?php
          	         get_sidebar( 'right' );
        			 echo '</aside></div></div></div>';
        		      break;		
        		
        		
        		// Left Column
        		case "blogleft" :
        			echo '<div class="container"><div class="row"><div class="col-md-4 left_sidebar"><aside id="sm-left" role="complementary">';
        				get_sidebar( 'left' );
        			echo '</aside></div>';										
        			?>
                    <div class="col-md-8">
                        <div class="section-title">
                            <?php the_archive_title(); ?>
                        </div>
                        <div id="sm-content" role="main">
                        <?php 
            				if ( have_posts() ) : while ( have_posts() ) : the_post();
            					get_template_part( 'content', get_post_format() );
            				endwhile;
            					styledmag_paging_nav();
            				else :
            					get_template_part( 'content', 'none' );
            				endif;				
            			?>
                        </div>
                    </div>
                </div>
           </div>
            <?php 
		break;		
		
		
		// Left and Right Column
		case "blogleftright" :
			echo '<div class="container"><div class="row"><div class="col-md-4 left_sidebar"><aside id="sm-left" role="complementary">';
				get_sidebar( 'left' );
			echo '</aside></div>';
            ?>										
			<div class="col-md-4">
                <div class="section-title">
                    <?php the_archive_title(); ?>
                </div>
            <div id="sm-content" role="main">
            <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					styledmag_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;				
			echo '</div></div><div class="col-md-4 right_sidebar"><aside id="sm-right" role="complementary">';
				get_sidebar( 'right' );
			echo '</aside></div></div></div>';	
		break;			
	
		
		// Wide Column
		case "blogwide" :
			?>									
			<div class="container"><div class="row"><div class="col-md-12">
                <div class="section-title">
                    <?php the_archive_title(); ?>
                </div>
            <div id="sm-content" role="main">
            <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
				endwhile;
					styledmag_paging_nav();
				else :
					get_template_part( 'content', 'none' );
				endif;				
			
			echo '</div></div></div></div>';	
		break;	
			
	}
?>   
    
</section><!-- #primary -->
<?php get_sidebar( 'content-bottom' ); ?>

<?php get_footer();