<?php

add_filter('ST_Filters_Pages_meta_boxes', 'ST__meta_box_page__bar', 20);

	function ST__meta_box_page__bar($ST_Pages_meta_boxes){
	
	if(function_exists('ot_get_option')){
	$sidebar_position =  ot_get_option('sidebar');
	$sidebar_select =  ot_get_option('sidebar_select');
	}
	 
	  $ST_Pages_meta_boxes['fields'][]= array(
        'label'       => __( 'Page', 'SimThemes' ),
        'id'          => 'page',
        'type'        => 'tab'
      );
	  
	  
			$ST_Pages_meta_boxes['fields'][]= array(
			
				'label'       => __('Important Note', 'SimThemes' ),
				'id'          => 'page',
				'type'        => 'textblock',
				'desc'        => __('Page Setting', 'SimThemes' ),
				'class'       => 'theme_option_notice',
				'section'     => 'option_types',
		
				
			);
		
		
			
	  

	$ST_Pages_meta_boxes['fields'][]= array(
		'id'          => 'enable_page_comments',
        'label'       => __('Enable Comments', 'SimThemes' ),
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
		
        'section'     => 'option_types',
	);

	  
	  
	  
	  
	$ST_Pages_meta_boxes['fields'][]= array(
		'id'          => 'sidebar',
        'label'       => __('Sidebar Position', 'SimThemes' ),
        'desc'        => __('Please select the sidebar position', 'SimThemes' ),
        'std'         => $sidebar_position,
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
		
        'section'     => 'option_types',
	);

	  
	  
	  
	  
	  $ST_Pages_meta_boxes['fields'][]= array(
        'id'          => 'sidebar_select',
        'label'       => __( 'Sidebar Select', 'theme-text-domain' ),
        'desc'        => '<p>' . sprintf(  __( 'Please select the sidebar you want to view here.', 'SimThemes' ), '<code>footer-sidebar-$i</code>' ) . '</p>',
        'std'         => $sidebar_select,
        'type'        => 'sidebar-select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      );
	  
	  
		 $ST_Pages_meta_boxes['fields'][]=  array(
			'label'       => __( 'Page Content Top Margin', 'SimThemes' ),
			'id'          => 'page_margin_top',
			'type'        => 'text',
			'desc'        => __( 'In pixels ex: 20px. Leave empty for default value.', 'SimThemes' ),
			'std'         => ''
		  );
		 $ST_Pages_meta_boxes['fields'][]=  array(
			'label'       => __( 'Page Content Bottom Margin', 'SimThemes' ),
			'id'          => 'page_margin_bottom',
			'type'        => 'text',
			'desc'        => __( 'In pixels ex: 20px. Leave empty for default value.', 'SimThemes' ),
			'std'         => ''
		  );

		  
		  
		  
		  $ST_Pages_meta_boxes['fields'][]= array(
			'label'       => __( 'Page Content Top Padding', 'SimThemes' ),
			'id'          => 'page_padding_top',
			'type'        => 'text',
			'desc'        => __( 'In pixels ex: 10px. Leave empty for default value.', 'SimThemes' ),
			'std'         => ''
		  );
		 $ST_Pages_meta_boxes['fields'][]=  array(
			'label'       => __( 'Page Content Bottom Padding', 'SimThemes' ),
			'id'          => 'page_padding_bottom',
			'type'        => 'text',
			'desc'        => __( 'In pixels ex: 10px. Leave empty for default value.', 'SimThemes' ),
			'std'         => ''
		  );

						


	
	return $ST_Pages_meta_boxes;					
						
	}