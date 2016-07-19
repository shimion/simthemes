<?php
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'gmap','title' => 'Google Map Settings');
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'map_address',
        'label'       => __('Address', 'wpm_taxdomain' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'gmap',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'map_city',
        'label'       => __('City', 'wpm_taxdomain' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'gmap',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'map_state',
        'label'       => __('State', 'wpm_taxdomain' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'gmap',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'map_zip',
        'label'       => __('Zip Code', 'wpm_taxdomain' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'gmap',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);