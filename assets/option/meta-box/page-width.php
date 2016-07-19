<?php

add_filter('ST_Filters_Pages_meta_boxes', 'ST__meta_box_page_width', 80);

	function ST__meta_box_page_width($ST_Pages_meta_boxes){
			     $ST_Pages_meta_boxes['fields'][]=  array(
        'label'       => __( 'Page Width', 'SimThemes' ),
        'id'          => 'page_width',
        'type'        => 'tab'
      );

	$ST_Pages_meta_boxes['fields'][] = array(
		'id'          => 'site_width',
        'label'       => __('Site Width', 'SimThemes' ),
        'desc'        => __('Controls the overall site width. In px or %, ex: 100% or 1100px.' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'',
				),

        'type'        => 'measurement',
        'section'     => 'page_width',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
	$ST_Pages_meta_boxes['fields'][] = array(
		'id'          => 'content_width',
        'label'       => __('Content Width', 'SimThemes' ),
        'desc'        => __('Controls the content width. In %, ex: 75%.' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'',
				),

        'type'        => 'measurement',
        'section'     => 'page_width',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	
	$ST_Pages_meta_boxes['fields'][] = array(
		'id'          => 'sidebar_width',
        'label'       => __('Sidebar Width', 'SimThemes' ),
        'desc'        => __('Controls the sidebar width. In %, ex: 25%.' , 'SimThemes' ),
        'std'         => array(
								'0' =>'',
								'1' =>'',
				),

        'type'        => 'measurement',
        'section'     => 'page_width',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
						


	
	return $ST_Pages_meta_boxes;					
						
	}