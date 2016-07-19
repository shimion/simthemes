<?php

add_filter('option_tree_settings_args', 'general_setting', 10);
function general_setting($custom_settings){
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'general','title' => 'General Settings');
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'generan_settings_sext_block',
        'type'        => 'textblock',
        'desc'        => __('Global Settings', 'SimThemes' ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => 'theme_option_notice',
        'section'     => 'general'
		
	);
	
	
/*	$custom_settings['settings'][] = array(
		'id'          => 'box_layout',
        'label'       => __('Box Layout', 'SimThemes' ),
        'desc'        => __('Globally Enable or Disable Box Layout on Pages. <span style="color:#690;">Default status is off.</span>', 'SimThemes' ),
        'std'         => 'off',
        'type'        => 'on_off',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'on',
            'label'   => __( 'On', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'off',
            'label'   => __( 'off', 'SimThemes' ),
          )
        ),
		
        'section'     => 'general',
	);
*/	
	
	$custom_settings['settings'][] = array(
		'id'          => 'enable_page_comments',
        'label'       => __('Comments on Pages', 'SimThemes' ),
        'desc'        => __('Globally Enable or Disable Comments on Pages. <span style="color:#690;">Default status is off.</span>', 'SimThemes' ),
        'std'         => 'off',
        'type'        => 'on_off',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'on',
            'label'   => __( 'On', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'off',
            'label'   => __( 'off', 'SimThemes' ),
          )
        ),
		
        'section'     => 'general',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'disable_post_comments',
        'label'       => __('Comments on Posts', 'SimThemes' ),
        'desc'        => __('Globally Enable or Disable Comments on Posts. <span style="color:#690;">Default status is on.</span>', 'SimThemes' ),
        'std'         => 'on',
        'type'        => 'on_off',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'on',
            'label'   => __( 'On', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'off',
            'label'   => __( 'Off', 'SimThemes' ),
          )
        ),
		
        'section'     => 'general',
	);
/*	$custom_settings['settings'][] = array(
		'id'          => 'disable_next',
        'label'       => __('Next/Previous Links.', 'SimThemes' ),
        'desc'        => __('Globally Enable or Disable Next/Previous Link From The Website. <span style="color:#690;">Default status is on.</span>', 'SimThemes' ),
        'std'         => 'on',
        'type'        => 'on_off',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'on',
            'label'   => __( 'On', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'off',
            'label'   => __( 'Off', 'SimThemes' ),
          )
        ),
		
        'section'     => 'general',

	);
*/	
	$custom_settings['settings'][] = array(
		'id'          => 'analytics_code',
        'label'       => __('Google Analytics Code', 'SimThemes' ),
        'desc'        => __('After signing up with Google Analytics paste the code that it gives you here.', 'SimThemes' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general',
        'rows'        => '2',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'custom_css',
        'label'       => __('Custom CSS', 'SimThemes' ),
        'desc'        => __('This is a great place for doing quick custom styles.  This css will override the current css used in the theme. Example:<br /><br /><code>.logo a { color: blue; }</code><br />', 'SimThemes' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general',
        'rows'        => '2',

	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'custom_js',
        'label'       => __('Custom JavaScript (Header)', 'SimThemes' ),
        'desc'        => __('In case you need to add some custom javascript, you can insert it here. Script will be added just before the closing of HTML "head" tag. Be sure to enclose your code with "<b>script</b>" tag.', 'SimThemes' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general',
        'rows'        => '2',

	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'footer_script',
        'label'       => __('Custom JavaScript (Footer)', 'SimThemes' ),
        'desc'        => __('In case you need to add some custom javascript, you may insert it here. Script will be added just before the closing of HTML "body" tag. Be sure to enclose your code with "<b>script</b>" tag.', 'SimThemes' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general',
        'rows'        => '2',

	);
	
	
	
	
	return 	$custom_settings;
	
	
}