<?php
add_filter('option_tree_settings_args', 'st__sticky_option', 60);
function st__sticky_option($custom_settings){

global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'sticky','title' => 'Sticky Header');


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'sticky_header_option',
        'type'        => 'textblock',
        'desc'        => __('STICKY HEADER OPTIONS', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'sticky',

		
	);



	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Background Color', 'SimThemes' ),
        'id'          => 'Sticky_Header_background_color',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => 'header_top_selection',
	);
	
	
	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Menu Item Color', 'SimThemes' ),
        'id'          => 's_menu_item_color',
        'type'        => 'colorpicker',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Menu Item Hover Color', 'SimThemes' ),
        'id'          => 's_menu_item_hover_color',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);

	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Menu Item Hover Background', 'SimThemes' ),
        'id'          => 's_menu_item_hover_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Menu Item Active Background', 'SimThemes' ),
        'id'          => 's_menu_item_active_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);



	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Dropdown Background', 'SimThemes' ),
        'id'          => 's_dropdown_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);

	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Dropdown Item Hover Background Color', 'SimThemes' ),
        'id'          => 's_dropdown_item_hover_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Dropdown Item Active Background Color', 'SimThemes' ),
        'id'          => 's_dropdown_item_active_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Dropdown Item Color', 'SimThemes' ),
        'id'          => 's_dropdown_item_color',
        'type'        => 'colorpicker',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Dropdown Item Hover Color', 'SimThemes' ),
        'id'          => 's_dropdown_item_hover_color',
        'type'        => 'colorpicker',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Sticky Header Dropdown Item Active Color', 'SimThemes' ),
        'id'          => 's_dropdown_item_active_color',
        'type'        => 'colorpicker',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'sticky',
        'class'          => '',
	);




	$custom_settings['settings'][] = array(
					'label'       => __( 'Sticky Header Menu Font Size', 'SimThemes' ),
					'id'          => 's_menu_font_size',
					'desc'        => __('', 'simthemes' ),
					'std'         => array(
											'0'=> '15',
											'1'=> 'px',
										),
					'type'        => 'measurement',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					 'section'     => 'sticky',
	);


	$custom_settings['settings'][] = array(
					'label'       => __( 'Sticky Header Menu Dropdown Font Size', 'SimThemes' ),
					'id'          => 's_menu_font_size_dropdown',
					'desc'        => __(' ', 'simthemes' ),
					'std'         => array(
											'0'=> '15',
											'1'=> 'px',
										),
					'type'        => 'measurement',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					 'section'     => 'sticky',
	);



	return $custom_settings;
}

	