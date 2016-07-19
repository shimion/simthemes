<?php

add_filter('ST_Filters_Pages_meta_boxes', 'ST__meta_box_header__bar', 30);

	function ST__meta_box_header__bar($ST_Pages_meta_boxes){
     
/*				  $header_bg = ot_get_option('bg_header');
						  if(!empty($header_bg)){
								  $header_bg = array(
												'background-color' =>$header_bg['background-color'],
												'background-repeat' =>$header_bg['background-repeat'],
												'background-attachment' =>$header_bg['background-attachment'],
												'background-position' =>$header_bg['background-position'],
												'background-size' =>$header_bg['background-size'],
												'background-image' => $header_bg['background-image'],
									);
						  }
				  
				  
				  $header_border_top = ot_get_option('header_border_top');
				  if(!empty($header_border_top)){
				   $header_border_top_width 	= ( $header_border_top['width'] ) ? $header_border_top['width'] : ' ';
				   $header_border_top_unit 	= ( $header_border_top['unit'] ) ? $header_border_top['unit'] : ' ';
				   $header_border_top_style 	= ( $header_border_top['style'] ) ? $header_border_top['style'] : ' ';
				   $header_border_top_color 	= ( $header_border_top['color'] ) ? $header_border_top['color'] : ' ';
				  }
												
				
				  
				  $header_border_bottom = ot_get_option('header_border_bottom');
				  
				  if(!empty($header_border_bottom)){
					  $header_border_bottom = array(
																'width' =>$header_border_bottom['width'],
																'unit' =>$header_border_bottom['unit'],
																'style' =>$header_border_bottom['style'],
																'color' =>$header_border_bottom['color'],
												);
												
				  }
				


				  $header_height = ot_get_option('header_height');
				  
				  if(!empty($header_height)){
					  $header_height = array(
																'0' =>$header_height['0'],
																'1' =>$header_height['1'],
												);
												
				  }
				
				  
				  
				  
				  
				  
				  $Display_Header_Top = ot_get_option('header_top');
				  if(!empty($Display_Header_Top) and $Display_Header_Top=='show'){
					  $Display_Header_Top = 'on';
					  }else{
					  $Display_Header_Top = 'off';
					}
					
				  $Transparent_Header = ot_get_option('Transparent_Header');
				if(!empty($Transparent_Header)){
					$Transparent_Header = $Transparent_Header;
					}	
*/
	 
      $ST_Pages_meta_boxes['fields'][]= array(
        'label'       => __( 'Header', 'SimThemes' ),
        'id'          => 'header',
        'type'        => 'tab'
      );
	  
	  
			$ST_Pages_meta_boxes['fields'][]= array(
			
				'label'       => __('Important Note', 'SimThemes' ),
				'id'          => 'header',
				'type'        => 'textblock',
				'desc'        => __('Header Setting', 'SimThemes' ),
				'class'       => 'theme_option_notice',
				'section'     => 'option_types',
		
				
			);
		
		
			

		$ST_Pages_meta_boxes['fields'][]=   array(
						'id'          => 'Display_Header',
						'label'       => __( 'Display Header', 'SimThemes' ),
						'desc'        => __( 'Choose to show or hide the header.', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => 'on'
					  );
					  


	$ST_Pages_meta_boxes['fields'][]= array(
		'id'          => 'Transparent_Header',
        'label'       => __('Transparent Header', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => $Transparent_Header,
        'type'        => 'on-off',
		
        'section'     => 'option_types',
		'condition'   => 'Display_Header:is(on),Display_Header:not()',
	);




			$ST_Pages_meta_boxes['fields'][] = array(
				'id'          => 'header_height',
				'label'       => __('Header Height', 'simthemes' ),
				'desc'        => __('Example: 50px', 'simthemes' ),
				'std'         => array(
										'0' =>$header_height['0'],
										'1' =>$header_height['0'],
						),
		
				'type'        => 'measurement',
				'section'     => 'header',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			);
			
					  
					  
					  
					  
	
		 $ST_Pages_meta_boxes['fields'][]=  array(
						'id'          => 'header_border_top',
						'label'       => __('Header Border Top', 'simthemes' ),
						'desc'        => __('', 'simthemes' ),
						'type'        => 'border',
						'section'     => 'option_types',
						'std'        => 
								array(
												'width' =>$header_border_top_width,
												'unit' =>$header_border_top_unit,
												'style' =>$header_border_top_style,
												'color' =>$header_border_top_color,
								),
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => '',
		  				'condition'   => 'Display_Header:is(on),Display_Header:not()',

		  
		  );
		
		




		  $ST_Pages_meta_boxes['fields'][]= array(
						'id'          => 'header_border_bottom',
						'label'       => __('Header Border Bottom', 'simthemes' ),
						'desc'        => __('', 'simthemes' ),
						'type'        => 'border',
						'section'     => 'option_types',
						'std'        => $header_border_bottom,
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => '',
		  				'condition'   => 'Display_Header:is(on),Display_Header:not()',

		  
		  );
		
		
		  $ST_Pages_meta_boxes['fields'][]= array(
						'id'          => 'Background_header',
						'label'       => __( 'Background', 'SimThemes' ),
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'background',
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'std'        => $header_bg,
						'operator'    => 'and',
						'condition'   => 'Display_Header:is(on),Display_Header:not()',
						
					  );
	
					 $ST_Pages_meta_boxes['fields'][]=  array(
						'label'       => __( 'Main Navigation Menu', 'SimThemes' ),
						'id'          => 'main_navigation_menu',
						'type'        => 'text',
						'desc'        => __( 'Provide the name of menu displays on this page.', 'SimThemes' ),
						'std'         => '',
						'condition'   => 'Display_Header:is(on),Display_Header:not()',
					  );
					  
					  
					 $ST_Pages_meta_boxes['fields'][]=  array(
						'label'       => __( 'Show Header Top', 'SimThemes' ),
						'id'          => 'show_header_top',
						'type'        => 'on-off',
						'desc'        => sprintf( __( 'Shows the Slider when set to %s.', 'SimThemes' ), '<code>on</code>' ),
						'std'         => $Display_Header_Top,
						'condition'   => 'Display_Header:is(on),Display_Header:not()',
					  );

						


	
	return $ST_Pages_meta_boxes;					
						
	}