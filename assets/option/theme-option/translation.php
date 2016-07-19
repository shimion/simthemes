<?php
add_filter('option_tree_settings_args', 'st__translation__option', 120);
function st__translation__option($custom_settings){

global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'translation','title' => 'Translation Settings');
	
	$custom_settings['settings'][] = array(
		'id'          => 'read_more',
        'label'       => __('Read More', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
		'std'        => __('Read More' , 'SimThemes' ),
        'type'        => 'text',
        'section'     => 'translation',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'search_text',
        'label'       => __('Input keyword & hit Enter', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
		'std'        => __('Input keyword & hit Enter' , 'SimThemes' ),
        'type'        => 'text',
        'section'     => 'translation',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'Project_Description',
        'label'       => __('Project Description', 'SimThemes' ),
        'desc'        => __('This text will appear on the individual portfolio page' , 'SimThemes' ),
		'std'        => __('Project Description' , 'SimThemes' ),
        'type'        => 'text',
        'section'     => 'translation',
	);	
	$custom_settings['settings'][] = array(
		'id'          => 'Project_Details',
        'label'       => __('Project Details', 'SimThemes' ),
        'desc'        => __('This text will appear on the individual portfolio page' , 'SimThemes' ),
		'std'        => __('Project Details' , 'SimThemes' ),
        'type'        => 'text',
        'section'     => 'translation',
	);	
	

return $custom_settings;	
}