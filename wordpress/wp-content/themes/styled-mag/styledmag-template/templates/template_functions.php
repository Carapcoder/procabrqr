<?php
/*
=================================================
Move to Top Function
@Action: fr_move_to_top
=================================================
*/

function styledmag_move_to_top_fnc() {
	$move_to_top_check = get_theme_mod( 'movetotop','1' );
		if ($move_to_top_check == 1) { ?>
			<div class="styledmag_move_to_top"> 
				<i class="fa fa-arrow-up"></i>
			</div>  
		<?php }
}

/*
=================================================
Wrapper Chooser Function
@Action: sm_wrapper_choose
=================================================
*/
function styledmag_wrapper_choose_fnc() {
	$pagewidth = get_theme_mod( 'page_width', 'default' );
		switch ($pagewidth) {
            case "default" :
                echo '<div id="sm-wrapper" style="border-color:';
                echo esc_html( get_theme_mod( 'topborder', '#000000' ) ) . ';">';
            	break;
            case "boxedmedium" :
                echo '<div id="sm-wrapper-boxed-medium" style="border-color:';
                echo esc_html( get_theme_mod( 'topborder', '#000000' ) ). '; background-color:#fff;">';
        		break;
            case "boxedsmall" :
                echo '<div id="sm-wrapper-boxed-small" style="border-color:';
                echo esc_html( get_theme_mod( 'topborder', '#000000' ) ) . '; background-color:#fff;">';
        	break;
	}
}

/*
=================================================
Top Bar Setting (Date and ticker)
=================================================
*/
function styledmag_top_bar_fnc() {
    $hide_top_bar = get_theme_mod( 'show_styletop' );    
        if ($hide_top_bar != '' ) { ?>
        <div class="styledmag_top">
            	<div class="container">
                	<div class="row">
                        <!-- Date Part -->
                        <div  class="col-md-4 styled_date_header"> 
                            <?php echo date_i18n( 'l, F j, Y' ); ?>
                        </div>
                        <!-- end of date part -->
                        
                        <!-- latest news section ticker -->                       
                        <div class="col-md-8">
                            <div class="header-latest-posts bn-wrapper float-left">
                                <div class="bn-title">
                                    <?php echo esc_html( get_theme_mod('ticker_news_title','Breaking News') ); ?>
                                </div>
                                <ul class="bn">
                                    <?php
                                        $recent_args = array(
                                            'posts_per_page' => 5,
                                            'post_status' => 'publish',
                                            'order' => 'DESC',
                                        );
                                   
                                    $recent_posts = new WP_Query($recent_args);
                                     while($recent_posts->have_posts()){
                                        $recent_posts->the_post(); ?>
                                        <li class="bn-content">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </li>
                                     <?php }  ?>
                                </ul>
                            </div> 
                        </div>
                        <?php
                        wp_reset_postdata();
                         ?>
                        <!-- .header-latest-posts -->
                	</div>
            	</div>
            </div>
        <?php 
    } // End of checking hide top bar
}


/*
=================================================
Header Main Display Functions
=================================================
*/
function styledmag_header_fnc() {
    $header_type = 'class="styledmag_header header_one" style="background-color:'. esc_attr( get_theme_mod('header_bg','#000000') ).'"'; ?>
        <div <?php echo wp_kses_post( $header_type ); ?>><!--Header Starts Here-->
            <div class="container">
                <?php styledmag_logo_output(); ?>
                <?php  
                styledmag_menu_output('sm sm-blue');
                ?> 
            </div>
        </div>
<?php } 


function styledmag_logo_output() {
    ?>
    <div class="styledmag_logo"><!--Logo Starts Here -->
        <div id="sm-logo-group">
            <?php if( has_custom_logo() ) { ?>
                <div id="sm-logo">
                    <?php styledmag_the_custom_logo(); ?>
                </div>    
            <?php } else { ?> 
                <div id="sm-site-title-group">
                    <h1 id="sm-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" style="color: <?php echo esc_html( get_theme_mod( 'sitetitle' ) ); ?>;"><?php bloginfo('name'); ?></a></h1>
                    <h5 id="sm-site-tagline" style="color: <?php echo esc_html( get_theme_mod( 'tagline') ); ?>;"><?php bloginfo('description'); ?></h5>
                </div>
            <?php } ?>    
        </div>
    </div><!--End of Logo Here -->
    <?php
}


function styledmag_menu_output($output_variable) {
        $search_form_display = get_theme_mod('search_icon_hide');
        ?>
        <div class="styledmag_menus">
        <?php     
        $options = get_theme_mods();						
        echo '<div class="header-socials">';										
            if (!empty($options['facebook_uid'])) echo '<a href="' . esc_url( $options['facebook_uid'] ) . '"><span class="fa fa-facebook"></span></a>';
            if (!empty($options['twitter_uid'])) echo '<a href="' . esc_url( $options['twitter_uid'] ) . '"><span class="fa fa-twitter"></span></a>';
            if (!empty($options['linkedin_uid'])) echo '<a href="' . esc_url( $options['linkedin_uid'] ) . '"><span class="fa fa-linkedin"></span></a>';
            if (!empty($options['pinterest_uid'])) echo '<a href="' . esc_url( $options['pinterest_uid'] ) . '"><span class="fa fa-pinterest"></span></a>';
        echo '</div>';
        ?>
            <div class="header_extras">
                <?php if ($search_form_display != 1) {
                        ?>

                <ul class="header_extra">
                    
                    <li><span class="search_icon"><i class="fa fa-search"></i></span>
                        <ul class="search_header">
                            <a href="javascript:void(0);" class="close"></a>
                            <li><?php echo get_search_form(); ?></li>
                        </ul>
                    </li>

                </ul>
                <?php } ?>
            </div><!--End of Primary Navigation -->
            
        </div>
        <div class="styledmag_menu clearfix"><!--Primary Navigation Starts Here -->
                <!-- Mobile menu toggle button (hamburger/x icon) -->
                
            <input id="main-menu-state" type="checkbox" />
            <label class="main-menu-btn" for="main-menu-state">
              <span class="main-menu-btn-icon"></span>
            </label>
            <?php  
                wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false,'menu_id' => 'main-menu', 'menu_class' => esc_attr( $output_variable ), 'fallback_cb' => 'wp_page_menu') ); 
            ?>
        </div>

<?php }
                  
    function styledmag_header_top_cat_fnc() { ?>
    <div class="row">
        <?php 
            $styledmag_cat = get_theme_mod( 'homepage_top_posts_category' );
            $styledmag_toppost_cat = new WP_Query( 'cat='.$styledmag_cat.'&posts_per_page=1' );
            $styled_count = 1;
            while ( $styledmag_toppost_cat->have_posts() ) : $styledmag_toppost_cat->the_post();
                $post_id = get_the_ID();
                $styled_thumbnail_img_big = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'styled-mag-555x555', false );
             ?>
            <div class="wow fadeInLeft col-sm-6"> 
                <figure class="highlight-item highlight-item-lg sm-images-flip1">
                    <?php if(has_post_thumbnail()){ ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($styled_thumbnail_img_big[0]); ?>" class="img-responsive" ></a>
                    <?php } else{ ?>
                        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/demoimg_460x460.png' ); ?>" class="img-responsive" /></a>
                    <?php } ?>
                    <figcaption>
                        <a class="styledmag_title" href="<?php the_permalink(); ?>">
                            <div class="caption-title">
                                <?php the_title(); ?>
                            </div>
                        </a>
                        </a>
                        <div class="categories">
                            <?php 
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                foreach( $categories as $category ) {
                                    $cat_data = get_option('category_'.absint( $category->term_id ) ); 
                                ?>
                                
                                <a href="<?php echo esc_url( get_category_link( $category->cat_ID ) ); ?>">
                                        <?php  echo esc_html( $category->name ) ; ?>
                                </a>
                            <?php  }
                            } ?>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <?php endwhile;
            wp_reset_postdata();
         
            $styledmag_side_cat = get_theme_mod( 'homepage_top_posts_category' );
            $styledmag_toppost_side_cat = new WP_Query( 'cat='. absint( $styledmag_side_cat ).'&posts_per_page=4'.'&offset=1' );
            ?>
            <div class="col-sm-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
            <?php
            while ( $styledmag_toppost_side_cat->have_posts() ) : $styledmag_toppost_side_cat->the_post();
                $post_id = get_the_ID();
                $styled_thumbnail_img_small = wp_get_attachment_image_src( get_post_thumbnail_id( absint( $post_id ) ), 'styled-mag-263x263', false );
             ?>
                <div class="col-xs-6"> 
                    <a href="<?php the_permalink(); ?>">
                        <figure class="highlight-item  sm-images-flip1">
                            <?php 
                            if(has_post_thumbnail()){ ?>
                                <img src="<?php echo esc_url($styled_thumbnail_img_small[0]); ?>" class="img-responsive" >
                                <?php } 
                                else{ ?>
                                    <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/demoimg_460x460.png' ); ?>" class="img-responsive" /></a>
                                <?php } ?>
                                <figcaption>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="caption-title">
                                            <?php the_title(); ?>
                                        </div>
                                    </a>
                                    <div class="categories">
                                        <?php 
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            foreach( $categories as $category ) {
                                                $cat_data = get_option('category_'.absint( $category->term_id) ); 
                                                ?>
                                                <a href="<?php echo esc_url( get_category_link( $category->cat_ID ) ); ?>">
                                                    <?php  echo esc_html( $category->name ); ?>            
                                                </a>
                                            <?php  } } ?>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>  
                    </div> 
                    <?php endwhile; ?>
                </div>
            </div>
            <?php wp_reset_postdata() ?>
        </div>
<?php } 

// feature slider part in homepage
 
function styledmag_featured_post_fnc () {
    $styledmag_featured_post_cat = get_theme_mod('homepage_featured_posts_category');
    $styledmag_featued_post_number = '3';
    ?>        
    <div class="pre-title">by category</div>
    <div class="section-title">
        <a href="<?php echo esc_url( get_category_link( $styledmag_featured_post_cat ) ); ?>"><h2><?php esc_html_e( 'Featured posts', 'styled-mag' ); ?></h2></a>
    </div>
    <div class="row fetured_bxslider">
    <?php 
        $args = array(
            'cat'               => absint( $styledmag_featured_post_cat ), 
       	    'posts_per_page'	=> intval( $styledmag_featued_post_number ),
            'order'             => 'DESC'
            );

    // query
    $featured_the_query = new WP_Query( $args );
    if( $featured_the_query->have_posts() ):
        while ( $featured_the_query->have_posts() ) : $featured_the_query->the_post();
            $thumb_id = get_post_thumbnail_id();
            $thumb_url = wp_get_attachment_image_src($thumb_id, 'styled-mag-300x300', true);
            ?>
                <div class="col-sm-4 wow fadeInLeft" data-wow-duration="5s" data-wow-delay="5s">
                    <figure>
                        <a href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()) { ?>
                                <img src="<?php echo esc_url($thumb_url[0]); ?>" class="img-responsive" />
                            <?php } else {?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/demoimg_styled-mag-300x300.png' ); ?>"  class="img-responsive"/>
                            <?php } ?>
                        </a>
                    </figure>
                    <a href="<?php the_permalink(); ?>"><h3 class="featured-title"><?php the_title(); ?></h3></a>
                    
                    <div class="categories">
                        <?php 
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                foreach( $categories as $category ) { 
                                    $cat_data = get_option('category_'.absint( $category->term_id ) ); 
                            ?>
                            <a href="<?php echo esc_url( get_category_link( $category->cat_ID ) ); ?>" class="category_link">
                                <?php  echo esc_html( $category->name ) ; ?>
                            </a>
                        <?php  }
                        } ?>
                    </div>
                    <div class="styled-time-comment-view-wrap">
                        <time><?php echo get_the_time('M d, Y') ?></time> 
                    </div>
                    <div class="exerpt"> <?php the_excerpt(); ?></div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata();	 // Restore global post data stomped by the_post(). ?>
        </div>      
    <?php 
}

/**** Function for latest news posts *********/
function styledmag_homepage_latest_news_posts_fnc () {
    
        $styledmag_video_args = array (
            'posts_per_page' => 6,
            'order' => 'DESC'
        ); 
                                    
    ?>
    <div class="pre-title"><?php _e( 'by category', 'styled-mag' ); ?></div>
        <div class="section-title">
            <h2>
                <?php 
                    $styledmag_latest_news = get_theme_mod( 'latest_news_section_title', 'LATEST NEWS' ); 
                    echo esc_html( $styledmag_latest_news );
                ?>
                    
            </h2>
        </div>

    <?php // The Query
    $styledmag_query = new WP_Query( $styledmag_video_args );
    if ( $styledmag_query->have_posts() ) { ?>
        <div class="row">
        <?php 
	       $styledmag_count=0;
	       while ( $styledmag_query->have_posts() ) { 
	           $styledmag_count++;
               $styledmag_query->the_post();
               $styled_video_default_img = get_template_directory_uri().'/images/demoimg_styled-mag-300x300.png';
               $img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'styled-mag-360x360', false );
               ?>
                <div class="col-xs-6">
                    <div class="latest-post-item">
                        <?php if($styledmag_count<3){ ?>
                            <a href="<?php the_permalink(); ?>">
                                <span class="sm-images-flip1">
                                    <?php if(has_post_thumbnail()){ ?>
                                    <img src="<?php echo esc_url($img_url[0]); ?>" class="img-responsive" >
                                    <?php } else{?>
                                        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/demoimg_360x360.png' ); ?> "/>
                                    <?php } ?>
                                </span>
                            </a>
                        <?php } ?>    
                        
                        <a href="<?php the_permalink(); ?>">
                            <h3 class="featured-title">
                                <?php the_title(); ?>
                            </h3>
                        </a>
                        <div class="categories">
                            <?php 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    foreach( $categories as $category ) {
                                        $cat_data = get_option('category_'. absint( $category->term_id ) ); ?>
                                        <a href="<?php echo esc_url( get_category_link( $category->cat_ID ) ); ?>" class="category_link">
                                            <?php  echo esc_html( $category->name ) ; ?>
                                        </a>
                                        <?php  }
                                     } ?>
                        </div>
                        <div class="styled-time-comment-view-wrap">
                            <time><?php echo get_the_time('M d, Y') ?></time> 
                        </div>
                        <?php if($styledmag_count<3){ ?>
                            <div class="exerpt">
                                <?php the_excerpt(); ?>
                            </div>
                        <?php } ?>
                </div>
            </div>	
        <?php if(!($styledmag_count%2)){ echo '<div class="clear"></div>';} ?>	
	   <?php } // end while ?>
    </div>
 <?php }
 
 wp_reset_postdata();
}

// Author section
function styledmag_homepage_author_fnc(){
    ?>
<!-- Authors section -->    
    <div class="row members-row">
        <div class="col-sm-12">
       	    <div class="pre-title"><?php _e('our team','styled-mag'); ?></div>
            <div class="section-title">
                <h2><?php echo esc_html( get_theme_mod('author_section_title','WHO IS BEHIND ARTICLES' ) ); ?></h2>
            </div>
        </div>
            
    <?php  // WP_Query arguments
        $roles = array( 'Administrator', 'Author', 'Editor' );
            foreach($roles as $role)
                {
                $user_args = array(
                    'fields'=>'all_with_meta',
                    'orderby'=>'user_nicename',
                    'role'=>$role
                    );
                $user_query = new WP_User_Query( $user_args );
                if ( ! empty( $user_query->results ) ) {
                    $user_count= 1;
                   	foreach ( $user_query->results as $user ) {
                   	    
                        if ($user_count == '3' ) {
                            break;    /* You could also write 'break 1;' here. */
                        }
                        
              		    $user_name = $user->display_name;
                        $user_nickname = $user->user_nicename;
                        $user_id = $user->ID;
                    ?>
                        <div class="col-sm-4 col-xs-6">
                        <a href="<?php echo esc_url( get_author_posts_url( $user_id, $user_nickname ) ) ;?>">
                            <div class="user-image sm-images-flip1"><?php echo get_avatar($user_id, '360');?></div>
                        </a>
                        
                        <a href="<?php echo esc_url( get_author_posts_url( $user_id, $user_nickname ) ) ;?>">
                            <h3 class="member-title"><?php echo esc_attr( $user_name );?></h3>
                        </a>
                        
                        <div class="categories">
                            <span style="background-color:<?php esc_html( styledmag_color_user(get_the_author_meta( 'admin_color', $user->ID) ) ); ?>" >
                                <?php  $user_level = get_the_author_meta('user_level', $user->ID);
                                    if($user_level >= 8 && $user_level <=10 ){
                                        echo 'Admin';
                                    }elseif($user_level >=3 && $user_level <=7){
                                        echo 'Editor';
                                    }elseif($user_level == 2){
                                        echo 'Author';
                                    }
                                 ?>
                            </span>
                        </div>
                        <div class="exerpt">
                            <p><?php echo esc_html( get_the_author_meta('description', $user->ID ) ); ?></p>
                        </div>
                    </div>
                <?php
                $user_count++;
               	}
            } 
        }
?>
</div>
<?php      
}
/**
 * Posted on meta for general
 */


// For selecting colors according to admin color
function styledmag_color_user ($colors){
    switch($colors){
        case "fresh":
        echo "#333333";
        break;
        
        case "light":
        echo "#e5e5e5";
        break;
        
        case "blue":
        echo "#096484";
        break;
        
        case "coffee":
        echo "#46403c";
        break;
        
        case "ectoplasm":
        echo "#413256";
        break;
        
        case "midnight":
        echo "#25282b";
        break;
        
        case "ocean":
        echo "#627c83";
        break;
        
        case "sunrise":
        echo "#b43c38";
        break;
        
        default:
        echo "#333333";        
        
    }
    
}

// lets setup the bottom group 
function styledmag_bottomgroup() {
	$styledmagcount = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$styledmagcount++;
	if ( is_active_sidebar( 'bottom2' ) )
		$styledmagcount++;
	if ( is_active_sidebar( 'bottom3' ) )
		$styledmagcount++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$styledmagcount++;
	$styledmag_class = '';
	switch ( $styledmagcount ) {
		case '1':
			$styledmag_class = 'col-sm-12';
			break;
		case '2':
			$styledmag_class = 'col-sm-6';
			break;
		case '3':
			$styledmag_class = 'col-sm-4 col-xs-6';
			break;
		case '4':
			$styledmag_class = 'col-sm-3';
			break;
	}
	if ( $styledmag_class )
		echo 'class="' . esc_attr( $styledmag_class ) . '"';
}