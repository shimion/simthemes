<?php
global $team_section;
$team_section = array(array(
				'label'       => __( 'Team Section', 'SimThemes' ),
				'id'          => 'team-section',
				'type'        => 'tab'
			  ),


			  array(
				'label'       => __( 'Show Team Section', 'SimThemes' ),
				'id'          => 'show_or_hide_Team',
				'type'        => 'on-off',
				'desc'        => sprintf( __( '', 'SimThemes' ), '<code>on</code>' ),
				'std'         => 'on'
			  ),
			  


			 
/*			array(
					'id'          => 'select_column_team',
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
					'condition'   => 'show_or_hide_Team:is(on),show_or_hide_Team:not()',
					'operator'    => 'and',
					'choices'     => array( 
					  array(
						'value'       => 'One Column',
						'label'       => __( 'One Column', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'Two Column',
						'label'       => __( 'Two Column', 'SimThemes' ),
						'src'         => ''
					  )
					),
				  ),

*/







			 
			  array(
				'label'       => __( 'Team Section Title', 'SimThemes' ),
				'id'          => 'Team_sec_title',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_Team:is(on),show_or_hide_Team:not()',
				'operator'    => 'and',
				'std'		  =>'OUR TEAM',
			),
			



			  
			  




			  array(
				'label'       => __( 'Team Section Text', 'SimThemes' ),
				'id'          => 'Team_sec_text',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'textarea-simple',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_Team:is(on),show_or_hide_Team:not()',
				'operator'    => 'and',
				'std'		  =>'We are a small team with great skills. See the faces behind the lines of code.',
			),
			




			  array(
			'id'          => 'ind_Team_text_ltd',
			'label'       => __( 'Individual Member Text Limit', 'theme-text-domain' ),
			'desc'        => __( '' ),
				'std'         => '20',
				'type'        => 'numeric-slider',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '15,40,1',
				'class'       => '',
				'condition'   => 'show_or_hide_Team:is(on),show_or_hide_Team:not()',
				'operator'    => 'and'
			  ),
					 
			  
			  

			  array(
				'id'          => 'add_Team',
				'label'       => __( 'Team', 'SimThemes' ),
				'desc'        => __( '', 'SimThemes' ),
				'std'         => '',
				'type'        => 'list-item',
				'section'     => 'option_types',
				'rows'        => '8',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_Team:is(on),show_or_hide_Team:not()',
				'operator'    => 'and',
				'settings'    => array( 
				


				
				
				
					  array(
						'label'       => __( 'Add Member', 'SimThemes' ),
						'id'          => 'add_member',
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'custom-post-type-select',
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => 'members',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'operator'    => 'and'
					),
				
				
				)
			),);		
