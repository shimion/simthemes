<?php
add_filter('option_tree_settings_args', 'st__blog', 90);
function st__blog($custom_settings){

global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'blog','title' => 'Blog');


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'blog_bar_option',
        'type'        => 'textblock',
        'desc'        => __('General Blog Option', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'blog',

		
	);



	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'blog_title',
        'label'       => __('Blog Title', 'simthemes' ),
        'desc'        => __('This text will display in the page title bar of the assigned blog page.' ),
        'std'         => 'Blog',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'blog',
        'class'       => '',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'blog_text',
        'label'       => __('Blog Subtitle', 'simthemes' ),
        'desc'        => __('This text will display as subheading in the page title bar of the assigned blog page.' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'blog',
        'class'       => '',
	);


	$custom_settings['settings'][] = array(
		'id'          => 'blog_Bar_Height',
        'label'       => __('Title Bar Height', 'simthemes' ),
        'desc'        => __('Example: 87px (This will appear on blog, category and archive pages.)', 'simthemes' ),
        'std'         => array(
								'0' =>'100',
								'1' =>'px',
				),
        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'blog',
        'class'       => '',
	);
	
	
	$custom_settings['settings'][] = array(
						'id'          => 'blog_Title_Background',
						'label'       => __( 'Title Background', 'SimThemes' ),
						'desc'        => __( 'This will appear on blog, category and archive pages.', 'SimThemes' ),
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
						'section'     => 'blog',
						'operator'    => 'and',
						
	);
	


						$custom_settings['settings'][] = array(
							'label'       => __('Heading Color', 'SimThemes' ),
							'id'          => 'blog_Heading_Color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on blog, category and archive pages.', 'SimThemes' ),
							'section'     => 'blog',
							
						);

						$custom_settings['settings'][] = array(
							'label'       => __('Text Color', 'SimThemes' ),
							'id'          => 'blog_Text_Color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on blog, category and archive pages.', 'SimThemes' ),
							'section'     => 'blog',
							
						);





/*						$custom_settings['settings'][] = array(
							'label'       => __('Button Color', 'SimThemes' ),
							'id'          => 'blog_button_Color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on blog, category and archive pages.', 'SimThemes' ),
							'section'     => 'blog',
							
						);




						$custom_settings['settings'][] = array(
							'label'       => __('Button Color Hover', 'SimThemes' ),
							'id'          => 'blog_button_Color_hover',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'blog',
							'std'        => ot_get_option('button_Color_hover'),
							
						);





						$custom_settings['settings'][] = array(
							'label'       => __('Button Text Color', 'SimThemes' ),
							'id'          => 'blog_button_text_color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'blog',
							'std'        => ot_get_option('button_text_color'),
						);


						$custom_settings['settings'][] = array(
							'label'       => __('Button Text Color Hover', 'SimThemes' ),
							'id'          => 'blog_button_text_color_hover',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'blog',
							'std'        => ot_get_option('button_text_color_hover'),
						);

*/








	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'blog_blog_bread_cumbs',
        'type'        => 'textblock',
        'desc'        => __('TITLE RIGHT OPTIONS', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'blog',
		
		
	);

	$custom_settings['settings'][] = array(
		'id'          => 'blog_Display_Breadcrumbs_Search_Bar',
        'label'       => __('Display Breadcrumbs/Search Bar', 'SimThemes' ),
		'desc'        => __('This will appear on blog, category and archive pages.', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'checkbox',
		
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'yes',
            'label'   => __( 'Check to display the breadcrumbs or search bar in general. Uncheck to hide them.', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'blog',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'blog_Breadcrumbs_or_Search_Box',
        'label'       => __('Breadcrumbs or Search Box?', 'SimThemes' ),
		'desc'        => __('This will appear on blog, category and archive pages.', 'SimThemes' ),
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
		
        'section'     => 'blog',
	);
	



	$custom_settings['settings'][] = array(
		'id'          => 'blog_excerpt_full_content',
        'label'       => __('Show Excerpt or Full Content ?', 'SimThemes' ),
		'desc'        => __('This will appear on blog, category and archive pages.', 'SimThemes' ),
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
		
        'section'     => 'blog',
	);
	



	$custom_settings['settings'][] = array(
		'id'          => 'excerpt_length_blog',
        'label'       => __('Excerpt Length', 'simthemes' ),
        'desc'        => __('Insert the number of words you want to show in the post excerpts.' ),
        'std'         => '55',
        'type'        => 'text',
        'section'     => 'blog',
	);








	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'blog_arc_cat_layout',
        'type'        => 'textblock',
        'desc'        => __('Blog/Archive/Category Layout', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'blog',
		
		
	);





	$custom_settings['settings'][] = array(
		'id'          => 'blog_layout',
        'label'       => __('Blog Layout', 'SimThemes' ),
		'desc'        => __('Select the layout for the assigned blog page in settings > reading.', 'SimThemes' ),
        'std'         => 'three_column',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'one_column',
            'label'   => __( 'One Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'two_column',
            'label'   => __( 'Two Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'three_column',
            'label'   => __( 'Three Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'four_column',
            'label'   => __( 'Four Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'two_column_grid',
            'label'   => __( 'Two Column Grid', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'three_column_grid',
            'label'   => __( 'Three Column Grid', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'four_column_grid',
            'label'   => __( 'Four Column Grid', 'SimThemes' ),
          ),
		 array(
            'value'   => 'time_line',
            'label'   => __( 'Timeline', 'SimThemes' ),
          ),
        ),
		
        'section'     => 'blog',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'blog_sidebar',
        'label'       => __('Blog Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the blog sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
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
		
        'section'     => 'blog',
	);
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'sidebar_blog',
        'label'       => __('Select sidebar for blog', 'SimThemes' ),
		'desc'        => __('', 'SimThemes' ),
        'std'         => '',
        'type'        => 'sidebar-select',
		 'section'     => 'blog',
		);
         
			

	



	$custom_settings['settings'][] = array(
		'id'          => 'archive_layout',
        'label'       => __('Archive/Category Layout', 'SimThemes' ),
		'desc'        => __('Select layout for Archive pages', 'SimThemes' ),
        'std'         => 'two_column',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'one_column',
            'label'   => __( 'One Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'two_column',
            'label'   => __( 'Two Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'three_column',
            'label'   => __( 'Three Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'four_column',
            'label'   => __( 'Four Column', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'two_column_grid',
            'label'   => __( 'Two Column Grid', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'three_column_grid',
            'label'   => __( 'Three Column Grid', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'four_column_grid',
            'label'   => __( 'Four Column Grid', 'SimThemes' ),
          ),
		 array(
            'value'   => 'time_line',
            'label'   => __( 'Timeline', 'SimThemes' ),
          ),
        ),
		
        'section'     => 'blog',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'archive_sidebar',
        'label'       => __('Archive/Category Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the Archive/Category sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
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
		
        'section'     => 'blog',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'sidebar_archive',
        'label'       => __('Select sidebar for archive', 'SimThemes' ),
		'desc'        => __('', 'SimThemes' ),
        'std'         => '',
        'type'        => 'sidebar-select',
		 'section'     => 'blog',
		);
         
			






	$custom_settings['settings'][] = array(
		'id'          => 'title_size_ind',
        'label'       => __('Title Size', 'simthemes' ),
        'desc'        => __('Example: 20px', 'simthemes' ),
        'std'         => array(
								'0' =>'20',
								'1' =>'px',
				),
        'type'        => 'measurement',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'blog',
        'class'       => '',
	);
	
	






	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'blog_ind_layout',
        'type'        => 'textblock',
        'desc'        => __('Individual Blog Layout', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'blog',
		
		
	);





	$custom_settings['settings'][] = array(
		'id'          => 'blog_ind_sidebar',
        'label'       => __('Individual blog Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the blog sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
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
		
        'section'     => 'blog',
	);




/*	$custom_settings['settings'][] = array(
		'id'          => 'blog_layout',
        'label'       => __('Individual blog Layout', 'SimThemes' ),
		'desc'        => __('Choice the individual blog Layout', 'SimThemes' ),
        'std'         => 'no_sidebar',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'wide',
            'label'   => __( 'Wide', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'half',
            'label'   => __( 'Half', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'blog',
	);
	




*/


	$custom_settings['settings'][] = array(
		'id'          => 'sidebar_single',
        'label'       => __('Select sidebar for blog', 'SimThemes' ),
		'desc'        => __('', 'SimThemes' ),
        'std'         => '',
        'type'        => 'sidebar-select',
		 'section'     => 'blog',
		);
	
/*	$custom_settings['settings'][] = array(
		'id'          => 'blog_related_column',
        'label'       => __('Related Posts Column', 'SimThemes' ),
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
		
        'section'     => 'blog',
	);

*/
return $custom_settings;
}