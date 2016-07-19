<?php
global $portfolio_section;
$portfolio_section = array(array(
				'label'       => __( 'Portfolio Section', 'SimThemes' ),
				'id'          => 'portfolio-section',
				'type'        => 'tab'
			  ),


			  array(
				'label'       => __( 'Show Portfolio Section', 'SimThemes' ),
				'id'          => 'show_or_hide_Portfolio',
				'type'        => 'on-off',
				'desc'        => sprintf( __( '', 'SimThemes' ), '<code>on</code>' ),
				'std'         => 'on'
			  ),
			  


			  array(
				'label'       => __( 'Portfolio Section Background', 'SimThemes' ),
				'id'          => 'por_bg',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'background',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_Portfolio:is(on),show_or_hide_Portfolio:not()',
				'operator'    => 'and'
			),




			 
			array(
					'id'          => 'select_column_Portfolio',
					'label'       => __( 'Select Column Layout', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'One Column',
					'type'        => 'radio',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_Portfolio:is(on),show_or_hide_Portfolio:not()',
					'operator'    => 'and',
					'choices'     => array( 
/*					  array(
						'value'       => 'One Column',
						'label'       => __( 'One Column', 'SimThemes' ),
						'src'         => ''
					  ),
*/					  array(
						'value'       => 'Two Column',
						'label'       => __( 'Two Column', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'Three Column',
						'label'       => __( 'Three Column', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'Four Column',
						'label'       => __( 'Four Column', 'SimThemes' ),
						'src'         => ''
					  ),
/*					  array(
						'value'       => 'Six Column',
						'label'       => __( 'Six Column', 'SimThemes' ),
						'src'         => ''
					  ),
*/					),
				  ),









			 
			  array(
				'label'       => __( 'Portfolio Section Title', 'SimThemes' ),
				'id'          => 'Portfolio_sec_title',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_Portfolio:is(on),show_or_hide_Portfolio:not()',
				'operator'    => 'and',
				'std'		  =>'OUR PORTFOLIO',
			),
			



			  
			  




			  array(
				'label'       => __( 'Portfolio Section Text', 'SimThemes' ),
				'id'          => 'Portfolio_sec_text',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'textarea-simple',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_Portfolio:is(on),show_or_hide_Portfolio:not()',
				'operator'    => 'and',
				'std'		  =>'We are a small Portfolio with great skills. See the faces behind the lines of code.',
			),
			




/*			  array(
			'id'          => 'ind_Portfolio_text_ltd',
			'label'       => __( 'Individual Portfolio Text Limit', 'SimThemes' ),
			'desc'        => __( '' ),
				'std'         => '20',
				'type'        => 'numeric-slider',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '15,40,1',
				'class'       => '',
				'condition'   => 'show_or_hide_Portfolio:is(on),show_or_hide_Portfolio:not()',
				'operator'    => 'and'
			  ),
					 
*/


			array(
					'id'          => 'active_category_filter',
					'label'       => __( 'Active Category Filters', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => 'Yes',
					'type'        => 'radio',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_Portfolio:is(on),show_or_hide_Portfolio:not()',
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
					),
				  ),
				  
				  
				  
		array(
			'id'          => 'ind_Portfolio_number',
			'label'       => __( 'Individual Portfolio Number To Show', 'SimThemes' ),
			'desc'        => __( '' ),
				'std'         => '12',
				'type'        => 'numeric-slider',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '5,20,1',
				'class'       => '',
				'condition'   => 'show_or_hide_Portfolio:is(on),show_or_hide_Portfolio:not()',
				'operator'    => 'and'
			  ),				  
				  


		array(
			'id'          => 'ind_Portfolio_number_load',
			'label'       => __( 'How Much Load On Each Click', 'SimThemes' ),
			'desc'        => __( '' ),
				'std'         => '5',
				'type'        => 'numeric-slider',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '1,10,1',
				'class'       => '',
				'condition'   => 'show_or_hide_Portfolio:is(on),show_or_hide_Portfolio:not()',
				'operator'    => 'and'
			  ),				  
				  




				
			
);		
