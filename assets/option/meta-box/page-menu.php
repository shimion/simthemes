<?php

add_filter('ST_Filters_Pages_meta_boxes', 'ST__meta_box_menu__bar', 30);

	function ST__meta_box_menu__bar($ST_Pages_meta_boxes){
/*					$menu_font_size = ot_get_option('menu_font_size');
					if(!empty($menu_font_size)) 
					$menu_font_size = $menu_font_size;
					
					$menu_background_color = ot_get_option('menu_background_color');
					if(!empty($menu_background_color)) 
					$menu_background_color = $menu_background_color;
					
					
					$menu_item_color = ot_get_option('menu_item_color');
					if(!empty($menu_item_color)) 
					$menu_item_color = $menu_item_color;
					
					
					
					$menu_item_hover_color = ot_get_option('menu_item_hover_color');
					if(!empty($menu_item_hover_color)) 
					$menu_item_hover_color = $menu_item_hover_color;
					
					
					$menu_item_hover_background = ot_get_option('menu_item_hover_background');
					if(!empty($menu_item_hover_background)) 
					$menu_item_hover_background = $menu_item_hover_background;
					
					
					$menu_item_active_background = ot_get_option('menu_item_active_background');
					if(!empty($menu_item_active_background)) 
					$menu_item_active_background = $menu_item_active_background;
					
					
					$dropdown_background = ot_get_option('dropdown_background');
					if(!empty($dropdown_background)) 
					$dropdown_background = $dropdown_background;
					
					
					$dropdown_item_hover_background = ot_get_option('dropdown_item_hover_background');
					if(!empty($dropdown_item_hover_background)) 
					$dropdown_item_hover_background = $dropdown_item_hover_background;
					
					
					$dropdown_item_hover_color = ot_get_option('dropdown_item_hover_color');
					if(!empty($dropdown_item_hover_color)) 
					$dropdown_item_hover_color = $dropdown_item_hover_color;
					
					$menu_font_size_dropdown = ot_get_option('menu_font_size_dropdown');
					if(!empty($menu_font_size_dropdown)) 
					$menu_font_size_dropdown = $menu_font_size_dropdown;
					
					$dropdown_item_color = ot_get_option('dropdown_item_color');
					if(!empty($dropdown_item_color)) 
					$dropdown_item_color = $dropdown_item_color;
*/					
					
					
		$ST_Pages_meta_boxes['fields'][]=   array(
				'label'       => __( 'Menu', 'SimThemes' ),
				'id'          => 'menu',
				'type'        => 'tab'
			  );
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
			
				'label'       => __('Important Note', 'SimThemes' ),
				'id'          => 'header_setting',
				'type'        => 'textblock',
				'desc'        => __('Menu Setting', 'SimThemes' ),
				'class'       => 'theme_option_notice',
				'section'     => 'option_types',
		
				
			);
		

			$ST_Pages_meta_boxes['fields'][] = array(
				'id'          => 'menu_mergin_top',
				'label'       => __('Top margin of the menu', 'simthemes' ),
				'desc'        => __('Example: 10px', 'simthemes' ),
				'std'         => array(
										'0' =>'',
										'1' =>'px',
						),
		
				'type'        => 'measurement',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			);
			
			
		
		
			$ST_Pages_meta_boxes['fields'][] = array(
				'id'          => 'menu_mergin_bottom',
				'label'       => __('Bottom margin of the menu', 'simthemes' ),
				'desc'        => __('Example: 10px', 'simthemes' ),
				'std'         => array(
										'0' =>'',
										'1' =>'px',
						),
		
				'type'        => 'measurement',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			);




			$ST_Pages_meta_boxes['fields'][] = array(
				'id'          => 'menu_padding_top',
				'label'       => __('Top margin of the menu', 'simthemes' ),
				'desc'        => __('Example: 10px', 'simthemes' ),
				'std'         => array(
										'0' =>'',
										'1' =>'px',
						),
		
				'type'        => 'measurement',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			);
			
			
		
		
			$ST_Pages_meta_boxes['fields'][] = array(
				'id'          => 'menu_padding_bottom',
				'label'       => __('Bottom padding of the menu', 'simthemes' ),
				'desc'        => __('Example: 10px', 'simthemes' ),
				'std'         => array(
										'0' =>'',
										'1' =>'px',
						),
		
				'type'        => 'measurement',
				'section'     => 'option_types',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			);





		
			
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Menu section Backgroun Color', 'SimThemes' ),
				'id'          => 'menu_background_color',
				'type'        => 'colorpicker-opacity',
				'desc'        => __('Change menu item color', 'SimThemes' ),
				'class'          => 'menu_background_color',
				'section'     => 'option_types',
				'std'		=> $menu_background_color
			);
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Menu Item Color', 'SimThemes' ),
				'id'          => 'menu_item_color',
				'type'        => 'colorpicker',
				'desc'        => __('Change menu item color', 'SimThemes' ),
				'class'          => '',
				'section'     => 'option_types',
				'std'		=> $menu_item_color
			);
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Menu Item Hover Color', 'SimThemes' ),
				'id'          => 'menu_item_hover_color',
				'type'        => 'colorpicker',
				'desc'        => __('Change menu item color hover', 'SimThemes' ),
				'class'          => '',
				'section'     => 'option_types',
				'std'		=> $menu_item_hover_color
			);
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Menu Item Hover Background', 'SimThemes' ),
				'id'          => 'menu_item_hover_background',
				'type'        => 'colorpicker-opacity',
				'desc'        => __('Change menu item hover background color', 'SimThemes' ),
				'section'     => 'option_types',
				'class'          => '',
				'std'		=> $menu_item_hover_background
			);
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Menu Item Active Background', 'SimThemes' ),
				'id'          => 'menu_item_active_background',
				'type'        => 'colorpicker-opacity',
				'desc'        => __('Change menu item active background color', 'SimThemes' ),
				'section'     => 'option_types',
				'class'          => '',
				'std'		=> $menu_item_active_background
			);
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Dropdown Background', 'SimThemes' ),
				'id'          => 'dropdown_background',
				'type'        => 'colorpicker-opacity',
				'desc'        => __('', 'SimThemes' ),
				'section'     => 'option_types',
				'class'          => '',
				'std'		=> $dropdown_background
			);
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Dropdown Item Hover Background Color', 'SimThemes' ),
				'id'          => 'dropdown_item_hover_background',
				'type'        => 'colorpicker-opacity',
				'desc'        => __('', 'SimThemes' ),
			   'section'     => 'option_types',
				'class'          => '',
				'std'		=> $dropdown_item_hover_background
			);
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Dropdown Item Active Background Color', 'SimThemes' ),
				'id'          => 'dropdown_item_active_background',
				'type'        => 'colorpicker-opacity',
				'desc'        => __('', 'SimThemes' ),
			   'section'     => 'option_types',
				'class'          => '',
				'std'		=> $dropdown_item_active_background
			);
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Dropdown Item Color', 'SimThemes' ),
				'id'          => 'dropdown_item_color',
				'type'        => 'colorpicker',
				'desc'        => __('', 'SimThemes' ),
			   'section'     => 'option_types',
				'class'          => '',
				'std'		=> $dropdown_item_color
			);
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Dropdown Item Hover Color', 'SimThemes' ),
				'id'          => 'dropdown_item_hover_color',
				'type'        => 'colorpicker',
				'desc'        => __('', 'SimThemes' ),
				'section'     => 'option_types',
				'class'          => '',
				'std'		=> $dropdown_item_hover_color
			);
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
				'label'       => __('Dropdown Item Active Color', 'SimThemes' ),
				'id'          => 'dropdown_item_active_color',
				'type'        => 'colorpicker',
				'desc'        => __('', 'SimThemes' ),
				'section'     => 'option_types',
				'class'          => '',
				'std'		=> $dropdown_item_active_color
			);
		
		
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
							'label'       => __( 'Menu Font Size', 'SimThemes' ),
							'id'          => 'menu_font_size',
							'desc'        => __('Please provide the menu font size.', 'simthemes' ),
							'std'         => array(
													'0'=> $menu_font_size['0'],
													'1'=> $menu_font_size['1'],
												),
							'type'        => 'measurement',
							'rows'        => '',
							'post_type'   => '',
							'taxonomy'    => '',
							 'section'     => 'option_types',
			);
		
		
			$ST_Pages_meta_boxes['fields'][]= array(
							'label'       => __( 'Menu Dropdown Font Size', 'SimThemes' ),
							'id'          => 'menu_font_size_dropdown',
							'desc'        => __('Please provide the menu dropdown font size.', 'simthemes' ),
							'std'         => array(
													'0'=> $menu_font_size_dropdown['0'],
													'1'=> $menu_font_size_dropdown['1'],
												),
							'type'        => 'measurement',
							'rows'        => '',
							'post_type'   => '',
							'taxonomy'    => '',
							'section'     => 'option_types',
			);						


	
	return $ST_Pages_meta_boxes;					
						
	}