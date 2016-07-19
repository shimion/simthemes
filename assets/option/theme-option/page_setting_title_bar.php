<?php
add_filter('option_tree_settings_args', 'st__page_title_bar', 70);
function st__page_title_bar($custom_settings){
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'page_title','title' => 'Page Title Bar');


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'page_title_bar_option',
        'type'        => 'textblock',
        'desc'        => __('Page Title Bar Option', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'page_title',

		
	);



	
	$custom_settings['settings'][] = array(
						'id'          => 'page_title_bar',
						'label'       => __( 'Page Title Bar', 'SimThemes' ),
						'desc'        => __( 'On the box to show the page title bar. This is a global option for every page or post, and this can be overridden by individual page/post options.', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => 'on',
						'section'     => 'page_title'
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'Page_Title_Bar_Height',
        'label'       => __('Page Title Bar Height', 'simthemes' ),
        'desc'        => __('Example: 87px', 'simthemes' ),
        'std'         => array(
								'0' =>'100',
								'1' =>'px',
				),
        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'page_title',
        'class'       => '',
		'condition'   => 'page_title_bar:is(on),page_title_bar:not()',
	);
	
	
	$custom_settings['settings'][] = array(
						'id'          => 'Title_Background',
						'label'       => __( 'Title Background', 'SimThemes' ),
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'background',
						'std'        => array(
								'background-color' =>'#E7DFDF',
								'background-repeat' =>'no-repeat',
								'background-attachment' =>'',
								'background-position' =>'center top',
								'background-size' =>'',
								'background-image' => '',
							),
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'section'     => 'page_title',
						'operator'    => 'and',
						'condition'   => 'page_title_bar:is(on),page_title_bar:not()',
	);
	


						$custom_settings['settings'][] = array(
							'label'       => __('Heading Color', 'SimThemes' ),
							'id'          => 'Heading_Color',
							'type'        => 'colorpicker',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'page_title',
							'condition'   => 'page_title_bar:is(on),page_title_bar:not()',
						);

						$custom_settings['settings'][] = array(
							'label'       => __('Text Color', 'SimThemes' ),
							'id'          => 'Text_Color',
							'type'        => 'colorpicker',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'page_title',
							'condition'   => 'page_title_bar:is(on),page_title_bar:not()',
						);










	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'bread_cumbs',
        'type'        => 'textblock',
        'desc'        => __('BREADCRUMB OPTIONS', 'SimThemes' ),
        'class'       => 'theme_option_notice',
		'condition'   => 'Display_Custom_Background:is(on),Display_Custom_Background:not()',
        'section'     => 'page_title',
		'condition'   => 'page_title_bar:is(on),page_title_bar:not()',
		
	);



	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'bread_cumbs',
        'type'        => 'textblock',
        'desc'        => __('TITLE RIGHT OPTIONS', 'SimThemes' ),
        'class'       => 'theme_option_notice',
		'condition'   => 'Display_Custom_Background:is(on),Display_Custom_Background:not()',
        'section'     => 'page_title',
		'condition'   => 'page_title_bar:is(on),page_title_bar:not()',
		
	);

	$custom_settings['settings'][] = array(
		'id'          => 'Display_Breadcrumbs_Search_Bar',
        'label'       => __('Display Breadcrumbs/Search Bar', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'checkbox',
		'condition'   => 'page_title_bar:is(on),page_title_bar:not()',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'yes',
            'label'   => __( 'Check to display the breadcrumbs or search bar in general. Uncheck to hide them', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'page_title',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'Breadcrumbs_or_Search_Box',
        'label'       => __('Breadcrumbs or Search Box?', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'breadcrumbses',
            'label'   => __( 'Breadcrumbs', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'search_box',
            'label'   => __( 'Search Box', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'page_title',
	);
	

	return $custom_settings;
}