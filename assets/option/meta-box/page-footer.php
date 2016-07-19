<?php

add_filter('ST_Filters_Pages_meta_boxes', 'ST__meta_box_footer', 50);

	function ST__meta_box_footer($ST_Pages_meta_boxes){
/*				  $footer_widget_disable = ot_get_option('footer_widget_disable');
				  if(!empty( $footer_widget_disable)){
					   $footer_widget_disable =  $footer_widget_disable;
					  }
*/		
		$ST_Pages_meta_boxes['fields'][]=  array(
        'label'       => __( 'Footer', 'SimThemes' ),
        'id'          => 'footer',
        'type'        => 'tab'
      );

		$ST_Pages_meta_boxes['fields'][]=   array(
						'id'          => 'Display_footer_widget_area',
						'label'       => __( 'Display Footer Widget Area', 'SimThemes' ),
						'desc'        => __( 'Choose to show or hide the footer.', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => $footer_widget_disable
					  );
/*		$ST_Pages_meta_boxes['fields'][]=   array(
						'id'          => 'Display_footer_widget_area',
						'label'       => __( 'Display Copyright Area', 'SimThemes' ),
						'desc'        => __( 'Choose to show or hide the copyright area.', 'SimThemes' ),
						'type'        => 'on-off',
						'std'         => 'on'
					  );
*/
	
						


	
	return $ST_Pages_meta_boxes;					
						
	}