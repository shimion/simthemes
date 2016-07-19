<?php
class ST_Testimonials extends ST_core{

	public function __construct(){
		add_action( 'init', array($this,'Testimonials_post_type') );
		add_action( 'admin_init', array($this,'Testimonials_meta') );
	}

	public function Testimonials_post_type(){
				$labels = array(
				'name'               => _x( 'Testimonials', 'post type general name', 'SimThemes' ),
				'singular_name'      => _x( 'Testimonial', 'post type singular name', 'SimThemes' ),
				'menu_name'          => _x( 'Testimonials', 'admin menu', 'SimThemes' ),
				'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'SimThemes' ),
				'add_new'            => _x( 'Add New', 'Testimonial', 'SimThemes' ),
				'add_new_item'       => __( 'Add New Testimonial', 'SimThemes' ),
				'new_item'           => __( 'New Testimonial', 'SimThemes' ),
				'edit_item'          => __( 'Edit Testimonial', 'SimThemes' ),
				'view_item'          => __( 'View Testimonial', 'SimThemes' ),
				'all_items'          => __( 'All Testimonials', 'SimThemes' ),
				'search_items'       => __( 'Search Testimonials', 'SimThemes' ),
				'parent_item_colon'  => __( 'Parent Testimonials:', 'SimThemes' ),
				'not_found'          => __( 'No Testimonials found.', 'SimThemes' ),
				'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'SimThemes' )
			);
		
			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'testimonials' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 4,
				'menu_icon' => 'dashicons-testimonial',
				//'supports'           => array( 'title' )
			);
		
				register_post_type( 'testimonial', $args );			
			}




	public function Testimonials_meta() {
		  
		  $Testimonials_meta = array(
			'id'          => 'testimonials_section',
			'title'       => __( 'Home Page Additional Information', 'SimThemes' ),
			'desc'        => '',
			'pages'       => array( 'testimonial' ),
			'context'     => 'normal',
			'priority'    => 'high',
			'fields'      => array(
			  
				  
			  
		  array(
			'id'          => 'clinet_image',
			'label'       => __( 'Client Image', 'SimThemes' ),
			'desc'        => sprintf( __( 'image size must be 103px 126px', 'SimThemes' ) ),
			'std'         => '',
			'type'        => 'upload',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
		  ),
			  
	
	
			 array(
			'id'          => 'client_Email',
			'label'       => __( 'Clint Email', 'SimThemes' ),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'operator'    => 'and'
		  ),
	
			 array(
			'id'          => 'client_Designation',
			'label'       => __( 'Clint Designation', 'SimThemes' ),
			'desc'        => '',
			'std'         => '',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
			'operator'    => 'and'
		  ),
	
			  
			  
			
			  
		)
	);	
			


	  if ( function_exists( 'ot_register_meta_box' ) )
		ot_register_meta_box($Testimonials_meta);





	}




}
 $ST_Testimonials = new ST_Testimonials();
