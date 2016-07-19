<?php
add_filter('option_tree_settings_args', 'typhography', 30);
function typhography($custom_settings){
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'typhography','title' => 'Typhography');
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'general_text_sizings',
        'type'        => 'textblock',
        'desc'        => __('General Font Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'typhography'
		
	);
	
	
	
/*	
	$custom_settings['settings'][] =       array(
        'id'          => 'google_font',
        'label'       => __( 'Google Fonts', 'SimThemes' ),
        'std'         => array( 
          array(
            'family'    => 'opensans',
            'variants'  => array( '300', '300italic', 'regular', 'italic', '600', '600italic' ),
            'subsets'   => array( 'latin' )
          )
        ),
        'type'        => 'google-fonts',
        'section'     => 'typhography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'desc'        => __('', 'SimThemes' ),
        'operator'    => 'and'
	);
	
*/	


/*      $custom_settings['settings'][] = array(
        'id'          => 'heading_font',
        'label'       => __( 'Heading Font', 'option-tree-theme' ),
        'desc'        => 'Please select the heading font',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'section'     => 'typhography',
        'operator'    => 'and'
      );

*/	
	
	

	
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'body_font_size',
        'label'       => __('General Text Font size', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
        'std'         => array(
								'0' =>'14',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'typhography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	



	$custom_settings['settings'][] = array(
		'label'       => __('Change Linked Text Color', 'SimThemes' ),
        'id'          => 'body_link_color',
        'type'        => 'colorpicker',
        'desc'        => __('You can change the general  link text color for all over the site using this option. <span class="admin_option_spans_ok">You are giving a color for "anchor (<<span>a><</span>/a>)" HTML tags.</spna>', 'SimThemes' ),
        'section'     => 'typhography'
	);
	
	$custom_settings['settings'][] = array(
		'label'       => __('Change Linked Text Hover Color', 'SimThemes' ),
        'id'          => 'body_link_hover_color',
        'type'        => 'colorpicker',
        'desc'        => __('You can change the general  link text hover color for all over the site using this option. <span class="admin_option_spans_ok">You are giving a color for "anchor (<<span>a><</span>/a</span>>)" HTML tags.</spna>', 'SimThemes' ),
        'section'     => 'typhography'
	);


	
	
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'title_texts_color_settings',
        'type'        => 'textblock',
        'desc'        => __('Title  Font Color Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'typhography'
		
	);
	
	
	$custom_settings['settings'][] = array(
		'label'       => __('Change the title Color For entire site', 'SimThemes' ),
        'id'          => 'title_color',
        'type'        => 'colorpicker',
        'desc'        => __('Change the title Color For entire site', 'SimThemes' ),
        'section'     => 'typhography'
	);
	
	$custom_settings['settings'][] = array(
		'label'       => __('Change the Linked title Color For entire site', 'SimThemes' ),
        'id'          => 'title_color_linked',
        'type'        => 'colorpicker',
        'desc'        => __('Change the linked title Color For entire site', 'SimThemes' ),
        'section'     => 'typhography'
	);
	
	$custom_settings['settings'][] = array(
		'label'       => __('Change the Linked title Hover Color For entire site', 'SimThemes' ),
        'id'          => 'title_color_linked_hover',
        'type'        => 'colorpicker',
        'desc'        => __('Change the linked title Hover Color For entire site', 'SimThemes' ),
        'section'     => 'typhography'
	);
	
	
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'title_texts_size_settings',
        'type'        => 'textblock',
        'desc'        => __('Title Font Size Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'typhography'
		
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'h1_font_size',
        'label'       => __('Heading font size (h1)', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'typhography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'h2_font_size',
        'label'       => __('Heading font size (h2)', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'typhography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'h3_font_size',
        'label'       => __('Heading font size (h3)', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'typhography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'h4_font_size',
        'label'       => __('Heading font size (h4)', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'typhography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'h5_font_size',
        'label'       => __('Heading font size (h5)', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'typhography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'h6_font_size',
        'label'       => __('Heading font size (h6)', 'SimThemes' ),
        'desc'        => __('' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'px',
				),

        'type'        => 'measurement',
        'section'     => 'typhography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
return $custom_settings;	
}