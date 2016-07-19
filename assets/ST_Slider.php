<?php
// Woaker ment to work with bootstrap menu features
class ST_Slider extends ST_core{


	public function __construct(){
		add_action( 'init', array($this,'slider_post_type') );
		add_shortcode( 'slider', array($this,'slider_shortcode') );
		}

		private $autoPlay;
		private $autoPlayDelay;
		private $pauseOnHover;
		private $nevigation;
		private $arrows;
		private $sliod_bg_color;
		private $sliderwidth;




		public function slider_post_type(){
				$labels = array(
				'name'               => _x( 'Sliders', 'post type general name', 'SimThemes' ),
				'singular_name'      => _x( 'Slider', 'post type singular name', 'SimThemes' ),
				'menu_name'          => _x( 'Sliders', 'admin menu', 'SimThemes' ),
				'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'SimThemes' ),
				'add_new'            => _x( 'Add New', 'Slider', 'SimThemes' ),
				'add_new_item'       => __( 'Add New Slider', 'SimThemes' ),
				'new_item'           => __( 'New Slider', 'SimThemes' ),
				'edit_item'          => __( 'Edit Slider', 'SimThemes' ),
				'view_item'          => __( 'View Slider', 'SimThemes' ),
				'all_items'          => __( 'All Sliders', 'SimThemes' ),
				'search_items'       => __( 'Search Sliders', 'SimThemes' ),
				'parent_item_colon'  => __( 'Parent Sliders:', 'SimThemes' ),
				'not_found'          => __( 'No Sliders found.', 'SimThemes' ),
				'not_found_in_trash' => __( 'No Sliders found in Trash.', 'SimThemes' )
			);
		
			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array( 'slug' => 'slider' ),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => 4,
				'menu_icon' => 'dashicons-slides',
				'supports'           => array( 'title' )
				
			);
		
				register_post_type( 'slider', $args );			
			}




		public function control($id){
			$slider_arrow = get_post_meta($id, 'slider_arrow', true);
			if($slider_arrow=='on'):
			//$output = '<ol class="carousel-indicators">' . "\n";
			$output .= '<a class="left carousel-control" href="#sim-slider_' .$id. '" role="button" data-slide="prev">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
      </a>' . "\n";
			$output .= '<a class="right carousel-control" href="#sim-slider_' .$id. '" role="button" data-slide="next">
       <i class="fa fa-arrow-right" aria-hidden="true"></i>
      </a>' . "\n";
			//$output .= '</ol>' . "\n";


			return $output;
			endif;
		
			}


		public function text_section($title = NULL, $title_color = NULL, $description = NULL, $text_color = NULL, $title_animation = NULL, $text_animation = NULL, $title_speed = NULL, $text_speed = NULL, $readmoreshow=NULL, $Read_More_Text=NULL, $Read_More_url = NULL, $more_button_color = NULL, $more_button_animation = NULL){
			
			
			
			$output  = '<div class="carousel-caption">' . "\n";
			$output .= '<h3 class="animated '.$title_animation.'" style="color:'.$title_color.';">'.$title.'</h2>' . "\n";
			$output .= '<p style="color:'.$text_color.'" class="animated '.$text_animation.'">'.$description.'</p>' . "\n";
			if($readmoreshow=='on'){
			$output .= '<a href="'.$Read_More_url.'" style="background:'.$more_button_color.'" class="btn btn-default readmore animated '.$more_button_animation.'">'.$Read_More_Text.'</a>' . "\n";
			}
			$output .= '</div>' . "\n";


			return 	$output;		
			
			}


/*		public function image_section($image_classs, $image_url, $image_animation, $image_animation_speed){
			if($image_classs=='left_text_right_image'){
			$image_classs = 'slide3-img1 '.$image_animation.'';
			}else{
			$image_classs = 'slide2-img '.$image_animation.' fast';
			}
			
			$output .= '<div class="'.$image_classs.' '.$image_animation_speed.' delay1" style="">' . "\n";
			$output .= '<img class="img-responsive" src="'.$image_url.'" alt="">' . "\n";
			$output .= '</div>' . "\n";
			$output .= '</div>' . "\n";

			return $output;			
			
			}
*/

		public function fullbackgroundimage_and_color ($background_image=NULL, $background_color=NULL){
			if($background_color){
			$output  .= '<img data-holder-rendered="false" data-src="holder.js/1300x446//#000" />' . "\n";
			}
			if($background_image){
			
			$output .= '<img src="'.$background_image.'"   />' . "\n";
			}
			
			return $output;
			
			}



			
			
		public function each_slider($id){
            $sliders = get_post_meta($id, 'slider_item', true);
			$output = '';
			//print_r($sliders);
			$i=0;
			if($sliders){
				foreach ($sliders as $slider) {  $i++;
				
				$output .= '<div class="item ';
				if($i==1){ 
				$output .= 'active';
				}
				$output .='">' . "\n";
				//$output .= '<div " style="background:url('.$slider['bg_image'].') '.$slider['bg_color'].' no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; width:100%; height: '.get_post_meta($id, 'sliderheight', true).';"></div>'. "\n";
				$output .= $this->fullbackgroundimage_and_color($slider['bg_image'], $slider['bg_color']);
				$output .= $this->text_section($slider['slider_title_section'],$slider['title_color'], $slider['slider_text_section'], $slider['text_color'], $slider['slider_title_animation'], $slider['slider_text_animation'], $slider['slider_title_animation_speed'], $slider['slider_text_animation_speed'], $slider['readmoreshow'], $slider['Read_More_Text'], $slider['Read_More_url'], $slider['more_button_color'], $slider['more_button_animation']);
				$output .= '</div>' . "\n";
				}
			}

			return $output;			
			}	




		public function slider_script($id){
				$this->autoPlay = get_post_meta($id, 'autoPlay', true);
				$this->autoPlayDelay = get_post_meta($id, 'autoPlayDelay', true);
				$this->pauseOnHover = get_post_meta($id, 'pauseOnHover', true);
				$this->pauseButton = get_post_meta($id, 'pauseButton', true);
				$title_font_size_min = get_post_meta($id, 'title_font_size_min', true);
				$title_font_size_max = get_post_meta($id, 'title_font_size_max', true);
				$text_font_size_min = get_post_meta($id, 'text_font_size_min', true);
				$text_font_size_max = get_post_meta($id, 'text_font_size_max', true);
				
				if(!$title_font_size_min)
				$title_font_size_min = '24px';

				if(!$title_font_size_max)
				$title_font_size_max = '56px';


				if(!$text_font_size_min)
				$text_font_size_min = '16px';



				if(!$text_font_size_max)
				$text_font_size_max = '28px';


				
				if($autoPlay=='on'){
					$autoPlay = 'true';
					}elseif($autoPlay=='off'){
						$autoPlay = 'false';
						}
				if($pauseOnHover=='on'){
					$pauseOnHover = 'true';
					}elseif($pauseOnHover=='off'){
						$pauseOnHover = 'false';
						}
				if($pauseButton=='on'){
					$pauseButton = 'true';
					}elseif($pauseButton=='off'){
						$pauseButton = 'false';
						}
						
						
			
			}


		public function bullet_nevi($id){
				$sliders = get_post_meta($id, 'slider_item', true);
				$output = '' . "\n"; 
				$output .= '<ol class="carousel-indicators">' . "\n";
				$i=0;
				foreach ($sliders as $slider) {  $i++;
				$output .= '<li data-target="#sim-slider_' .$id. '" data-slide-to="';
				$output .= $i -1;
				$output .='" class="';
				
				if($i==1){ 
				$output .= 'active';
				}
				
				
				$output .= '"></li>	' . "\n";			
				}
				
				
				$output .= '</ol>' . "\n";
				return $output;
			}


			

		public function slider_base($id){
			$this->sliderwidth = get_post_meta($id, 'sliderwidth', true);
			$this->sliod_bg_color = get_post_meta($id, 'sliod_bg_color', true);
			$this->autoPlay = get_post_meta($id, 'autoPlay', true);
			$this->autoPlayDelay = get_post_meta($id, 'autoPlayDelay', true);
			$this->pagination = get_post_meta($id, 'pavigation', true);
			$this->arrows = get_post_meta($id, 'arrows', true);
			$slider_animation = get_post_meta($id, 'slider_animation', true);
			//if($slider_animation=='vertical'){ $slider_animation .= 'vertical';}elseif($slider_animation=='fade'){$slider_animation .= 'carousel-fade';}
			if($this->autoPlay=='on'): 
				$autoplay= $this->autoPlayDelay;
			else:
				$autoplay = 'false';
				endif;
        $html = '';
         	$html .= '<div class="slider-sheldow" style="height:'.get_post_meta($id, 'sliderheight', true).'; background-color:'.$this->sliod_bg_color.'; max-width:'.$this->sliderwidth.' display:block;  clear:both; overflow: hidden !important;">
			
				<div id="sim-slider_'.$id.'" class="carousel slide ';
				if($slider_animation=='vertical'){ 
				$html .= 'vertical';
				}elseif($slider_animation=='fade'){
				$html .= 'carousel-fade';
				} 
				$html .=' data-ride="carousel" data-interval="'.$autoplay.'" style="opacity: 1; display:block; width:100%; height:100%; clear:both;">';
					
				if($this->pagination=='on') 
				$html .= $this->bullet_nevi($id);
				
				$html .='<div class="carousel-inner">
						'.$this->each_slider($id).'';
				$html .= '</div>';
				if($this->arrows=='on') 
				$html .= $this->control($id);
				$html .= '</div>';
				
				$html .= '</div>';
	 			$html .= '<style>.carousel-inner > .item > img { width:100%; height: '.get_post_meta($id, 'sliderheight', true).';}</style>	';
				return $html;
             }



		public function slider_shortcode( $atts, $content = null){
			extract(shortcode_atts( array(
				'id' => '',
			), $atts ));
								
				$output = $this->slider_base($id);
		
				return $output;
		
			}




}

	$ST_Slider =new ST_Slider();