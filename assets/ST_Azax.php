<?php
		$ST_core = new ST_core();
		//All azax features a loading here...............
		// Enable the user with no privileges to run ajax_login() in AJAX
		add_action('init', 'localize_sxript');

	
	
	function localize_sxript(){
		wp_register_script('ajax-load_portfolio', get_template_directory_uri() . '/assets/js/ajax-script.js', array('jquery'), '1.0.0', true  ); 
		wp_enqueue_script('ajax-load_portfolio');
		wp_localize_script( 'ajax-load_portfolio', 'ajax_load_portfolio_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ), 'loadingmessage' => __('Loading... Please Wait')));
		add_action( 'wp_ajax_nopriv_ajax_load_portfolio', 'ajax_load_portfolio' );
		add_action('wp_ajax_ajax_load_portfolio', 'ajax_load_portfolio');
		}
	
	
	function ajax_load_portfolio(){
						$ST_core = new ST_core();
						global $wpdb;
						global $post;
						$number = $_POST['number'];
						$currFilter = $_POST['currFilter'];
						$portfolio_column = $_POST['portfolio_column'];
						$args =array( 'post_type' => 'portfolio', 'posts_per_page' => $number  );
						//$query_post = $wpdb->get_results("SELECT * FROM `posts` WHERE `post_type` LIKE 'portfolio'");
						$query_post = new WP_Query($args);
						 $html = '';
						$counter = 0;
						$array_portfolio_info = ""; 
						if ($query_post->have_posts()) : while ($query_post->have_posts()) : $query_post->the_post();
						 $post_term = get_the_terms( $post->ID, 'categories-portfolio'); 
						 
						 $currFilter = ltrim ($currFilter, '.');
						 
						 
						 
						 if($post_term):
						 $class_por ="";
						 $i = 0;
						 foreach($post_term as $termp){
							 $class_por .= $termp->slug .' ';
							 
							 if($currFilter == $termp->slug){ $i = $i+1;
								 
								 
							 }
							 
							 }
						 endif;
							//$currFilter_class = '';if($i == 'filtered') { $currFilter_class = 'filtered';}
						 
						//print_r($post_term);
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($query_post->post->ID), 'large' ); $url = $thumb['0'];
						$resize = aq_resize( $url, 555, 300, true,true,true );
						
						$html .= '<article class="'.$portfolio_column.' col-sm-6 project-item '.$class_por. ' ';
						if($i == 0) { 
						$html .= 'filtered';
						}
						$html .= ' in">';
						$html .= '<div class="project-thumb in">';
						$html .= '<a href="#" class="main-link">';
						$html .= '<img class="img-responsive img-center" src="' .$resize.'" alt="">';
						$html .= '<h2 class="project-title">' . get_the_title() . '</h2>';
						$html .= '<span class="overlay-mask"></span>';
						$html .= '</a>';
						$html .= '<a class="enlarge cboxElement" href="'.$url.'" title="'. get_the_title() .'"><i class="fa fa-expand fa-fw"></i></a>';
						$html .= '<a class="link" href="'.get_permalink().'"><i class="fa fa-eye fa-fw"></i></a>';
						$html .= '</div>';
						$html .= '</article>';
						$array_portfolio_info[$counter] = array(0 =>get_the_title(), 1=>$url);
						$counter = $counter + 1;
						endwhile; endif; 
						wp_reset_query();

		
		
		
		
					//echo $html;
					
										echo json_encode(array('massage'=>apply_filters('filter_portfolio_azax_backend', $html)),  JSON_HEX_QUOT | JSON_HEX_TAG);


		die();
		}



 
