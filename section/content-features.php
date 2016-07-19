<?php
if (class_exists('ST_core')) {$ST_core = new ST_core();}
$feature_sec_title = get_post_meta($post->ID, 'feature_sec_title', true);
$feature_sec_title = get_post_meta($post->ID, 'feature_sec_title', true);
$feature_sec_text = get_post_meta($post->ID, 'feature_sec_text', true);
$add_features = get_post_meta($post->ID, 'add_feature', true);
$ind_feature_title_ltd = get_post_meta($post->ID, 'ind_feature_title_ltd', true);
$ind_feature_text_ltd = get_post_meta($post->ID, 'ind_feature_text_ltd', true);
$show_feature_text = get_post_meta($post->ID, 'show_feature_text', true);
$show_feature_title = get_post_meta($post->ID, 'show_feature_title', true);
$feature_title_color = get_post_meta($post->ID, 'featured_tit_color', true);
$featured_link_color = get_post_meta($post->ID, 'featured_link_color', true);
$background = get_post_meta($post->ID, 'featured_bg', true);
			if ( !empty( $background ) ) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			}

$html = '' . "\n";

    $html .= '<section id="about" class="gray-bg padding-top-bottom section-features" style="background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .'">' . "\n";
            
    $html .= '            <div class="container features">' . "\n";
                    
    if($feature_sec_title):
	$html .= '<h1 class="section-title" style="color:'.$feature_title_color.'">' . translate($feature_sec_title, "SimThemes") . '</h1>' . "\n";
	endif;
    if($feature_sec_text):
	$html .= '<p class="section-description">' . translate($feature_sec_text, "SimThemes") . '</p>' . "\n";
	endif;
                    
    $html .= '                <div class="row">' . "\n"; 
	if($add_features): $i=0; foreach($add_features as $add_feature): $i++;                        
	$html .= '				<div class="' . $ST_core->layout_setting_front_end($post->ID, 'select_column_feature') . ' scrollimation fade-up">' . "\n";
                            
    $html .= '                        <div class="media">' . "\n";
    $html .= '                            <div class="icon pull-left">' . "\n";
    $html .= '                                <i class="media-object icon-1 fa ' .$add_feature['feature_icon'] . '"></i>' . "\n";
    $html .= '                                <i class="media-object icon-2 fa ' . $add_feature['feature_icon_hover'] . '"></i>' . "\n";
    $html .= '                            </div>' . "\n";
                                
    $html .= '                            <div class="media-body">' . "\n";
    if($show_feature_title =='Yes'):
	$html .= '<h4 style="color:'.$feature_title_color.'">' . "\n";
	//if($add_feature['feature_url']){
	$html .= '	<a href="'.$add_feature['feature_url'].'" style="color:'.$featured_link_color.'">' . "\n";
	//} 
	$html .= translate( $ST_core->limit_words($add_feature['title'], $ind_feature_title_ltd), "SimThemes"); 
	//if($add_feature['feature_url']){ 
	$html .= '	</a>' . "\n";
	 //}
	 $html .= '	</h4>' . "\n"; 
	 endif;
	 if($show_feature_text =='Yes'): 
	 $html .= '<p>' . translate( $ST_core->limit_words($add_feature['feature_text'], $ind_feature_text_ltd), "SimThemes") . '</p>' . "\n"; 
	 endif;
	 
     $html .= '                           </div>' . "\n"; 
     $html .= '                       </div>' . "\n"; 
                            
     $html .= '                  </div>' . "\n"; 
                        
	endforeach; endif;                        
     $html .= '               </div>' . "\n"; 
                    
                    
                
     $html .= '           </div>' . "\n"; 
                
	 $html .= '</section>' . "\n"; 
	 $html .= '<style>.features .media .icon{ background:'.get_post_meta($post->ID, 'featured_link_color', true).'}.features a:hover, .features .media:hover .icon { color:'.get_post_meta($post->ID, 'featured_hover_color', true).' !important; } .section-features .section-description, .section-features p{color:'.get_post_meta($post->ID, 'featured_text_color', true).'}</style>' . "\n"; 

	  echo apply_filters('filter_features', $html);

