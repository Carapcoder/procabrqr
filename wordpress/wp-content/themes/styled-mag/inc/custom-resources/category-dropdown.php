<?php
if ( class_exists( 'WP_Customize_Control' ) ) {

/**
 * A class to create a dropdown for all categories in your wordpress site
 */
  
    class Styledmag_category_Dropdown extends WP_Customize_Control {
	        /**
	         * Render the control's content.
	         *
	         */
            public function render_content() {
	            $dropdown = wp_dropdown_categories(
	                array(
	                    'name'              => '_customize-dropdown-categories-' . $this->id,
	                    'echo'              => 0,
	                    'show_option_none'  => __( '&mdash; Choose Category &mdash;', 'styled-mag' ),
	                    'option_none_value' => '',
	                    'selected'          => $this->value(),
                )
	            );
	 
	            // Hackily add in the data link parameter.
	            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
	 
	            printf(
	                '<label class="customize-control-select"><span class="customize-control-title">%s</span><span class="description customize-control-description">%s</span> %s </label>',
	                $this->label,
	                $this->description,
	                $dropdown
	            );
	        }
	    }
        
    class Post_Dropdown extends WP_Customize_Control
    {
        private $posts = false;
    
        public function __construct($manager, $id, $args = array(), $options = array())
        {
            $postargs = wp_parse_args($options, array('numberposts' => '-1'));
            $this->posts = get_posts($options);
    
            parent::__construct( $manager, $id, $args );
        }
    
        /**
        * Render the content on the theme customizer page
        */
        public function render_content()
        {
            if(!empty($this->posts))
            {
                ?>
                    <label>
                        <span class="customize-post-dropdown"><?php echo esc_html( $this->label ); ?></span>
                        <select data-customize-setting-link="<?php echo $this->id; ?>" name="<?php echo $this->id; ?>" id="<?php echo $this->id; ?>">
                        <option value="none" <?php if ( get_theme_mod($this->id) == 'none' ) echo 'selected="selected"'; ?>><?php _e( 'None', 'styled-mag' ); ?> </option>
                         	 <?php  $posts = get_posts('numberposts=-1');
                              		foreach ( $posts as $post ) { ?>
                               			 <option value="<?php echo $post->ID; ?>" <?php if ( get_theme_mod($this->id) == $post->ID ) echo 'selected="selected"'; ?>><?php echo $post->post_title; ?></option>
                              		<?php } ?>
                        </select>
                    </label>
                <?php
            }
        }
    }   
        
                      
 }