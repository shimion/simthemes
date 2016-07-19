<?php
class ST_front_end extends ST_core{

	public function __construct(){

	}
	
	

	//Image Function to show featured Image
	function blog_img_design_elements($content, $arr = array()){
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($arr['id']), 'large' ); $url = $thumb['0'];
		if($arr['resize']==true){
			$url = aq_resize( $url, $arr['width'], $arr['width'], true,true,true );
			}else{
			$url = $url;	
		}
		if($arr['url']==true){
			$output = $url;	
			}else{
			$output = '<img class="img-responsive img-center" src="' . $url . '" alt="">';
			}
		
									
		return $output;			
		}
	
	//Blog Design Structure and elements
	function blog_frontend_design_elements($content, $arr = array()){
		$tot_class = ' clearfix scrollimation fade-up';
		$html = '<div id="post-'.$arr['id'].'"'.post_class($arr['tot_class'].$tot_class).'>'."/n";
		$html .= '<article  role="article">'."/n";
								
		$html .= '						<header>';
								
		$html .= '							<a href="'.$arr['the_permalink'].'" title="'.$arr['the_title_attribute'].'">';
									


			if($arr['blog_layout'] !='one_column'){
			$html .= $this->blog_img_design_elements($content, array('id' =>$arr['id'], 'resize' =>true, 'width' =>$arr['thumb_width'], 'height' =>$arr['thumb_height']));	
				}else{
			$html .= $this->blog_img_design_elements($content, array('id' =>$arr['id'], 'resize' =>false));	
			}

		$html .= '									 </a>' . "/n";
									
		$html .= '										<div class="page-header"><h1 class="h2" ><a href="'.$arr['the_permalink'].'" rel="bookmark" title="'.$arr['the_title_attribute'].'" style="';
		if(!empty($arr['title_size_ind'])){
		$html .= 'font-size:'.$arr['title_size_ind']['0'].$arr['title_size_ind']['1'];
		} 
		$html .= '; ">'.$arr['the_title'].'</a></h1></div>' . "/n";
		$link = sprintf('<a href="%1$s" title="%2$s" rel="author">%3$s</a>',esc_url( get_author_posts_url( $authordata->ID, $authordata->user_nicename ) ),esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) ),
			get_the_author()
					);
		$st_postmeta = '<p class="meta">Posted <time datetime="'. get_the_time('Y-m-j') .'" pubdate>'. get_the_time().'</time> by '. $link.'<span class="amp">&</span> filed under '. get_the_category(', ').'.</p>';
		$html .= apply_filters('ST_individual_post_meta', $st_postmeta) . "/n";
									
								
		$html .= '						</header> <!-- end article header -->' . "\n";
							
		$html .= 						'<section class="post_content clearfix">' . "\n";
		$html .= '									<p>';
		if($excerpt_full_content=='Excerpt'):
		_e(wp_trim_words(get_the_content(), $excerpt_length_blog), "SimThemes"); 
		else: 
		the_content(); 
		endif; 
		$html .= '</p>';
		
		$html .= '							<a class="btn btn-default button-color '. $arr['button_type']. '" style="background:'.$arr['blog_button_Color'].'" href="'.$arr['the_permalink'].'">';
		if(!empty($arr['read_more_text'])){
			$html .= $arr['read_more_text'];
		}else{
			$html .= ot_get_option('read_more');
			}
			
		$html .= '</a>';
		$html .= '</section> <!-- end article section -->' ."\n";
		$html .= '<footer>' ."\n";
					
		$html .= '							<p class="tags">' ."\n";
		
		$html .=  the_tags('<span class="tags-title">' . __("Tags","SimThemes") . ':</span> ', ' ', '') .'</p>';
									
		$html .= '						</footer> <!-- end article footer -->' ."\n";
							
		$html .= '					</article> <!-- end article -->' ."\n";
		$html .= '					</div>		' ."\n";
		
		
		return $html;
		
		
		}
	
	
	//Newsletter Base Structure	
	 function newsletter_design($content, $array){
		
		$html ='<div class="st_newsletter">';
		if(!empty($array["list_title"])) {
    	$html .='<h2>'.$array['list_title'].'</h2>';
		}
		
    	if(!empty($array["list_text"])) {
		$html .='<p>'.$array['list_text'].'</p>';
		}
        $html .='<form method="post" class="newsletter_input">';
        $html .='<input type="text" name="email" class="email" placeholder="Your Email Address" />';
            
        $html .='<p><a id="id_submit_newsletter" class="btn btn-simthemes" ><i class="fa fa-plus-circle"></i>'. $array['button_text'].'</a></p>';
        $html .= '<p style="margin:0; text-align:center; display:none; color:#000;" id="spining_wapper"><i class="fa fa-spinner fa-spin"></i></p>';
        $html .= '<input type="hidden" class="id_list" name="id_list" value="' .$array['id_list']. '" />';
        $html .= '<input type="hidden" class="thankyou" name="thankyou" value="' .$array['thankyou']. '" />';
        $html .= '</form>';
	    $html .= '</div>';

		return $html;
		
		}
		
	function hooking_register_design($content, $array){
		$html = apply_filters('__filter_newsletter', $this->newsletter_design($content, $array), $array);
		return $html;
		}	
	


}
global $ST_front_end;	$ST_front_end = new ST_front_end();
