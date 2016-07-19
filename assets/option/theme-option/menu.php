<?php
add_filter('option_tree_settings_args', 'stmenu_option', 50);
function stmenu_option($custom_settings){
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'menu','title' => 'Menu Settings');


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'header_setting',
        'type'        => 'textblock',
        'desc'        => __('Menu Setting', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'menu',

		
	);
	
	



	$custom_settings['settings'][] = array(
		'id'          => 'menu_mergin_top',
        'label'       => __('Top margin of the menu', 'simthemes' ),
        'desc'        => __('Example: 10px', 'simthemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	


	$custom_settings['settings'][] = array(
		'id'          => 'menu_mergin_bottom',
        'label'       => __('Bottom margin of the menu', 'simthemes' ),
        'desc'        => __('Example: 10px', 'simthemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	


	
	$custom_settings['settings'][] = array(
		'id'          => 'menu_padding_top',
        'label'       => __('Top padding of the menu', 'simthemes' ),
        'desc'        => __('Example: 10px', 'simthemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	


	$custom_settings['settings'][] = array(
		'id'          => 'menu_padding_bottom',
        'label'       => __('Bottom padding of the menu', 'simthemes' ),
        'desc'        => __('Example: 10px', 'simthemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'menu',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	


	
	$custom_settings['settings'][] = array(
		'label'       => __('Menu section Backgroun Color', 'SimThemes' ),
        'id'          => 'menu_background_color',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('Menu Section Background Color', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Menu Item Color', 'SimThemes' ),
        'id'          => 'menu_item_color',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('Change menu item color', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Menu Item Hover Color', 'SimThemes' ),
        'id'          => 'menu_item_hover_color',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('Change menu item color hover', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);

	$custom_settings['settings'][] = array(
		'label'       => __('Menu Item Hover Background', 'SimThemes' ),
        'id'          => 'menu_item_hover_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('Change menu item hover background color', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Menu Item Active Background', 'SimThemes' ),
        'id'          => 'menu_item_active_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('Change menu item active background color', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);



	$custom_settings['settings'][] = array(
		'label'       => __('Dropdown Background', 'SimThemes' ),
        'id'          => 'dropdown_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);

	$custom_settings['settings'][] = array(
		'label'       => __('Dropdown Item Hover Background Color', 'SimThemes' ),
        'id'          => 'dropdown_item_hover_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Dropdown Item Active Background Color', 'SimThemes' ),
        'id'          => 'dropdown_item_active_background',
        'type'        => 'colorpicker-opacity',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Dropdown Item Color', 'SimThemes' ),
        'id'          => 'dropdown_item_color',
        'type'        => 'colorpicker',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Dropdown Item Hover Color', 'SimThemes' ),
        'id'          => 'dropdown_item_hover_color',
        'type'        => 'colorpicker',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);


	$custom_settings['settings'][] = array(
		'label'       => __('Dropdown Item Active Color', 'SimThemes' ),
        'id'          => 'dropdown_item_active_color',
        'type'        => 'colorpicker',
        'desc'        => __('', 'SimThemes' ),
        'section'     => 'menu',
        'class'          => '',
	);




/*      $custom_settings['settings'][] = array(
        'id'          => 'menu_font',
        'label'       => __( 'Menu Font', 'option-tree-theme' ),
        'desc'        => 'Please select the menu font',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'section'     => 'menu',
        'operator'    => 'and'
      );

*/	
	
	




	$custom_settings['settings'][] = array(
					'label'       => __( 'Menu Font Size', 'SimThemes' ),
					'id'          => 'menu_font_size',
					'desc'        => __('Please provide the menu font size.', 'simthemes' ),
					'std'         => array(
											'0'=> '15',
											'1'=> 'px',
										),
					'type'        => 'measurement',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					 'section'     => 'menu',
	);


	$custom_settings['settings'][] = array(
					'label'       => __( 'Menu Dropdown Font Size', 'SimThemes' ),
					'id'          => 'menu_font_size_dropdown',
					'desc'        => __('Please provide the menu dropdown font size.', 'simthemes' ),
					'std'         => array(
											'0'=> '15',
											'1'=> 'px',
										),
					'type'        => 'measurement',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					 'section'     => 'menu',
	);




return $custom_settings;
}

