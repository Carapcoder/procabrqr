<?php
/**
 *Template Name: Page Full Width
 *
 * Description: A page template without the left or right columns
 * @package styledmag-pro
 * @since 1.0.0
 */

get_header(); ?>

<section id="sm-content-area" class="sm-contents" role="main">
    <div class="container">
        <div class="row"> 
        	<div class="col-md-12">   
        <?php
            while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', 'page' ); ?>
            <?php endwhile; // end of the loop. ?>
            </div>
</div>
</div>
</section>

<?php get_sidebar( 'inset-bottom' ); ?>
<?php get_sidebar( 'content-bottom' ); ?>


<?php
get_footer(); ?>