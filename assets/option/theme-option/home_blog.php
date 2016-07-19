<?php
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'home_blog','title' => 'Home Blog Settings');
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'home_blog_title',
        'label'       => __('Home Blog Section Title', 'wpm_taxdomain' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'home_blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'home_blog_count',
        'label'       => __('Number of Recent Posts displayed on homepage', 'wpm_taxdomain' ),
        'desc'        => '',
        'std'         => '4',
        'type'        => 'text',
        'section'     => 'home_blog',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'disbale_home_blog_area_read_more',
        'label'       => __('Disable or Enable Blog Area Read More Button', 'wpm_taxdomain' ),
        'desc'        => __('<span style="color:#690;">Default status is on.</span>', 'wpm_taxdomain' ),
        'std'         => 'on',
        'type'        => 'on_off',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'on',
            'label'   => __( 'On', 'wpm_taxdomain' ),
          ), 
		 array(
            'value'   => 'off',
            'label'   => __( 'off', 'wpm_taxdomain' ),
          )
        ),
		
        'section'     => 'home_blog',
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'disable_home_blog_section',
        'label'       => __('Disable or Enable Blog Area From Home Page including sidebar', 'wpm_taxdomain' ),
        'desc'        => __('<span style="color:#690;">Default status is on.</span>', 'wpm_taxdomain' ),
        'std'         => 'on',
        'type'        => 'on_off',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'on',
            'label'   => __( 'On', 'wpm_taxdomain' ),
          ), 
		 array(
            'value'   => 'off',
            'label'   => __( 'off', 'wpm_taxdomain' ),
          )
        ),
		
        'section'     => 'home_blog',
	);