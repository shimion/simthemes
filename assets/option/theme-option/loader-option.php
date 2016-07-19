<?php
add_filter('option_tree_settings_args', 'lazy_loader', 20);
function lazy_loader($custom_settings){
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'lazy_loader','title' => 'Lazy Loader');
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'my_textblock',
        'type'        => 'textblock',
        'desc'        => __('Lazy Loader Settings', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'lazy_loader'
		
	);
	
	$custom_settings['settings'][] =  array(
						'id'          => 'show_lazy_loader',
						'label'       => __( 'Show Lazy Loader', 'SimThemes' ),
						//'desc'        => __( 'Choose to show or hide the header.', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => 'on',
						'section'     => 'lazy_loader'
					  );
	


	$custom_settings['settings'][] = array(
		'label'       => __('Loading Background Color', 'SimThemes' ),
        'id'          => 'l_b_color',
        'type'        => 'colorpicker',
        'desc'        => __('Please Select the color for Loading Background', 'SimThemes' ),
		'std'         => '#fff',
        'section'     => 'lazy_loader'
	);

	$custom_settings['settings'][] = array(
		'label'       => __('Loading Icon Color', 'SimThemes' ),
        'id'          => 'l_icon_color',
        'type'        => 'colorpicker',
        'desc'        => __('Please Select the Loading Icon Background', 'SimThemes' ),
		'std'         => '#313030',
        'section'     => 'lazy_loader'
	);



/*	$custom_settings['settings'][] = array(
		'id'          => 'lazy_loader_size',
        'label'       => __('Select Loader Icon Size', 'SimThemes' ),
		'desc'        => __('Please select the Loader Icon size', 'SimThemes' ),
        'std'         => 'yes',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'small',
            'label'   => __( 'Small', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'medium',
            'label'   => __( 'Medium', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'large',
            'label'   => __( 'Large', 'SimThemes' ),
		  
        ),
		),
		
        'section'     => 'lazy_loader',
	);
*/


	
	
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'lazy_loader',
        'label'       => __('Select Lazy Loader', 'SimThemes' ),
		'desc'        => __('This will appear on Portfolio category and Portfolio archive pages.', 'SimThemes' ),
        'std'         => 'circles',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'atom',
            'label'   => __( 'Atom', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'spiral',
            'label'   => __( 'Spiral', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'fountain',
            'label'   => __( 'Fountain', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'windows8',
            'label'   => __( 'Windows 8', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'fold-unfold',
            'label'   => __( 'Fold Unfold', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'fountain-text',
            'label'   => __( 'Fountain Text', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'heart',
            'label'   => __( 'Heart', 'SimThemes' ),
          ), 
/*		 array(
            'value'   => 'puff',
            'label'   => __( 'Puff', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'rings',
            'label'   => __( 'Rings', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'spinning-circles',
            'label'   => __( 'Spinning Circles', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'tail-spin',
            'label'   => __( 'Tail Spin', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'three-dots',
            'label'   => __( 'Three Dots', 'SimThemes' ),
          ), 		  
*/        ),
		
        'section'     => 'lazy_loader',
	);
	
	
return $custom_settings;

}
