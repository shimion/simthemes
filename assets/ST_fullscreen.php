<?php
class full_Screen_slider{
	
	private $sliders = array();
	private $permission;
	private $id;
	private $slider_array;
	
	
	public function __construct(){
			/*$this->sliderwidth = get_post_meta($id, 'sliderwidth', true);
			$this->sliod_bg_color = get_post_meta($id, 'sliod_bg_color', true);
			$this->autoPlay = get_post_meta($id, 'autoPlay', true);
			$this->autoPlayDelay = get_post_meta($id, 'autoPlayDelay', true);
			//$this->pagination = get_post_meta($id, 'pavigation', true);
			$this->arrows = get_post_meta($id, 'arrows', true);
			$slider_animation = get_post_meta($id, 'slider_animation', true);*/
			add_action('wp_enqueue_scripts', array( $this, 'load_script'));
			add_shortcode( 'slider_fullscreen', array($this,'slider_shortcode_fullscreen') );
			}


	public function __get_slider($id){
			$this->id = $id;
			$this->sliders['slider_animation'] = get_post_meta($this->id, 'slider_animation', true);
			$this->sliders['slider_speed'] = get_post_meta($this->id, 'slider_speed', true);
			$this->sliders['autoPlay'] = get_post_meta($this->id, 'autoPlay', true);
			$this->sliders['autoPlayDelay'] = get_post_meta($this->id, 'autoPlayDelay', true);
			$this->sliders['arrows'] = get_post_meta($this->id, 'arrows', true);
			$this->sliders['timeout'] = get_post_meta($this->id, 'timeout', true);
			$this->slider_array = get_post_meta($this->id, 'slider_item', true);
			$this->slider_structure();
		}



	public function get_bg_image($var){
		
		return  sprintf('<div>
        <img src="%s" alt="" />
        <!--<img id="gradient" src="lib/images/demo/gradient.png" alt="" />-->
        <div class="in-slide-content">
            <h2>%s</h2>
			<p>%s</p>
            <p><a href="%s" target="_blank" style="font-weight:bold">%s</a></p>
        </div>
    </div>', $var['bg_image'], $var['slider_title_section'], $var['slider_text_section'], $var['Read_More_url'], $var['tar_blink'], $var['Read_More_Text']);
		
		}


	public function get_bg_video($var){
		
		return  sprintf('<div class="video">
       <!-- <img src="lib/images/demo/pattern.jpg" alt="" />-->
	           <div class="in-slide-content">
            <h2>%s</h2>
			<p>%s</p>
            <p><a href="%s" target="_blank" style="font-weight:bold">%s</a></p>
        </div>

        <iframe width="100%" height="100%" src="%s" frameborder="0" class="youtube-video" allowfullscreen></iframe>
    </div>', $var['bg_image'], $var['slider_title_section'], $var['slider_text_section'], $var['Read_More_url'], $var['tar_blink'], $var['Read_More_Text']);
		
		}




	public function print_arrows_navigation(){
		 return sprintf('<a href="" id="arrow_left"><img src="../lib/images/demo/arrow_left.png" alt="Slide Left" /></a>
		<a href="" id="arrow_right"><img src="../lib/images/demo/arrow_right.png" alt="Slide Right" /></a>');
		}



	public function get_individual_slider($var, $type){
		if($type =='video'){
			$output =  $this->get_bg_video($var);
			}else{
			$output =  $this->get_bg_image($var);
		}

		return $output;
		}

	public function slider_structure(){
       $html = '';
	    $html .= '<div id="full_screen_selector">';
	   $html .= $this->print_arrows_navigation();
	    $html .= '<div id="maximage_'.$this->id.'">';
   		$sliders = $this->slider_array;
		if(!empty($sliders)){
			foreach($sliders as $slider){
				$html .= $this->get_individual_slider($slider, 'image');
				}
			}
        $html .= '</div>';
		$html .= "<style>
		#full_screen_selector{
				position: relative;
				clear:both;
			}
			/* I wanted to center my loader */
			#cycle-loader {
				height:32px;
				left:50%;
				margin:-8px 0 0 -8px;
				position:absolute;
				top:50%;
				width:32px;
				z-index:999;
			}
			
			/*I want to avoid jumpiness as the JS loads, so I initially hide my cycle*/
			#maximage {
				display:none;/* Only use this if you fade it in again after the images load */
				position:fixed !important;
			}
			
			/*Set my gradient above all images*/
			#gradient {
				left:0;
				height:100%;
				position:absolute;
				top:0;
				width:100%;
				z-index:999;
			}
			
			/*Set my logo in bottom left*/
			#logo {
				bottom:30px;
				height:auto;
				left:30px;
				position:absolute;
				width:34%;
				z-index:1000;
			}
			#logo img {
				width:100%;
			}
			
			#arrow_left, #arrow_right {
				bottom:30px;
				height:67px;
				position:absolute;
				right:30px;
				width:36px;
				z-index:1000;
			}
			#arrow_left {
				right:86px;
			}
			
			#arrow_left:hover, #arrow_right:hover {
				bottom:29px;
			}
			#arrow_left:active, #arrow_right:active {
				bottom:28px;
			}
			
			a {color:#666;text-decoration:none;}
			a:hover {text-decoration:underline;}
			
			.in-slide-content { 
				color:#333;
				float:right;
				font-family:'Helvetica Neue', helvetica;
				font-size:60px;
				font-weight:bold;
				right:0;
				margin:40px;
				padding:20px;
				position:absolute;
				top:0;
				width:700px;
				z-index:9999; /* Show above .gradient */
				text-shadow: 0 1px 0 #fff;
				-webkit-font-smoothing:antialiased;
			}
			.light-text {color:#ddd;text-shadow: 0 1px 0 #666;}
			.smaller-text {font-size:30px;}
			.youtube-video, video {
				left:0;
				position:absolute;
				top:0;
			}
		</style>";
		$html .= $this->inject_inline_script();
		$html .= '</div>';
		
		print($html);
		}
	

	public function inject_inline_script(){
		return sprintf("
		<script type='text/javascript' charset='utf-8'>
		jQuery(function($){
				$('#maximage_%s').maximage({
					cycleOptions: {
						fx: '%s',
						speed: %d, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
						timeout: %d,
						prev: '#arrow_left',
						next: '#arrow_right',
						pause: 1,
						before: function(last,current){
							if(!$.browser.msie){
								// Start HTML5 video when you arrive
								if($(current).find('video').length > 0) $(current).find('video')[0].play();
							}
						},
						after: function(last,current){
							if(!$.browser.msie){
								// Pauses HTML5 video when you leave it
								if($(last).find('video').length > 0) $(last).find('video')[0].pause();
							}
						}
					},
					onFirstImageLoaded: function(){
						jQuery('#cycle-loader').hide();
						jQuery('#maximage_%s').fadeIn('fast');
					}
				});
	
				// Helper function to Fill and Center the HTML5 Video
				jQuery('video,object').maximage('maxcover');
	
				// To show it is dynamic html text
				jQuery('.in-slide-content').delay(1200).fadeIn();
			}, jQuery);
		</script>", $this->id, $this->sliders['slider_animation'], $this->sliders['slider_speed'], $this->sliders['slider_animation'], $this->id );
		}


	public function load_script(){
		    wp_enqueue_script( 'jquery.maximage', get_template_directory_uri() . '/assets/js/jquery.maximage.js', array('jquery'), '1.2', true );
		    wp_enqueue_script( 'jquery.cycle.all', get_template_directory_uri() . '/assets/js/jquery.cycle.all.js', array('jquery'), '1.2', true );
			wp_enqueue_style( 'jquery.maximage', get_template_directory_uri() . '/assets/css/jquery.maximage.css', array(), '1.0', 'all' );

		}
		
		
	public function slider_shortcode_fullscreen( $atts, $content = null){
			extract(shortcode_atts( array(
				'id' => '',
			), $atts ));
								
				$output = $this->__get_slider($id);
		
				return $output;
		
			}

	

	
	
	}
	
$full_Screen_slider = new full_Screen_slider();	