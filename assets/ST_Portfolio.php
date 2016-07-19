<?php
class ST_Portfolio extends ST_core{

	public function __construct(){
		add_action( 'init', array($this,'Portfolio_post_type') );
		add_action( 'admin_init', array($this,'Portfolio_meta') );
	}

	public function Portfolio_post_type(){
				$labels = array(
				'name'               => _x( 'Portfolio', 'post type general name', 'SimThemes' ),
				'singular_name'      => _x( 'Portfolio', 'post type singular name', 'SimThemes' ),
				'menu_name'          => _x( 'Portfolio', 'admin menu', 'SimThemes' ),
				'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'SimThemes' ),
				'add_new'            => _x( 'Add New', 'Portfolio', 'SimThemes' ),
				'add_new_item'       => __( 'Add New Portfolio', 'SimThemes' ),
				'new_item'           => __( 'New Portfolio', 'SimThemes' ),
				'edit_item'          => __( 'Edit Portfolio', 'SimThemes' ),
				'view_item'          => __( 'View Portfolio', 'SimThemes' ),
				'all_items'          => __( 'All Portfolio', 'SimThemes' ),
				'search_items'       => __( 'Search Portfolio', 'SimThemes' ),
				'parent_item_colon'  => __( 'Parent Portfolio:', 'SimThemes' ),
				'not_found'          => __( 'No Portfolio found.', 'SimThemes' ),
				'not_found_in_trash' => __( 'No Portfolio found in Trash.', 'SimThemes' )
			);
		
			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'portfolio' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 4,
				'menu_icon' => 'dashicons-portfolio',
				'supports'           => array( 'title', 'editor', 'thumbnail' )
			);
		
				register_post_type( 'portfolio', $args );	
				
				
				
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
	
		register_taxonomy( 'categories-portfolio', array( 'portfolio' ), $args );				
				
				
				
				
				
				
						
			}




	public function Portfolio_meta() {
		  
		  $Portfolio_meta = array(
			'id'          => 'Portfolio_section',
			'title'       => __( 'Project Details', 'SimThemes' ),
			'desc'        => '',
			'pages'       => array( 'portfolio' ),
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
	








				  
			  
		  array(
			'id'          => 'skills_needed',
			'label'       => __( 'Skills Needed', 'SimThemes' ),
			'desc'        => sprintf( __( '', 'SimThemes' ) ),
			'std'         => '',
			'type'        => 'text',
			'section'     => 'option_types',
			'rows'        => '',
			'post_type'   => '',
			'taxonomy'    => '',
			'min_max_step'=> '',
			'class'       => '',
		  ),
			  





	
	

			 array(
			'id'          => 'project_url',
			'label'       => __( 'Project URL', 'SimThemes' ),
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
			'id'          => 'copyright',
			'label'       => __( 'Copyright', 'SimThemes' ),
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
	
	
		  $Portfolio_meta_page = array(
			'id'          => 'Portfolio_section',
			'title'       => __( 'Portfolio Template Option', 'SimThemes' ),
			'desc'        => '',
			'pages'       => array( 'page' ),
			'context'     => 'normal',
			'priority'    => 'high',
			'fields'      => array(
			  


			array(
		'id'          => 'excerpt_full_content',
        'label'       => __('Show Excerpt ,Full Content or Nothing ?', 'SimThemes' ),
		'desc'        => __('', 'SimThemes' ),
        'std'         => 'Excerpt',
        'type'        => 'select',
		'choices'     => array(
         
		 $the_array[] = 
		 array(
            'value'   => 'Excerpt',
            'label'   => __( 'Excerpt', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'Full Content',
            'label'   => __( 'Full Content', 'SimThemes' ),
          ), 
		 array(
            'value'   => 'Nothing',
            'label'   => __( 'Nothing', 'SimThemes' ),
          ), 
        ),
		
        'section'     => 'option_types',
	),
	
	
	
		array(
				'id'          => 'excerpt_length',
				'label'       => __('Excerpt Length', 'simthemes' ),
				'desc'        => __('Insert the number of words you want to show in the Portfolio excerpts.' ),
				'std'         => '55',
				'type'        => 'text',
				'section'     => 'header',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'section'     => 'option_types',
				'class'       => '',
			),



			array(
					'id'          => 'portfolio__layout',
					'label'       => __('Portfolio /Category Layout', 'SimThemes' ),
					'desc'        => __('Select layout for Portfolio  page', 'SimThemes' ),
					'std'         => '3',
					'type'        => 'select',
					'choices'     => array(
					 
					 $the_array[] = 
					 array(
						'value'   => 'one_column',
						'label'   => __( 'One Column', 'SimThemes' ),
					  ), 
					 array(
						'value'   => 'two_column',
						'label'   => __( 'Two Column', 'SimThemes' ),
					  ), 
					 array(
						'value'   => 'three_column',
						'label'   => __( 'Three Column', 'SimThemes' ),
					  ), 
					 array(
						'value'   => 'four_column',
						'label'   => __( 'Four Column', 'SimThemes' ),
					  ), 
					 array(
						'value'   => 'two_column_grid',
						'label'   => __( 'Two Column Grid', 'SimThemes' ),
					  ), 
					 array(
						'value'   => 'three_column_grid',
						'label'   => __( 'Three Column Grid', 'SimThemes' ),
					  ), 
					 array(
						'value'   => 'four_column_grid',
						'label'   => __( 'Four Column Grid', 'SimThemes' ),
					  ),
					),
					
					'section'     => 'option_types',
				),



			array(
				'id'          => 'portfolio__sidebar',
				'label'       => __('Sidebar Position', 'SimThemes' ),
				'desc'        => __('Select the Portfolio sidebar position. (Select fullwidth to not to show any sidebar)', 'SimThemes' ),
				'std'         => 'yes',
				'type'        => 'select',
				'choices'     => array(
				 
				 $the_array[] = 
				 array(
					'value'   => 'left_sidebar',
					'label'   => __( 'Left Sidebar', 'SimThemes' ),
				  ), 
				 array(
					'value'   => 'right_sidebar',
					'label'   => __( 'Right Sidebar', 'SimThemes' ),
				  ), 
				 array(
					'value'   => 'no_sidebar',
					'label'   => __( 'No Sidebar', 'SimThemes' ),
				  ), 
				),
				
				'section'     => 'option_types',
			),








			  
		)
	);	
	
			


	  if ( function_exists( 'ot_register_meta_box' ) )
		ot_register_meta_box($Portfolio_meta);
		//ot_register_meta_box($Portfolio_meta_page);

		 $post_id = (isset($_GET['post'])) ? $_GET['post'] : ((isset($_POST['post_ID'])) ? $_POST['post_ID'] : false);
	
		if ($post_id) : 
		$post_template = get_post_meta($post_id, '_wp_page_template', true);
		if ($post_template == 'page-portfolio.php') ot_register_meta_box($Portfolio_meta_page);
		endif;

	}
	
	


		public function featured_bullet_nevi($id){
				$sliders = get_post_meta($id, 'portfolio_gallery', true);
				$sliders=explode(",",$sliders);
				$output = '' . "\n"; 
				$output .= '<ol class="carousel-indicators">' . "\n";
				$i=0;
				if(!empty($sliders)){
					foreach ($sliders as $slider) {  $i++;
					$output .= '<li data-target="#featured-cursur_' .$id. '" data-slide-to="';
					$output .= $i -1;
					$output .='" class="';
					
					if($i==1){ 
					$output .= 'active';
					}
					
					
					$output .= '"></li>	' . "\n";			
					}
				}
				
				
				$output .= '</ol>' . "\n";
				return $output;
			}



	
	
	
	//Portfolio  Slider Section
	
	public function slider_part($array){
			?>
                <div id="featured-cursur_<?php echo $array['id']; ?>" class="carousel slide featured-cursur" data-ride="carousel">
                  <!-- Indicators -->
                  <?php echo $this->featured_bullet_nevi($array['id']); ?>
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                  
                  
                  <?php
            $sliders = get_post_meta($array['id'], 'portfolio_gallery', true);
			$sliders=explode(",",$sliders);
			$output = '';
			//print_r($sliders);
			$i=0;
			if(!empty($sliders)){
				foreach ($sliders as $slider) {  $i++;
				
				$output .= '<div class="item ';
				if($i==1){ 
				$output .= 'active';
				}
				$output .='">' . "\n";
				//$output .= '<div " style="background:url('.$slider['bg_image'].') '.$slider['bg_color'].' no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; width:100%; height: '.get_post_meta($id, 'sliderheight', true).';"></div>'. "\n";
				$img = wp_get_attachment_image_src( $slider, 'full');
				$output .= '<img src="'. aq_resize( $img[0] , $array['width'], $array['height'], true,true,true ).'" />';
				$output .= '</div>' . "\n";
				}
			}

			echo $output;			
				  
				  ?>
                  
                  

                  </div>
                
                  <!-- Controls -->
                  <a class="left carousel-control" href="#featured-cursur_<?php echo $array['id']; ?>" role="button" data-slide="prev">
                    <span><i class="fa fa-arrow-left"></i></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#featured-cursur_<?php echo $array['id']; ?>" role="button" data-slide="next">
                    <span><i class="fa fa-arrow-right"></i></span>
                    <span class="sr-only">Next</span>
                  </a>
                  
                  
                  
                </div>           
      			
      
       <?php
		}



	public function featured_section($array){
								$show_image_slider_video = get_post_meta($array['id'], 'show_image_slider_video', true);
								$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($array['id']), 'large' ); $url = $thumb['0'];
								if(!empty($show_image_slider_video)){
								if($show_image_slider_video==2){
                               	echo $this->slider_part(array('id'=> $array['id'], 'width'=>$array['width'], 'height'=>$array['height']));
								}elseif($show_image_slider_video==3){
								$show_youtube_vimeo = get_post_meta($array['id'], 'show_youtube_vimeo', true);
								if(!empty($show_youtube_vimeo)):	
                               	echo $show_youtube_vimeo;
								endif;
								}else{	
                                $url = aq_resize( $url , $array['width'], $array['height'], true,true,true );
								if(!empty($url)):
								echo '<img src="'.$url.'" />';
								endif;
								}
								}
		
		}





	//Portfolio  Slider Section
	
	public function curser_part($array){
			$portfolio_related_column = ot_get_option('portfolio_related_column');
			?>
                    <div id="portfolio_cursurl_<?php echo $array['id'] ?>">
                              
                  <?php
				$args = array(
					'post_type' => 'portfolio',
					'tax_query' => array(
						array(
							'taxonomy' => 'categories-portfolio',
							'field'    => 'term_id',
							'terms'    => $array['terms'],
						),
					),
				);			$the_query = new WP_Query( $args );
			$i=0;
			$output = '';
			while ( $the_query->have_posts() ) : $the_query->the_post();
			//print_r($sliders);
			$i++;

				$output .='<div class="owl-item" >';
				$output .='<div class="item" style="margin:3px;">';
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($the_query->ID), 'large' ); $url = $thumb['0'];
				$output .= '<a href="'.get_permalink().'">';
                $url = aq_resize( $url , 600, 400, true,true,true );
				$output .= '<img src="'.$url.'" />';
				$output .= '</a>';
				$output .= '</div>';
				$output .= '</div>';



				endwhile;
				

			echo $output;			
			wp_reset_query();	  
				  ?>
        </div>                  
                  
        <?php $this->inline_jss(array('id'=>$array['id'])); ?>          

      			
      
       <?php
		}




	public function inline_jss($arr){
		$portfolio_related_column = ot_get_option('portfolio_related_column');
		?>
        <script>
			jQuery(document).ready(function($) {
			 
			  $("#portfolio_cursurl_<?php echo $arr['id'] ?>").owlCarousel({
			 
				  autoPlay: 3000, //Set AutoPlay to 3 seconds
			 
				  items : <?php echo $portfolio_related_column; ?>,
				  itemsDesktop : [1099,3],
				  itemsDesktopSmall : [979,3],
				 /* navigation:true,*/
			 
			  });
			 
			});
        </script>
		<?php
		}






}
 $ST_Portfolio = new ST_Portfolio();
