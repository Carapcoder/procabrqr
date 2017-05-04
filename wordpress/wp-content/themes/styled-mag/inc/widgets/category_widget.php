<?php
/**
 * Category Posts
 *
 * @package Styledmag Pro
 */

/**
 * Adds styledmag_category widget.
 */
add_action( 'widgets_init', 'styledmag_register_category_widget' );
function styledmag_register_category_widget() {
    register_widget( 'styledmag_cta_widget' );
}
class styledmag_cta_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'styledmag_category_post',
			__('Styledmag : Category Post','styled-mag'),
			array(
				'description'	=> __( 'A widget To Display Cateogory posts', 'styled-mag' )
			)
		);
	}

	/**
	 * Helper function that holds widget fields
	 * Array is used in update and form functions
	 */
	 private function widget_fields() {
	   $featured_categories = array( ' ' => __( '-- Select Category --', 'styled-mag' ) );
        $cat_args = array(
            	'type'     => 'post',
                'child_of'      => 0,
            	'orderby'       => 'name',
            	'order'         => 'ASC',
            	'hide_empty'    => 1,
            	'taxonomy'      => 'category',
                );
        $categories = get_categories( $cat_args );
        foreach( $categories as $cat ) {
            $featured_categories[$cat->cat_ID] = $cat->name;
        }
       
       
		$fields = array(
            'category_main_title' => array(
                'styledmag_widgets_name' => 'category_main_title',
                'styledmag_widgets_title' => __('Main Title','styled-mag'),
                'styledmag_widgets_description' => __('Leave it empty to hide sub title portion','styled-mag'),
                'styledmag_widgets_field_type' => 'text'
            ),
			'category_title' => array(
                'styledmag_widgets_name' => 'category_title',
                'styledmag_widgets_title' => __('Title','styled-mag'),
                'styledmag_widgets_field_type' => 'text'
            ),
            'category_main' => array(
                'styledmag_widgets_name' => 'category_main',
                'styledmag_widgets_title' => __('Choose Category','styled-mag'),
                'styledmag_widgets_field_type' => 'select',
                'styledmag_widgets_field_options' => array_map( 'esc_html', $featured_categories )
            ),
		);
		
		return $fields;
	 }


	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {        
        extract($args);
        $featured_main_category = isset( $instance['category_main_title'] ) ? $instance['category_main_title']  : '' ;
        $featured_category_title = isset( $instance['category_title'] ) ? $instance['category_title'] : '';
        $featured_category =  isset( $instance['category_main'] ) ? $instance['category_main'] : '';
        
        if( ! empty($featured_main_category)){
            ?>
            <div class="cat_title_wrap">
                <div class="pre-title"><?php echo wp_kses_post( $featured_main_category ); ?></div>
                <div class="section-title section-title-plain">
                    <h2><?php echo wp_kses_post( $featured_category_title ); ?></h2>
                </div>
            </div>
            <?php 
        }
        echo $args['before_widget'];
            if( !empty( $featured_category ) ):
                $featured_cat_args = array(
                    'cat'=> absint( $featured_category ),
                    'post_status'=>'publish',
                    'posts_per_page'=>3,
                    'order'=>'DESC'
                );
                $featured_cat_query = new WP_Query( $featured_cat_args );
                $cat_link = get_category_link( $featured_category );
                if( $featured_cat_query->have_posts() ) {
                	$cat_name = get_cat_name( $featured_category )
                ?>
                    
            <div class="section-title section-title-sm">
                <h2><?php if(!empty($featured_category_title)){
                    echo esc_html( $featured_category_title ); 
                	} else { 
                        echo esc_html( $cat_name );
                	} ?></h2>
            </div>
            <div class="row category-thumbs-list">
                <?php while( $featured_cat_query->have_posts() ):
                        $featured_cat_query->the_post();
                        $featured_cat_image_id = get_post_thumbnail_id();
                        $featured_cat_big_image_path = wp_get_attachment_image_src( $featured_cat_image_id, '100x106', true ); ?>
       	        <div class="col-sm-4 col-xs-3">
                    <?php if(has_post_thumbnail()){ ?>
                        <a href="<?php the_permalink(); ?>" class="sm-images-flip1"><img src="<?php echo esc_url($featured_cat_big_image_path[0]); ?>"></a>
                    <?php } ?>
                </div>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>    
            </div>
            <?php
            } //end if;
            endif;
        echo $args['after_widget'];
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param	array	$new_instance	Values just sent to be saved.
	 * @param	array	$old_instance	Previously saved values from database.
	 *
	 * @uses	styledmag_widgets_updated_field_value()		defined in widget-fields.php
	 *
	 * @return	array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$widget_fields = $this->widget_fields();
		// Loop through fields
		foreach( $widget_fields as $widget_field ) {
			extract( $widget_field );
	
			// Use helper function to get updated field values
			$instance[$styledmag_widgets_name] = styledmag_widgets_updated_field_value( $widget_field, $new_instance[$styledmag_widgets_name] );
            echo esc_html( $instance[$styledmag_widgets_name] ); 
			
		}
				
		return $instance;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param	array $instance Previously saved values from database.
	 *
	 * @uses	styled_pro_widgets_show_widget_field()		defined in widget-fields.php
	 */
	public function form( $instance ) {
		$widget_fields = $this->widget_fields();

		// Loop through fields
		foreach( $widget_fields as $widget_field ) {
			// Make array elements available as variables 
			extract( $widget_field );
			$styledmag_widgets_field_value = isset( $instance[$styledmag_widgets_name] ) ? esc_attr( $instance[$styledmag_widgets_name] ) : '';
			styledmag_pro_widgets_show_widget_field( $this, $widget_field, $styledmag_widgets_field_value );
		}	
	}

}