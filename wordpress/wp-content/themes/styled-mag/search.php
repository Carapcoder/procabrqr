<?php
/**
 * The template for displaying Search Results pages.
 * @package styledmag-pro
 * @since 1.0.0
 */

get_header(); ?>

<section id="sm-content-area" role="main">
	<div class="container">
  		<div class="row">
    		<div class="col-md-12">
 
                <header class="page-header">
					<h2 class="page-title">
						<?php printf( __( 'Search Results for: %s', 'styled-mag' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				</header><!-- .page-header -->
			</div>
		</div>
        <div class="row">
        	<div class="col-md-12">
            	<div id="sm-content" role="main">  
                    <?php $search_query = get_search_query();
                            if(!empty($search_query)){   
                     ?>  
					<?php if ( have_posts() ) : ?>
                        <?php /* Start the Loop */ ?>
                        <?php while ( have_posts() ) : the_post(); ?>
            
                            <?php get_template_part( 'content', 'search' ); ?>
            				<hr/>
                        <?php endwhile; ?>
            
                        <?php styledmag_paging_nav(); ?>
            
                    <?php else : ?>
            
                        <?php get_template_part( 'content', 'none' ); ?>
            
                    <?php endif; 
                    } else{
                        get_template_part( 'content', 'none' );
                    }
                    ?>
				</div>
             </div>
          </div>
	
   </div>
</section>	


<?php get_footer();