<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 * @package styled_mag
 * @since 1.0.1
 */

/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @return void
 */
if ( ! function_exists( 'styledmag_paging_nav' ) ) :

function styledmag_paging_nav($pages = '', $range = 2 ) {  ?>
    <div class='page_pagination'>
        <?php 
            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'styled-mag' ),
                'next_text'          => __( 'Next page', 'styled-mag' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'styled-mag' ) . ' </span>',
            ) );
        ?>     
    </div>
<?php }
endif;

if ( ! function_exists( 'styledmag_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
function styledmag_comment( $comment, $args, $depth ) {

    if ( 'pingback' == $comment->comment_type || 'trackback' == $comment->comment_type ) : ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
        <div class="comment-body">
            <?php _e( 'Pingback:', 'styled-mag' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( 'Edit', 'styled-mag' ), '<span class="edit-link">', '</span>' ); ?>
        </div>
    </li>
    <?php else : ?>

    <li id="comment-<?php comment_ID(); ?>" <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>>
        <article id="div-comment-<?php comment_ID(); ?>" class="comment-wrapper">
            <div class="comment-avatar">
                <?php if ( 0 != $args['avatar_size'] ) { echo get_avatar( $comment, $args['avatar_size'] = '58' ); } ?>
            </div>
            <div class="comment-body">
                <div class="comment-author vcard">          
                    <?php printf( ('%s'), sprintf( '<cite class="fn">%s</cite> |', get_comment_author_link() ) ); ?>
                    <!-- .comment-author -->
                    <time datetime="<?php comment_time( 'c' ); ?>">
                        <?php printf( _x( '%1$s at %2$s', '1: date, 2: time', 'styled-mag' ), get_comment_date(), get_comment_time() ); ?>
                    </time> 
                    
                    <?php edit_comment_link( __( 'Edit', 'styled-mag' ), '<span class="edit-link">', '</span>' ); ?> |
                    
                    <?php
                        comment_reply_link( array_merge( $args, array(
                            'add_below' => 'div-comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'before'    => '<span class="reply">',
                            'after'     => '</span>',
                        ) ) );
                    ?> 
            
                    <?php if ( '0' == $comment->comment_approved ) : ?>
                        <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'styled-mag' ); ?></p>
                    <?php endif; ?>
                </div><!-- .comment author -->
    
                <div class="comment-content">
                    <?php comment_text(); ?>
                </div><!-- .comment-content -->
            </div>
        </article><!-- .comment-body -->
    </li>
    <?php
    endif;
}
endif; // ends check for styledmag_comment()

if ( ! function_exists( 'styledmag_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function styledmag_posted_on() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    if ( get_the_time( 'U' ) ) ;

    $time_string = sprintf( $time_string,
        get_the_date( 'c' ),
        get_the_date()
    );

    printf( __( '<span class="byline">  %1$s</span><span class="posted-on"> %2$s</span>', 'styled-mag' ),
        
        sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" rel="author"> %2$s</a></span>',
            esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
            esc_html( get_the_author() )
        ),
		sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
            esc_url( get_permalink() ),
            $time_string
        )
    );
}
endif;


/**
 * Return the post URL.
 *
 * @uses get_url_in_content() to get the URL in the post meta (if it exists) or
 * the first link found in the post content.
 *
 * Falls back to the post permalink if no URL is found in the post.
 *
 */
function styledmag_get_link_url() {
    $content = get_the_content();
    $has_url = get_url_in_content( $content );

    return ( $has_url ) ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}


/**
 * Returns true if a blog has more than 1 category.
 */
function styledmag_categorized_blog() {
    if ( false === ( $all_the_cool_cats = get_transient( 'all_the_cool_cats' ) ) ) {
        // Create an array of all the categories that are attached to posts.
        $all_the_cool_cats = get_categories( array(
            'hide_empty' => 1,
        ) );

        // Count the number of categories that are attached to the posts.
        $all_the_cool_cats = count( $all_the_cool_cats );

        set_transient( 'all_the_cool_cats', $all_the_cool_cats );
    }

    if ( '1' != $all_the_cool_cats ) {
        // This blog has more than 1 category so styledmag_categorized_blog should return true.
        return true;
    } else {
        // This blog has only 1 category so styledmag_categorized_blog should return false.
        return false;
    }
}

/**
 * Flush out the transients used in styledmag_categorized_blog.
 */
function styledmag_category_transient_flusher() {
    // Like, beat it. Dig?
    delete_transient( 'all_the_cool_cats' );
}
add_action( 'edit_category', 'styledmag_category_transient_flusher' );
add_action( 'save_post',     'styledmag_category_transient_flusher' );

function styledmag_pagination($max_posts = null) {
    global $wp_query;
        
    $big = 999999999; // need an unlikely integer
    echo '<div class="sm-pagination">';
    
    echo paginate_links( array(
        'base'                  => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'                => '?p=%#%',
        'current'               => max( 1, get_query_var('paged') ),
        'total'                 => $max_posts,
        'prev_text'             => __('«', 'styled-mag'),
        'next_text'             => __('»', 'styled-mag'),
        'type'                  => 'list',
    ) );

    echo '</div>';
};


function styledmag_related_posts( )
{
    //for use in the loop, list 5 post titles related to first tag on current post
    $tags = wp_get_post_categories(get_queried_object_id());
    if ($tags) {
        $first_tag = $tags[0];
        $args=array(
        'category__in' => array($first_tag),
        'post__not_in' => array(get_queried_object_id()),
        'posts_per_page'=>2
        );

        $my_query = new WP_Query($args); ?>
        <div class="section-title section-title-sm">
            <h2><?php _e('Related posts','styled-mag'); ?></h2>
        </div>
        <div class="row related-posts">
            <?php 
            if( $my_query->have_posts() ) {
            while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="col-sm-6">
                <div class="realated-post-slot">
                <a class="title-3" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                <div class="categories">
                <?php 
                    $categories = get_the_category();
                    $separator = ' ';
                    $output = '';
                    if ( ! empty( $categories ) ) {
                    foreach( $categories as $category ) {
                        $cat_data = get_option('category_'.$category->term_id); ?>
                        <a href="<?php echo esc_url( get_category_link($category->term_id ) ); ?>" style="background-color:<?php echo esc_html( $cat_data['catBG'] ); ?>" >
                            <?php  echo esc_html( $category->name ) ; ?>
                        </a>
                    <?php  } } ?>
                </div>
                <time><?php echo get_the_time('M d, Y'); ?></time>
                </div>     
            </div>
            <?php
            endwhile; 
            }?>
        </div>
        <?php 
        wp_reset_postdata();
    }
}
