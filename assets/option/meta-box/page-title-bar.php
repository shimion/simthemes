<?php

add_filter('ST_Filters_Pages_meta_boxes', 'ST__meta_box_title__bar', 70);

	function ST__meta_box_title__bar($ST_Pages_meta_boxes){
/*		$Page_Title_Bar_Height = ot_get_option('Page_Title_Bar_Height');
							if(!empty($Page_Title_Bar_Height)){
								 $Page_Title_Bar_Height =  array(
										'0'=> $Page_Title_Bar_Height['0'],
										'1'=> $Page_Title_Bar_Height['1'],
									);
									
							}
				
				
					$Display_Custom_Background = ot_get_option('Display_Custom_Background');
					
					if(!empty($Display_Custom_Background))
						$Display_Custom_Background = $Display_Custom_Background;
				  
				  $page_title_bar = ot_get_option('page_title_bar');
				  $title_background_page = ot_get_option('Title_Background');
							if(!empty($title_background_page)){
									 $title_background_page = array(
												'background-color' =>$title_background_page['background-color'],
												'background-repeat' =>$title_background_page['background-repeat'],
												'background-attachment' =>$title_background_page['background-attachment'],
												'background-position' =>$title_background_page['background-position'],
												'background-size' =>$title_background_page['background-size'],
												'background-image' =>$title_background_page['background-image'],
											);
							}
				  
				  
				  
				  
				  $Heading_Color = ot_get_option('Heading_Color');
				  $Text_Color = ot_get_option('Text_Color');
*/		
		
			     $ST_Pages_meta_boxes['fields'][]=  array(
        'label'       => __( 'Page Title Bar', 'SimThemes' ),
        'id'          => 'page_title',
        'type'        => 'tab'
      );

		$ST_Pages_meta_boxes['fields'][]=   array(
						'id'          => 'page_title_bar',
						'label'       => __( 'Page Title Bar', 'SimThemes' ),
						//'desc'        => __( 'Choose to show or hide the header.', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => $page_title_bar
					  );
	
		$ST_Pages_meta_boxes['fields'][]=   array(
						'id'          => 'page_title_bar_custom_text',
						'label'       => __( 'Custom Title', 'SimThemes' ),
						'desc'        => __( 'On to show custom title', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => ''
					  );
	

		 $ST_Pages_meta_boxes['fields'][]=  array(
					'label'       => __( 'Custom Title', 'SimThemes' ),
					'id'          => 'Custom_Title_Text',
					'type'        => 'text',
					'desc'        => __( 'Insert custom text for the page title bar.', 'SimThemes' ),
					'std'         => ''
				  );




		$ST_Pages_meta_boxes['fields'][]=   array(
					'label'       => __( 'Custom Subheader Text', 'SimThemes' ),
					'id'          => 'Page_Title_Bar_Custom_Subheader_Text',
					'type'        => 'text',
					'desc'        => __( 'Insert custom subhead text for the page title bar.', 'SimThemes' ),
					'std'         => ''
				  );



		$ST_Pages_meta_boxes['fields'][]=   array(
					'label'       => __( 'Page Title Bar Height', 'SimThemes' ),
					'id'          => 'Page_Title_Bar_Height',
					'desc'        => __('Example: 87px', 'simthemes' ),
					'std'         => $Page_Title_Bar_Height ,
					'type'        => 'measurement',
					'section'     => 'header',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
				  );



		$ST_Pages_meta_boxes['fields'][]=   array(
						'id'          => 'title_background_page',
						'label'       => __( 'Title Background', 'SimThemes' ),
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'background',
						'std'        =>$title_background_page, 
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'operator'    => 'and',
						
					  );



		$ST_Pages_meta_boxes['fields'][]= array(
							'label'       => __('Heading Color', 'SimThemes' ),
							'id'          => 'heading_color_m',
							'type'        => 'colorpicker',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'page_title',
							'std'		  => $Heading_Color
						);
		
		
		
		$ST_Pages_meta_boxes['fields'][]= array(
							'label'       => __('Text Color', 'SimThemes' ),
							'id'          => 'Text_Color',
							'type'        => 'colorpicker',
							'desc'        => __('', 'SimThemes' ),
							'section'     => 'page_title',
							'std'		  => $Text_Color
						);	
						


	
	return $ST_Pages_meta_boxes;					
						
	}