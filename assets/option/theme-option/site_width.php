<?php
add_filter('option_tree_settings_args', 'site_width_setting', 20);
function site_width_setting($custom_settings){
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'site_width','title' => 'Site Width');
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'my_textblock',
        'type'        => 'textblock',
        'desc'        => __('Site Width Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'site_width'
		
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'site_width',
        'label'       => __('Site Width', 'SimThemes' ),
        'desc'        => __('Controls the overall site width. In px or %, ex: 100% or 1100px.' , 'SimThemes' ),
        'std'         => array(
								'0' =>'1100',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'site_width',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'content_width',
        'label'       => __('Content Width', 'SimThemes' ),
        'desc'        => __('Controls the content width. In %, ex: 75%.' , 'SimThemes' ),
        'std'         => array(
								'0' =>'75',
								'1' =>'%',
				),

        'type'        => 'measurement',
        'section'     => 'site_width',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'sidebar_width',
        'label'       => __('Sidebar Width', 'SimThemes' ),
        'desc'        => __('Controls the sidebar width. In %, ex: 25%.' , 'SimThemes' ),
        'std'         => array(
								'0' =>'25',
								'1' =>'%',
				),

        'type'        => 'measurement',
        'section'     => 'site_width',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
return $custom_settings;

}
