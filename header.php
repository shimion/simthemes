<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
				
	</head>
	
	<body <?php body_class(); ?>>
	<?php 
	do_action('start_body'); 
	do_action('start_head'); 
		global $post, $wp_query, $fixed;
		$Display_Header = get_post_meta(get_the_ID(), 'Display_Header', true);

	if($Display_Header=='on' || empty($Display_Header)){
		$header_layout_settings = ot_get_option('header_layout_settings');

		if($header_layout_settings=="first"){
			get_template_part( 'section/header/header', 'first' );
			}elseif($header_layout_settings=="second"){
			get_template_part( 'section/header/header', 'second' );
			}elseif($header_layout_settings=="third"){
			get_template_part( 'section/header/header', 'third' );
			}elseif($header_layout_settings=="fourth"){
			get_template_part( 'section/header/header', 'fourth' );
				
				}
	?>			
        <!-- end header -->
        
	<?php } ?>
		<?php 	do_action('end_head');  ?>

		<?php

		
		
		$show_or_hide_slider_featured = get_post_meta($post->ID, 'show_or_hide_slider_featured', true);
		$select_featured_section_or_slider = get_post_meta($post->ID, 'select_featured_section_or_slider', true);

		if(!empty($show_or_hide_slider_featured)){
		if($show_or_hide_slider_featured='on'){
				if($select_featured_section_or_slider=='slider'){
				get_template_part( 'section/content', 'slider' );
				}elseif($select_featured_section_or_slider=='featured'){
				get_template_part( 'section/content', 'featured' );
				}
			}
		}
		
	do_action('end_slider'); 
		if(is_page() || is_singular())
		get_template_part( 'section/content', 'title-section' );
		elseif(is_singular('portfolio') || is_tax('categories-portfolio') || is_post_type_archive('portfolio'))
		get_template_part( 'section/portfolio/content', 'title-section-portfolio' );
		elseif(function_exists('is_shop') and is_shop())
		get_template_part( 'section/content', 'title-section-woo' );
		else
		get_template_part( 'section/content', 'title-section-blog-archive' );
		 ?>
