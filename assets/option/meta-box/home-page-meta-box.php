<?php
add_action( 'admin_init', 'home_page_metabox' );
function home_page_metabox() {
	//print('sss');
$ST_core = new ST_core();
global $slider_section, $call_to_action, $service_section, $featured_section, $team_section, $portfolio_section;	 
$filds = array_merge($slider_section, $call_to_action, $service_section, $featured_section, $team_section, $portfolio_section); 
	  $homepage_settings = array(
		'id'          => 'hom_section',
		'title'       => __( 'Home Page Additional Information', 'SimThemes' ),
		'desc'        => '',
		'pages'       => array( 'page' ),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      =>  apply_filters('home_page_meta_section_filter', $filds),
			  
		








		  
);	

  if ( function_exists( 'ot_register_meta_box' ) )
		 $post_id = (isset($_GET['post'])) ? $_GET['post'] : ((isset($_POST['post_ID'])) ? $_POST['post_ID'] : false);
	
	if ($post_id) : 
	$post_template = get_post_meta($post_id, '_wp_page_template', true);
	if ($post_template == 'page-homepage.php') ot_register_meta_box($homepage_settings);

	endif;


}
