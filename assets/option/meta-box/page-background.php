<?php

add_filter('ST_Filters_Pages_meta_boxes', 'ST__meta_box_bg', 60);

	function ST__meta_box_bg($ST_Pages_meta_boxes){
		
/*				  $Display_Custom_Background = ot_get_option('Display_Custom_Background');
				  if(!empty($Display_Custom_Background))
				  $Display_Custom_Background = $Display_Custom_Background;
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
							
					$bg_body = ot_get_option('bg_body');
					
					
							if(!empty($bg_body)){
							$bg_body =  array(
												'background-color' =>$bg_body['background-color'],
												'background-repeat' =>$bg_body['background-repeat'],
												'background-attachment' =>$bg_body['background-attachment'],
												'background-position' =>$bg_body['background-position'],
												'background-size' =>$bg_body['background-size'],
												'background-image' => $bg_body['background-image'],
											);
							}
*/							
							
				  
		
		
     $ST_Pages_meta_boxes['fields'][]=  array(
        'label'       => __( 'Background', 'SimThemes' ),
        'id'          => 'background',
        'type'        => 'tab'
      );

		$ST_Pages_meta_boxes['fields'][]=   array(
						'id'          => 'Display_Custom_Background',
						'label'       => __( 'Display Custom Background', 'SimThemes' ),
						//'desc'        => __( 'Choose to show or hide the header.', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => $Display_Custom_Background
					  );
	
		 $ST_Pages_meta_boxes['fields'][]=  array(
						'id'          => 'bg_body',
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
						'operator'    => 'and',
						'condition'   => 'Display_Custom_Background:is(on),Display_Custom_Background:not()',
						'std'        => $bg_body,

						
						
						
					  );
						


	
	return $ST_Pages_meta_boxes;					
						
	}