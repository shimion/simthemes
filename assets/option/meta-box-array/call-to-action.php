<?php
global $call_to_action;
$call_to_action = array(array(
				'label'       => __( 'Call To action Section', 'SimThemes' ),
				'id'          => 'call-to-section',
				'type'        => 'tab'
			  ),


			  array(
				'label'       => __( 'Show call to action section', 'SimThemes' ),
				'id'          => 'show_or_hide_call_to_action',
				'type'        => 'on-off',
				'desc'        => sprintf( __( '', 'SimThemes' ), '<code>on</code>' ),
				'std'         => 'on'
			  ),





			  array(
				'label'       => __( 'Call to Action Background', 'SimThemes' ),
				'id'          => 'call_bg',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'background',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_call_to_action:is(on),show_or_hide_call_to_action:not()',
				'operator'    => 'and'
			),
			
			  array(
				'label'       => __( 'Text for Call to Action', 'SimThemes' ),
				'id'          => 'call_text',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_call_to_action:is(on),show_or_hide_call_to_action:not()',
				'operator'    => 'and'
			),


			  array(
				'label'       => __( 'Call to Action Text Color', 'SimThemes' ),
				'id'          => 'call_text_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_call_to_action:is(on),show_or_hide_call_to_action:not()',
				'operator'    => 'and'
			),
			


			
			  array(
				'label'       => __( 'Button URL', 'SimThemes' ),
				'id'          => 'call_button',
				'desc'        => __( 'The button will show if you peast the URL here', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_call_to_action:is(on),show_or_hide_call_to_action:not()',
				'operator'    => 'and'
			),
			


			  array(
				'label'       => __( 'Button Text', 'SimThemes' ),
				'id'          => 'call_button_text',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_call_to_action:is(on),show_or_hide_call_to_action:not()',
				'operator'    => 'and',
				'std'		  =>'Purchase Now',
			),
			

			  array(
				'label'       => __( 'Button Icon', 'SimThemes' ),
				'id'          => 'call_button_icon',
				'desc'        => __( 'If you have problem viewing any icon. Please visit <a href="http://fontawesome.io/" target="_blank">Font Awesome</a> and get your desire font.', 'SimThemes' ),
				'type'        => 'font-awesome',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_call_to_action:is(on),show_or_hide_call_to_action:not()',
				'operator'    => 'and'
			),
			

			  array(
				'label'       => __( 'Button Color', 'SimThemes' ),
				'id'          => 'call_button_color',
				'desc'        => __( '', 'SimThemes' ),
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_call_to_action:is(on),show_or_hide_call_to_action:not()',
				'operator'    => 'and'
			),);		
