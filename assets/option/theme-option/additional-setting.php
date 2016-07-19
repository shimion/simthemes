<?php
add_filter('option_tree_settings_args', 'st__additional__option', 140);
function st__additional__option($custom_settings){



global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'additional','title' => 'Additional Setting');


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'aditional',
        'type'        => 'textblock',
        'desc'        => __('Button Setting', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'additional',

		
	);



	
					$custom_settings['settings'][] = array(
						'id'          => 'button_type',
						'label'       => __('Button type', 'SimThemes' ),
						'desc'        => __('if check it, the gradient will appear on the button.', 'SimThemes' ),
						'std'         => 'yes',
						'type'        => 'select',
						
						'choices'     => array(
						 
						 $the_array[] = 
						 array(
							'value'   => '',
							'label'   => __( 'Default', 'SimThemes' ),
						  ), 
/*						 array(
							'value'   => 'active',
							'label'   => __( 'Active', 'SimThemes' ),
						  ), 
*/						 array(
							'value'   => 'btn-border',
							'label'   => __( 'Border Style', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_1',
							'label'   => __( 'Custom 1', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_2',
							'label'   => __( 'Custom 2', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_3',
							'label'   => __( 'Custom 3', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_4',
							'label'   => __( 'Custom 4', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_5',
							'label'   => __( 'Custom 5', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_6',
							'label'   => __( 'Custom 6', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_7',
							'label'   => __( 'Custom 7', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_8',
							'label'   => __( 'Custom 8', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_9',
							'label'   => __( 'Custom 9', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_10',
							'label'   => __( 'Custom 10', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_11',
							'label'   => __( 'Custom 11', 'SimThemes' ),
						  ), 
						 array(
							'value'   => 'btn-st_12',
							'label'   => __( 'Custom 12', 'SimThemes' ),
						  ), 
						),
						
						'section'     => 'additional',
					);
				
				
					
					
				
					$custom_settings['settings'][] = array(
						'id'          => 'show_gradient',
						'label'       => __('Display Gradient', 'SimThemes' ),
						'desc'        => __('if check it, the gradient will appear on the button.', 'SimThemes' ),
						'std'         => 'yes',
						'type'        => 'checkbox',
						
						'choices'     => array(
						 
						 $the_array[] = 
						 array(
							'value'   => 'yes',
							'label'   => __( 'Check to display the gradient on the button.', 'SimThemes' ),
						  ), 
						),
						
						'section'     => 'additional',
					);
				
				
					
					
				
				


						$custom_settings['settings'][] = array(
							'label'       => __('Button Background Color', 'SimThemes' ),
							'id'          => 'button_Color',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('if gradient is set then it will work as gradient first color. unless it will appear as normal background color', 'SimThemes' ),
							'section'     => 'additional',
							
						);




						$custom_settings['settings'][] = array(
							'label'       => __('Button Background Color Two', 'SimThemes' ),
							'id'          => 'button_Color_2',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('if gradient is set then it will work as gradient second color', 'SimThemes' ),
							'section'     => 'additional',
							
						);




						$custom_settings['settings'][] = array(
							'label'       => __('Button Background Color Hover', 'SimThemes' ),
							'id'          => 'button_Color_hover',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('if gradient is set then it will work as gradient first color. unless it will appear as normal background hover color', 'SimThemes' ),
							'section'     => 'additional',
							
						);





						$custom_settings['settings'][] = array(
							'label'       => __('Button Background Color Hover Two', 'SimThemes' ),
							'id'          => 'button_Color_hover2',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('if gradient is set then it will work as second gradient color. ', 'SimThemes' ),
							'section'     => 'additional',
							
						);





						$custom_settings['settings'][] = array(
							'label'       => __('Button Text Color', 'SimThemes' ),
							'id'          => 'button_text_color',
							'type'        => 'colorpicker',
							'desc'        => __('This is a global setting.', 'SimThemes' ),
							'section'     => 'additional',
							
						);


						$custom_settings['settings'][] = array(
							'label'       => __('Button Text Color Hover', 'SimThemes' ),
							'id'          => 'button_text_color_hover',
							'type'        => 'colorpicker',
							'desc'        => __('This is a global setting.', 'SimThemes' ),
							'section'     => 'additional',
							
						);



						$custom_settings['settings'][] = array(
							'label'       => __('Button Border Color', 'SimThemes' ),
							'id'          => 'button_border_color',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('This is a global setting.', 'SimThemes' ),
							'section'     => 'additional',
							
						);

						$custom_settings['settings'][] = array(
							'label'       => __('Button Border Color Hover', 'SimThemes' ),
							'id'          => 'button_border_color_hover',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('This is a global setting.', 'SimThemes' ),
							'section'     => 'additional',
							
						);



	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'aditional-pagination',
        'type'        => 'textblock',
        'desc'        => __('Pagination Setting', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'additional',

		
	);


						$custom_settings['settings'][] = array(
							'label'       => __('Pagination Text Color', 'SimThemes' ),
							'id'          => 'page_text_color',
							'type'        => 'colorpicker',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'additional',
							
						);




						$custom_settings['settings'][] = array(
							'label'       => __('Pagination Hover Background', 'SimThemes' ),
							'id'          => 'page_hov_bg_color',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'additional',
							
						);



						$custom_settings['settings'][] = array(
							'label'       => __('Pagination Hover Text Color', 'SimThemes' ),
							'id'          => 'page_hov_txt_color',
							'type'        => 'colorpicker',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'additional',
							
						);







						$custom_settings['settings'][] = array(
							'label'       => __('Pagination Active Background Color', 'SimThemes' ),
							'id'          => 'page_ac_bg_color',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'additional',
							
						);


						$custom_settings['settings'][] = array(
							'label'       => __('Pagination Active Text Color', 'SimThemes' ),
							'id'          => 'page_ac_tx_color',
							'type'        => 'colorpicker',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'additional',
							
						);




						$custom_settings['settings'][] = array(
							'label'       => __('Pagination Active Hover Background Color', 'SimThemes' ),
							'id'          => 'page_ac_bg_color_hover',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'additional',
							
						);



						$custom_settings['settings'][] = array(
							'label'       => __('Pagination Active Hover Text Color', 'SimThemes' ),
							'id'          => 'page_ac_hover_tx_color',
							'type'        => 'colorpicker',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'additional',
							
						);



	return $custom_settings;

}