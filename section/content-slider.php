<?php
//$ST_Slider = new ST_Slider();
$code_slider = get_post_meta($post->ID, 'select_slider', true);
if($code_slider){	
	echo sprintf('%s', do_shortcode($code_slider));
	}
//echo $code_slider;

//$ST_Slider->slider_base($select_slider);


