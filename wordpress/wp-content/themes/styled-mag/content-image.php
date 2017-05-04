<?php
/**
 * Post Format Image
 * @package styledmag
 * @since 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php edit_post_link( __( 'Edit', 'styled-mag' ), '<span class="edit-link">', '</span>' ); ?><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<div class="entry-content">
		<?php
			the_content( __( 'See More...', 'styled-mag' ) );

            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'styled-mag' ),
                'after'  => '</div>',
            ) );
		?>
		<footer class="entry-meta">
		<span class="post-format">
				<i class="fa fa-file-image-o"></i>&nbsp;<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'image' ) ); ?>"><?php echo esc_html( get_post_format_string( 'image' ) ); ?></a>
			</span>
                <?php styledmag_posted_on(); ?>
        </footer>
	</div><!-- .entry-content -->
</article><!-- #post-## -->