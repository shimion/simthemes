<?php
class ST_core{
	
	public function __construct(){
	add_action('admin_footer_text', array( $this, 'ST_custom_admin_footer'));
	add_action('after_setup_theme', array( $this, 'ST_translation'));
	add_filter('excerpt_more', array( $this, 'ST_excerpt_more'));
	add_action('after_setup_theme',array( $this, 'ST_BASIC_theme_support'));
	add_filter('the_content', array( $this,'ST_rmv_P_from_img'));
	add_action('init', array($this, 'ST_page_navi'));
	add_filter( 'widget_tag_cloud_args', array( $this,'ST_tagcloude') );
	add_action( 'wp_tag_cloud', array( $this,'ST_add_tag_class') );
	add_filter( 'wp_tag_cloud',array( $this,'wp_tag_cloud_filter'), 10, 2) ;
	// Enable shortcodes in widgets
	//add_filter( 'widget_text', array( $this,'do_shortcode') );
	add_filter('nav_menu_css_class', array( $this,'ST_add_active_class'), 10, 2 );
	add_filter( 'post_thumbnail_html', array( $this,'ST_remove_thumbnail_dimensions'), 10 );
	add_filter( 'image_send_to_editor', array( $this,'ST_remove_thumbnail_dimensions'), 10 );
	add_filter( 'wp_get_attachment_link', array($this,'ST_add_class_attachment_link'), 10, 1 );
	add_filter('manage_slider_posts_columns', array($this,'bs_slider_table_head'));
	add_action( 'manage_slider_posts_custom_column', array($this,'bs_slider_table_content'), 10, 2 );
	
		}

	public function ST_rmv_P_from_img($content){
	   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
	}
	
	




	public  function mailchamp_intregration(){
		$api_id = ot_get_option('mailchimp_api');
		if(!empty($api_id)){
			$api = new MCAPI($api_id);
			return $api;
		}
		}	
	


	public function spinners_loading(){
		$html = '<div class="loading-indicator"> Loading...</div>';
		return $html;
		}



	// Add 'active' classes to nav link item 
	 public function ST_add_active_class($classes, $item) {
		if( $item->menu_item_parent == 0 && in_array('current-menu-item', $classes) ) {
		$classes[] = "active";
		}
	  
	  return $classes;
	}



	// Add thumbnail class to thumbnail links
	public function ST_add_class_attachment_link( $html ) {
    $postid = get_the_ID();
    $html = str_replace( '<a','<a class="thumbnail"',$html );
    return $html;
}




	public function ST_menu($arr) {
			$main_navigation_menu = get_post_meta($arr['id'], 'main_navigation_menu', true)	;
							do_action('before_menu'); 
							echo '<ul id="menu-new" class="nav navbar-nav">';
			if(!empty($main_navigation_menu)){			
						    wp_nav_menu( 
								array( 
									'menu' => $main_navigation_menu, /* menu name */
									'menu_class' => 'nav navbar-nav',
									//'theme_location' => 'main_nav', /* where in the theme it's assigned */
									'container' => 'false', /* container class */
									'fallback_cb' => 'wp_bootstrap_main_nav_fallback', /* menu fallback */
									// 'depth' => '2',  suppress lower levels for now 
									'items_wrap'      => '%3$s',
									'walker' => new ST_menu_walker()
								)
							);
							
				}else{
					
						    wp_nav_menu( 
								array( 
									'menu' => '', /* menu name */
									'menu_class' => 'nav navbar-nav',
									'theme_location' => 'main_nav', /* where in the theme it's assigned */
									'container' => 'false', /* container class */
									'items_wrap'      => '%3$s',
									'fallback_cb' => 'wp_bootstrap_main_nav_fallback', /* menu fallback */
									// 'depth' => '2',  suppress lower levels for now 
									'walker' => new ST_menu_walker()
								)
							);
					
			}
			
			
			
			//if($Display_Header){ $Display_Header = $Display_Header;}else{ $Display_Header = 'main_nav'; }
	// Check if WooCommerce is active and add a new item to a menu assigned to Primary Navigation Menu location


		//	echo  '<i class="fa fa-shopping-cart"></i> ';
            
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ){
		if(ot_get_option('show_cart_button_menu')=='on'):
		?>
<?php 
		global $woocommerce;
		$cart_contents_count = $woocommerce->cart->cart_contents_count;
		$empty_text = __('Your cart is currently empty', 'SimThemes');
		$viewing_cart = __('View your shopping cart', 'SimThemes');
		$start_shopping = __('Start shopping', 'SimThemes');
		$cart_url = $woocommerce->cart->get_cart_url();
		$shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
			if ($cart_contents_count == 0) {
				echo '<li class="dropdown menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">';
			} else {
				echo '<li class="dropdown menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children ">';
			}

 ?>
 
 <a class=""  href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
<i class="fa fa-shopping-cart"></i>
</a>	
<span class="st_cart_count"><?php echo $cart_contents_count; ?></span>

<ul class="dropdown-menu st_cart_menu cart-contents">
	<li><?php echo $empty_text; ?></li>
</ul>		
 </li>  
 
<?php 
if(ot_get_option('show_wishlist_button_menu')=='on'):
echo st_get_wishlist();
endif;
 ?>



  	
<?php



	endif;
	
		if(ot_get_option('show_cart_button_menu')=='on'):
		
	endif;
	
		}
		
	echo '</ul>';
	
	do_action('after_menu');  
		

	}

 


// Remove height/width attributes on images so they can be responsive

	public function ST_remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}



	// basic functions and theme supports
	public function ST_BASIC_theme_support() {
		add_theme_support('post-thumbnails');     
		set_post_thumbnail_size(125, 125, true);   
		add_theme_support( 'custom-background' );  

		add_theme_support( 'post-formats',    
			array( 
				'aside',  
				'gallery', 
				'link',   
				'image',   
				'quote',   
				'status',  
				'video',   
				'audio',  
				'chat'     
			)
		);	
		add_theme_support( 'menus' );            
		register_nav_menus(                      
			array( 
				'main_nav' => 'The Main Menu',   
				'footer_links' => 'Footer Menu' 
			)
		);	
	}




	// Setting Experct More Section
	function ST_excerpt_more($more) {
		global $post;
		// edit here if you like
		return '...  <a href="'. get_permalink($post->ID) . '" class="more-link" title="Read '.get_the_title($post->ID).'">Read more &raquo;</a>';
	}
	
	

		

     // Add Translation option
	 public function ST_translation(){
		load_theme_textdomain( 'SimThemes', ST_Asset.'languages' );
		$locale = get_locale();
		$locale_file = ST_Asset."languages/$locale.php";
		if ( is_readable($locale_file) ) require_once($locale_file);

		 }

	// Custom Backend Footer

	public function ST_custom_admin_footer() {
		echo '<span id="footer-thankyou">Developed by <a href="http://simthemes.com" target="_blank">SimThemes</a></span>.';
		}
		



	// bootstrap Pagination intregation
	public function ST_page_navi($pages = '', $range = 2) {
		
     $showitems = ($range * 2)+1;  
 
     if ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} else {
    $paged = 1;
}
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<ul class=\"pagination\">";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo '<li class="prev"><a href="'.get_pagenum_link().'" title="First">';
         if($paged > 1 && $showitems < $pages) echo '<li class="disabled"><a href="#">&larr; Previous</a></li>';
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? '<li class="active"><a href="#">'.$i.'</a>': '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">&raquo;</a></li>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>Last &raquo;</a></li>";
         echo "</ul>\n";
     }



	}



	public function ST_tagcloude( $args ) {
	$args['number'] = 20; // show less tags
	$args['largest'] = 9.75; // make largest and smallest the same - i don't like the varying font-size look
	$args['smallest'] = 9.75;
	$args['unit'] = 'px';
	return $args;
	}


// filter tag clould output so that it can be styled by CSS
	public function ST_add_tag_class( $taglinks ) {
		$tags = explode('</a>', $taglinks);
		$regex = "#(.*tag-link[-])(.*)(' title.*)#e";
	
		foreach( $tags as $tag ) {
			$tagn[] = preg_replace($regex, "('$1$2 label tag-'.get_tag($2)->slug.'$3')", $tag );
		}
	
		$taglinks = implode('</a>', $tagn);
	
		return $taglinks;
	}





	public function wp_tag_cloud_filter( $return, $args )
		{
		  return '<div id="tag-cloud">' . $return . '</div>';
		}


// add column on slider list
	public function bs_slider_table_head( $defaults ) {
		$defaults['slider_shortcode']  = 'Slider Shortcode';
		unset($defaults['date']);
		return $defaults;
		}


	public function bs_slider_table_content( $column_name, $post_id ) {
		if ($column_name == 'slider_shortcode') {
		  echo  '<textarea name="slider_cpt" class="slider_cpt_shortcode" readonly  onClick="javascript:this.form.slider_cpt.focus();this.form.slider_cpt.select();">[slider id="'.$post_id.'" ]</textarea>';
		}

}



	public function option_condition($option, $non_option){
		$output = ($option)?$option : $non_option;
		return $output;
		}
		
		
		
	public function limit_words($string, $word_limit){
		$words = explode(" ",$string);
		return implode(" ", array_splice($words, 0, $word_limit));
		}	


	public function layout_setting_array_metabox(){
		$layout_array = array( 
					  array(
						'value'       => 'Two Column',
						'label'       => __( 'Two Column', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'Three Column',
						'label'       => __( 'Three Column', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'Four Column',
						'label'       => __( 'Four Column', 'SimThemes' ),
						'src'         => ''
					  ),
					  array(
						'value'       => 'Six Column',
						'label'       => __( 'Six Column', 'SimThemes' ),
						'src'         => ''
					  ),
					);
		return $layout_array;
		
		}
		
	public function layout_setting_front_end($select_column){
			//$select_column = get_post_meta($id, $select_column, true);
			if(!empty($select_column)):
			if($select_column == '2'){
				$output = 'col-sm-6'; 
				}elseif($select_column == '3'){
				$output = 'col-sm-4'; 
				}elseif($select_column == '4'){
				$output = 'col-sm-3'; 
					}
				return $output;
			endif;	
					
		}



	public function social_bookmarking($arr = array('size'=>'fa-lg', 'color'=>'#E0E0E0')){
		$socal_bookmarking = ot_get_option('social_bookmarkings');
			if($socal_bookmarking){
					$html = '' . "\n";
					$html .= '<ul class="socal_bookmarks">' . "\n";
					foreach ($socal_bookmarking as $social):
					$html .= '<li>' . "\n";
					$html .= '<a href="'. $social['social_bookmarkings_link'].'" target="_blank">' . "\n";
					$html .= '<i class="fa '. $social['social_bookmarkings_icon'] .' ' . $arr['size'] . '" style="color:'.$arr['color'].'"></i>' . "\n";
					$html .= '</a>' . "\n";
					$html .= '</li>' . "\n";
					endforeach;
					$html .= '</ul>' . "\n";
				}
		return $html;
		
		
		}


	public function get_post_type_slug($arr){
		$post_type = get_post_type($arr['post_id']);
		if ( $post_type )
			{
				$post_type_data = get_post_type_object( $post_type );
				$post_type_slug = $post_type_data->rewrite['slug'];
				if($post_type=='post' || $post_type=='page'){
				$url = '/' . $arr['post_slug'];
				}else{
				$url = $post_type_slug . '/' . $arr['post_slug'];
				}
				return $url;
			}
		}
		


// Social Icon function.
	public function ST_social_icon($arry){
		
		
		        $html .= '<ul class="socal_bookmarks" style=" text-align:'.$arry['aligment'].'">';
				if(!empty($arry['fb'])){
                $html .= '<li>';
                $html .= '<a href="'.$arry['fb'].'">';
                $html .= '<i class="fa fa-facebook fa-lg" style="color:'.$arry['color'].'"></i>';
                $html .= '</a>';
                $html .= '</li>';
				}
				if(!empty($arry['ti'])){
                $html .= '<li>';
               $html .= ' <a href="'.$arry['ti'].'">';
               $html .= ' <i class="fa fa-twitter fa-lg" style="color:'.$arry['color'].'"></i>';
                $html .= '</a>';
                $html .= '</li>';
				}
				if(!empty($arry['in'])){
                $html .= '<li>';
                $html .= '<a href="'.$arry['in'].'">';
                $html .= '<i class="fa fa-linkedin fa-lg" style="color:'.$arry['color'].'"></i>';
                $html .= '</a>';
                $html .= '</li>';
				}
				if(!empty($arry['mail'])){
                $html .= '<li>';
                $html .= '<a href="mailto:'.$arry['mail'].'">';
                $html .= '<i class="fa fa fa-envelope-o fa-lg" style="color:'.$arry['color'].'"></i>';
                $html .= '</a>';
                $html .= '</li>';
                $html .= '</ul>';
				}
				return $html;

		}
	
}
	
global $ST_core;	$ST_core = new ST_core();
