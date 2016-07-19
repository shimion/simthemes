<?php
add_action('wp_head','style_generator' );
function style_generator(){
	global $post, $wp_query;
	$footer_bg_color = ot_get_option('footer_bg_color');
	$site_width = (ot_get_option('site_width')) ? ot_get_option('site_width') : array('0'=>'1024', '1'=>'px');
	$site_width = (get_post_meta($post->ID, 'site_width', true)) ? get_post_meta($post->ID, 'site_width', true) : $site_width;
	$content_width = (ot_get_option('content_width')) ? ot_get_option('content_width') :array('0'=>'75', '1'=>'%');
	$content_width = (get_post_meta($post->ID, 'content_width', true)) ? get_post_meta($post->ID, 'content_width', true) : $content_width;
	$sidebar_width = (ot_get_option('sidebar_width')) ? ot_get_option('sidebar_width') : array('0'=>'25', '1'=>'%');
	$sidebar_width = (get_post_meta($post->ID, 'sidebar_width', true)) ? get_post_meta($post->ID, 'sidebar_width', true) :  $sidebar_width;
	$logo_mar_top = ot_get_option('logo_mergin_top');
	$logo_mergin_bottom = ot_get_option('logo_mergin_bottom');
	$output = '';
	$output .= '<style>';
	
	$output .= '@media (min-width: 1200px){.container {width: '.$site_width['0'].$site_width['1'].';}}';
	$output .= '@media (min-width: 768px){.col-sm-3 {width: '.$sidebar_width['0'].$sidebar_width['1'].';}.col-sm-9 {width:  '.$content_width['0'].$content_width['1'].';}}';
	
	
	$body_font_size = ot_get_option('body_font_size');
	if(!empty($body_font_size)){
	$output .= 'body, p, ul, li, a{font-size:'.$body_font_size['0'].$body_font_size['1'].'}';
	}
	$output .= 'a{color:'.ot_get_option('body_link_color').';}';
	$output .= '.widget ul.menu li.current_page_item a:visited, .widget ul.menu li.current_page_item a:hover, .widget ul.menu li.current_page_item a, .widget ul.menu li.current_page_item a:link, .widget ul.menu li a:hover{color:'.ot_get_option('body_link_hover_color').';}';
	$output .= 'h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6{color:'.ot_get_option('title_color').';}';
	$output .= 'h1 a, .h1 a, h2 a, .h2 a, h3 a, .h3 a, h4 a, .h4 a, h5 a, .h5 a, h6 a, .h6 a{color:'.ot_get_option('title_color_linked').';}';
	$output .= 'h1 a:hover, .h1 a:hover, h2 a:hover, .h2 a:hover, h3 a:hover, .h3 a:hover, h4 a:hover, .h4 a:hover, h5 a:hover, .h5 a:hover, h6 a:hover, .h6 a:hover{color:'.ot_get_option('title_color_linked_hover').';}';
	$h1_font_size = ot_get_option('h1_font_size');
	if(!empty($h1_font_size))
	$output .= 'h1, .h1, h1 a, .h1 a{font-size:'.$h1_font_size['0'].$h1_font_size['1'].'}';
	$h2_font_size = ot_get_option('h2_font_size');
	if(!empty($h2_font_size))
	$output .= 'h2, .h2, h2 a, .h2 a{font-size:'.$h2_font_size['0'].$h2_font_size['1'].'}';
	$h3_font_size = ot_get_option('h3_font_size');
	if(!empty($h3_font_size))
	$output .= 'h3, .h3, h3 a, .h3 a{font-size:'.$h3_font_size['0'].$h3_font_size['1'].'}';
	$h4_font_size = ot_get_option('h4_font_size');
	if(!empty($h4_font_size))
	$output .= 'h4, .h4, h4 a, .h4 a{font-size:'.$h4_font_size['0'].$h4_font_size['1'].'}';
	$h5_font_size = ot_get_option('h5_font_size');
	if(!empty($h5_font_size))
	$output .= 'h5, .h5, h5 a, .h5 a{font-size:'.$h5_font_size['0'].$h5_font_size['1'].'}';
	$h6_font_size = ot_get_option('h6_font_size');
	if(!empty($h6_font_size))
	$output .= 'h6, .h6, h6 a, .h6 a{font-size:'.$h6_font_size['0'].$h6_font_size['1'].'}';
			$background = get_post_meta($post->ID, 'Background_header', true);
			if ( !empty( $background ) ) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			
			
			
			}else{
			$background = ot_get_option('bg_header');
				if(!empty($background)){
				$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
				$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
				$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
				$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
				$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
				$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
				}
			}
			$output .= '.navbar-default{background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .';}';


			$menu_background_color = get_post_meta($post->ID, 'menu_background_color', true);
			if ( !empty( $menu_background_color ) ) {
			$output .= '.navbar-default.seperate-menu-section{background-color: '.$menu_background_color .';}';
			}else{
			$menu_background_color = ot_get_option('menu_background_color');
			$output .= '.navbar-default.seperate-menu-section{background-color: '.$menu_background_color .';}';
				}

			$header_height = get_post_meta($post->ID, 'header_height', true);
			if ( !empty( $header_height ) ) {
			$output .= '.navbar-default.header-height, .header_right_inner, .logo-right-menu-placing-center{height: '.$header_height[0] . $header_height[1].';}';
			}else{
			$header_height = ot_get_option('header_height');
			$output .= '.navbar-default.header-height, .header_right_inner, .logo-right-menu-placing-center{height: '.$header_height[0] . $header_height[1].';}';
				}

			$header_border_top = get_post_meta($post->ID, 'header_border_top', true);
			if ( !empty( $header_border_top ) ) {
			$header_border_top_color       = ( $header_border_top['color'] != '' ) ? $header_border_top['color'] . ' ' : '';
			$header_border_top_size      = ( $header_border_top['width'] != '' ) ? $header_border_top['width'] : '';
			$header_border_top_unit     = ( $header_border_top['unit'] != '' ) ? $header_border_top['unit']. ' ' : '';
			$header_border_top_style     = ( $header_border_top['style'] != '' ) ? $header_border_top['style']. ' ' : '';
			
			
			
			}else{
			$header_border_top = ot_get_option('header_border_top');
				if(!empty($header_border_top)){
					$header_border_top_color       = ( $header_border_top['color'] != '' ) ? $header_border_top['color'] . ' ' : '';
					$header_border_top_size      = ( $header_border_top['width'] != '' ) ? $header_border_top['width'] : '';
					$header_border_top_unit     = ( $header_border_top['unit'] != '' ) ? $header_border_top['unit']. ' ' : '';
					$header_border_top_style     = ( $header_border_top['style'] != '' ) ? $header_border_top['style']. ' ' : '';
				}
			}
			$output .= '.navbar-default{border-top: '.$header_border_top_size.$header_border_top_unit.$header_border_top_style.$header_border_top_color.';}';

			
			$header_border_bottom = get_post_meta($post->ID, 'header_border_bottom', true);
			if ( !empty( $header_border_bottom ) ) {
			$header_border_bottom_color       = ( $header_border_bottom['color'] != '' ) ? $header_border_bottom['color'] . ' ' : '';
			$header_border_bottom_size      = ( $header_border_bottom['width'] != '' ) ? $header_border_bottom['width'] : '';
			$header_border_bottom_unit     = ( $header_border_bottom['unit'] != '' ) ? $header_border_bottom['unit']. ' ' : '';
			$header_border_bottom_style     = ( $header_border_bottom['style'] != '' ) ? $header_border_bottom['style']. ' ' : '';
			
			
			
			}else{
			$header_border_bottom = ot_get_option('header_border_bottom');
				if(!empty($header_border_bottom)){
					$header_border_bottom_color       = ( $header_border_bottom['color'] != '' ) ? $header_border_bottom['color'] . ' ' : '';
					$header_border_bottom_size      = ( $header_border_bottom['width'] != '' ) ? $header_border_bottom['width'] : '';
					$header_border_bottom_unit     = ( $header_border_bottom['unit'] != '' ) ? $header_border_bottom['unit']. ' ' : '';
					$header_border_bottom_style     = ( $header_border_bottom['style'] != '' ) ? $header_border_bottom['style']. ' ' : '';
				}
			}
			$output .= '.navbar-default{border-bottom: '.$header_border_bottom_size.$header_border_bottom_unit.$header_border_bottom_style.$header_border_bottom_color.';}';
			
			

			$header_top_border_top = ot_get_option('header_top_border_top');
			if(!empty($header_top_border_top)){
			$border_color       = ( $header_top_border_top['color'] != '' ) ? $header_top_border_top['color'] . ' ' : '';
			$border_size      = ( $header_top_border_top['width'] != '' ) ? $header_top_border_top['width'] : '';
			$border_unit     = ( $header_top_border_top['unit'] != '' ) ? $header_top_border_top['unit']. ' ' : '';
			$border_style     = ( $header_top_border_top['style'] != '' ) ? $header_top_border_top['style']. ' ' : '';
				
			$output .= '.very_top_bar{border-top: '.$border_size.$border_unit.$border_style.$border_color.';}';
			}
			
			$header_top_border_bottom = ot_get_option('header_top_border_bottom');
			if(!empty($header_top_border_bottom)){
			$border_color       = ( $header_top_border_bottom['color'] != '' ) ? $header_top_border_bottom['color'] . ' ' : '';
			$border_size      = ( $header_top_border_bottom['width'] != '' ) ? $header_top_border_bottom['width'] : '';
			$border_unit     = ( $header_top_border_bottom['unit'] != '' ) ? $header_top_border_bottom['unit']. ' ' : '';
			$border_style     = ( $header_top_border_bottom['style'] != '' ) ? $header_top_border_bottom['style']. ' ' : '';
				
			$output .= '.very_top_bar{border-bottom: '.$border_size.$border_unit.$border_style.$border_color.';}';
			}
			
	
	
	$menu_mergin_top = get_post_meta($post->ID, 'menu_mergin_top', true);
	if(!empty($menu_mergin_top['0']) and !empty($menu_mergin_top['1'])){
		$output .= '.navbar-nav {margin-top:'.$menu_mergin_top['0'].$menu_mergin_top['1'].';}';
		}else{
		$menu_mergin_top = ot_get_option('menu_mergin_top');
		if(!empty($menu_mergin_top['0']) and !empty($menu_mergin_top['1'])){
		$output .= '.navbar-nav {margin-top:'.$menu_mergin_top['0'].$menu_mergin_top['1'].';}';
			}
		}
	
	$menu_mergin_bottom = get_post_meta($post->ID, 'menu_mergin_bottom', true);
	if(!empty($menu_mergin_bottom['0']) and !empty($menu_mergin_bottom['1'])){
		$output .= '.navbar-nav {margin-bottom:'.$menu_mergin_bottom['0'].$menu_mergin_bottom['1'].';}';
		}else{
		$menu_mergin_bottom = ot_get_option('menu_mergin_bottom');
		if(!empty($menu_mergin_bottom['0']) and !empty($menu_mergin_bottom['1'])){
		$output .= '.navbar-nav {margin-bottom:'.$menu_mergin_bottom['0'].$menu_mergin_bottom['1'].';}';
			}
		}
	
	
	
	$menu_padding_top = get_post_meta($post->ID, 'menu_padding_top', true);
	if(!empty($menu_padding_top['0']) and !empty($menu_padding_top['1'])){
		$output .= '.navbar-nav > li > a, .navbar-default .navbar-nav > li > a{padding-top:'.$menu_padding_top['0'].$menu_padding_top['1'].';}';
		}else{
		$menu_padding_top = ot_get_option('menu_padding_top');
		if(!empty($menu_padding_top['0']) and !empty($menu_padding_top['1'])){
		$output .= '.navbar-nav > li > a, .navbar-default .navbar-nav > li > a{padding-top:'.$menu_padding_top['0'].$menu_padding_top['1'].';}';
			}
		}
	
	$menu_padding_bottom = get_post_meta($post->ID, 'menu_padding_bottom', true);
	if(!empty($menu_padding_bottom['0']) and !empty($menu_padding_bottom['1'])){
		$output .= '.navbar-nav > li > a, .navbar-default .navbar-nav > li > a{padding-bottom:'.$menu_padding_bottom['0'].$menu_padding_bottom['1'].';}';
		}else{
		$menu_padding_bottom = ot_get_option('menu_padding_bottom');
		if(!empty($menu_padding_bottom['0']) and !empty($menu_padding_bottom['1'])){
		$output .= '.navbar-nav > li > a, .navbar-default .navbar-nav > li > a{padding-bottom:'.$menu_padding_bottom['0'].$menu_padding_bottom['1'].';}';
			}
		}
	
	
	$menu_item_color = get_post_meta($post->ID, 'menu_item_color', true);
	if($menu_item_color){
	$output .= '.navbar-nav > li > a, .navbar-default .navbar-nav > li > a{color:'.$menu_item_color.';}';
		}else{
	$menu_item_color = ot_get_option('menu_item_color');
	if(!empty($menu_item_color))
	$output .= '.navbar-nav > li > a, .navbar-default .navbar-nav > li > a{color:'.$menu_item_color.';}';
		}
		
	
	$menu_item_hover_color = get_post_meta($post->ID, 'menu_item_hover_color', true);
	if($menu_item_hover_color){	
	$output .= '.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{color:'.$menu_item_hover_color.';}';
	}else{
	$menu_item_hover_color = ot_get_option('menu_item_hover_color');
	if(!empty($menu_item_hover_color))
	$output .= '.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{color:'.$menu_item_hover_color.';}';
	}
	
	
	
	$menu_item_hover_background = get_post_meta($post->ID, 'menu_item_hover_background', true);
	if($menu_item_hover_background){
	$output .= '.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus{background-color:'.$menu_item_hover_background.';}';
	}else{
	$menu_item_hover_background = ot_get_option('menu_item_hover_background');
	if(!empty($menu_item_hover_background))
	$output .= '.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus{background-color:'.$menu_item_hover_background.';}';
	}
	
	
	
	$menu_item_active_background = get_post_meta($post->ID, 'menu_item_active_background', true);
	if($menu_item_active_background){
	$output .= '.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{background-color:'.$menu_item_active_background.';}';
	}else{
	$menu_item_active_background = ot_get_option('menu_item_active_background');
	if(!empty($menu_item_active_background))
	$output .= '.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{background-color:'.$menu_item_active_background.';}';
	}
	
	
	
	
	$dropdown_background = get_post_meta($post->ID, 'dropdown_background', true);
	if(!empty($dropdown_background)){
	$output .= '.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, ul.nav li.dropdown:hover > ul.dropdown-menu{background-color:'.$dropdown_background.';}';
	}else{
	$dropdown_background = ot_get_option('dropdown_background');
	if(!empty($dropdown_background))
	$output .= '.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus, ul.nav li.dropdown:hover > ul.dropdown-menu{background-color:'.$dropdown_background.';}';
	}
	
	
	$dropdown_item_hover_background = get_post_meta($post->ID, 'dropdown_item_hover_background', true);
	if(!empty($dropdown_item_hover_background)){
	$output .= '.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus{background-color:'.$dropdown_item_hover_background.';}';
	}else{
	$dropdown_item_hover_background = ot_get_option('dropdown_item_hover_background');
	if(!empty($dropdown_item_hover_background))
	$output .= '.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus{background-color:'.$dropdown_item_hover_background.';}';
	}
	
	
	
	$dropdown_item_color = get_post_meta($post->ID, 'dropdown_item_color', true);
	if(!empty($dropdown_item_color)){
	$output .= '.dropdown-menu > li > a{color:'.$dropdown_item_color.';}';
	}else{
	$dropdown_item_color = ot_get_option('dropdown_item_color');
	if(!empty($dropdown_item_color))
	$output .= '.dropdown-menu > li > a{color:'.$dropdown_item_color.';}';
	}

	
	
	$dropdown_item_hover_color = get_post_meta($post->ID, 'dropdown_item_color', true);
	if(!empty($dropdown_item_hover_color)){
	$output .= '.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus{color:'.$dropdown_item_hover_color.';}';
	}else{
	$dropdown_item_hover_color = ot_get_option('dropdown_item_hover_color');
	if(!empty($dropdown_item_hover_color))
	$output .= '.dropdown-menu > li > a:hover, .dropdown-menu > li > a:focus{color:'.$dropdown_item_hover_color.';}';
	}
	
	
	
	$dropdown_item_active_color = get_post_meta($post->ID, 'dropdown_item_active_color', true);
	if(!empty($dropdown_item_active_color)){
	$output .= '.dropdown-menu > li.current-menu-item > a{color:'.$dropdown_item_active_color.';}';
		}else{
	$dropdown_item_active_color = ot_get_option('dropdown_item_active_color');
	if(!empty($dropdown_item_active_color))
	$output .= '.dropdown-menu > li.current-menu-item > a{color:'.$dropdown_item_active_color.';}';
		}

	
	$dropdown_item_active_background = get_post_meta($post->ID, 'dropdown_item_active_background', true);
	if(!empty($dropdown_item_active_background)){
	$output .= '.dropdown-menu > li.current-menu-item > a{background-color:'.$dropdown_item_active_background.';}';
		}else{
	$dropdown_item_active_background = ot_get_option('dropdown_item_active_background');
	if(!empty($dropdown_item_active_background))
	$output .= '.dropdown-menu > li.current-menu-item > a{background-color:'.$dropdown_item_active_background.';}';
		
		}
	

	$menu_font_size = get_post_meta($post->ID, 'menu_font_size', true);
	if(!empty($menu_font_size)){
	$output .= '.navbar-nav > li > a, .navbar-default .navbar-nav > li > a{font-size:'.$menu_font_size['0'].$menu_font_size['1'].';}';
		}else{
	$menu_font_size = ot_get_option('menu_font_size');
	if(!empty($menu_font_size))
	$output .= '.navbar-nav > li > a, .navbar-default .navbar-nav > li > a{font-size:'.$menu_font_size['0'].$menu_font_size['1'].';}';
		}



//sticky header

	$Sticky_Header_background_color = ot_get_option('Sticky_Header_background_color');
	if(!empty($Sticky_Header_background_color)){
	$output .= '.sticky_header .navbar-default{background:'.$Sticky_Header_background_color.';}';
	}



	$s_menu_item_color = ot_get_option('s_menu_item_color');
	if(!empty($s_menu_item_color))
	$output .= '.sticky_header .navbar-default .navbar-nav > li > a, .sticky_header .navbar-default .navbar-nav > li > a{color:'.$s_menu_item_color.';}';
		
	
	$s_menu_item_hover_color = ot_get_option('s_menu_item_hover_color');
	if(!empty($s_menu_item_hover_color))
	$output .= '.sticky_header .navbar-default .navbar-nav > li > a:hover, .sticky_header .navbar-default .navbar-nav > li > a:focus{color:'.$s_menu_item_hover_color.';}';
	
	
	
	$s_menu_item_hover_background = ot_get_option('s_menu_item_hover_background');
	if(!empty($s_menu_item_hover_background))
	$output .= '.sticky_header .navbar-default .navbar-nav > li > a:hover, .sticky_header .navbar-default .navbar-nav > li > a:focus{background-color:'.$s_menu_item_hover_background.';}';
	
	
	
	$s_menu_item_active_background = ot_get_option('s_menu_item_active_background');
	if(!empty($s_menu_item_active_background))
	$output .= '.sticky_header .navbar-default .navbar-nav > .active > a, .sticky_header .navbar-default .navbar-nav > .active > a:hover, .sticky_header .navbar-default .navbar-nav > .active > a:focus{background-color:'.$s_menu_item_active_background.';}';
	
	
	
	
	$dropdown_background = ot_get_option('s_dropdown_background');
	if(!empty($dropdown_background))
	$output .= 'ul.nav li.dropdown:hover > ul.dropdown-menu{background-color:'.$dropdown_background.';}';
	
	
	$dropdown_item_hover_background = ot_get_option('s_dropdown_item_hover_background');
	if(!empty($dropdown_item_hover_background))
	$output .= ' .sticky_header .navbar-default .dropdown-menu > li > a:hover, .sticky_header .navbar-default  dropdown-menu > li > a:focus{background-color:'.$dropdown_item_hover_background.';}';
	
	
	
	$dropdown_item_color = ot_get_option('s_dropdown_item_color');
	if(!empty($dropdown_item_color))
	$output .= '.sticky_header .navbar-default .dropdown-menu > li > a{color:'.$dropdown_item_color.';}';

	
	
	$dropdown_item_hover_color = ot_get_option('s_dropdown_item_hover_color');
	if(!empty($dropdown_item_hover_color))
	$output .= '.sticky_header .navbar-default .dropdown-menu > li > a:hover, .sticky_header .navbar-default .dropdown-menu > li > a:focus{color:'.$dropdown_item_hover_color.';}';
	
	
	
	$dropdown_item_active_color = ot_get_option('s_dropdown_item_active_color');
	if(!empty($dropdown_item_active_color))
	$output .= '.sticky_header .navbar-default .dropdown-menu > li.current-menu-item > a{color:'.$dropdown_item_active_color.';}';

	
	$dropdown_item_active_background = ot_get_option('s_dropdown_item_active_background');
	if(!empty($dropdown_item_active_background))
	$output .= '.sticky_header .navbar-default .dropdown-menu > li.current-menu-item > a{background-color:'.$dropdown_item_active_background.';}';
	

	$s_menu_font_size = ot_get_option('s_menu_font_size');
	if(!empty($s_menu_font_size))
	$output .= '.sticky_header .navbar-default .navbar-nav > li > a, .sticky_header .navbar-default .navbar-nav > li > a{font-size:'.$s_menu_font_size['0'].$s_menu_font_size['1'].';}';







	
	$menu_font_size_dropdown = ot_get_option('menu_font_size_dropdown');
	if(!empty($menu_font_size_dropdown))
	$output .= '.dropdown-menu > li > a{font-size:'.$menu_font_size_dropdown['0'].$menu_font_size_dropdown['1'].';}';
	$header_right_text_color = ot_get_option('header_right_text_color');
	if(!empty($header_right_text_color))
	$output .= '.header_right_inner p{color:'.$header_right_text_color.';}';


	
	$output .= apply_filters('apply_header_padding', $apply_header_padding);
	$output .= 'footer{background:'.$footer_bg_color.'; color:'.ot_get_option('footer_font_color').';}';
	$output .= 'footer p{color:'.ot_get_option('footer_font_color').';}';
	$output .= 'footer .widgettitle { color:'.ot_get_option('footer_title_color').';}';
	$output .= 'footer a { color:'.ot_get_option('footer_link_color').';}';
	$output .= 'footer a:hover, footer li.current_page_item a, footer .widget.widget_nav_menu ul.menu li.current_page_item a { color:'.ot_get_option('footer_link_hover_color').';}';
	$output .= 'section.footer-bottom { background:'.ot_get_option('copyright_bg_color').'; color:'.ot_get_option('copyright_font_color').';}';
	$output .= 'section.footer-bottom p { color:'.ot_get_option('copyright_font_color').';}';
	$output .= 'section.footer-bottom a{ color:'.ot_get_option('copyright_link_color').';}';
	$output .= 'section.footer-bottom a:hover{ color:'.ot_get_option('copyright_link_hover_color').';}';
	$output .= 'ul.socal_bookmarks li a{ color:'.ot_get_option('icon_color').'}';
	$output .= 'ul.socal_bookmarks li a:hover{ color:'.ot_get_option('icon_color_hover').'}';
	$output .= '.very_top_bar{ background:'.ot_get_option('header_top_bg_color').'; color:'.ot_get_option('header_top_text_color').'}';
	$output .= '.very_top_bar p{ color:'.ot_get_option('header_top_text_color').'}';
	$output .= '.navbar > .container .navbar-brand{ margin-top:' . $logo_mar_top['0']. $logo_mar_top['1'] . '; margin-bottom:'.$logo_mergin_bottom[0] . $logo_mergin_bottom[1].' }';
	
	
			
			
			$Display_Custom_Background = get_post_meta($post->ID, 'Display_Custom_Background', true);
			if(!empty($Display_Custom_Background)){$Display_Custom_Background = $Display_Custom_Background;}else{ $Display_Custom_Background = ot_get_option('Display_Custom_Background');}
			//$Display_Custom_Background = ($Display_Custom_Background) ? $Display_Custom_Background : ot_get_option('Display_Custom_Background');
			//print($Display_Custom_Background);
			if($Display_Custom_Background =='on'){
			$background = get_post_meta($post->ID, 'bg_body', true);
			if ( !empty($background)) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			
			
			
			}else{
			$background = ot_get_option('bg_body');
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			
			}
			
			
			$output .= 'body{background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .';}';
			
			
			}else{
			$output .= '#content{background:transparent}';
				
			}
				
				
				
				
	
			$page_margin_top = get_post_meta($post->ID, 'page_margin_top', true);
			if(!empty($page_margin_top)){
			$output .= 'section.main-content-section{padding-top: '.$page_margin_top.';}';
			}else{
				$page_margin_top = ot_get_option('page_margin_top');
				if(!empty($page_margin_top)){
				$output .= 'section.main-content-section{padding-top: '.$page_margin_top.';}';
				}
			}
		
			$page_margin_bottom = get_post_meta($post->ID, 'page_margin_bottom', true);
			if(!empty($page_margin_bottom)){
			$output .= 'section.main-content-section{padding-bottom: '.$page_margin_bottom.';}';
			}else{
			$page_margin_bottom = ot_get_option('page_margin_bottom');
				if(!empty($page_margin_bottom)){
				$output .= 'section.main-content-section{padding-bottom: '.$page_margin_bottom.';}';
				}
			}


			$page_padding_top = get_post_meta($post->ID, 'page_padding_top', true);
			if(!empty($page_padding_top)){
				$output .= 'section.main-content-section #content{padding-top: '.$page_padding_top.';}';
			}else{
				$page_padding_top = ot_get_option('page_padding_top');
				if(!empty($page_padding_top)){
					$output .= 'section.main-content-section #content{padding-top: '.$page_padding_top.';}';
				}
			}
		
			$page_padding_bottom = get_post_meta($post->ID, 'page_padding_bottom', true);
			if(!empty($page_padding_bottom)){
				$output .= 'section.main-content-section #content{padding-bottom: '.$page_padding_bottom.';}';
			}else{
			$page_padding_bottom = ot_get_option('page_padding_bottom');
				if(!empty($page_padding_bottom)){
					$output .= 'section.main-content-section #content{padding-bottom: '.$page_padding_bottom.';}';
				}
			}

			if(function_exists('is_shop') and is_shop()){
				$woo_layout =  ot_get_option('woo_layout');
				if($woo_layout=='2'){
					$output .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{width: 48.10%;}';
					}elseif($woo_layout=='3'){
					$output .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{  width: 30.8%;}';
					}elseif($woo_layout=='4'){
					$output .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{  width: 22.05%;}';
					}else{
					$output .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{  width: 22.05%;}';
						}
				}
			
			
			if(function_exists('is_product_category') || function_exists('is_product_tag')){
			if(is_product_category() || is_product_tag()){
				$woo_layout =  ot_get_option('woo_archive_layout');
				if($woo_layout=='2'){
					$output .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{width: 48.10%;}';
					}elseif($woo_layout=='3'){
					$output .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{ width: 30.8%;}';
					}elseif($woo_layout=='4'){
					$output .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{  width: 22.05%;}';
					}else{
					$output .= '.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{  width: 22.05%;}';
						}
				}
			}
				
				
				
			if(function_exists('is_product') and is_product()){
				$woo_related_product_column =  ot_get_option('woo_related_product_column');
				if($woo_related_product_column=='2'){
					$output .= '.woocommerce .related ul li.product, .woocommerce .related ul.products li.product{width: 48.10%;}';
					}elseif($woo_related_product_column=='3'){
					$output .= '.woocommerce .related ul li.product, .woocommerce .related ul.products li.product{ width: 30.8%;}';
					}elseif($woo_related_product_column=='4'){
					$output .= '.woocommerce .related ul li.product, .woocommerce .related ul.products li.product{  width: 22.05%;}';
					}else{
					$output .= '.woocommerce .related ul li.product, .woocommerce .related ul.products li.product{  width: 22.05%;}';
						}
			}	
				


	$button_Color = ot_get_option('button_Color');
	$show_gradient = ot_get_option('show_gradient');
	$button_Color_2 = ot_get_option('button_Color_2');

	if(!empty($button_Color))
	if($show_gradient){
	$output .= '.btn-default, .btn-primary, .woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{background-color:'.$button_Color.'; background: -webkit-gradient(linear,left bottom,left top,color-stop(0,'.$button_Color.'),color-stop(1,'.$button_Color_2.'));
  background: -ms-linear-gradient(bottom,'.$button_Color.','.$button_Color_2.');
  background: -moz-linear-gradient(center bottom,'.$button_Color.' 0%,'.$button_Color_2.' 100%);
  background: -o-linear-gradient('.$button_Color.','.$button_Color_2.');
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="'.$button_Color.'", endColorstr="'.$button_Color_2.'", GradientType=0);;}';
  
	}else{
	$output .= '.btn-default, .btn-primary, .woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{background-color:'.$button_Color.';}';
	}
	
	$button_Color_hover = ot_get_option('button_Color_hover');
	$button_Color_hover2 = ot_get_option('button_Color_hover2');
	if(!empty($button_Color_hover))
	if($show_gradient){
	$output .= '.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-default, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover{background-color:'.$button_Color_hover.'; background: -webkit-gradient(linear,left bottom,left top,color-stop(0,'.$button_Color_hover.'),color-stop(1,'.$button_Color_hover2.'));
  background: -ms-linear-gradient(bottom,'.$button_Color_hover.','.$button_Color_hover2.');
  background: -moz-linear-gradient(center bottom,'.$button_Color_hover.' 0%,'.$button_Color_hover2.' 100%);
  background: -o-linear-gradient('.$button_Color_hover.','.$button_Color_hover2.');
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="'.$button_Color_hover.'", endColorstr="'.$button_Color_hover2.'", GradientType=0);;}';
	}else{
	$output .= '.btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .btn-primary:hover, .btn-primary:focus, .btn-primary.focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-default, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover{background-color:'.$button_Color_hover.';}';
	}
	
	
	$button_text_color = ot_get_option('button_text_color');
	if(!empty($button_text_color))
	$output .= '.btn-default, .btn-primary, .woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{color:'.$button_text_color.';}';
	
	$button_text_color_hover = ot_get_option('button_text_color_hover');
	if(!empty($button_text_color_hover))
	
	$output .= '.btn-default:hover, .btn-primary:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover{color:'.$button_text_color_hover.';}';

	$button_border_color = ot_get_option('button_border_color');
	if(!empty($button_border_color))
	$output .= '.btn-default, .btn-primary, .woocommerce ul.products li.product .button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{border-color:'.$button_border_color.';}';

	$button_border_color_hover = ot_get_option('button_border_color_hover');
	if(!empty($button_border_color_hover))
	$output .= '.btn-default:hover, .btn-primary:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover{border-color:'.$button_border_color_hover.';}';

	$page_text_color = ot_get_option('page_text_color');
	if(!empty($page_text_color))
	$output .= '.pagination > li > a, .pagination > li > span, .woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span{color:'.$page_text_color.';}';

	$page_hov_bg_color = ot_get_option('page_hov_bg_color');
	if(!empty($page_hov_bg_color))
	$output .= '.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{background-color:'.$page_hov_bg_color.';}';

	$page_hov_txt_color = ot_get_option('page_hov_txt_color');
	if(!empty($page_hov_txt_color))
	$output .= '.pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{color:'.$page_hov_txt_color.';}';

	$page_ac_bg_color = ot_get_option('page_ac_bg_color');
	if(!empty($page_ac_bg_color))
	$output .= '.pagination > .active > a, .pagination > .active > span, .woocommerce nav.woocommerce-pagination ul li span.current{background-color:'.$page_ac_bg_color.'; border-color:'.$page_ac_bg_color.';}';


	$page_ac_tx_color = ot_get_option('page_ac_tx_color');
	if(!empty($page_ac_tx_color))
	$output .= '.pagination > .active > a, .pagination > .active > span, .woocommerce nav.woocommerce-pagination ul li span.current{color:'.$page_ac_tx_color.'; border-color:'.$page_ac_tx_color.';}';


	$page_ac_bg_color_hover = ot_get_option('page_ac_bg_color_hover');
	if(!empty($page_ac_bg_color_hover))
	$output .= '.pagination > .active > a:hover, .pagination > .active > span:hover, .woocommerce nav.woocommerce-pagination ul li span.current:hover{background-color:'.$page_ac_bg_color_hover.'; border-color:'.$page_ac_bg_color_hover.';}';



	$page_ac_hover_tx_color = ot_get_option('page_ac_hover_tx_color');
	if(!empty($page_ac_hover_tx_color))
	$output .= '.pagination > .active > a:hover, .pagination > .active > span:hover, .woocommerce nav.woocommerce-pagination ul li span.current:hover{color:'.$page_ac_hover_tx_color.';}';

  $button_type = ot_get_option('button_type');
  if(!empty($button_type))
  $button_type= $button_type;
  
  $show_gradient = ot_get_option('show_gradient');
	if(!empty($show_gradient)) $show_gradient= $show_gradient;
	if(!empty($button_Color)) $button_Color = $button_Color;
  $button_Color_2 = ot_get_option('button_Color_2');
  if(!empty($button_Color_2)) $button_Color_2 = $button_Color_2;
  if(!empty($button_Color_hover)) $button_Color_hover = $button_Color_hover;
  $button_Color_hover2 = ot_get_option('button_Color_hover2');
  if(!empty($button_Color_hover2)) $button_Color_hover2 = $button_Color_hover2;
				
					
	$output .= 'body.woocommerce #main  h1.page-title{ display:none !important;}';
	$lazy_loader_size = (ot_get_option('lazy_loader_size')) ? ot_get_option('lazy_loader_size') : 'medium';
	$l_icon_color = (ot_get_option('l_icon_color')) ? ot_get_option('l_icon_color') : '#CCC';
	$l_b_color = (ot_get_option('l_b_color')) ? ot_get_option('l_b_color') : '#FFF';
	
	$output .= '.add_loading{background:'.$l_b_color.';}';
	$output .= '.load1 .loader,.load1 .loader:before, .load1 .loader:after, .load1 .loader, .load1 .loader:before, .load1 .loader:after, .load3 .loader:before, .load3 .loader:after{ background: '.$l_icon_color.'; top: 50%;}';
		$output .= '@-webkit-keyframes load1 {0%,  80%,  100% {    box-shadow: 0 0 '.$l_icon_color.';  }  40% {    box-shadow: 0 -2em '.$l_icon_color.';}}';
		
		
		$output .= '@keyframes load1 {0%, 80%,100% {box-shadow: 0 0 '.$l_icon_color.';}40% {box-shadow: 0 -2em'.$l_icon_color.';}}';
		$output .= '.load2 .loader{box-shadow: inset 0 0 0 1em '.$l_icon_color.';}';

	$output .= '.load3 .loader{  background: '.$l_icon_color.';};background: -moz-linear-gradient(left, '.$l_icon_color.' 10%, rgba(255, 255, 255, 0) 42%);background: -webkit-linear-gradient(left, '.$l_icon_color.' 10%, rgba(255, 255, 255, 0) 42%);background: -o-linear-gradient(left, '.$l_icon_color.' 10%, rgba(255, 255, 255, 0) 42%);background: -ms-linear-gradient(left, '.$l_icon_color.' 10%, rgba(255, 255, 255, 0) 42%);background: linear-gradient(to right, '.$l_icon_color.' 10%, rgba(255, 255, 255, 0) 42%);}';
	
		$output .= '@-webkit-keyframes load4 {0%,100% {box-shadow: 0 -3em 0 0.2em '.$l_icon_color.', 2em -2em 0 0em '.$l_icon_color.', 3em 0 0 -1em '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 -1em '.$l_icon_color.', -3em 0 0 -1em '.$l_icon_color.', -2em -2em 0 0 '.$l_icon_color.';}12.5% {box-shadow: 0 -3em 0 0 '.$l_icon_color.', 2em -2em 0 0.2em '.$l_icon_color.', 3em 0 0 0 '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 -1em '.$l_icon_color.', -3em 0 0 -1em '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';}25% {box-shadow: 0 -3em 0 -0.5em '.$l_icon_color.', 2em -2em 0 0 '.$l_icon_color.', 3em 0 0 0.2em '.$l_icon_color.', 2em 2em 0 0 '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 -1em '.$l_icon_color.', -3em 0 0 -1em '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';}37.5% {box-shadow: 0 -3em 0 -1em '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0em 0 0 '.$l_icon_color.', 2em 2em 0 0.2em '.$l_icon_color.', 0 3em 0 0em '.$l_icon_color.', -2em 2em 0 -1em '.$l_icon_color.', -3em 0em 0 -1em #ffffff, -2em -2em 0 -1em '.$l_icon_color.';}50% {box-shadow: 0 -3em 0 -1em '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0 0 -1em '.$l_icon_color.', 2em 2em 0 0em '.$l_icon_color.', 0 3em 0 0.2em '.$l_icon_color.', -2em 2em 0 0 '.$l_icon_color.', -3em 0em 0 -1em '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';}62.5% {box-shadow: 0 -3em 0 -1em '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0 0 -1em '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 0 '.$l_icon_color.', -2em 2em 0 0.2em '.$l_icon_color.', -3em 0 0 0 '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';  }75% {box-shadow: 0em -3em 0 -1em '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0em 0 -1em '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 0 '.$l_icon_color.', -3em 0em 0 0.2em '.$l_icon_color.', -2em -2em 0 0 '.$l_icon_color.';}87.5% {box-shadow: 0em -3em 0 0 '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0 0 -1em '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 0 '.$l_icon_color.', -3em 0em 0 0 '.$l_icon_color.', -2em -2em 0 0.2em '.$l_icon_color.';}}';
		
		$output .='@keyframes load4 {0%,100% {box-shadow: 0 -3em 0 0.2em '.$l_icon_color.', 2em -2em 0 0em '.$l_icon_color.', 3em 0 0 -1em '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 -1em '.$l_icon_color.', -3em 0 0 -1em '.$l_icon_color.', -2em -2em 0 0 '.$l_icon_color.';}12.5% {box-shadow: 0 -3em 0 0 '.$l_icon_color.', 2em -2em 0 0.2em '.$l_icon_color.', 3em 0 0 0 '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 -1em '.$l_icon_color.', -3em 0 0 -1em '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';}25% {box-shadow: 0 -3em 0 -0.5em '.$l_icon_color.', 2em -2em 0 0 '.$l_icon_color.', 3em 0 0 0.2em '.$l_icon_color.', 2em 2em 0 0 '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 -1em '.$l_icon_color.', -3em 0 0 -1em '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';}37.5% {box-shadow: 0 -3em 0 -1em '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0em 0 0 '.$l_icon_color.', 2em 2em 0 0.2em '.$l_icon_color.', 0 3em 0 0em '.$l_icon_color.', -2em 2em 0 -1em '.$l_icon_color.', -3em 0em 0 -1em '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';}50% {box-shadow: 0 -3em 0 -1em '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0 0 -1em '.$l_icon_color.', 2em 2em 0 0em '.$l_icon_color.', 0 3em 0 0.2em '.$l_icon_color.', -2em 2em 0 0 '.$l_icon_color.', -3em 0em 0 -1em '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';}62.5% {box-shadow: 0 -3em 0 -1em '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0 0 -1em '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 0 '.$l_icon_color.', -2em 2em 0 0.2em '.$l_icon_color.', -3em 0 0 0 '.$l_icon_color.', -2em -2em 0 -1em '.$l_icon_color.';}75% {box-shadow: 0em -3em 0 -1em '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0em 0 -1em '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 0 '.$l_icon_color.', -3em 0em 0 0.2em '.$l_icon_color.', -2em -2em 0 0 '.$l_icon_color.';}87.5% {box-shadow: 0em -3em 0 0 '.$l_icon_color.', 2em -2em 0 -1em '.$l_icon_color.', 3em 0 0 -1em '.$l_icon_color.', 2em 2em 0 -1em '.$l_icon_color.', 0 3em 0 -1em '.$l_icon_color.', -2em 2em 0 0 '.$l_icon_color.', -3em 0em 0 0 '.$l_icon_color.', -2em -2em 0 0.2em '.$l_icon_color.';}}@-webkit-keyframes load5 {0%,100% {box-shadow: 0em -2.6em 0em 0em '.$l_icon_color.', 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.5), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7);}12.5% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.7), 1.8em -1.8em 0 0em '.$l_icon_color.', 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5);}25% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.5), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7), 2.5em 0em 0 0em '.$l_icon_color.', 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}37.5% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5), 2.5em 0em 0 0em rgba(255, 255, 255, 0.7), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}50% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.5), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.7), 0em 2.5em 0 0em '.$l_icon_color.', -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}62.5% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.5), 0em 2.5em 0 0em rgba(255, 255, 255, 0.7), -1.8em 1.8em 0 0em '.$l_icon_color.', -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}75% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.5), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.7), -2.6em 0em 0 0em '.$l_icon_color.', -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}87.5% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.5), -2.6em 0em 0 0em rgba(255, 255, 255, 0.7), -1.8em -1.8em 0 0em '.$l_icon_color.';}}@keyframes load5 {0%,100% {box-shadow: 0em -2.6em 0em 0em '.$l_icon_color.', 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.5), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7);}12.5% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.7), 1.8em -1.8em 0 0em '.$l_icon_color.', 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5);}25% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.5), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.7), 2.5em 0em 0 0em '.$l_icon_color.', 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}37.5% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.5), 2.5em 0em 0 0em rgba(255, 255, 255, 0.7), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}50% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.5), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.7), 0em 2.5em 0 0em '.$l_icon_color.', -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.2), -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}62.5% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.5), 0em 2.5em 0 0em rgba(255, 255, 255, 0.7), -1.8em 1.8em 0 0em '.$l_icon_color.', -2.6em 0em 0 0em rgba(255, 255, 255, 0.2), -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}75% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.5), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.7), -2.6em 0em 0 0em '.$l_icon_color.', -1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2);}87.5% {box-shadow: 0em -2.6em 0em 0em rgba(255, 255, 255, 0.2), 1.8em -1.8em 0 0em rgba(255, 255, 255, 0.2), 2.5em 0em 0 0em rgba(255, 255, 255, 0.2), 1.75em 1.75em 0 0em rgba(255, 255, 255, 0.2), 0em 2.5em 0 0em rgba(255, 255, 255, 0.2), -1.8em 1.8em 0 0em rgba(255, 255, 255, 0.5), -2.6em 0em 0 0em rgba(255, 255, 255, 0.7), -1.8em -1.8em 0 0em '.$l_icon_color.';}}@-webkit-keyframes load6 {0% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', 0 -0.83em 0 -0.42em '.$l_icon_color.', 0 -0.83em 0 -0.44em '.$l_icon_color.', 0 -0.83em 0 -0.46em '.$l_icon_color.', 0 -0.83em 0 -0.477em '.$l_icon_color.';}5%,95% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', 0 -0.83em 0 -0.42em '.$l_icon_color.', 0 -0.83em 0 -0.44em '.$l_icon_color.', 0 -0.83em 0 -0.46em '.$l_icon_color.', 0 -0.83em 0 -0.477em '.$l_icon_color.';}10%,59% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', -0.087em -0.825em 0 -0.42em '.$l_icon_color.', -0.173em -0.812em 0 -0.44em '.$l_icon_color.', -0.256em -0.789em 0 -0.46em '.$l_icon_color.', -0.297em -0.775em 0 -0.477em '.$l_icon_color.';}20% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', -0.338em -0.758em 0 -0.42em '.$l_icon_color.', -0.555em -0.617em 0 -0.44em '.$l_icon_color.', -0.671em -0.488em 0 -0.46em '.$l_icon_color.', -0.749em -0.34em 0 -0.477em '.$l_icon_color.';}38% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', -0.377em -0.74em 0 -0.42em '.$l_icon_color.', -0.645em -0.522em 0 -0.44em '.$l_icon_color.', -0.775em -0.297em 0 -0.46em '.$l_icon_color.', -0.82em -0.09em 0 -0.477em '.$l_icon_color.';} 100% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', 0 -0.83em 0 -0.42em '.$l_icon_color.', 0 -0.83em 0 -0.44em '.$l_icon_color.', 0 -0.83em 0 -0.46em '.$l_icon_color.', 0 -0.83em 0 -0.477em '.$l_icon_color.';}}@keyframes load6 {0% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', 0 -0.83em 0 -0.42em '.$l_icon_color.', 0 -0.83em 0 -0.44em '.$l_icon_color.', 0 -0.83em 0 -0.46em '.$l_icon_color.', 0 -0.83em 0 -0.477em '.$l_icon_color.';}5%,95% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', 0 -0.83em 0 -0.42em '.$l_icon_color.', 0 -0.83em 0 -0.44em '.$l_icon_color.', 0 -0.83em 0 -0.46em '.$l_icon_color.', 0 -0.83em 0 -0.477em '.$l_icon_color.';}10%,59% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', -0.087em -0.825em 0 -0.42em '.$l_icon_color.', -0.173em -0.812em 0 -0.44em '.$l_icon_color.', -0.256em -0.789em 0 -0.46em '.$l_icon_color.', -0.297em -0.775em 0 -0.477em '.$l_icon_color.';}20% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', -0.338em -0.758em 0 -0.42em '.$l_icon_color.', -0.555em -0.617em 0 -0.44em '.$l_icon_color.', -0.671em -0.488em 0 -0.46em '.$l_icon_color.', -0.749em -0.34em 0 -0.477em '.$l_icon_color.';}38% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', -0.377em -0.74em 0 -0.42em '.$l_icon_color.', -0.645em -0.522em 0 -0.44em '.$l_icon_color.', -0.775em -0.297em 0 -0.46em '.$l_icon_color.', -0.82em -0.09em 0 -0.477em '.$l_icon_color.';}100% {box-shadow: 0 -0.83em 0 -0.4em '.$l_icon_color.', 0 -0.83em 0 -0.42em '.$l_icon_color.', 0 -0.83em 0 -0.44em '.$l_icon_color.', 0 -0.83em 0 -0.46em '.$l_icon_color.', 0 -0.83em 0 -0.477em '.$l_icon_color.';  }}@-webkit-keyframes load7 {0%,80%,100% {box-shadow: 0 2.5em 0 -1.3em '.$l_icon_color.';}40% {box-shadow: 0 2.5em 0 0 '.$l_icon_color.';}}@keyframes load7 {0%,80%,100% {box-shadow: 0 2.5em 0 -1.3em '.$l_icon_color.';}40% {box-shadow: 0 2.5em 0 0 '.$l_icon_color.';}}';
	
	
	$output .= '</style>';	
	echo $output;
	}