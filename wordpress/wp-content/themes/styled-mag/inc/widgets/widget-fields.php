<?php
/**
 * Define fields for Widgets.
 * 
 * @package Aglee Pro
 */

function styledmag_pro_widgets_show_widget_field( $instance = '', $widget_field = '', $athm_field_value = '' ) {
    
	extract( $widget_field );
	
	switch( $styledmag_widgets_field_type ) {
	
		// Standard text field
		case 'text' : ?>
			<p>
				<label for="<?php echo esc_attr( $instance->get_field_id( $styledmag_widgets_name ) ); ?>"><?php echo esc_html( $styledmag_widgets_title ); ?>:</label>
				<input class="widefat" id="<?php echo esc_attr( $instance->get_field_id( $styledmag_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $styledmag_widgets_name ) ); ?>" type="text" value="<?php echo esc_attr( $athm_field_value ); ?>" />
				
				<?php if( isset( $styledmag_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html( $styledmag_widgets_description ); ?></small>
				<?php } ?>
			</p>
			<?php
			break;

		// Textarea field
		case 'textarea' : ?>
			<p>
				<label for="<?php echo esc_attr( $instance->get_field_id( $styledmag_widgets_name ) ); ?>"><?php echo esc_html($styledmag_widgets_title); ?>:</label>
				<textarea class="widefat" rows="6" id="<?php echo esc_attr( $instance->get_field_id( $styledmag_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $styledmag_widgets_name ) ); ?>"><?php echo esc_textarea($athm_field_value); ?></textarea>
			</p>
			<?php
			break;
			
		// Checkbox field
		case 'checkbox' : ?>
			<p>
				<input id="<?php echo esc_attr( $instance->get_field_id( $styledmag_widgets_name ) ); ?>" name="<?php echo esc_attr( $instance->get_field_name( $styledmag_widgets_name ) ); ?>" type="checkbox" value="1" <?php esc_attr( checked( '1', $athm_field_value ) ); ?>/>
				<label for="<?php echo esc_attr( $instance->get_field_id( $styledmag_widgets_name ) ); ?>"><?php echo esc_html($styledmag_widgets_title); ?></label>

				<?php if( isset( $styledmag_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html($styledmag_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;
			
		// Select field
		case 'select' : ?>
			<p>
				<label for="<?php echo esc_attr( $instance->get_field_id( $styledmag_widgets_name ) ); ?>"><?php echo esc_html( $styledmag_widgets_title ); ?>:</label>
				<select name="<?php echo esc_attr( $instance->get_field_name( $styledmag_widgets_name ) ); ?>" id="<?php echo esc_attr( $instance->get_field_id( $styledmag_widgets_name ) ); ?>" class="widefat">
					<?php
					foreach ( $styledmag_widgets_field_options as $athm_option_name => $athm_option_title ) { ?>
						<option value="<?php echo esc_attr( $athm_option_name ); ?>" id="<?php echo esc_attr( $instance->get_field_id( $athm_option_name ) ); ?>" <?php selected( $athm_option_name, $athm_field_value ); ?>><?php echo esc_html($athm_option_title); ?></option>
					<?php } ?>
				</select>

				<?php if( isset( $styledmag_widgets_description ) ) { ?>
				<br />
				<small><?php echo esc_html($styledmag_widgets_description); ?></small>
				<?php } ?>
			</p>
			<?php
			break;
                        
    case 'upload' :

            $output = '';
            $id = $instance->get_field_id($styledmag_widgets_name);
            $class = '';
            $int = '';
            $value = $athm_field_value;
            $name = $instance->get_field_name($styledmag_widgets_name);

            if ($value) {
                $class = ' has-file';
            }
            $output .= '<div class="sub-option widget-upload">';
            $output .= '<label for="'.esc_attr( $instance->get_field_id($styledmag_widgets_name) ).'">'.$styledmag_widgets_title.'</label><br/>';
            $output .= '<input id="' . absint( $id ) . '" class="upload' . esc_attr( $class ) . '" type="text" name="' . esc_attr( $name ) . '" value="' . $value . '" placeholder="' . __('No file chosen', 'styled-mag') . '" />' . "\n";
            if (function_exists('wp_enqueue_media')) {
                if (( $value == '')) {
                    $output .= '<input id="upload-' . absint( $id ). '" class="upload-button button" type="button" value="' . __('Upload', 'styled-mag') . '" />' . "\n";
                } else {
                    $output .= '<input id="remove-' . absint( $id ). '" class="remove-file button" type="button" value="' . __('Remove', 'styled-mag') . '" />' . "\n";
                }
            } else {
                $output .= '<p><i>' . __( 'Upgrade your version of WordPress for full media support.', 'styled-mag' ) . '</i></p>';
            }

            $output .= '<div class="screenshot team-thumb" id="' . absint( $id ) . '-image">' . "\n";

            if ($value != '') {
                $remove = '<a class="remove-image">'.esc_html__( 'Remove', 'styled-mag' ).' </a>';
                $attachment_id = attachment_url_to_postid($value);
                $image_array = wp_get_attachment_image_src( $attachment_id, 'medium', true );
                $image = preg_match('/(^.*\.jpg|jpeg|png|gif|ico*)/i', $value);
                if ($image) {
                    $output .= '<img src="' . esc_url( $image_array[0] ) . '" alt="" />' . $remove;
                } else {
                    $parts = explode("/", $value);
                    for ($i = 0; $i < sizeof($parts); ++$i) {
                        $title = $parts[$i];
                    }

                    // No output preview if it's not an image.
                    $output .= '';

                    // Standard generic output if it's not an image.
                    $title = __('View File', 'styled-mag');
                    $output .= '<div class="no-image"><span class="file_link"><a href="' . esc_url( $value ) . '" target="_blank" rel="external">' .esc_html( $title ) . '</a></span></div>';
                }
            }
            $output .= '</div></div>' . "\n";
            echo $output;
            break;
            
            // Standard url field
        case 'url' :
            ?>
            <p>
                <label for="<?php echo esc_attr( $instance->get_field_id($styledmag_widgets_name) ); ?>"><?php echo esc_html( $styledmag_widgets_title ); ?>:</label>
                <input class="widefat" id="<?php echo esc_attr( $instance->get_field_id($styledmag_widgets_name) ); ?>" name="<?php echo esc_attr( $instance->get_field_name($styledmag_widgets_name) ); ?>" type="text" value="<?php echo esc_attr( $athm_field_value ); ?>" />

                <?php if (isset($styledmag_widgets_description)) { ?>
                    <br />
                    <small><?php echo esc_html($styledmag_widgets_description); ?></small>
                <?php } ?>
            </p>
            <?php
            break;

	} // end of switch
	
} //end of function widget

function styledmag_widgets_updated_field_value($widget_field, $new_field_value) {

    extract($widget_field);

    // Allow only integers in number fields
    if ($styledmag_widgets_field_type == 'number') {
        return absint($new_field_value);

        // Allow some tags in textareas
    } elseif ($styledmag_widgets_field_type == 'textarea') {
        // Check if field array specifed allowed tags
        if (!isset($styledmag_widgets_allowed_tags)) {
            // If not, fallback to default tags
            $styledmag_widgets_allowed_tags = '<p><strong><em><a>';
        }
        
        return strip_tags($new_field_value, $styledmag_widgets_allowed_tags);

        // No allowed tags for all other fields
    } 
    
    elseif ($styledmag_widgets_field_type == 'url') {
        return esc_url_raw($new_field_value);
    }
    elseif ($styledmag_widgets_field_type == 'title') {
        return wp_kses_post($new_field_value);
    }
    else {
        return strip_tags($new_field_value);
    }
}