<?php
add_filter('option_tree_settings_args', 'bg_setting', 20);
function bg_setting($custom_settings){
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'bg','title' => 'Background Settings');
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'my_textblock',
        'type'        => 'textblock',
        'desc'        => __('Background Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'bg'
		
	);
	
	$custom_settings['settings'][] =  array(
						'id'          => 'Display_Custom_Background',
						'label'       => __( 'Display Custom Background', 'SimThemes' ),
						//'desc'        => __( 'Choose to show or hide the header.', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => 'off',
						'section'     => 'bg'
					  );
	
	
	
	
	
	$custom_settings['settings'][] = array(
		'label'       => __('Body Background Option', 'SimThemes' ),
        'id'          => 'bg_body',
        'type'        => 'background',
        'section'     => 'bg',
		'std'        => 	array(
								'background-color' =>'#fff',
								'background-repeat' =>'',
								'background-attachment' =>'',
								'background-position' =>'',
								'background-size' =>'',
								'background-image' => '',
							),
		'condition'   => 'Display_Custom_Background:is(on),Display_Custom_Background:not()',

	);
	
return $custom_settings;

}
