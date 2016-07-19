<?php
global $featured_section;
$featured_section = array(array(
				'label'       => __( 'Features Section', 'SimThemes' ),
				'id'          => 'features-section',
				'type'        => 'tab'
			  ),


			  array(
				'label'       => __( 'Show Features Section', 'SimThemes' ),
				'id'          => 'show_or_hide_features',
				'type'        => 'on-off',
				'desc'        => sprintf( __( '', 'SimThemes' ), '<code>on</code>' ),
				'std'         => 'on'
			  ),
			  

			  array(
				'label'       => __( 'Portfolio Section Background', 'SimThemes' ),
				'id'          => 'featured_bg',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'background',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and'
			),



			  array(
				'label'       => __( 'Title Color', 'SimThemes' ),
				'id'          => 'featured_tit_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and'
			),

			  array(
				'label'       => __( 'Text Color', 'SimThemes' ),
				'id'          => 'featured_text_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and'
			),



			  array(
				'label'       => __( 'Link Color', 'SimThemes' ),
				'id'          => 'featured_link_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and'
			),


			  array(
				'label'       => __( 'Hover Color', 'SimThemes' ),
				'id'          => 'featured_hover_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and'
			),







			array(
					'id'          => 'select_column_feature',
					'label'       => __( 'Select Column Layout', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'Three Column',
					'type'        => 'radio',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
					'operator'    => 'and',
					'choices'     => array( 
					  array(
						'value'       => 'Two Column',
						'label'       => __( 'Two Column', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'Three Column',
						'label'       => __( 'Three Column', 'SimThemes' ),
						'src'         => ''
					  )
					),
				  ),









			 
			  array(
				'label'       => __( 'Feature Section Title', 'SimThemes' ),
				'id'          => 'feature_sec_title',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and',
				'std'		  =>'OUR FEATURES',
			),
			



			  
			  




			  array(
				'label'       => __( 'Features Section Text', 'SimThemes' ),
				'id'          => 'feature_sec_text',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'textarea-simple',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and',
				'std'		  =>'These are some of SimThemes\'s Great Features. Explore the possibilities...',
			),
			




			array(
					'id'          => 'show_feature_title',
					'label'       => __( 'Show Individual Feature Title', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'Yes',
					'type'        => 'select',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
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
			'id'          => 'ind_feature_title_ltd',
			'label'       => __( 'Individual Features Title Limit', 'SimThemes' ),
			'desc'        => __( '' ),
				'std'         => '3',
				'type'        => 'numeric-slider',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '3,6,1',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and'
			  ),
					 
			  
			  

			array(
					'id'          => 'show_feature_text',
					'label'       => __( 'Show Individual Feature Text', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'Yes',
					'type'        => 'select',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
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
				'id'          => 'ind_feature_text_ltd',
				'label'       => __( 'Individual Feature Text Limit', 'theme-text-domain' ),
				'desc'        => __( '' ),
					'std'         => '10',
					'type'        => 'numeric-slider',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '10,15,1',
					'class'       => '',
					'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
					'operator'    => 'and'
				  ),
					 
			  
			  

			  array(
				'id'          => 'add_feature',
				'label'       => __( 'Features', 'SimThemes' ),
				'desc'        => __( '', 'SimThemes' ),
				'std'         => '',
				'type'        => 'list-item',
				'section'     => 'option_types',
				'rows'        => '8',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_features:is(on),show_or_hide_features:not()',
				'operator'    => 'and',
				'settings'    => array( 
				


					  array(
						'id'          => 'feature_icon',
						'label'       => __( 'Feature Icon', 'SimThemes' ),
						'desc'        => sprintf( __( 'Please select the icon', 'SimThemes' ) ),
						'std'         => '',
						'type'        => 'font-awesome',
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
					  ),
			
			
			

					  array(
						'id'          => 'feature_icon_hover',
						'label'       => __( 'Feature Icon Hover', 'SimThemes' ),
						'desc'        => sprintf( __( 'Please select the icon for the hover effect', 'SimThemes' ) ),
						'std'         => '',
						'type'        => 'font-awesome',
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
					  ),
			
			
			
				
				
				
					  array(
						'label'       => __( 'Description', 'SimThemes' ),
						'id'          => 'feature_text',
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'textarea-simple',
						'section'     => 'option_types',
						'rows'        => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'operator'    => 'and',
						'std'		  =>'',
					),


					  array(
						'label'       => __( 'URL', 'SimThemes' ),
						'id'          => 'feature_url',
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'text',
						'section'     => 'option_types',
						'rows'        => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'operator'    => 'and',
						'std'		  =>'',
					),



				
				
				)
			),);		
