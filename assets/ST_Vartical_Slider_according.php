<?php

//example are here http://tympanus.net/Development/VerticalSlidingAccordion/example1.html
class ST_Varitcal_Slider_according{
	
	private $sliders = array();
	private $permission;
	private $id;
	private $slider_array;
	private $show_read_more;
	private $design; //
	
	public function __construct(){
			/*$this->sliderwidth = get_post_meta($id, 'sliderwidth', true);
			$this->sliod_bg_color = get_post_meta($id, 'sliod_bg_color', true);
			$this->autoPlay = get_post_meta($id, 'autoPlay', true);
			$this->autoPlayDelay = get_post_meta($id, 'autoPlayDelay', true);
			//$this->pagination = get_post_meta($id, 'pavigation', true);
			$this->arrows = get_post_meta($id, 'arrows', true);
			$slider_animation = get_post_meta($id, 'slider_animation', true);*/
			add_action('wp_enqueue_scripts', array( $this, 'load_script_V'));
			add_action('wp_footer', array( $this, 'inject_V_inline_script'), 99, 99);
			add_shortcode( 'vsa', array($this,'slider_shortcode_V') );
			}


	public function __get_V_slider($arr){
			$this->id = $arr['id'];
			// Output yes Or no
			$this->sliders['arrows'] = $arr['arrows'];
			// output TRUE or FALSE
			$this->sliders['autoplay'] =  $arr['autoplay'];
			$this->slider_array = $arr['sliders'];
			$this->show_read_more = $arr['show_read_more'];
			$this->read_more_text = $arr['read_more_text'];
			$this->design = $arr['design'];
			$this->slider_structure_V();
		}



	public function get_image_wrap($var){
		$style = 'style="background:'.$var['bg_color'].' url('.$var['bg_image'].') no-repeat center center;"';
		return  sprintf('<div class="va-slice va-slice-%d" %s">
						<h3 class="va-title">%s-%d</h3>
						<div class="va-content">
							%s
							%s
						</div>
					</div>', $var['count'], $style, $var['title'], $var['count'], $var['text'], $this->read_more_creator($var['read_more_url']));
		
		}


	public function read_more_creator($read_more_url){
			if($this->show_read_more == 'yes'){
					return sprintf('<a href="%s">%s</a>', $read_more_url, $this->read_more_text);
				}
		
		}
	


	public function print_V_arrows_navigation(){
		 return sprintf('<div class="va-nav">
					<span class="va-nav-prev">Previous</span>
					<span class="va-nav-next">Next</span>
				</div>');
		}



	public function get_V_individual_slider($var){
			$output =  $this->get_image_wrap($var);

		return $output;
		}

	public function slider_structure_V(){
       $html = '';
	    $html .= '<div id="va-accordion_'.$this->id.'" class="va-container">';
		if($this->sliders['arrows'] === 'yes'){
			$html .= $this->print_V_arrows_navigation();
			}
	    $html .= '<div class="va-wrapper">';
   		$sliders = $this->slider_array;
		$i = 0;
		if(!empty($sliders)){
			
			foreach($sliders as $slider){
				$i++;
				$slider['count'] = $i;
				$html .= $this->get_V_individual_slider($slider, 'image');
				}
			}
        $html .= '</div>';
		$html .= '</div>';
		
		$html .='';
				//$html .= $this->inject_V_inline_script();

		print($html);
		}


	public function design($design){
			if($design = 'Second'){
				return sprintf('{					
					expandedHeight	: 450,
					animSpeed		: 500,
					animEasing		: "easeInOutBack",
					animOpacity		: 0.4
				}');
				}elseif($design = 'Third'){
					return sprintf('{visibleSlices	: 5,
					expandedHeight	: 250,
					animOpacity		: 0.1,
					contentAnimSpeed: 100}');
				
				
				}elseif($design = 'Fourth'){
					return sprintf('{expandedHeight	: 350,
					animSpeed		: 400,
					animOpacity		: 0.7,
					visibleSlices	: 2}
						');
				
				
				}
				
				
		}
	

	public function inject_V_inline_script(){
		print(sprintf("
		
		<script type='text/javascript' charset='utf-8'>
		jQuery(function($){
					$('#va-accordion_%d').vaccordion(
					%s
					);

			}, jQuery);
		</script>", $this->id, $this->design($this->design)));
		}


	public function load_script_V(){
		    wp_enqueue_script( 'jquery.easing.1.3', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '1.3', true );
		    wp_enqueue_script( 'jquery.mousewheel', get_template_directory_uri() . '/assets/js/jquery.mousewheel.js', array('jquery'), '1.2', true );
		    wp_enqueue_script( 'jquery.vaccordion', get_template_directory_uri() . '/assets/js/jquery.vaccordion.js', array('jquery'), '1.2', true );

		}
		
		
	public function slider_shortcode_V( $atts, $content = null){
			$arr = array(
				'id' => '101',
				//'autoplay' => 'true',
				'arrows' => 'yes',
				'width' => '',
				'height' => '',
				'show_read_more' => 'yes',
				'read_more_text' => 'Read More',
				'design' => 'Third',
				'sliders' => array(
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					array(
						'title' => 'This Is Title',
						'read_more_url' => '',
						'text'  => 'Lets Check Out!',
						'bg_image'  => 'http://tympanus.net/Development/VerticalSlidingAccordion/images/1.jpg',
						'bg_color'  => '#000',
						'read_more_url'	=> '/lets-go/'
						),
					)
				);	
			
			extract(shortcode_atts( $arr, $atts ));
								
				$output = $this->__get_V_slider($arr);
		
				return $output;
		
			}

	

	
	
	}
	
$ST_Varitcal_Slider_according = new ST_Varitcal_Slider_according();	