<?php
add_filter('option_tree_settings_args', 'st__social', 80);
function st__social($custom_settings){

global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'social','title' => 'Social Bookmarking');
	
	
	$custom_settings['settings'][] = array(
		'label'       => __('Social Bookmarking', 'wpm_taxdomain' ),
        'id'          => 'social_bookmarkings',
        'type'        => 'list-item',
        'desc'        => __('Add you favorite  social icons. Using this option you have the flexibility to add your own social icons. So play around it.', 'wpm_taxdomain' ),
        'settings'    => array(
          array(
            'label'       => __('Link', 'wpm_taxdomain' ),
            'id'          => 'social_bookmarkings_link',
            'type'        => 'text',
            'desc'        => __('Add the link of your social media with "http://" prefix', 'wpm_taxdomain' ),
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  array(
            'label'       => __('Upload', 'wpm_taxdomain' ),
            'id'          => 'social_bookmarkings_icon',
            'type'        => 'select',
            'desc'        => __('Upload the icon for your social media', 'wpm_taxdomain' ),
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => '',
				'choices'     => array(
         
				 array(
					'value'   => 'fa-delicious',
					'label'   => __( '&#xf1a5; Delicious', 'SimThemes' ),
				  ), 
				 array(
					'value'   => 'fa-digg',
					'label'   => __( '&#xf1a6;  Digg', 'SimThemes' ),
				  ), 
				 array(
					'value'   => 'fa-dribbble',
					'label'   => __( '&#xf17d;  Dribbble', 'SimThemes' ),
				  ), 
				 array(
					'value'   => 'fa-flickr',
					'label'   => __( '&#xf16e;  Flickr', 'SimThemes' ),
				  ), 
				 array(
					'value'   => 'fa-facebook',
					'label'   => __( '&#xf09a; Facebook', 'SimThemes' ),
				  ), 
				 array(
					'value'   => 'fa-facebook-square',
					'label'   => __( '&#xf082; Facebook Square', 'SimThemes' ),
				  ), 
				 array(
					'value'   => 'fa-google',
					'label'   => __( '&#xf1a0;  Google', 'SimThemes' ),
				  ),
				  
				  
				 array(
					'value'   => 'fa-google-plus',
					'label'   => __( '&#xf0d5;   Google Plus', 'SimThemes' ),
				  ),
				  
				  
				  
				 array(
					'value'   => 'fa-google-plus-square',
					'label'   => __( '&#xf0d4;   Google Plus Square', 'SimThemes' ),
				  ),
				  
				  
				  
				 array(
					'value'   => 'fa-instagram',
					'label'   => __( '&#xf16d;   Instagram', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				 array(
					'value'   => 'fa-linkedin',
					'label'   => __( '&#xf0e1;   Linkedin', 'SimThemes' ),
				  ),
				  
				  
				 array(
					'value'   => 'fa-linkedin-square',
					'label'   => __( '&#xf08c;    Linkedin Square', 'SimThemes' ),
				  ),
				  
				  
				 array(
					'value'   => 'fa-pinterest',
					'label'   => __( '&#xf0d2;  pinterest', 'SimThemes' ),
				  ),
				  
				  
				 array(
					'value'   => 'fa-pinterest-square',
					'label'   => __( '&#xf0d3;   Pinterest Square', 'SimThemes' ),
				  ),
				  
				  
				  
				 array(
					'value'   => ' fa-reddit',
					'label'   => __( '&#xf1a1;    Reddit', 'SimThemes' ),
				  ),
				  
				  
				  
				 array(
					'value'   => 'fa-reddit-square',
					'label'   => __( '&#xf1a2;   Reddit Square', 'SimThemes' ),
				  ),
				  
				  
				  
				 array(
					'value'   => 'fa-skype',
					'label'   => __( '&#xf17e;   Skype', 'SimThemes' ),
				  ),
				  
				  
				  
				 array(
					'value'   => 'fa-steam',
					'label'   => __( '&#xf1b6;    Steam', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				 array(
					'value'   => 'fa-steam-square',
					'label'   => __( '&#xf1b7;    Steam Square', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				 array(
					'value'   => 'fa-stumbleupon',
					'label'   => __( '&#xf1a4;    Stumbleupon', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				 array(
					'value'   => 'fa-stumbleupon-circle',
					'label'   => __( '&#xf1a3;    Stumbleupon circle', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				 array(
					'value'   => 'fa-tumblr',
					'label'   => __( '&#xf173;    Tumblr', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				  
				 array(
					'value'   => 'fa-tumblr-square',
					'label'   => __( '&#xf174;    Tumblr Square', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				 array(
					'value'   => 'fa-twitter',
					'label'   => __( '&#xf099;    Twitter', 'SimThemes' ),
				  ),
				  
				  
				 array(
					'value'   => 'fa-twitter-square',
					'label'   => __( '&#xf081;    Twitter Square', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				 array(
					'value'   => 'fa-vimeo-square',
					'label'   => __( '&#xf194;    Vimeo Square', 'SimThemes' ),
				  ),
				  
				  
				 array(
					'value'   => 'fa-youtube',
					'label'   => __( '&#xf167;    Youtube', 'SimThemes' ),
				  ),
				  
				  
				 array(
					'value'   => 'fa-youtube-square',
					'label'   => __( '&#xf166;    Youtube Square', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				 array(
					'value'   => 'fa-youtube-play',
					'label'   => __( '&#xf16a;    Youtube Play', 'SimThemes' ),
				  ),
				  
				  
				  
				  
				  
				  
				  
				  
				  
				),

          ),
        ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'social',
		
	);
	
	
	$custom_settings['settings'][] = array(
	
		'label'       => __('Social Media Buttons Color', 'SimThemes' ),
        'id'          => 'icon_color',
        'type'        => 'colorpicker',
        'desc'        => __('Social Buttons Color Option', 'SimThemes' ),
        'class'       => 'theme_icon_color_footer',
        'section'     => 'social'
		
	);
	

	$custom_settings['settings'][] = array(
	
		'label'       => __('Social Media Buttons Hover Color', 'SimThemes' ),
        'id'          => 'icon_color_hover',
        'type'        => 'colorpicker',
        'desc'        => __('Social Buttons Color Option', 'SimThemes' ),
        'class'       => 'theme_icon_color_footer',
        'section'     => 'social'
		
	);
	
	return $custom_settings;

}