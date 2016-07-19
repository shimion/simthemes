<?php
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'home','title' => 'Home Featured Area');
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'home_optional_text_above_thefeatured_area',
        'label'       => __('Custom Homepage Text (Above the Featured area)', 'wpm_taxdomain' ),
        'desc'        => __('You can add some custom content to your homepage. This will display just above the featured area. It is optional, you can leave it blank. The (Visual/HTML) editor will allow you to add linked text here and you also can change color just like editing posts/pages.', 'wpm_taxdomain' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'home',
        'rows'        => '4',
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'enable_home_optional_text_above_thefeatured_area',
        'label'       => __('Enable or Disable Custom Homepage Text ( above the featured area )', 'wpm_taxdomain' ),
        'desc'        => __('<span style="color:#690;">Default status is off.</span>', 'wpm_taxdomain' ),
        'std'         => 'off',
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
		
        'section'     => 'home',
	);
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'fb_1',
        'label'       => __('First Featured Box Content', 'wpm_taxdomain' ),
        'desc'        => __('You can choose a page content to display for your first homepage featured box.', 'wpm_taxdomain' ),
        'type'        => 'page-select',
        'section'     => 'home',
		'class'       => 'admin_border_left_right_top',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'fb_1_icon',
        'label'       => __('First Featured Box Icon', 'wpm_taxdomain' ),
		'desc'        => __('<a href="http://wpmania.net/Store/adding-icons-using-theme-option/">Select your Icon From the Icon Map Here</a>', 'wpm_taxdomain' ),
        'std'         => 'feather',
        'type'        => 'text',
        'section'     => 'home',
		'class'       => 'admin_border_left_right',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'fb_2',
        'label'       => __('Second Featured Box Content', 'wpm_taxdomain' ),
        'desc'        => __('You can choose a page content to display for your second homepage featured box.', 'wpm_taxdomain' ),
        'type'        => 'page-select',
        'section'     => 'home',
		'class'       => 'admin_border_left_right',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'fb_2_icon',
        'label'       => __('Second Featured Box Icon', 'wpm_taxdomain' ),
       'desc'        => __('<a href="http://wpmania.net/Store/adding-icons-using-theme-option/">Select your Icon From the Icon Map Here</a>', 'wpm_taxdomain' ),
        'std'         => 'back-in-time',
        'type'        => 'text',
        'section'     => 'home',
		'class'       => 'admin_border_left_right',
	);
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'fb_3',
        'label'       => __('Third Featured Box Content', 'wpm_taxdomain' ),
        'desc'        => __('You can choose a page content to display for your third homepage featured box.', 'wpm_taxdomain' ),
        'type'        => 'page-select',
        'section'     => 'home',
		'class'       => 'admin_border_left_right',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'fb_3_icon',
        'label'       => __('Third Featured Box Icon', 'wpm_taxdomain' ),
        'desc'        => __('<a href="http://wpmania.net/Store/adding-icons-using-theme-option/">Select your Icon From the Icon Map Here</a>', 'wpm_taxdomain' ),
        'std'         => 'upload-cloud',
        'type'        => 'text',
        'section'     => 'home',
		'class'       => 'admin_border_left_right',
	);
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'disbale_featured_area_read_more',
        'label'       => __('Enable or Disable Featured Area Read More Text', 'wpm_taxdomain' ),
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
		'class'       => 'admin_border_left_right',
        'section'     => 'home',
		
	);
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'disbale_featured_area',
        'label'       => __('Enable or Disable Featured Area On Home Page', 'wpm_taxdomain' ),
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
		'class'       => 'admin_border_left_right_bottom',
        'section'     => 'home',
	);

	
	$custom_settings['settings'][] = array(
		'id'          => 'home_optional_text_below_thefeatured_area',
        'label'       => __('Custom Homepage Text (Below the Featured area)', 'wpm_taxdomain' ),
        'desc'        => __('You can add some custom content to your homepage. This will display just above the featured area. It is optional, you can leave it blank. The (Visual/HTML) editor will allow you to add linked text here and you also can change color just like editing posts/pages.', 'wpm_taxdomain' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'home',
        'rows'        => '4',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'enable_home_optional_text_below_thefeatured_area',
        'label'       => __('Enable or Disable Custom Homepage Text ( below the featured area )', 'wpm_taxdomain' ),
        'desc'        => __('<span style="color:#690;">Default status is off.</span>', 'wpm_taxdomain' ),
        'std'         => 'off',
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
		
        'section'     => 'home',
	);