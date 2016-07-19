<?php
add_filter('option_tree_settings_args', 'st__portfolio__option', 110);
function st__portfolio__option($custom_settings){

global $child_theme_variable;


$custom_settings['sections'][] = array( 'id' => 'portfolio','title' => 'Portfolio');


	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'portfolio_note',
        'type'        => 'textblock',
        'desc'        => __('Portfolio Setting', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'portfolio',

		
	);



	
	
	


	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_Bar_Height',
        'label'       => __('Portfolio Ttitle Bar Height', 'simthemes' ),
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
        'section'     => 'portfolio',
        'class'       => '',
	);
	
	
	$custom_settings['settings'][] = array(
						'id'          => 'portfolio_Title_Background',
						'label'       => __( 'Title Background', 'SimThemes' ),
						'desc'        => __( '', 'SimThemes' ),
						'type'        => 'background',
						'std'        => array(
								'background-color' =>'#E7DFDF',
								'background-repeat' =>'no-repeat',
								'background-attachment' =>'',
								'background-position' =>'center top',
								'background-size' =>'',
								'background-image' =>'',
							),
						'section'     => 'option_types',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'min_max_step'=> '',
						'class'       => '',
						'condition'   => '',
						'section'     => 'portfolio',
						'operator'    => 'and',
						
	);
	


						$custom_settings['settings'][] = array(
							'label'       => __('Portfolio Heading Title Color', 'SimThemes' ),
							'id'          => 'portfolio_Heading_Color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'portfolio',
							
						);



/*						$custom_settings['settings'][] = array(
							'label'       => __('Button Color', 'SimThemes' ),
							'id'          => 'portfolio_button_Color',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'portfolio',
							'std'        => ot_get_option('button_Color'),
							
						);




						$custom_settings['settings'][] = array(
							'label'       => __('Button Color Hover', 'SimThemes' ),
							'id'          => 'portfolio_button_Color_hover',
							'type'        => 'colorpicker-opacity',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'portfolio',
							'std'        => ot_get_option('button_Color_hover'),
							
						);





						$custom_settings['settings'][] = array(
							'label'       => __('Button Text Color', 'SimThemes' ),
							'id'          => 'portfolio_button_text_color',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'portfolio',
							'std'        => ot_get_option('button_text_color'),
						);


						$custom_settings['settings'][] = array(
							'label'       => __('Button Text Color Hover', 'SimThemes' ),
							'id'          => 'portfolio_button_text_color_hover',
							'type'        => 'colorpicker',
							'desc'        => __('This will appear on Product, Product category and Product archive pages.', 'SimThemes' ),
							'section'     => 'portfolio',
							'std'        => ot_get_option('button_text_color_hover'),
						);


*/








	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'portfolio_portfolio_bread_cumbs',
        'type'        => 'textblock',
        'desc'        => __('TITLE RIGHT OPTIONS', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'portfolio',
		
		
	);

	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_Display_Breadcrumbs_Search_Bar',
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
		
        'section'     => 'portfolio',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_Breadcrumbs_or_Search_Box',
        'label'       => __('Breadcrumbs or Search Box?', 'SimThemes' ),
		'desc'        => __('This will appear on Portfolio category and Portfolio archive pages.', 'SimThemes' ),
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
		
        'section'     => 'portfolio',
	);
	







	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'portfolio_arc_cat_layout',
        'type'        => 'textblock',
        'desc'        => __('Portfolio Archive/Portfolio Category Layout', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'portfolio',
		
		
	);



	$custom_settings['settings'][] = array(
		'id'          => 'excerpt_full_content',
        'label'       => __('Show Excerpt ,Full Content or Nothing ?', 'SimThemes' ),
		'desc'        => __('This will appear on Portfolio and Portfolio archive pages.', 'SimThemes' ),
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
		 array(
            'value'   => 'Nothing',
            'label'   => __( 'Nothing', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'portfolio',
	);
	



	$custom_settings['settings'][] = array(
		'id'          => 'excerpt_length',
        'label'       => __('Excerpt Length', 'simthemes' ),
        'desc'        => __('Insert the number of words you want to show in the Portfolio excerpts.' ),
        'std'         => '55',
        'type'        => 'text',
        'section'     => 'header',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'section'     => 'portfolio',
        'class'       => '',
	);








/*	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_layout',
        'label'       => __('Portfolio Layout', 'SimThemes' ),
		'desc'        => __('Select the layout for the assigned portfolio page in settings > reading.', 'SimThemes' ),
        'std'         => '3',
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
		
        'section'     => 'portfolio',
	);
*/


/*	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_sidebar',
        'label'       => __('Portfolio Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the portfolio sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
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
		
        'section'     => 'portfolio',
	);
*/


	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_archive_layout',
        'label'       => __('Portfolio Archive/Category Layout', 'SimThemes' ),
		'desc'        => __('Select layout for Portfolio Archive pages', 'SimThemes' ),
        'std'         => '3',
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
        ),
		
        'section'     => 'portfolio',
	);



	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_archive_sidebar',
        'label'       => __('Portfolio Archive/Category Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the Portfolio Archive/Category sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
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
		
        'section'     => 'portfolio',
	);




	$custom_settings['settings'][] = array(
		'id'          => 'sidebar_portfolio',
        'label'       => __('Select sidebar for Portfolio', 'SimThemes' ),
		'desc'        => __('', 'SimThemes' ),
        'std'         => '',
        'type'        => 'sidebar-select',
		 'section'     => 'portfolio',
		);
         
			

	





	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'portfolio_ind_layout',
        'type'        => 'textblock',
        'desc'        => __('Individual Portfolio Layout', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'portfolio',
		
		
	);





	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_ind_sidebar',
        'label'       => __('Individual Portfolio Sidebar Position', 'SimThemes' ),
		'desc'        => __('Select the portfolio sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
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
		
        'section'     => 'portfolio',
	);




	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_layout',
        'label'       => __('Individual portfolio Layout', 'SimThemes' ),
		'desc'        => __('Choice the individual portfolio Layout', 'SimThemes' ),
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
		
        'section'     => 'portfolio',
	);
	





	
	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_related_column',
        'label'       => __('Related Projects Column', 'SimThemes' ),
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
		
        'section'     => 'portfolio',
	);



/*	$custom_settings['settings'][] = array(
		'id'          => 'portfolio_related_number',
        'label'       => __('Related Portfolio Number', 'SimThemes' ),
		'desc'        => __('', 'SimThemes' ),
        'std'         => '3',
        'type'        => 'text',		
        'section'     => 'portfolio',
	);
*/

 return $custom_settings;	
}