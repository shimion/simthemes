<?php
add_filter('option_tree_settings_args', 'st__woo_option', 100);
function st__woo_option($custom_settings){

global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'woo','title' => 'Woocommerce');


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'woo_note',
        'type'        => 'textblock',
        'desc'        => __('Woocommerce Setting', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'woo',

		
	);




	$custom_settings['settings'][] = array(
		'id'          => 'show_cart_button_menu',
        'label'       => __('Display Woocommerce Cart Button on the Menu Right', 'SimThemes' ),
        'desc'        => __('', 'SimThemes' ),
        'std'         => 'off',
		'type'        => 'on-off',		
        'section'     => 'woo',
	);





	
	
	$custom_settings['settings'][] = array(
		'id'          => 'woo_title',
        'label'       => __('Woocommerce Title', 'simthemes' ),
        'desc'        => __('This text will display in the page title bar of the assigned Woocommerce page.' ),
        'std'         => 'Shop',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'woo',
        'class'       => '',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'woo_text',
        'label'       => __('Woocommerce Subtitle', 'simthemes' ),
        'desc'        => __('This text will display as subheading in the page title bar of the assigned Woocommerce page.' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'woo',
        'class'       => '',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'woo_Bar_Height',
        'label'       => __('Woocommerce Bar Height', 'simthemes' ),
        'desc'        => __('Example: 87px.', 'simthemes' ),
        'std'         => array(
								'0' =>'100',
								'1' =>'px',
				),
        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'woo',
        'class'       => '',
	);
	
	
	$custom_settings['settings'][] = array(
						'id'          => 'woo_Title_Background',
						'label'       => __( 'Title Background', 'SimThemes' ),
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'background',
						'std'        => array(
								'background-color' =>'#E7DFDF',
								'background-repeat' =>'no-repeat',
								'background-attachment' =>'',
								'background-position' =>'center top',
								'background-size' =>'',
								'background-image' => '',
							),
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'section'     => 'woo',
						'operator'    => 'and',
						
	);
	


						$custom_settings['settings'][] = array(
							'label'       => __('Woocommerce Heading Title Color', 'SimThemes' ),
							'id'          => 'woo_Heading_Color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'woo',
							
						);

						$custom_settings['settings'][] = array(
							'label'       => __('Woocommerce Heading Text Color', 'SimThemes' ),
							'id'          => 'woo_Text_Color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'woo',
							
						);





/*						$custom_settings['settings'][] = array(
							'label'       => __('Button Color', 'SimThemes' ),
							'id'          => 'woo_button_Color',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'woo',
							'std'        => ot_get_option('button_Color'),
							
						);




						$custom_settings['settings'][] = array(
							'label'       => __('Button Color Hover', 'SimThemes' ),
							'id'          => 'woo_button_Color_hover',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'woo',
							'std'        => ot_get_option('button_Color_hover'),
							
						);





						$custom_settings['settings'][] = array(
							'label'       => __('Button Text Color', 'SimThemes' ),
							'id'          => 'woo_button_text_color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'woo',
							'std'        => ot_get_option('button_text_color'),
						);


						$custom_settings['settings'][] = array(
							'label'       => __('Button Text Color Hover', 'SimThemes' ),
							'id'          => 'woo_button_text_color_hover',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'woo',
							'std'        => ot_get_option('button_text_color_hover'),
						);


*/








	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'woo_woo_bread_cumbs',
        'type'        => 'textblock',
        'desc'        => __('TITLE RIGHT OPTIONS', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'woo',
		
		
	);

	$custom_settings['settings'][] = array(
		'id'          => 'woo_Display_Breadcrumbs_Search_Bar',
        'label'       => __('Display Breadcrumbs/Search Bar', 'SimThemes' ),
		'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'checkbox',
		
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'yes',
            'label'   => __( 'Check to display the breadcrumbs or search bar in general. Uncheck to hide them.', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'woo_Breadcrumbs_or_Search_Box',
        'label'       => __('Breadcrumbs or Search Box?', 'SimThemes' ),
		'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'breadcrumbses',
            'label'   => __( 'Breadcrumbs', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'search_box',
            'label'   => __( 'Search Box', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);
	



	$custom_settings['settings'][] = array(
		'id'          => 'excerpt_full_content',
        'label'       => __('Show Excerpt or Full Content ?', 'SimThemes' ),
		'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
        'std'         => 'Excerpt',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'Excerpt',
            'label'   => __( 'Excerpt', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'Full Content',
            'label'   => __( 'Full Content', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);
	



	$custom_settings['settings'][] = array(
		'id'          => 'excerpt_length',
        'label'       => __('Excerpt Length', 'simthemes' ),
        'desc'        => __('Insert the number of words you want to show in the post excerpts.' ),
        'std'         => '55',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'woo',
        'class'       => '',
	);








	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'woo_arc_cat_layout',
        'type'        => 'textblock',
        'desc'        => __('Products/Product Archive/Product Category Layout', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'woo',
		
		
	);





	$custom_settings['settings'][] = array(
		'id'          => 'woo_layout',
        'label'       => __('Woocommerce Layout', 'SimThemes' ),
		'desc'        => __('Select the layout for the assigned woo page in settings > reading.', 'SimThemes' ),
        'std'         => '3',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => '2',
            'label'   => __( 'Two Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => '3',
            'label'   => __( 'Three Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => '4',
            'label'   => __( 'Four Column', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'woo_sidebar',
        'label'       => __('Woocommerce Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the woo sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
        'std'         => 'no_sidebar',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'left_sidebar',
            'label'   => __( 'Left Sidebar', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'right_sidebar',
            'label'   => __( 'Right Sidebar', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'no_sidebar',
            'label'   => __( 'No Sidebar', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'woo_archive_layout',
        'label'       => __('Archive/Category Layout', 'SimThemes' ),
		'desc'        => __('Select layout for Archive pages', 'SimThemes' ),
        'std'         => '3',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => '2',
            'label'   => __( 'Two Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => '3',
            'label'   => __( 'Three Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => '4',
            'label'   => __( 'Four Column', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'woo_archive_sidebar',
        'label'       => __('Woocommerce Archive/Category Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the Woocommerce Archive/Category sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'left_sidebar',
            'label'   => __( 'Left Sidebar', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'right_sidebar',
            'label'   => __( 'Right Sidebar', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'no_sidebar',
            'label'   => __( 'No Sidebar', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);





	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'woo_ind_layout',
        'type'        => 'textblock',
        'desc'        => __('Individual Product Layout', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'woo',
		
		
	);





	$custom_settings['settings'][] = array(
		'id'          => 'woo_ind_sidebar',
        'label'       => __('Individual Product Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the woo sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
        'std'         => 'no_sidebar',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'left_sidebar',
            'label'   => __( 'Left Sidebar', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'right_sidebar',
            'label'   => __( 'Right Sidebar', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'no_sidebar',
            'label'   => __( 'No Sidebar', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'woo_related_product_column',
        'label'       => __('Related Products Column', 'SimThemes' ),
		'desc'        => __('', 'SimThemes' ),
        'std'         => '3',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => '2',
            'label'   => __( 'Two Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => '3',
            'label'   => __( 'Three Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => '4',
            'label'   => __( 'Four Column', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'woo',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'woo_related_product_number',
        'label'       => __('Related Products Number', 'SimThemes' ),
		'desc'        => __('', 'SimThemes' ),
        'std'         => '3',
        'type'        => 'text',		
        'section'     => 'woo',
	);


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'woo_wishlist',
        'type'        => 'textblock',
        'desc'        => __('Wishlist Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'woo',
		
		
	);







	$custom_settings['settings'][] = array(
		'id'          => 'show_wishlist_button_menu',
        'label'       => __('Display Wishlist Menu Button', 'SimThemes' ),
        'desc'        => __('Please make sure "YITH WooCommerce Wishlist" plugin is installed. Unless It will not work.', 'SimThemes' ),
        'std'         => 'on',
		'type'        => 'on-off',		
        'section'     => 'woo',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'show_wishlist_button_product',
        'label'       => __('Display Wishlist Button on the Products', 'SimThemes' ),
        'desc'        => __('Please make sure "YITH WooCommerce Wishlist" plugin is installed. Unless It will not work.', 'SimThemes' ),
        'std'         => 'on',
		'type'        => 'on-off',		
        'section'     => 'woo',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'show_wishlist_button_ind_product',
        'label'       => __('Display Wishlist Button on the Individual Product', 'SimThemes' ),
        'desc'        => __('Please make sure "YITH WooCommerce Wishlist" plugin is installed. Unless It will not work.', 'SimThemes' ),
        'std'         => 'on',
		'type'        => 'on-off',		
        'section'     => 'woo',
	);





	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'woo_compare',
        'type'        => 'textblock',
        'desc'        => __('Compare Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'woo',
		
		
	);









	$custom_settings['settings'][] = array(
		'id'          => 'show_compare_button_product',
        'label'       => __('Display Compare Button on the Products', 'SimThemes' ),
        'desc'        => __('Please make sure "YITH WooCommerce Compare" plugin is installed. Unless It will not work.', 'SimThemes' ),
        'std'         => 'on',
		'type'        => 'on-off',		
        'section'     => 'woo',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'show_compare_button_ind_product',
        'label'       => __('Display Compare Button on the Individual Product', 'SimThemes' ),
        'desc'        => __('Please make sure "YITH WooCommerce Compare" plugin is installed. Unless It will not work.', 'SimThemes' ),
        'std'         => 'on',
		'type'        => 'on-off',		
        'section'     => 'woo',
	);





	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'woo_quick',
        'type'        => 'textblock',
        'desc'        => __('Quick View Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'woo',
		
		
	);




	$custom_settings['settings'][] = array(
		'id'          => 'show_quick_button_product',
        'label'       => __('Display Quick View Button on the Products', 'SimThemes' ),
        'desc'        => __('Please make sure "YITH WooCommerce Quick View" plugin is installed. Unless It will not work.', 'SimThemes' ),
        'std'         => 'on',
		'type'        => 'on-off',		
        'section'     => 'woo',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'show_quick_button_ind_product',
        'label'       => __('Display Quick View Button on the Individual Product', 'SimThemes' ),
        'desc'        => __('Please make sure "YITH WooCommerce Quick View" plugin is installed. Unless It will not work.', 'SimThemes' ),
        'std'         => 'on',
		'type'        => 'on-off',		
        'section'     => 'woo',
	);





	return $custom_settings;

}
	