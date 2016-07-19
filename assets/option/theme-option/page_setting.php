<?php
add_filter('option_tree_settings_args', 'st__page_settings', 70);
function st__page_settings($custom_settings){
global $child_theme_variable;
$custom_settings['sections'][] = array( 'id' => 'page_setting','title' => 'Page Settings');

	
			$custom_settings['settings'][]= array(
			
				'label'       => __('Important Note', 'SimThemes' ),
				'id'          => 'page',
				'type'        => 'textblock',
				'desc'        => __('Page Setting', 'SimThemes' ),
				'class'       => 'theme_option_notice',
				'section'     => 'page_setting',
		
				
			);
		
	  
	  
	$custom_settings['settings'][]= array(
		'id'          => 'sidebar',
        'label'       => __('Sidebar Position', 'SimThemes' ),
        'desc'        => __('Please select the sidebar position', 'SimThemes' ),
        'std'         => 'no',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'no',
            'label'   => __( 'No Sidebar', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'left',
            'label'   => __( 'Left Sidebar', 'SimThemes' ),
          ),
		 array(
            'value'   => 'right',
            'label'   => __( 'Right Sidebar', 'SimThemes' ),
          )
        ),
		
        'section'     => 'page_setting',
	);

	  
	  
	  
	  
	  $custom_settings['settings'][]= array(
        'id'          => 'sidebar_select',
        'label'       => __( 'Sidebar Select', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf(  __( 'Please select the sidebar you want to view here.', 'SimThemes' ), '<code>footer-sidebar-$i</code>' ) . '</p>',
        'std'         => 'sidebar1',
        'type'        => 'sidebar-select',
        'section'     => 'page_setting',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      );
	  
	  
		 $custom_settings['settings'][]=  array(
			'label'       => __( 'Page Content Top Margin', 'SimThemes' ),
			'id'          => 'page_margin_top',
			'type'        => 'text',
			'desc'        => __( 'In pixels ex: 20px. Leave empty for default value.', 'SimThemes' ),
			'section'     => 'page_setting',
			'std'         => '20px'
			
		  );
		 $custom_settings['settings'][]=  array(
			'label'       => __( 'Page Content Bottom Margin', 'SimThemes' ),
			'id'          => 'page_margin_bottom',
			'type'        => 'text',
			'section'     => 'page_setting',
			'desc'        => __( 'In pixels ex: 20px. Leave empty for default value.', 'SimThemes' ),
			'std'         => '20px'
		  );

		  
		  
		  
		  $custom_settings['settings'][]= array(
			'label'       => __( 'Page Content Top Padding', 'SimThemes' ),
			'id'          => 'page_padding_top',
			'type'        => 'text',
			'section'     => 'page_setting',
			'desc'        => __( 'In pixels ex: 10px. Leave empty for default value.', 'SimThemes' ),
			'std'         => '10px'
		  );
		 $custom_settings['settings'][]=  array(
			'label'       => __( 'Page Content Bottom Padding', 'SimThemes' ),
			'id'          => 'page_padding_bottom',
			'type'        => 'text',
			'section'     => 'page_setting',
			'desc'        => __( 'In pixels ex: 10px. Leave empty for default value.', 'SimThemes' ),
			'std'         => '10px'
		  );


	
	
	

	return $custom_settings;
}


	