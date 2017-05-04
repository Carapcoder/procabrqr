<style type="text/css">

h1, 
h1 a {
	color: <?php echo esc_html( get_theme_mod('h1_fontcolor') ); ?>;
	font-size: <?php echo esc_html( get_theme_mod('h1_fontsize') ); ?>;
}
h2,
h2 a {
	color: <?php echo esc_html( get_theme_mod('h2_fontcolor') ); ?>; 
	font-size: <?php echo esc_html( get_theme_mod('h2_fontsize') ); ?>;
}
h3,
h3 a {
	color: <?php echo esc_html( get_theme_mod('h3_fontcolor') ); ?>; 
	font-size: <?php echo esc_html( get_theme_mod('h3_fontsize') ); ?>;
}
h4,
h4 a {
	color: <?php echo esc_html( get_theme_mod('h4_fontcolor') ); ?>; 
	font-size: <?php echo esc_html( get_theme_mod('h4_fontsize') ); ?>;
}
h5,
h5 a {
	color: <?php echo esc_html( get_theme_mod('h5_fontcolor') ); ?>; 
	font-size: <?php echo esc_html( get_theme_mod('h5_fontsize') ); ?>;
}
h6,
h6 a {
	color: <?php echo esc_html( get_theme_mod('h6_fontcolor') ); ?>; 
	font-size: <?php echo esc_html( get_theme_mod('h6_fontsize') ); ?>;
}
p, 
p a {
	color: <?php echo esc_html( get_theme_mod('p_fontcolor') ); ?>; 
	font-size: <?php echo esc_html( get_theme_mod('p_fontsize') ); ?>;
}
a {
	color: <?php echo esc_html( get_theme_mod('a_fontcolor') ); ?>; 
	font-size: <?php echo esc_html( get_theme_mod('a_fontsize') ); ?>;
}
a:hover, 
a:focus,
a:visited {
	color: <?php echo esc_html( get_theme_mod('ahover_fontcolor') );?>;
}
li {
	color: <?php echo esc_html( get_theme_mod('li_fontcolor') ); ?>; 
	font-size: <?php echo esc_html( get_theme_mod('li_fontsize') ); ?>;
}
.btn,
.btn1,
.btn1, 
.btn a {
	color: <?php echo esc_html( get_theme_mod('btn_color') ); ?>!important; 
	background-color: <?php echo esc_html( get_theme_mod('btn_bg_color') ); ?>;
}
.btn:hover, 
.btn:focus, 
.btn a:hover, 
.btn a:focus, 
.btn a:visited {
	color: <?php echo esc_html( get_theme_mod('btnhover_color') ); ?>; 
	background-color: <?php echo esc_html( get_theme_mod('btnhover_bg_color') ); ?>;
}
.btn,
.btn1,
.btn2,
.btn3, 
.btn a,
.btn1 a,
.btn2 a,
.btn3 a  
a .btn ,
a .btn1 ,
a .btn2 ,
a .btn3 {
color: <?php echo esc_html( get_theme_mod('btn_color') ); ?>; 
background-color: <?php echo esc_html( get_theme_mod('btn_bg_color') ); ?>;
}
.btn:hover, 
.btn:focus, 
.btn a:hover, 
.btn a:focus, 
.btn a:visited {
color: <?php echo esc_html( get_theme_mod('btnhover_color') ); ?>; 
background-color: <?php echo esc_html( get_theme_mod('btnhover_bg_color') ); ?>;
}
.btn1:hover, 
.btn1:focus, 
.btn1 a:hover, 
.btn1 a:focus, 
.btn1 a:visited {
color: <?php echo esc_html( get_theme_mod('btnhover_color') ); ?>; 
background-color: <?php echo esc_html( get_theme_mod('btnhover_bg_color') ); ?>;
}
.btn2:hover, 
.btn2:focus, 
.btn2 a:hover, 
.btn2 a:focus, 
.btn2 a:visited {
color: <?php echo esc_html( get_theme_mod('btnhover_color') ); ?>; 
background-color: <?php echo esc_html( get_theme_mod('btnhover_bg_color') ); ?>;
}
.btn3:hover, 
.btn3:focus, 
.btn3 a:hover, 
.btn3 a:focus, 
.btn3 a:visited {
color: <?php echo esc_html( get_theme_mod('btnhover_color') ); ?>; 
background-color: <?php echo esc_html( get_theme_mod('btnhover_bg_color') ); ?>;
}
/*
=================================================
Menu Sizes Customizer
=================================================
*/
ul.navmenu > li > a,
ul.navmenu2 > li > a {font-size: <?php echo esc_html( get_theme_mod('menu_link_size') ); ?>; }
ul.navmenu ul.sub-menu > li > a,
ul.navmenu ul.sub-menu > li > a > span
{
	font-size:<?php echo esc_html( get_theme_mod('submenu_link_size') ); ?>; }

ul.navmenu ul.sub-menu > li > ul.sub-menu > li > a {font-size:<?php echo esc_html( get_theme_mod('sub_submenu_link_size') ); ?>; }
/*
=================================================
Header Top Customizer Color
=================================================
*/
.styledmag_top {
	background-color:#404040; 
	color:#ffffff;
}
.styled_date_header {
    background-color:<?php echo esc_html( get_theme_mod('datebackground_top','#e8cb00') ); ?>;
}
.header-latest-posts, .bn-title, .bn-content a{
    color:<?php echo esc_html( get_theme_mod('styletop_text','#ffffff') ); ?>;
}
#social-icons ul li a,
#social-icons ul li a,
#social-icons ul li a,
#social-icons ul li a {
	background-color:<?php echo esc_html( get_theme_mod('header_social_icons_bgcolor') ); ?>!important; 
	color:<?php echo esc_html( get_theme_mod('header_social_icons_color') ); ?>!important; 
}
#social-icons ul li a:hover,
#social-icons ul li a:hover,
#social-icons ul li a:hover,
#social-icons ul li a:hover {
	background-color:<?php echo esc_html( get_theme_mod('header_social_icons_hoverbgcolor') ); ?>!important; 
	color:<?php echo esc_html( get_theme_mod('header_social_icons_hovercolor') ); ?>!important; 
}
.secondary_menu,
.secondary_menu_middle {
	background-color:#000000; 
}
/*
=================================================
Menu Coloring
=================================================
*/
.sm-blue{
    background-color: <?php echo esc_html( get_theme_mod('header_secondary_bg') ); ?>;
}
ul.sm-blue > li > a {
	background-color:<?php echo esc_html( get_theme_mod('menu_link_bg') ); ?>; 
	color:<?php echo esc_html( get_theme_mod('menu_link') ); ?>!important; 
}
ul.sm-blue > li > a:hover, 
ul.sm-blue > li > a:focus, 
ul.sm-blue > li > a:active, 
{
	background-color:<?php echo esc_html( get_theme_mod('menu_hover') );?>!important; 
 	color:<?php echo esc_html( get_theme_mod('menu_hover_text') );?>;
}
.sm-blue .current_page_item > a, 
.sm-blue .current_page_ancestor > a, 
.sm-blue .current-menu-item > a, 
.sm-blue .current-menu-ancestor > a
{
	background-color: <?php echo esc_html( get_theme_mod( 'menu_active') ); ?>; 
	color: <?php echo esc_html( get_theme_mod('menu_active_text') ); ?>;
}
.fa-search {
    color: <?php echo esc_html( get_theme_mod( 'search_icon_color' ) ); ?>;
}

ul.sm-blue ul.sub-menu
{
	background-color: <?php echo esc_html( get_theme_mod( 'submenu_bg_color') ); ?>; 
	border-bottom-color:<?php echo esc_html( get_theme_mod('submenu_border') );?>;
	border-right-color:<?php echo esc_html( get_theme_mod('submenu_border') );?>;
	border-left-color:<?php echo esc_html( get_theme_mod('submenu_border'));?>;
}
ul.sm-blue ul.sub-menu:before{
	border-bottom-color: <?php echo esc_html( get_theme_mod( 'submenu_bg_color') ); ?>; 
	border-top-color: <?php echo esc_html( get_theme_mod( 'menu_hover') ); ?>
}
ul.sm-blue ul.sub-menu > li
{
	border-bottom-color: <?php echo esc_html( get_theme_mod( 'submenu_border') ); ?>; 
}
ul.sm-blue > li:hover > a
{
	background-color: <?php echo esc_html( get_theme_mod( 'menu_hover') ); ?> !important;
}
ul.sm-blue ul.sub-menu > li > a
{
	color:<?php echo esc_html( get_theme_mod('submenu_link_color'));?>;
}
ul.sm-blue ul.sub-menu .current_page_item > a, 
ul.sm-blue ul.sub-menu .current_page_ancestor > a, 
ul.sm-blue ul.sub-menu .current-menu-item > a{
	background-color:<?php echo esc_html( get_theme_mod('submenu_active_bg') ); ?>!important; 
	color:<?php echo esc_html( get_theme_mod('submenu_active'));?>;
}
ul.sm-blue ul.sub-menu > li > a:hover,
ul.sm-blue ul.sub-menu > li > a:focus, 
ul.sm-blue ul.sub-menu > li > a:active{
	background-color:<?php echo esc_html( get_theme_mod('submenu_hover'));?>!important; 
	color:<?php echo esc_html( get_theme_mod('submenu_hover_text'));?>;
}
ul.sm-blue ul.sub-menu > li  {
	border-bottom-color:<?php echo esc_html( get_theme_mod('submenu_divider') ); ?>;
}

.styledmag_footer {background-color:<?php echo esc_html( get_theme_mod('footer_bg') ); ?>; color: <?php echo esc_html( get_theme_mod('footer_text'));?>;}
.styledmag_footer p {color: <?php echo esc_html( get_theme_mod('footer_text') );?>;}
.fr_widgets_bottom_widget {background-color:<?php echo esc_html( get_theme_mod('bottom_widget_bg') ); ?>; color:<?php echo esc_html( get_theme_mod('bottom_widget_text') );?>;}
.bottom_widget a, .bottom_widget h3, .bottom_widget h1, .bottom_widget h2, .bottom_widget h4, .bottom_widget h5, .bottom_widget h6, .bottom_widget p, .bottom_widget li, .bottom_widget div, .bottom_widget span {color:<?php echo esc_html( get_theme_mod('bottom_widget_text') );?>;}
.widget_inset_bottom {background-color:<?php echo esc_html( get_theme_mod('insetbottom_widget_bg') ); ?>;}
.widget_inset_bottom1 {background-color:<?php echo esc_html( get_theme_mod('insetbottom1_widget_bg') ); ?>;}
.left_sidebar {background-color:<?php echo esc_html( get_theme_mod('leftsidebar_bg') ); ?>;}
.right_sidebar {background-color:<?php echo esc_html( get_theme_mod('rightsidebar_bg') ); ?>;}
.sm-content {background-color:<?php echo esc_html( get_theme_mod('content_bg') ); ?>;}
.styledmag_widgets_insettop1 {background-color:<?php echo esc_html( get_theme_mod('insettop1_widget_bg') ); ?>;}
.fr_widgets_insettop {background-color:<?php echo esc_html( get_theme_mod('insettop_widget_bg') ); ?>;}
.fr_widget_inset_bottom {background-color:<?php echo esc_html( get_theme_mod('insetbottom_widget_bg') ); ?>;}
.fr_widget_content_bottom {background-color:<?php echo esc_html( get_theme_mod('contentbottom_widget_bg') ); ?>;}
.fr_top_widgets {background-color:<?php echo esc_html( get_theme_mod('top_widget_bg') ); ?>;}
.fr_widgets_cta {background-color:<?php echo esc_html( get_theme_mod('cta_bg') ); ?>;}
/*.styledmag_header {background-color:<?php echo esc_html( get_theme_mod('header_bg') ); ?>; }*/

/*site title */
#sm-logo-group, #sm-text-group {padding: <?php echo esc_html( get_theme_mod('titlepadding', '10px 0px 0px 0px') );?>}
            
/*Navmenu Customizer */



	#secondary-nav .nav-menu li a, #secondary-nav .nav-menu li.home a {color:<?php echo esc_html( get_theme_mod( 'secmenu_link', '#ffffff' ) ); ?>;}
	#secondary-nav .nav-menu li a:hover {color:<?php echo esc_html( get_theme_mod( 'secmenu_hover_active', '#6c603c' ) ); ?>;}
	#secondary-nav ul.nav-menu ul a,#secondary-nav .nav-menu ul ul a {color: <?php echo esc_html( get_theme_mod( 'secsubmenu_link', '#ffffff' ) ); ?>;}
	#secondary-nav ul.nav-menu ul a:hover,#secondary-nav .nav-menu ul ul a:hover,#secondary-nav .nav-menu .current_page_item > a,#secondary-nav .nav-menu .current_page_ancestor > a,#secondary-nav .nav-menu .current-menu-item > a,#secondary-nav .nav-menu .current-menu-ancestor > a {color:<?php echo esc_html( get_theme_mod( 'secmenu_hover_active', '#6c603c' ) ); ?>;}			
	#secondary-nav ul.sub-menu .current_page_item > a,#secondary-nav ul.sub-menu .current_page_ancestor > a,#secondary-nav ul.sub-menu .current-menu-item > a,#secondary-nav ul.sub-menu .current-menu-ancestor > a {background-color: <?php echo esc_html( get_theme_mod( 'secsubmenu_bg_hover', '#d7c58c' ) ); ?>;}						
	#secondary-nav ul.nav-menu li:hover > ul,#secondary-nav .nav-menu ul li:hover > ul {background-color: <?php echo esc_html( get_theme_mod( 'secondary_navbg', '#c6b274' ) ); ?>;border-color:<?php echo esc_html( get_theme_mod( 'secsubmenu_border', '#707070' ) ); ?>;}			
	#secondary-nav ul.nav-menu li:hover > ul li:hover {background-color: <?php echo esc_html( get_theme_mod( 'secsubmenu_bg_hover', '#d7c58c' ) ); ?>;}			
	.wsb_primary {background-color: <?php echo esc_html( get_theme_mod('woocommerce_primary_button_background') );?>!important;}
	
	.wsb_primary:hover, .wsb_primary:focus {background-color: <?php echo esc_html( get_theme_mod('woocommerce_primary_button_hover_background') );?>!important;}
	.added_to_cart:hover, .added_to_cart:focus {background-color: <?php echo esc_html( get_theme_mod('woocommerce_primary_button_hover_background') );?>!important;}
	.wsb_secondary {background-color: <?php echo esc_html( get_theme_mod('woocommerce_secondary_button_background') );?>!important;}
	.wsb_secondary:hover, .wsb_secondary:focus {background-color: <?php echo esc_html( get_theme_mod('woocommerce_secondary_button_hover_background') );?>!important;}

	
	ul.header_extra ul {height:<?php echo esc_html( get_theme_mod('search_icon_height') ); ?>; margin-top:<?php echo esc_html( get_theme_mod('search_icon_margin') ); ?>; background-color:<?php echo esc_html( get_theme_mod('search_icon_background','#3d3d3d') ); ?>;}
	ul.header_extra li {color:<?php echo esc_html( get_theme_mod('search_icon_color','#E8CB00') ); ?>}
	ul.header_extra ul li .form-control {border-color:<?php echo esc_html( get_theme_mod('search_icon_line') ); ?>}
	@media screen and (min-width: 1001px){ .secondary_menu_middle .styledmag_menus { background-color:<?php echo esc_html( get_theme_mod('header_secondary_bg') );?>;} }
/*
=================================================
Content Color Customizer
=================================================
*/
.sm-contents h1.entry-title {color:<?php echo esc_html( get_theme_mod('content_heading_color') ); ?>}
.sm-contents .entry-content,
.sm-contents .entry-content p {
	color:<?php echo esc_html( get_theme_mod('content_text_color') ); ?>
}
.sm-contents .entry-content a {
	color:<?php echo esc_html( get_theme_mod('content_link_color') ); ?>
}
ul.footer li a,
.footer ul li a {
 color:<?php echo esc_html( get_theme_mod('footer_navtext_color') ); ?>
}
ul.footer li a:hover,
.footer ul li a:hover {
 color:<?php echo esc_html( get_theme_mod('footer_navtext_hover_color') ); ?>
}
}
</style>
