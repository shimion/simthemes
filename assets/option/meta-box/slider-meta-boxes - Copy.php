<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'Slider_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function Slider_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
   
  $slider_meta_box = array(
    'id'          => 'slider_option',
    'title'       => __( 'Slider Option', 'SimThemes' ),
    'desc'        => '',
    'pages'       => array( 'slider' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Settings', 'SimThemes' ),
        'id'          => 'settings',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Show Arrow', 'SimThemes' ),
        'id'          => 'slider_arrow',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the slder arrow when set to %s.', 'SimThemes' ), '<code>on</code>' ),
        'std'         => 'on'
      ),
      array(
        'label'       => __( 'Auto Play', 'SimThemes' ),
        'id'          => 'autoPlay',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Slideshow will auto play when set to %s.', 'SimThemes' ), '<code>on</code>' ),
        'std'         => 'on'
      ),
      array(
        'label'       => __( 'Auto Play Delay', 'SimThemes' ),
        'id'          => 'autoPlayDelay',
        'type'        => 'text',
        'desc'        => sprintf( __( 'How long will the auto play delay. (ie. Default value is 4000)', 'SimThemes' )),
        'std'         => '4000'
      ),
      array(
        'label'       => __( 'Slider Height', 'SimThemes' ),
        'id'          => 'sliderheight',
        'type'        => 'text',
        'desc'        => sprintf( __( 'How long will the auto play delay. (ie. Default value is 4000)', 'SimThemes' )),
        'std'         => '650px'
      ),
	  
/*      array(
        'label'       => __( 'Pause On Hover', 'SimThemes' ),
        'id'          => 'pauseOnHover',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Slideshow will push  when set to On.', 'SimThemes' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
*/      array(
        'label'       => __( 'Pause Button', 'SimThemes' ),
        'id'          => 'pauseButton',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Pause Button will show  when set to On.', 'SimThemes' ), '<code>on</code>' ),
        'std'         => 'off'
      ),

	
	array(
			'id'          => 'title_font_size_min',
			'label'       => __( 'Slider Title Minimum Font Size ', 'SimThemes' ),
			'desc'        => 'Please use "px" at the end of the font size',
			'std'         => '24px',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
	

	  
	  
	array(
			'id'          => 'title_font_size_max',
			'label'       => __( 'Slider Title Maximum Font Size', 'SimThemes' ),
			'desc'        => 'Please use "px" at the end of the font size',
			'std'         => '56px',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
	

	  
	  
	array(
			'id'          => 'text_font_size_min',
			'label'       => __( 'Slider Text Minimum Font Size', 'SimThemes' ),
			'desc'        => 'Please use "px" at the end of the font size',
			'std'         => '16px',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
	

	  
	  
	array(
			'id'          => 'text_font_size_max',
			'label'       => __( 'Slider Text Maximum Font Size ', 'SimThemes' ),
			'desc'        => 'Please use "px" at the end of the font size',
			'std'         => '28px',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
	

	  
	  
      array(
        'label'       => '',
        'id'          => 'demo_textblock',
        'type'        => 'textblock',
        'desc'        => __( 'Congratulations, you created a gallery!', 'SimThemes' ),
        'operator'    => 'and',
        'condition'   => 'demo_show_gallery:is(on),demo_gallery:not()'
      ),

      array(
        'label'       => __( 'Slider Section', 'SimThemes' ),
        'id'          => 'slider_section',
        'type'        => 'tab'
      ),
	  
	  
	  
	  
	  array(
        'id'          => 'slider_item',
        'label'       => __( 'Slider Item', 'SimThemes' ),
        'desc'        => __( 'Pleae add your slider images and its content here', 'SimThemes' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 


		array(
        'id'          => 'slider_animation',
        'label'       => __( 'Slider Animation', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'animate_in',
            'label'       => __( 'Animation In', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'animate_out',
            'label'       => __( 'Animation Out', 'SimThemes' ),
            'src'         => ''
          )
        ),


      ),




		
      array(
        'id'          => 'bg_image',
        'label'       => __( 'Background Image', 'SimThemes' ),
        'desc'        => sprintf( __( '', 'SimThemes' ), apply_filters( 'ot_upload_text', __( 'Send to Background Image', 'SimThemes' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		//'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
        'operator'    => 'and'
      ),


      array(
        'id'          => 'bg_color',
        'label'       => __( 'Background color', 'SimThemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and'
      ),



		  
		  
      array(
        'label'       => __( 'Show Overlay Text and Image', 'SimThemes' ),
        'id'          => 'overlayshowhide',
        'type'        => 'on-off',
        'desc'        => '',
        'std'         => 'on',
      ),
		  
		  
		  
		  
		  
		
		array(
        'id'          => 'overlay_select',
        'label'       => __( 'Overlay Text And Image', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'left_text_right_image',
            'label'       => __( 'Left Side Text and Right Side Image', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'left_image_right_test',
            'label'       => __( 'Left Side Image and Right Side Text', 'SimThemes' ),
            'src'         => ''
          )
        ),


      ),



      array(
        'id'          => 'slider_title_section',
        'label'       => __( 'Slider Title', 'SimThemes' ),
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'option_types',
		'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
      ),






      array(
        'id'          => 'title_color',
        'label'       => __( 'Title Color', 'SimThemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
        'operator'    => 'and'
      ),




		array(
        'id'          => 'slider_title_animation',
        'label'       => __( 'Slider Title Animation', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'in-from-left',
            'label'       => __( 'In From Left', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'in-from-right',
            'label'       => __( 'In From Right', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'in-from-top',
            'label'       => __( 'In From Top', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
          array(
            'value'       => 'in-from-bottom',
            'label'       => __( 'In From Bottom', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
		  
        ),


      ),




		array(
        'id'          => 'slider_title_animation_speed',
        'label'       => __( 'Slider Title Animation Speed', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'slow',
            'label'       => __( 'Slow', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'first',
            'label'       => __( 'First', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
        ),


      ),








/*      array(
        'id'          => 'title_font_size',
        'label'       => __( 'Title Font Size', 'SimThemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
        'operator'    => 'and'
      ),

*/








      array(
        'id'          => 'slider_text_section',
        'label'       => __( 'Slider Text Section', 'SimThemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'option_types',
        'rows'        => '15',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
        'operator'    => 'and'
      ),





      array(
        'id'          => 'text_color',
        'label'       => __( 'Text color', 'SimThemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'colorpicker',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
        'operator'    => 'and'
      ),






		array(
        'id'          => 'slider_text_animation',
        'label'       => __( 'Slider Text Animation', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'in-from-left',
            'label'       => __( 'In From Left', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'in-from-right',
            'label'       => __( 'In From Right', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'in-from-top',
            'label'       => __( 'In From Top', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
          array(
            'value'       => 'in-from-bottom',
            'label'       => __( 'In From Bottom', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
		  
        ),


      ),








		array(
        'id'          => 'slider_text_animation_speed',
        'label'       => __( 'Slider Text Animation Speed', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'slow',
            'label'       => __( 'Slow', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'first',
            'label'       => __( 'First', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
        ),


      ),









/*      array(
        'id'          => 'text_font_size',
        'label'       => __( 'Text Font Size', 'SimThemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
        'operator'    => 'and'
      ),
*/










      array(
        'id'          => 'slide_content_image',
        'label'       => __( 'Image Upload', 'SimThemes' ),
        'desc'        => sprintf( __( '', 'SimThemes' ), apply_filters( 'ot_upload_text', __( 'Send to Slider', 'SimThemes' ) ), 'FTP' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => 'overlayshowhide:is(on),overlayshowhide:not()',
        'operator'    => 'and'
      ),
	  
	  
	  
	  


		array(
        'id'          => 'slide_content_image_animation',
        'label'       => __( 'Slider Content Image Animation', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'in-from-left',
            'label'       => __( 'In From Left', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'in-from-right',
            'label'       => __( 'In From Right', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'in-from-top',
            'label'       => __( 'In From Top', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
          array(
            'value'       => 'in-from-bottom',
            'label'       => __( 'In From Bottom', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
		  
        ),


      ),








		array(
        'id'          => 'slide_content_image_animation_speed',
        'label'       => __( 'Slider Content Image Animation Speed', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'slow',
            'label'       => __( 'Slow', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'first',
            'label'       => __( 'First', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
        ),


      ),
















        ),

      ),

    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $slider_meta_box );

}


add_action( 'add_meta_boxes', 'scpt_shortcode_metabox' );
function scpt_shortcode_metabox()
{
    add_meta_box( 'cpt_slider_shortcode_id', 'Shortcode', 'slider_meta_box_callback', 'slider', 'side', 'core' );
}

function slider_meta_box_callback( $post ){
	if(get_post_status($post->ID)=='publish'){ 
		echo '<p class="slider_cpt_shortcode_p">Copy the following shortcode and place it within any page or post. Even you can add this shortcode within the text widgets.</p>';
		echo '<textarea name="slider_cpt" class="slider_cpt_shortcode" readonly  onClick="javascript:this.form.slider_cpt.focus();this.form.slider_cpt.select();">[slider id="'.$post->ID.'" ]</textarea>';
	} else { 
		echo '<p class="slider_cpt_shortcode_p">Please click on the <strong>Publish</strong> button to get the slider shortcode</p>';
	 }
}


