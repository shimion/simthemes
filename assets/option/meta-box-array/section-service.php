<?php
global $service_section;
$service_section = array(array(
				'label'       => __( 'Service Section', 'SimThemes' ),
				'id'          => 'service-section',
				'type'        => 'tab'
			  ),


			  array(
				'label'       => __( 'Show Service Section', 'SimThemes' ),
				'id'          => 'show_or_hide_service',
				'type'        => 'on-off',
				'desc'        => sprintf( __( '', 'SimThemes' ), '<code>on</code>' ),
				'std'         => 'on'
			  ),





			  array(
				'label'       => __( 'Service Section Background', 'SimThemes' ),
				'id'          => 'ser_bg',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'background',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and'
			),




			  array(
				'label'       => __( 'Title Color', 'SimThemes' ),
				'id'          => 'ser_tit_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and'
			),

			  array(
				'label'       => __( 'Text Color', 'SimThemes' ),
				'id'          => 'ser_text_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and'
			),



			  array(
				'label'       => __( 'Link Color', 'SimThemes' ),
				'id'          => 'ser_link_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and'
			),


			  array(
				'label'       => __( 'Hover Color', 'SimThemes' ),
				'id'          => 'ser_hover_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and'
			),




			  


			array(
					'id'          => 'show_image_or_icon',
					'label'       => __( 'Show Image or Icon for Each Services', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'icon',
					'type'        => 'radio',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
					'operator'    => 'and',
					'choices'     => array( 
					  array(
						'value'       => 'icon',
						'label'       => __( 'Icon', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'image',
						'label'       => __( 'Image', 'SimThemes' ),
						'src'         => ''
					  )
					)
				  ),





			 
			array(
					'id'          => 'select_column',
					'label'       => __( 'Select Column Layout', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'Four Column',
					'type'        => 'radio',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
					'operator'    => 'and',
					'choices'     => $ST_core->layout_setting_array_metabox()
				  ),









			 
			  array(
				'label'       => __( 'Service Section Title', 'SimThemes' ),
				'id'          => 'service_sec_title',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and',
				'std'		  =>'OUR SERVICES',
			),
			



			  
			  




			  array(
				'label'       => __( 'Service Section Text', 'SimThemes' ),
				'id'          => 'service_sec_text',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'textarea-simple',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and',
				'std'		  =>'We create awesome Websites and Mobile Apps, the perfect solution for your project. <br>We don\'t make designs, we make magic!',
			),
			




			array(
					'id'          => 'show_service_title',
					'label'       => __( 'Show Individual Service Title', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'Yes',
					'type'        => 'select',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
					'operator'    => 'and',
					'choices'     => array( 
					  array(
						'value'       => 'Yes',
						'label'       => __( 'Yes', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'No',
						'label'       => __( 'No', 'SimThemes' ),
						'src'         => ''
					  )
					)
				  ),





			  array(
			'id'          => 'ind_service_title_ltd',
			'label'       => __( 'Individual Service Title Limit', 'theme-text-domain' ),
			'desc'        => __( '' ),
				'std'         => '3',
				'type'        => 'numeric-slider',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '3,15,1',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and'
			  ),
					 
			  
			  

			array(
					'id'          => 'show_service_text',
					'label'       => __( 'Show Individual Service Text', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'Yes',
					'type'        => 'select',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
					'operator'    => 'and',
					'choices'     => array( 
					  array(
						'value'       => 'Yes',
						'label'       => __( 'Yes', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'No',
						'label'       => __( 'No', 'SimThemes' ),
						'src'         => ''
					  )
					)
				  ),





			  array(
			'id'          => 'ind_service_text_ltd',
			'label'       => __( 'Individual Service Text Limit', 'theme-text-domain' ),
			'desc'        => __( '' ),
				'std'         => '15',
				'type'        => 'numeric-slider',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '10,30,1',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and'
			  ),
					 
			  
			  

			  array(
				'id'          => 'add_service',
				'label'       => __( 'Services', 'SimThemes' ),
				'desc'        => __( '', 'SimThemes' ),
				'std'         => '',
				'type'        => 'list-item',
				'section'     => 'option_types',
				'rows'        => '8',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_service:is(on),show_or_hide_service:not()',
				'operator'    => 'and',
				'settings'    => array( 
				
/*					array(
							'id'          => 'show_custom_title_or_not',
							'label'       => __( '', 'SimThemes' ),
							'desc'        => __( 'If check, Please provide the title at the top', 'SimThemes' ),
							'std'         => 'No',
							'type'        => 'checkbox',
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
								'value'       => 'No',
								'label'       => __( 'Show Custom Title', 'SimThemes' ),
								'src'         => ''
							  ),
							)
						  ),





					array(
							'id'          => 'show_custom_text_or_not',
							'label'       => __( '', 'SimThemes' ),
							'desc'        => __( 'If check, Please fill up the discription field', 'SimThemes' ),
							'std'         => 'No',
							'type'        => 'checkbox',
							'section'     => 'option_types',
							'rows'        => '',
							'post_type'   => '',
							'taxonomy'    => '',
							'min_max_step'=> '',
							'class'       => 'show_custom_text_or_not',
							'condition'   => '',
							'operator'    => 'and',
							'choices'     => array( 
							  array(
								'value'       => 'Yes',
								'label'       => __( 'Show Custom Description', 'SimThemes' ),
								'src'         => ''
							  )
							)
						  ),





					  array(
						'label'       => __( 'Description', 'SimThemes' ),
						'id'          => 'service_custom_text',
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'textarea-simple',
						'section'     => 'option_types',
						'rows'        => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => 'service_custom_text',
						'condition'   => '',
						'operator'    => 'and',
						'std'		  =>'',
					),
					

*/




				
				
				
					  array(
						'label'       => __( 'Add Service', 'SimThemes' ),
						'id'          => 'add_service',
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'custom-post-type-select',
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => 'service',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'operator'    => 'and'
					),
				
				
				)
			),);		
