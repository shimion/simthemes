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
        'std'         => 'on',
      ),
	  
	  
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
            'value'       => 'blindX',
            'label'       => __( 'Blind X', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'blindY',
            'label'       => __( 'Blind Y', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'cover',
            'label'       => __( 'Cover', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'curtainX',
            'label'       => __( 'Curtain X', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'curtainY',
            'label'       => __( 'Curtain Y', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'fade',
            'label'       => __( 'Fade', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'fadeZoom',
            'label'       => __( 'Fade Zoom', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'growX',
            'label'       => __( 'Grow X', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'growY',
            'label'       => __( 'Grow Y', 'SimThemes' ),
            'src'         => ''
          ),
        ),


      ),




      array(
        'label'       => __( 'Slider Speed', 'SimThemes' ),
        'id'          => 'slider_speed',
        'type'        => 'text',
        'desc'        => sprintf( __( 'Default: 1000', 'SimThemes' )),
        'std'         => '1000',
		'condition'   => ''
      ),


      array(
        'label'       => __( 'Slider Time Out', 'SimThemes' ),
        'id'          => 'timeout',
        'type'        => 'text',
        'desc'        => sprintf( __( 'Default: 4000', 'SimThemes' )),
        'std'         => '4000',
		'condition'   => ''
      ),



		
	  
	  
      array(
        'label'       => __( 'Auto Play Delay', 'SimThemes' ),
        'id'          => 'autoPlayDelay',
        'type'        => 'text',
        'desc'        => sprintf( __( 'How long will the auto play delay. (ie. Default value is 4000)', 'SimThemes' )),
        'std'         => '4000',
		'condition'   => 'autoPlay:is(on),autoPlay:not()'
      ),
/*      array(
        'label'       => __( 'Slider Width', 'SimThemes' ),
        'id'          => 'sliderwidth',
        'type'        => 'text',
        'desc'        => sprintf( __( 'Slider Width here', 'SimThemes' )),
        'std'         => '1200px'
      ),
*/	  
      array(
        'label'       => __( 'Slider Height', 'SimThemes' ),
        'id'          => 'sliderheight',
        'type'        => 'text',
        'desc'        => sprintf( __( 'Slider height Here', 'SimThemes' )),
        'std'         => '650px'
      ),
	  
	  
      array(
        'label'       => __( 'Show Arrows', 'SimThemes' ),
        'id'          => 'arrows',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Arrows will show when set to %s.', 'SimThemes' ), '<code>on</code>' ),
        'std'         => 'on',
      ),

      array(
        'label'       => __( 'Show Pagination', 'SimThemes' ),
        'id'          => 'pavigation',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Pavigation will show when set to %s.', 'SimThemes' ), '<code>on</code>' ),
        'std'         => 'on',
      ),
	  


	array(
			'id'          => 'sliod_bg_color',
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





	  
	  
/*      array(
        'label'       => __( 'Pause On Hover', 'SimThemes' ),
        'id'          => 'pauseOnHover',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Slideshow will push  when set to On.', 'SimThemes' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
      array(
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
	

*/	  
	  
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


/*      array(
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
*/


		  
		  
      array(
        'label'       => __( 'Show Overlay Text', 'SimThemes' ),
        'id'          => 'overlayshowhide',
        'type'        => 'on-off',
        'desc'        => '',
        'std'         => 'on',
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








/*		array(
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
*/







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
            'value'       => 'bounce',
            'label'       => __( 'bounce', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'flash',
            'label'       => __( 'flash', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'pulse',
            'label'       => __( 'pulse', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'rubberBand',
            'label'       => __( 'rubberBand', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'shake',
            'label'       => __( 'shake', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'swing',
            'label'       => __( 'swing', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'tada',
            'label'       => __( 'tada', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'wobble',
            'label'       => __( 'wobble', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'bounceIn',
            'label'       => __( 'bounceIn', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'bounceInDown',
            'label'       => __( 'bounceInDown', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'bounceInLeft',
            'label'       => __( 'bounceInLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'bounceInRight',
            'label'       => __( 'bounceInRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'bounceInUp',
            'label'       => __( 'bounceInUp', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'bounceOut',
            'label'       => __( 'bounceOut', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'bounceOutDown',
            'label'       => __( 'bounceOutDown', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'bounceOutLeft',
            'label'       => __( 'bounceOutLeft', 'SimThemes' ),
            'src'         => ''
          ),

          array(
            'value'       => 'bounceOutRight',
            'label'       => __( 'bounceOutRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'bounceOutUp',
            'label'       => __( 'bounceOutUp', 'SimThemes' ),
            'src'         => ''
          ),
*/		  
          array(
            'value'       => 'fadeIn',
            'label'       => __( 'fadeIn', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeInDown',
            'label'       => __( 'fadeInDown', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeInDownBig',
            'label'       => __( 'fadeInDownBig', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeInLeft',
            'label'       => __( 'fadeInLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeInLeftBig',
            'label'       => __( 'fadeInLeftBig', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeInRight',
            'label'       => __( 'fadeInRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeInUp',
            'label'       => __( 'fadeInUp', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeInUpBig',
            'label'       => __( 'fadeInUpBig', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'fadeOut',
            'label'       => __( 'fadeOut', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeOutDown',
            'label'       => __( 'fadeOutDown', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeOutDownBig',
            'label'       => __( 'fadeOutDownBig', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeOutLeft',
            'label'       => __( 'fadeOutLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeOutLeftBig',
            'label'       => __( 'fadeOutLeftBig', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeOutRight',
            'label'       => __( 'fadeOutRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeOutRightBig',
            'label'       => __( 'fadeOutRightBig', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeOutUp',
            'label'       => __( 'fadeOutUp', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'fadeOutUpBig',
            'label'       => __( 'fadeOutUpBig', 'SimThemes' ),
            'src'         => ''
          ),
*/		  
          array(
            'value'       => 'flip',
            'label'       => __( 'flip', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'flipInX',
            'label'       => __( 'flipInX', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'flipInY',
            'label'       => __( 'flipInY', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'flipOutX',
            'label'       => __( 'flipOutX', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'flipOutY',
            'label'       => __( 'flipOutY', 'SimThemes' ),
            'src'         => ''
          ),
*/		  
          array(
            'value'       => 'lightSpeedIn',
            'label'       => __( 'lightSpeedIn', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'lightSpeedOut',
            'label'       => __( 'lightSpeedOut', 'SimThemes' ),
            'src'         => ''
          ),
*/		  
          array(
            'value'       => 'rotateIn',
            'label'       => __( 'rotateIn', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'rotateInDownLeft',
            'label'       => __( 'rotateInDownLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'rotateInDownRight',
            'label'       => __( 'rotateInDownRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'rotateInUpLeft',
            'label'       => __( 'rotateInUpLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'rotateInUpRight',
            'label'       => __( 'rotateInUpRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'rotateOut',
            'label'       => __( 'rotateOut', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'rotateOutDownLeft',
            'label'       => __( 'rotateOutDownLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'rotateOutUpLeft',
            'label'       => __( 'rotateOutUpLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'rotateOutUpRight',
            'label'       => __( 'rotateOutUpRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
*/          array(
            'value'       => 'hinge',
            'label'       => __( 'hinge', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'rollIn',
            'label'       => __( 'rollIn', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'rollOut',
            'label'       => __( 'rollOut', 'SimThemes' ),
            'src'         => ''
          ),
*/		  
          array(
            'value'       => 'zoomIn',
            'label'       => __( 'zoomIn', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'zoomInDown',
            'label'       => __( 'zoomInDown', 'SimThemes' ),
            'src'         => ''
          ),
*/		  
          array(
            'value'       => 'zoomInLeft',
            'label'       => __( 'zoomInLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'zoomInRight',
            'label'       => __( 'zoomInRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'zoomInUp',
            'label'       => __( 'zoomInUp', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'zoomOut',
            'label'       => __( 'zoomOut', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'zoomOutDown',
            'label'       => __( 'zoomOutDown', 'SimThemes' ),
            'src'         => ''
          ),
*/		  
          array(
            'value'       => 'zoomOutLeft',
            'label'       => __( 'zoomOutLeft', 'SimThemes' ),
            'src'         => ''
          ),
		  
/*          array(
            'value'       => 'zoomOutRight',
            'label'       => __( 'zoomOutRight', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'zoomOutUp',
            'label'       => __( 'zoomOutUp', 'SimThemes' ),
            'src'         => ''
          ),
*/		  
		  
		  
		  
		  
		  
        ),


      ),


	      array(
        'label'       => __( 'Show Read More Button', 'SimThemes' ),
        'id'          => 'readmoreshow',
        'type'        => 'on-off',
        'desc'        => sprintf( __( '', 'SimThemes' ), '<code>on</code>' ),
        'std'         => 'on',
      ),





	array(
			'id'          => 'Read_More_Text',
			'label'       => __( 'Read More Text', 'SimThemes' ),
			'desc'        => '',
			'std'         => 'Read More',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => 'readmoreshow:is(on),readmoreshow:not()',
			'operator'    => 'and'
		  ),
	
	


	array(
			'id'          => 'Read_More_url',
			'label'       => __( 'Read More Button URL', 'SimThemes' ),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '15',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => 'readmoreshow:is(on),readmoreshow:not()',
			'operator'    => 'and'
		  ),
	
	

	
	
	
		  array(
			'id'          => 'more_button_color',
			'label'       => __( 'Button color', 'SimThemes' ),
			'desc'        => '',
			'std'         => '',
			'type'        => 'colorpicker',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => 'readmoreshow:is(on),readmoreshow:not()',
			'operator'    => 'and'
		  ),
	
	
	
	
	
	
			array(
			'id'          => 'more_button_animation',
			'label'       => __( 'Button Animation', 'SimThemes' ),
			'desc'        => __( '', 'SimThemes' ),
			'std'         => '',
			'type'        => 'select',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => 'readmoreshow:is(on),readmoreshow:not()',
			'operator'    => 'and',
			'choices'     => array( 
			  array(
				'value'       => 'bounce',
				'label'       => __( 'bounce', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'flash',
				'label'       => __( 'flash', 'SimThemes' ),
				'src'         => ''
			  ),
			  array(
				'value'       => 'pulse',
				'label'       => __( 'pulse', 'SimThemes' ),
				'src'         => ''
			  ),
			  array(
				'value'       => 'rubberBand',
				'label'       => __( 'rubberBand', 'SimThemes' ),
				'src'         => ''
			  ),
			  array(
				'value'       => 'shake',
				'label'       => __( 'shake', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'swing',
				'label'       => __( 'swing', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'tada',
				'label'       => __( 'tada', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'wobble',
				'label'       => __( 'wobble', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'bounceIn',
				'label'       => __( 'bounceIn', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'bounceInDown',
				'label'       => __( 'bounceInDown', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'bounceInLeft',
				'label'       => __( 'bounceInLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'bounceInRight',
				'label'       => __( 'bounceInRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'bounceInUp',
				'label'       => __( 'bounceInUp', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'bounceOut',
				'label'       => __( 'bounceOut', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'bounceOutDown',
				'label'       => __( 'bounceOutDown', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'bounceOutLeft',
				'label'       => __( 'bounceOutLeft', 'SimThemes' ),
				'src'         => ''
			  ),
	
			  array(
				'value'       => 'bounceOutRight',
				'label'       => __( 'bounceOutRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'bounceOutUp',
				'label'       => __( 'bounceOutUp', 'SimThemes' ),
				'src'         => ''
			  ),
	*/		  
			  array(
				'value'       => 'fadeIn',
				'label'       => __( 'fadeIn', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeInDown',
				'label'       => __( 'fadeInDown', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeInDownBig',
				'label'       => __( 'fadeInDownBig', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeInLeft',
				'label'       => __( 'fadeInLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeInLeftBig',
				'label'       => __( 'fadeInLeftBig', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeInRight',
				'label'       => __( 'fadeInRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeInUp',
				'label'       => __( 'fadeInUp', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeInUpBig',
				'label'       => __( 'fadeInUpBig', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'fadeOut',
				'label'       => __( 'fadeOut', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeOutDown',
				'label'       => __( 'fadeOutDown', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeOutDownBig',
				'label'       => __( 'fadeOutDownBig', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeOutLeft',
				'label'       => __( 'fadeOutLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeOutLeftBig',
				'label'       => __( 'fadeOutLeftBig', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeOutRight',
				'label'       => __( 'fadeOutRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeOutRightBig',
				'label'       => __( 'fadeOutRightBig', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeOutUp',
				'label'       => __( 'fadeOutUp', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'fadeOutUpBig',
				'label'       => __( 'fadeOutUpBig', 'SimThemes' ),
				'src'         => ''
			  ),
	*/		  
			  array(
				'value'       => 'flip',
				'label'       => __( 'flip', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'flipInX',
				'label'       => __( 'flipInX', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'flipInY',
				'label'       => __( 'flipInY', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'flipOutX',
				'label'       => __( 'flipOutX', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'flipOutY',
				'label'       => __( 'flipOutY', 'SimThemes' ),
				'src'         => ''
			  ),
	*/		  
			  array(
				'value'       => 'lightSpeedIn',
				'label'       => __( 'lightSpeedIn', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'lightSpeedOut',
				'label'       => __( 'lightSpeedOut', 'SimThemes' ),
				'src'         => ''
			  ),
	*/		  
			  array(
				'value'       => 'rotateIn',
				'label'       => __( 'rotateIn', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'rotateInDownLeft',
				'label'       => __( 'rotateInDownLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'rotateInDownRight',
				'label'       => __( 'rotateInDownRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'rotateInUpLeft',
				'label'       => __( 'rotateInUpLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'rotateInUpRight',
				'label'       => __( 'rotateInUpRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'rotateOut',
				'label'       => __( 'rotateOut', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'rotateOutDownLeft',
				'label'       => __( 'rotateOutDownLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'rotateOutUpLeft',
				'label'       => __( 'rotateOutUpLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'rotateOutUpRight',
				'label'       => __( 'rotateOutUpRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	*/          array(
				'value'       => 'hinge',
				'label'       => __( 'hinge', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'rollIn',
				'label'       => __( 'rollIn', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'rollOut',
				'label'       => __( 'rollOut', 'SimThemes' ),
				'src'         => ''
			  ),
	*/		  
			  array(
				'value'       => 'zoomIn',
				'label'       => __( 'zoomIn', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'zoomInDown',
				'label'       => __( 'zoomInDown', 'SimThemes' ),
				'src'         => ''
			  ),
	*/		  
			  array(
				'value'       => 'zoomInLeft',
				'label'       => __( 'zoomInLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'zoomInRight',
				'label'       => __( 'zoomInRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'zoomInUp',
				'label'       => __( 'zoomInUp', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'zoomOut',
				'label'       => __( 'zoomOut', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'zoomOutDown',
				'label'       => __( 'zoomOutDown', 'SimThemes' ),
				'src'         => ''
			  ),
	*/		  
			  array(
				'value'       => 'zoomOutLeft',
				'label'       => __( 'zoomOutLeft', 'SimThemes' ),
				'src'         => ''
			  ),
			  
	/*          array(
				'value'       => 'zoomOutRight',
				'label'       => __( 'zoomOutRight', 'SimThemes' ),
				'src'         => ''
			  ),
			  
			  array(
				'value'       => 'zoomOutUp',
				'label'       => __( 'zoomOutUp', 'SimThemes' ),
				'src'         => ''
			  ),
	*/		  
			  
			  
			  
			  
			  
			),
	 ),






/*		array(
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
*/








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










/*      array(
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

*/














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


