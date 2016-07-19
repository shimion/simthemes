<?php
add_filter('option_tree_settings_args', 'st__footer__option', 130);
function st__footer__option($custom_settings){

global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'footer','title' => 'Footer Settings');
	$custom_settings['settings'][] = array(
		'id'          => 'footer_widget_disable',
        'label'       => __('Footer Widget Section', 'SimThemes' ),
        'desc'        => __('Enable or Disable Footer Widget Area. <span style="color:#690;">Default status is on.</span>', 'SimThemes' ),
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
            'label'   => __( 'off', 'SimThemes' ),
          )
        ),
		
        'section'     => 'footer',
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'footer_widget_column',
        'label'       => __('Footer Widget Section', 'SimThemes' ),
        'desc'        => __('Please select the column of your footer widget', 'SimThemes' ),
        'std'         => 'Four',
		'condition'   => 'footer_widget_disable:is(on),footer_widget_disable:not()',
        'type'        => 'radio',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'One',
            'label'   => __( 'One', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'Two',
            'label'   => __( 'Two', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'Three',
            'label'   => __( 'Three', 'SimThemes' ),
          ),
		 array(
            'value'   => 'Four',
            'label'   => __( 'Four', 'SimThemes' ),
          )
        ),
		
        'section'     => 'footer',
	);
	
	



	$custom_settings['settings'][] = array(
		'id'          => 'footer_bottom_disable',
        'label'       => __('Footer Bottom Section', 'SimThemes' ),
        'desc'        => __('Enable or Disable Footer Bottom Section', 'SimThemes' ),
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
            'label'   => __( 'off', 'SimThemes' ),
          )
        ),
		
        'section'     => 'footer',
	);
	
	
	
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'copy_right',
        'label'       => __('Footer Copyright Text', 'SimThemes' ),
        'desc'        => __('Add you Copyright information', 'SimThemes' ),
        'type'        => 'text',
        'section'     => 'footer',
		'std'			=> '© 2016 SimThemes.  All rights reserved.'
	);
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'footer_menu_or_social_icon',
        'label'       => __('Footer Menu or Social Buttons', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'social',
        'type'        => 'select',
		'class'		  => 'footer_menu_or_social_icon',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'social',
            'label'   => __( 'Social Buttons', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'menu',
            'label'   => __( 'Menu', 'SimThemes' ),
          )
        ),
		
        'section'     => 'footer',
	);
	
	



	$custom_settings['settings'][] = array(
		'id'          => 'icon_size',
        'label'       => __('Social Media Buttons Size', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'regular',
        'type'        => 'select',
		'class'		  => 'theme_icon_color_footer',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'fa-lg',
            'label'   => __( 'Regular', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'fa-2x',
            'label'   => __( '2x', 'SimThemes' ),
          ),
		 array(
            'value'   => 'fa-3x',
            'label'   => __( '3x', 'SimThemes' ),
          ),
		 array(
            'value'   => 'fa-4x',
            'label'   => __( '4x', 'SimThemes' ),
          ),
		 array(
            'value'   => 'fa-5x',
            'label'   => __( '5x', 'SimThemes' ),
          ),
        ),
		
        'section'     => 'footer',
	);



	
	
	
/*	$custom_settings['settings'][] = array(
		'id'          => 'credit_text',
        'label'       => __('Footer Credit Text', 'SimThemes' ),
        'type'        => 'text',
        'section'     => 'footer',
		'std'         => 'Theme Design and Develop by <a href="http://simthemes.com" title="">SimThemes</a>',
	);
*/	
	/// footer background option
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'footer_bgs_in_footer',
        'type'        => 'textblock',
        'desc'        => __('Footer Color Options', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'footer'
		
	);
	
	
	

	$custom_settings['settings'][] = array(
		'label'       => __('Footer Background Color', 'SimThemes' ),
        'id'          => 'footer_bg_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Background Color In The Footer Area.', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	
	
	$custom_settings['settings'][] = array(
		'label'       => __('Footer Area Title Color', 'SimThemes' ),
        'id'          => 'footer_title_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Title Color In The Footer Area.', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	
	$custom_settings['settings'][] = array(
		'label'       => __('Footer Area Font Color', 'SimThemes' ),
        'id'          => 'footer_font_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Font Color In The Footer Area', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	
	$custom_settings['settings'][] = array(
		'label'       => __('Footer Area Link Color', 'SimThemes' ),
        'id'          => 'footer_link_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Link Color In The Footer Area', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	$custom_settings['settings'][] = array(
		'label'       => __('Footer Area Link Hover Color ', 'SimThemes' ),
        'id'          => 'footer_link_hover_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Link Hover Color In The Footer Area', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	
	// Copyright Color Settings
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'copyright_color_settings',
        'type'        => 'textblock',
        'desc'        => __('Copyright Area Color Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'footer'
		
	);
	

	
	$custom_settings['settings'][] = array(
		'label'       => __('Copyright Area Background Color', 'SimThemes' ),
        'id'          => 'copyright_bg_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Background Color In The Copyright Area', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	$custom_settings['settings'][] = array(
		'label'       => __('Copyright Area Font Color', 'SimThemes' ),
        'id'          => 'copyright_font_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Font Color In The Copyright Area', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	$custom_settings['settings'][] = array(
		'label'       => __('Copyright Area Link Color', 'SimThemes' ),
        'id'          => 'copyright_link_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Link Color In The Copyright Area', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	$custom_settings['settings'][] = array(
		'label'       => __('Copyright Area Link Hover Color ', 'SimThemes' ),
        'id'          => 'copyright_link_hover_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change Link Hover Color In The Copyright Area', 'SimThemes' ),
        'section'     => 'footer'
	);
	
	
 return $custom_settings;
}