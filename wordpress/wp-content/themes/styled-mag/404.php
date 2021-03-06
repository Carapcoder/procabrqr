<?php
/**
 * Description: 404 error page
 * @package styledmag
 * @since 1.0.0
 */

get_header(); ?>

<section id="sm-content-area"  class="sm-content" role="main">
    <div class="container">
        <div class="row">    
			<div class="col-md-12">
            
       		  <div class="entry-content error-content">
				
                	<header class="page-header">
                        <h1 class="heading1"><?php _e( 'Page Not Found', 'styled-mag' ); ?></h1>
                        <h2 class="heading2"><?php _e( 'Well this does not look good.<br />It appears this page is missing or was removed.', 'styled-mag' ); ?></h2>						
					</header>
			
					<p><?php _e( 'If what you were looking for is not found, you may want to try searching with keywords relevant to what you were looking for.', 'styled-mag' ); ?></p>
                 <div class="input-group-box">
                    <?php get_search_form(); ?>
                </div>
			    </div><!-- .page-content -->
                                
			</div>
    	</div><!-- #main -->
	</div><!-- #primary -->
</section>


<?php
get_footer();