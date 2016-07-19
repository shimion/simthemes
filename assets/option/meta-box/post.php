<?php
  

/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'ST_Post_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in theme-options.php.
 *
 * @return    void
 * @since     2.3.0
 */
 
 
 
function ST_Post_meta_boxes() {
	
$ST_post_meta = array(
			'id'          => 'Portfolio_section',
			'title'       => __( 'Post Details', 'SimThemes' ),
			'desc'        => '',
			'pages'       => array( 'post' ),
			'context'     => 'normal',
			'priority'    => 'high',
			'fields'      => array(
			  


			array(
					'id'          => 'show_image_slider_video',
					'label'       => __( 'Show Featured Image or Slider or Video', 'SimThemes' ),
					'desc'        => __( '', 'SimThemes' ),
					'std'         => '1',
					'type'        => 'radio',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and',
					'choices'     => array( 
				  array(
						'value'       => '1',
						'label'       => __( 'Featured Image', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => '2',
						'label'       => __( 'Slider', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => '3',
						'label'       => __( 'Video', 'SimThemes' ),
						'src'         => ''
					  ),
				),
				  ),





			array(
					'id'          => 'show_youtube_vimeo',
					'label'       => __( 'Video Embed Code', 'SimThemes' ),
					'desc'        => __( 'If select video then provide your youtube or vimeo video code.', 'SimThemes' ),
					'std'         => '',
					'type'        => 'textarea',
					'section'     => 'option_types',
					'rows'        => '',
					'post_type'   => '',
					'taxonomy'    => '',
					'min_max_step'=> '',
					'class'       => '',
					'condition'   => '',
					'operator'    => 'and',
				  ),





			 array(
			'id'          => 'portfolio_gallery',
			'label'       => __( 'Gallery', 'theme-text-domain' ),
			'desc'        => __( 'If select gallery then add images for the gallery.', 'SimThemes' ),
			'std'         => '',
			'type'        => 'gallery',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'condition'   => '',
			'operator'    => 'and'
		  ),
				  			  
			  
			
			  
		)
	);











  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $ST_post_meta );

}

