<?php
global $slider_section;
$slider_section = array(			array(
				'label'       => __( 'Slider or Featured Section', 'SimThemes' ),
				'id'          => 'slider-featured-section',
				'type'        => 'tab'
			  ),
			  array(
				'label'       => __( 'Show Slider or Featured Area Section', 'SimThemes' ),
				'id'          => 'show_or_hide_slider_featured',
				'type'        => 'on-off',
				'desc'        => sprintf( __( 'Shows the Show Slider or Featured Area Section when set to %s.', 'SimThemes' ), '<code>on</code>' ),
				'std'         => 'on'
			  ),

			array(
					'id'          => 'select_featured_section_or_slider',
					'label'       => __( 'Choice Featured Section or Slider Section', 'SimThemes' ),
					'desc'        => __( 'Please select it according to your need.', 'SimThemes' ),
					'std'         => 'slider',
					'type'        => 'radio',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => 'show_or_hide_slider_featured:is(on),show_or_hide_slider_featured:not()',
					'operator'    => 'and',
					'choices'     => array( 
					  array(
						'value'       => 'featured',
						'label'       => __( 'Featured Section', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'slider',
						'label'       => __( 'Slider Section', 'SimThemes' ),
						'src'         => ''
					  )
					)
				  ),


			  array(
				'label'       => __( 'Slider Shortcode', 'SimThemes' ),
				'id'          => 'select_slider',
				'desc'        => __( 'Please use Clrelly Slider shortcode here.', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => 'slider',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_slider_featured:is(on),show_or_hide_slider_featured:not()',
				'operator'    => 'and',
			),



			  array(
				'label'       => __( 'Featured Area Title', 'SimThemes' ),
				'id'          => 'featured_title',
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_slider_featured:is(on),show_or_hide_slider_featured:not()',
				'operator'    => 'and'
			),

			  array(
				'label'       => __( 'Featured Area Title Size', 'SimThemes' ),
				'id'          => 'featured_size',
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_slider_featured:is(on),show_or_hide_slider_featured:not()',
				'operator'    => 'and'
			),


			  array(
				'label'       => __( 'Featured Area Title Color', 'SimThemes' ),
				'id'          => 'featured_title_color',
				'type'        => 'colorpicker',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_slider_featured:is(on),show_or_hide_slider_featured:not()',
				'operator'    => 'and'
			),


		  
			  array(
				'label'       => __( 'Featured Area Text', 'SimThemes' ),
				'id'          => 'featured_text',
				'type'        => 'textarea',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_slider_featured:is(on),show_or_hide_slider_featured:not()',
				'operator'    => 'and'
			),
			
			  array(
				'label'       => __( 'Featured Area Height', 'SimThemes' ),
				'id'          => 'featured_height',
				'desc'        => __( 'Please use px at the end', 'SimThemes' ),
				'type'        => 'text',
				'section'     => 'option_types',
				'rows'        => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => 'show_or_hide_slider_featured:is(on),show_or_hide_slider_featured:not()',
				'operator'    => 'and'
			),
			
);	

