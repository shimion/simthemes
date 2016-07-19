<?php
class ThreeD_slider{
	
	public $sliders=array();
	private $permission;
	private $id;
	private $slider_array;
	private $arrow_type;
	
	public function __construct(){
			/*$this->sliderwidth = get_post_meta($id, 'sliderwidth', true);
			$this->sliod_bg_color = get_post_meta($id, 'sliod_bg_color', true);
			$this->autoPlay = get_post_meta($id, 'autoPlay', true);
			$this->autoPlayDelay = get_post_meta($id, 'autoPlayDelay', true);
			//$this->pagination = get_post_meta($id, 'pavigation', true);
			$this->arrows = get_post_meta($id, 'arrows', true);
			$slider_animation = get_post_meta($id, 'slider_animation', true);*/
			add_action('wp_enqueue_scripts', array( $this, 'load_script_3d'));
			//add_action('wp_head', array( $this, 'inject_3d_inline_script'), 99, 99);
			add_shortcode( 'slider_3d', array($this,'slider_shortcode_3d') );
			}


	public function __get_3d_slider($arr){
			$this->id =  uniqid();
			// Output yes Or no
			$this->sliders['arrows'] = !empty($arr['arrows']) ? $arr['arrows']: 1;
			// output TRUE or FALSE
			$this->sliders['autoplay'] =   !empty($arr['autoplay']) ? $arr['autoplay']: 1;
			//$this->sliders['title_color'] =  $arr['title_color'];
			$this->sliders['show_content_section'] =  !empty($arr['show_content_section']) ? $arr['show_content_section']: 0;
			$this->sliders['text_color'] =  $arr['text_color'];
			$this->sliders['width'] =  !empty($arr['width']) ? $arr['width']: 450;
			$this->sliders['height'] =  !empty($arr['height']) ? $arr['height']: 300;
			$this->sliders['number'] =  !empty($arr['number']) ? $arr['number']: 3;
			$this->sliders['distance'] =  !empty($arr['distance']) ? $arr['distance']: 50;
			$this->sliders['scale'] =  !empty($arr['scale']) ? $arr['scale']: 0.6;
			$this->sliders['animationTime'] = !empty($arr['animationTime']) ? $arr['animationTime']: 1000;
			$this->sliders['showTime'] =  !empty($arr['showTime']) ? $arr['showTime']: 4000;
			$this->sliders['show_title'] =  !empty($arr['show_title']) ? $arr['show_title']: 0;
			$this->sliders['show_text'] =  !empty($arr['show_text']) ? $arr['show_text']: 0;
		//	$this->sliders['readmore_color'] =  $arr['readmore_color'];
			$this->slider_array = $arr['sliders'];
			$this->arrow_type = $arr['arrow_type'];
			$this->slider_structure_3d();
			//$this->load_script_3d();
			$this->inject_3d_inline_script();
		}



	public function get_image_wrap($var){
		$title_color = !empty($this->sliders['title_color']) ? 'color:'. $this->sliders['title_color'] : '';
		$text_color = !empty($this->sliders['text_color']) ? 'color:'. $this->sliders['text_color'] : '';
		$readmore_color = !empty($this->sliders['readmore_color']) ? 'color:'. $this->sliders['readmore_color'] : '';
		$title_text = $var['title'];
		$con = '';
		if($this->sliders['show_content_section']==1){
			
		$con .= '<div class="threed_content_wapper">';
		if(!empty($this->sliders['show_title']) && $this->sliders['show_title'] == 1){
			$con .= "<h4 style='$title_color'>$title_text</h4>";
		}else{
			$con .= "";
			}
		if(!empty($this->sliders['show_text']) && $this->sliders['show_text'] == 1){
			$con .= "<p style='$text_color'>".$var['text']."</p>";
		}else{
			$con .= "";
		}
		$con .= '</div>';
		}else{
		$con .= '';
		}
		
		$read_more = "<a style='$readmore_color' href='".$var['link']."'>Read More</a>";
		return  sprintf('<li><a href="%s"><img src="%s" style="width:%d; height:%d;">%s</a></li>', $var['link'], aq_resize( $var['image'] , $this->sliders['width'], $this->sliders['height'], true,true,true ), $this->sliders['width'], $this->sliders['height'], $con);
		
		print($this->sliders['show_content_section']);
		//print($this->sliders['show_title']);
		//print($this->sliders['show_text']);
		
		}



	public function print_3d_arrows_navigation($var){
			if($var==='default'){
		 return sprintf('<span class="3d-left"><i class="fa fa-arrow-left" aria-hidden="true"></i></span>
            <span class="3d-right"><i class="fa fa-arrow-right" aria-hidden="true"></i></span>');
			}elseif($var==='circle'){
		 return sprintf('<span class="3d-left"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></span>
            <span class="3d-right"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></span>');
				}
		}



	public function get_3d_individual_slider($var){
			$output =  $this->get_image_wrap($var);

		return $output;
		}

	public function slider_structure_3d(){
       $html = '';
	    $html .= '<div id="td-container_'.$this->id.'" class="td-container" style=" height: '.$this->sliders['height'].'px;margin:30px auto; position: relative;">';
	    $html .= '<ul>';
   		$sliders = $this->slider_array;
		//print($sliders);
		$sliders = explode('||', $sliders);
		//print_r($sliders);
		
		if(!empty($sliders)){
			//$slid_arr = array();
			foreach($sliders as $slider){
				$s = explode(',,', $slider);
				$attachment = wp_get_attachment_image_src($s[0], 'full');
				$slid_arr = array('image' => $attachment[0], 'link' => $s[1], 'title' => $s[2], 'text' => $s[3]);
				$html .= $this->get_3d_individual_slider($slid_arr, 'image');
				//print_r($s);
				}
			}
        $html .= '</ul>';
		if($this->sliders['arrows'] == 1){
			$html .= $this->print_3d_arrows_navigation($this->arrow_type);
			}
		$html .= '</div>';
		
		//$html .='<style></style>';
				//$html .= $this->inject_3d_inline_script();

		print($html);
		}
	

	public function true_fales_bool_convertor_from_0_and_1($var){
		if($var ==1)
		return 'true';
		else
		return 'false';
		}

	public function inject_3d_inline_script(){
		print(sprintf("
		
		<script type='text/javascript' charset='utf-8'>
		    jQuery(document).ready(function($) {
				$('#td-container_%s').carousel({
            num: %d,
            maxWidth: %d,
            maxHeight: %d,
            distance: %d,
           // scale: %d,
            animationTime: %d,
            showTime: %d,
			autoPlay: %s,
        });
	});
		</script>", $this->id, $this->sliders['number'], $this->sliders['width'], $this->sliders['height'], $this->sliders['distance'], $this->sliders['scale'], $this->sliders['animationTime'], $this->sliders['showTime'], $this->true_fales_bool_convertor_from_0_and_1($this->sliders['autoplay'])));
		}


	public function load_script_3d(){
		    wp_enqueue_script( 'Carousel', get_template_directory_uri() . '/assets/js/Carousel.js', array('jquery'), '1.2', true );

		}
		
		
	public function slider_shortcode_3d( $atts, $content = null){
			$atts = shortcode_atts(array(
				'id' => '101',
				'autoplay' => 0,
				'arrows' => 0,
				'sliders' => '',
				'number' => '3',
				'width' => '450',
				'height' => '300',
				'distance' => '50',
				'scale' => '0.6',
				'animationTime' => '1000',
				'showTime' => '4000',
				'show_title' => 0,
				'show_text' => 0,
				'title_color' => '',
				'text_color' => '',
				'show_content_section' => 0,
				'arrow_type'	=> 'circle',
				), $atts );
								
				$output = $this->__get_3d_slider($atts);
		
				return $output;
		
			}

	

	
	
	}
	
$ThreeD_slider = new ThreeD_slider();	