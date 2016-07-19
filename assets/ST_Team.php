<?php
class ST_Members extends ST_core{

	public function __construct(){
		add_action( 'init', array($this,'Members_post_type') );
		add_action( 'admin_init', array($this,'Members_meta') );
	}

	public function Members_post_type(){
				$labels = array(
				'name'               => _x( 'Members', 'post type general name', 'SimThemes' ),
				'singular_name'      => _x( 'Member', 'post type singular name', 'SimThemes' ),
				'menu_name'          => _x( 'Members', 'admin menu', 'SimThemes' ),
				'name_admin_bar'     => _x( 'Members', 'add new on admin bar', 'SimThemes' ),
				'add_new'            => _x( 'Add New', 'Member', 'SimThemes' ),
				'add_new_item'       => __( 'Add New Member', 'SimThemes' ),
				'new_item'           => __( 'New Member', 'SimThemes' ),
				'edit_item'          => __( 'Edit Member', 'SimThemes' ),
				'view_item'          => __( 'View Member', 'SimThemes' ),
				'all_items'          => __( 'All Members', 'SimThemes' ),
				'search_items'       => __( 'Search Members', 'SimThemes' ),
				'parent_item_colon'  => __( 'Parent Members:', 'SimThemes' ),
				'not_found'          => __( 'No Members found.', 'SimThemes' ),
				'not_found_in_trash' => __( 'No Members found in Trash.', 'SimThemes' )
			);
		
			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'members' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 4,
				'menu_icon' => 'dashicons-groups',
				//'supports'           => array( 'title' )
			);
		
				register_post_type( 'members', $args );		
				
				
					$labels = array(
			'name'              => _x( 'Categories', 'taxonomy general name' ),
			'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
			'search_items'      => __( 'Search Categories' ),
			'all_items'         => __( 'All Categories' ),
			'parent_item'       => __( 'Parent Category' ),
			'parent_item_colon' => __( 'Parent Category:' ),
			'edit_item'         => __( 'Edit Category' ),
			'update_item'       => __( 'Update Category' ),
			'add_new_item'      => __( 'Add New Category' ),
			'new_item_name'     => __( 'New Category Name' ),
			'menu_name'         => __( 'Category' ),
		);
	
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'query_var'         => true,
			//'rewrite'           => array( 'slug' => 'genre' ),
		);
	
		register_taxonomy( 'categories-member', array( 'members' ), $args );				
	
				
				
				
					
			}




	public function Members_meta() {
		  
		  $Members_meta = array(
			'id'          => 'Members_section',
			'title'       => __( 'Home Page Additional Information', 'SimThemes' ),
			'desc'        => '',
			'pages'       => array( 'members' ),
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
			'id'          => 'designation_m',
			'label'       => __( 'Designation', 'SimThemes' ),
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
			'id'          => 'email_m',
			'label'       => __( 'Email', 'SimThemes' ),
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
			'id'          => 'twitter',
			'label'       => __( 'Twitter URL', 'SimThemes' ),
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
			'id'          => 'facebook',
			'label'       => __( 'Facebook URL', 'SimThemes' ),
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
			'id'          => 'linkedin',
			'label'       => __( 'LinkedIn URL', 'SimThemes' ),
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
		ot_register_meta_box($Members_meta);





	}




}
 $ST_Members = new ST_Members();
