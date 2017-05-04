<?php
/*
=================================================
Move to Top Action Hooks 
=================================================
*/

add_action('styledmag_move_to_top', 'styledmag_move_to_top_fnc');

/*
=================================================
Header Box Wrapper Chooser Hooks
=================================================
*/

add_action('styledmag_wrapper_choose', 'styledmag_wrapper_choose_fnc');


/*
=================================================
Top Header Section hook Hooks
=================================================
*/

add_action('styledmag_top_bar', 'styledmag_top_bar_fnc');

/*
=================================================
Header Main Display Hooks
=================================================
*/
add_action('styledmag_header', 'styledmag_header_fnc');

/*
=================================================
Home page settings
=================================================
*/
add_action('styledmag_header_top_cat','styledmag_header_top_cat_fnc');

// For individual posts

add_action('styledmag_header_top_posts', 'styledmag_header_top_posts_fnc');

// Featured posts in home page
add_action ( 'styledmag_featured_post', 'styledmag_featured_post_fnc');

// Latest news posts in home page
add_action ( 'styledmag_homepage_latest_news_posts', 'styledmag_homepage_latest_news_posts_fnc');

// Author in home age
add_action ( 'styledmag_homepage_author', 'styledmag_homepage_author_fnc');
