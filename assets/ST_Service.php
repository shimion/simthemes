<?php
class ST_Service extends ST_core{

	public function __construct(){
		add_action( 'init', array($this,'Services_post_type') );
		add_action( 'admin_init', array($this,'Services_meta') );
	}

	public function Services_post_type(){
				$labels = array(
				'name'               => _x( 'Services', 'post type general name', 'SimThemes' ),
				'singular_name'      => _x( 'Service', 'post type singular name', 'SimThemes' ),
				'menu_name'          => _x( 'Services', 'admin menu', 'SimThemes' ),
				'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'SimThemes' ),
				'add_new'            => _x( 'Add New', 'Service', 'SimThemes' ),
				'add_new_item'       => __( 'Add New Service', 'SimThemes' ),
				'new_item'           => __( 'New Service', 'SimThemes' ),
				'edit_item'          => __( 'Edit Service', 'SimThemes' ),
				'view_item'          => __( 'View Service', 'SimThemes' ),
				'all_items'          => __( 'All Services', 'SimThemes' ),
				'search_items'       => __( 'Search Services', 'SimThemes' ),
				'parent_item_colon'  => __( 'Parent Services:', 'SimThemes' ),
				'not_found'          => __( 'No Services found.', 'SimThemes' ),
				'not_found_in_trash' => __( 'No Services found in Trash.', 'SimThemes' )
			);
		
			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'services' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 4,
				'menu_icon' => 'dashicons-businessman',
				'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
				//'supports'           => array( 'title' )
			);
		
				register_post_type( 'service', $args );			
			}




	public function Services_meta() {
		  
		  $Services_meta = array(
			'id'          => 'Services_section',
			'title'       => __( 'Home Page Additional Information', 'SimThemes' ),
			'desc'        => '',
			'pages'       => array( 'Service' ),
			'context'     => 'normal',
			'priority'    => 'high',
			'fields'      => array(
			  
				  
			  
		  array(
			'id'          => 'service_icon',
			'label'       => __( 'Service Icon', 'SimThemes' ),
			'desc'        => sprintf( __( 'Please select the icon', 'SimThemes' ) ),
			'std'         => '',
			'type'        => 'font-awesome',
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
		ot_register_meta_box($Services_meta);





	}




}
 $ST_Service = new ST_Service();
