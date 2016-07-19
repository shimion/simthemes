<?php
add_filter('option_tree_settings_args', 'ot__heading', 40);
function ot__heading($custom_settings){

global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'header','title' => 'Header Settings');


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'header_layout',
        'type'        => 'textblock',
        'desc'        => __('Header Layout Option', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'header',

		
	);
	


      $custom_settings['settings'][] = array(
        'id'          => 'header_layout_settings',
        'label'       => __( 'Select a Header Layout', 'SimThemes' ),
        'desc'        => sprintf( __( 'Please select a header layout.', 'SimThemes' ), '<code>ot_radio_images</code>' ),
        'std'         => 'first',
        'type'        => 'radio-image',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'choices'     => array( 
          array(
            'value'       => 'first',
            'label'       => __( 'First', 'SimThemes' ),
            'src'         => ST_template_img.'1.jpg'
          ),
          array(
            'value'       => 'second',
            'label'       => __( 'Third', 'SimThemes' ),
            'src'         => ST_template_img.'2.jpg'
          ),
          array(
            'value'       => 'third',
            'label'       => __( 'Third', 'SimThemes' ),
            'src'         => ST_template_img.'3.jpg'
          ),
          array(
            'value'       => 'fourth',
            'label'       => __( 'Fourth', 'SimThemes' ),
            'src'         => ST_template_img.'4.jpg'
          )
        ),
        'operator'    => 'and'
      );

	


	
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'header_setting',
        'type'        => 'textblock',
        'desc'        => __('Header Setting', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'header',

		
	);


	
	$custom_settings['settings'][] = array(
		'id'          => 'logo_url',
        'label'       => __('Custom Image Logo', 'simthemes' ),
        'desc'        => 'Upload an image to use as your logo.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	

	$custom_settings['settings'][] = array(
		'id'          => 'header_height',
        'label'       => __('Header Height', 'simthemes' ),
        'desc'        => __('Example: 50px', 'simthemes' ),
        'std'         => array(
								'0' =>'50',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	

	
	$custom_settings['settings'][] = array(
		'id'          => 'logo_mergin_top',
        'label'       => __('Top margin of the logo', 'simthemes' ),
        'desc'        => __('Example: 10px', 'simthemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'logo_mergin_bottom',
        'label'       => __('Bottom margin of the logo', 'simthemes' ),
        'desc'        => __('Example: 10px', 'simthemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),
        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
/*	$custom_settings['settings'][] = array(
		'id'          => 'menu_mergin_top',
        'label'       => __('Top margin of the Menu/Navigation', 'simthemes' ),
        'desc'        => __('Example: 10px', 'simthemes' ),
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'menu_mergin_bottom',
        'label'       => __('Bottom margin of the Menu/Navigation', 'simthemes' ),
        'desc'        => __('Example: 10px', 'simthemes' ),
        'std'         => '',
        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
*/	
	
	$custom_settings['settings'][] = array(
		'id'          => 'favicon_url',
        'label'       => __('Custom Favicon', 'simthemes' ),
        'desc'        => __('Upload an image to use as your favicon.', 'simthemes' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	


	$custom_settings['settings'][] = array(
		'id'          => 'Transparent_Header',
        'label'       => __('Transparent Header', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'off',
		'type'        => 'on-off',		
        'section'     => 'header',
	);




	$custom_settings['settings'][] = array(
		'id'          => 'Display_Header_Right',
        'label'       => __('Display Header Right Section', 'SimThemes' ),
        'desc'        => __('This setting will only work for Header Third layout', 'SimThemes' ),
        'std'         => 'on',
		'type'        => 'on-off',		
        'section'     => 'header',
	);




/*	$custom_settings['settings'][] = array(
		'id'          => 'Display_Header_Right',
        'label'       => __('Display Header Right Section', 'SimThemes' ),
        'desc'        => __('This setting will only work for Header Third layout.', 'SimThemes' ),
        'std'         => 'yes',
		
        'type'        => 'checkbox',
		
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'yes',
            'label'   => __( 'Check to Display Header Right Section. Uncheck to hide them.', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'header',
	);
*/



	$custom_settings['settings'][] = array(
		'id'          => 'header_right',
        'label'       => __('Show Header Right', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'search',
        'type'        => 'select',
		'class'		  => 'header_top',
		'section'     => 'header',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'social',
            'label'   => __( 'Social', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'search',
            'label'   => __( 'Search', 'SimThemes' ),
          ),
		 array(
            'value'   => 'custom_text',
            'label'   => __( 'Custom Text', 'SimThemes' ),
          ),
		 array(
            'value'   => 'widget_header_right',
            'label'   => __( 'Header right widget', 'SimThemes' ),
          ),
        ),
        
	);



	$custom_settings['settings'][] = array(
		'id'          => 'header_custom_text_right',
        'label'       => __('Header Right Custom Text', 'simthemes' ),
        'desc'        => __('Custom text for header Right.', 'simthemes' ),
        'type'        => 'text',
        'section'     => 'header',
        'std'         => __('', 'simthemes' ),
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Header Right Text Color', 'SimThemes' ),
        'id'          => 'header_right_text_color',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('Change header right section text color', 'SimThemes' ),
        'section'     => 'header',
        'class'          => '',
	);
	
	



	$custom_settings['settings'][] = array(
		'id'          => 'header_border_top',
        'label'       => __('Header Border Top', 'simthemes' ),
        'desc'        => __('', 'simthemes' ),
        'type'        => 'border',
        'section'     => 'header',
        'std'        => 
				array(
								'width' =>'1',
								'unit' =>'px',
								'style' =>'solid',
								'color' =>'#FFF',
								//'background-size' =>'',
								//'background-image' => '',
				),
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);



	$custom_settings['settings'][] = array(
		'id'          => 'header_border_bottom',
        'label'       => __('Header Border Bottom', 'simthemes' ),
        'desc'        => __('', 'simthemes' ),
        'type'        => 'border',
        'section'     => 'header',
        'std'        => 
				array(
								'width' =>'1',
								'unit' =>'px',
								'style' =>'solid',
								'color' =>'#FFF',
								//'background-size' =>'',
								//'background-image' => '',
				),
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);




	$custom_settings['settings'][] = array(
	
		'label'       => __('Header Background', 'SimThemes' ),
        'id'          => 'Header_Background',
        'type'        => 'textblock',
        'desc'        => __('Header Background', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'header',

		
	);




	$custom_settings['settings'][] = array(
	
						'id'          => 'bg_header',
						'label'       => __( 'Header Background', 'SimThemes' ),
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'background',
						//'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
							'std'        => array(
								'background-color' =>'#f8f8f8',
								'background-repeat' =>'no-repeat',
								'background-attachment' =>'',
								'background-position' =>'center',
								'background-size' =>'',
								'background-image' => '',
							),

						'section'     => 'header',

		
	);


	
	
	


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'header_top_section',
        'type'        => 'textblock',
        'desc'        => __('Header Top Section', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'header',

		
	);





	
	
	$custom_settings['settings'][] = array(
		'id'          => 'header_top',
        'label'       => __('Show Header Top', 'SimThemes' ),
        'desc'        => __('This setting will only work for Header Second, Third and Fourth header layout.', 'SimThemes' ),
        'std'         => 'show',
        'type'        => 'select',
		'class'		  => 'header_top',
		'section'     => 'header',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'show',
            'label'   => __( 'Show', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'hide',
            'label'   => __( 'Hide', 'SimThemes' ),
          )
        ),
        
	);
	
	


	$custom_settings['settings'][] = array(
		'label'       => __('Header Top Background Color', 'SimThemes' ),
        'id'          => 'header_top_bg_color',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('Change header top background color', 'SimThemes' ),
        'section'     => 'header',
        'class'          => 'header_top_selection',
	);
	
	
	$custom_settings['settings'][] = array(
		'label'       => __('Header Top Text Color', 'SimThemes' ),
        'id'          => 'header_top_text_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change header top text color', 'SimThemes' ),
        'section'     => 'header',
        'class'          => 'header_top_selection',
	);
	
	

/*	$custom_settings['settings'][] = array(
		'id'          => 'Display_Header_Top_Left',
        'label'       => __('Display Header Top Left Section', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'checkbox',
		
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'yes',
            'label'   => __( 'Check to Display Header Top Left Section. Uncheck to hide them.', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'header',
	);

*/






	$custom_settings['settings'][] = array(
		'id'          => 'header_top_left',
        'label'       => __('Header Top Left Section', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'custom_text',
        'type'        => 'select',
		'class'		  => 'header_top',
		'section'     => 'header',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'social',
            'label'   => __( 'Social', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'search',
            'label'   => __( 'Search', 'SimThemes' ),
          ),
		 array(
            'value'   => 'custom_text',
            'label'   => __( 'Custom Text', 'SimThemes' ),
          ),
		 array(
            'value'   => 'widget_header_left_top',
            'label'   => __( 'Header Top Left Widget', 'SimThemes' ),
          ),
        ),
        
	);



	$custom_settings['settings'][] = array(
		'id'          => 'header_top_left_text',
        'label'       => __('Header Top Left Text', 'simthemes' ),
        'desc'        => __('It will work if you select the custom text on just above', 'simthemes' ),
        'type'        => 'text',
        'section'     => 'header',
        'std'         => __('', 'simthemes' ),
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);





/*	$custom_settings['settings'][] = array(
		'id'          => 'Display_Header_Top_Right',
        'label'       => __('Display Header Top Right Section', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'checkbox',
		
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'yes',
            'label'   => __( 'Check to Display Header Top Right Section. Uncheck to hide them.', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'header',
	);

*/






	


	$custom_settings['settings'][] = array(
		'id'          => 'header_top_right',
        'label'       => __('Header Top Right Section', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'custom_text',
        'type'        => 'select',
		'class'		  => 'header_top',
		'section'     => 'header',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'social',
            'label'   => __( 'Social', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'search',
            'label'   => __( 'Search', 'SimThemes' ),
          ),
		 array(
            'value'   => 'custom_text',
            'label'   => __( 'Custom Text', 'SimThemes' ),
          ),
		 array(
            'value'   => 'widget_header_right_top',
            'label'   => __( 'Header Top Right Widget', 'SimThemes' ),
          ),
        ),
        
	);



	$custom_settings['settings'][] = array(
		'id'          => 'header_top_right_text',
        'label'       => __('Header Top Right Text', 'simthemes' ),
        'desc'        => __('It will work if you select the custom text on just above', 'simthemes' ),
        'type'        => 'text',
        'section'     => 'header',
        'std'         => __('', 'simthemes' ),
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);


	
	$custom_settings['settings'][] = array(
		'id'          => 'header_top_border_top',
        'label'       => __('Header Top Section Border Top', 'simthemes' ),
        'desc'        => __('', 'simthemes' ),
        'type'        => 'border',
        'section'     => 'header',
        'std'        => 
				array(
								'width' =>'0',
								'unit' =>'px',
								'style' =>'solid',
								'color' =>'#FFF',
								//'background-size' =>'',
								//'background-image' => '',
				),
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);



	$custom_settings['settings'][] = array(
		'id'          => 'header_top_border_bottom',
        'label'       => __('Header Top Section Border Bottom', 'simthemes' ),
        'desc'        => __('', 'simthemes' ),
        'type'        => 'border',
        'section'     => 'header',
        'std'        => 
				array(
								'width' =>'0',
								'unit' =>'px',
								'style' =>'solid',
								'color' =>'#FFF',
								//'background-size' =>'',
								//'background-image' => '',
				),
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);


	return $custom_settings;
	
}




	