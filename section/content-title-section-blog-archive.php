<?php 
 $blog_title 	= ot_get_option('blog_title');
  $blog_text 	= ot_get_option('blog_text');
 //   $Posts_Categorized 	= ot_get_option('Posts_Categorized');

$blog_Display_Breadcrumbs_Search_Bar =  (ot_get_option('blog_Display_Breadcrumbs_Search_Bar'))? ot_get_option('blog_title') : 'no' ;
$blog_Breadcrumbs_or_Search_Box =  (ot_get_option('blog_Breadcrumbs_or_Search_Box'))?ot_get_option('blog_Breadcrumbs_or_Search_Box') : 'breadcrumbses' ;
 ?>

<section class="content_title_section" style="width:100%;">
	<div class="container" >
    	<div class="row" style="height:100%; display:table">
        <div class="<?php if(!empty($blog_Breadcrumbs_or_Search_Box) and $blog_Breadcrumbs_or_Search_Box['0']=='yes'){ echo  apply_filters('apply_filter_title_column_class', 'col-sm-6'); }else{ echo  apply_filters('apply_filter_title_column_class', '');  }  ?>" style="vertical-align:middle; display:table-cell; float:none; ">	
			<?php if (is_category()) { ?>
            <h1><?php single_cat_title(); ?></h1>
			<?php } elseif (is_tag()) { ?> 
            <h1><?php single_tag_title(); ?></h1>
			<?php } elseif (is_author()) { ?>
            <h1><?php get_the_author_meta('display_name'); ?></h1>
			<?php } elseif (is_day()) { ?>
            <h1><?php the_time('l, F j, Y'); ?></h1>
			<?php } elseif (is_month()) { ?>
            <h1><?php the_time('F Y'); ?></h1>
			<?php } elseif (is_year()) { ?>
            <h1><?php the_time('Y'); ?></h1>
			<?php } elseif (is_404()) { ?>
            <h1><?php echo esc_attr('Error 404 - Article Not Found'); ?></h1>
			<?php } elseif (function_exists('is_product_category') and is_product_category()) { ?>
            <h1><?php woocommerce_page_title(); ?></h1>
            <?php }else{ ?>
            <h1><?php echo $blog_title; ?></h1>
            <?php } ?>
            
            
            
           <?php if (is_category() || is_tag() || is_author() || is_day() || is_month() || is_year()) { }elseif(function_exists('is_product_category') and is_product_category()){?><p style="margin-bottom:0;"><?php echo $woo_text; ?></p> <?php }elseif(function_exists('is_product_tag') and is_product_tag()){}elseif( function_exists('is_product_category') and is_product_category()){}else{?> 
           <?php if(!empty($blog_text)){ ?> <p style="margin-bottom:0;"><?php echo $blog_text; ?></p> <?php } ?>
           <?php } ?>
        </div>
        <?php if(!empty($blog_Breadcrumbs_or_Search_Box) and $blog_Breadcrumbs_or_Search_Box=='yes'){ ?>
    	<div class="<?php echo  apply_filters('apply_filter_title_column_class', 'col-sm-6'); ?>" style="vertical-align:middle; display:table-cell; float:none; ">	
            <?php 
			if($blog_Display_Breadcrumbs_Search_Bar){
				if($blog_Breadcrumbs_or_Search_Box=='breadcrumbses'){
				if(function_exists('ST_Breadcrumb')) ST_Breadcrumb();
				}elseif($blog_Breadcrumbs_or_Search_Box=='search_box'){
				get_template_part( 'section/content', 'search' );	
				}
			}
			
			 ?>
        </div>
        <?php } ?>
        </div>
    </div>
</section>
<style>
	<?php
	

	$blog_Bar_Height = ot_get_option('blog_Bar_Height');
	if(!empty($blog_Bar_Height)){
		$output .=".content_title_section > .container{ height:".$blog_Bar_Height['0']. $blog_Bar_Height['1'] ."}";
		
		}
		
		

			$background = ot_get_option('blog_Title_Background');
			if ( !empty( $background ) ) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			
			
			
			}
			$output .= '.content_title_section{background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .';}';
			
			$heading_color_m = ot_get_option('blog_Heading_Color');
			if(!empty($heading_color_m)){
			$output .= '.content_title_section h1{color: '.$heading_color_m.';}';
			}
			$Text_Color = ot_get_option('blog_Text_Color');
			if(!empty($Text_Color)){
			$output .= '.content_title_section p{color: '.$Text_Color.';}';
			$output .= '.content_title_section ol.breadcrumb, .breadcrumb > li + li:before{color: '.$Text_Color.';}';
			}
			

			/*$page_title_bar_o = ot_get_option('page_title_bar');
			$page_title_bar = get_post_meta(get_the_ID(), 'page_title_bar', true);
			if ( $page_title_bar=='off' ) {
			$output .= '.content_title_section{display: none;}';
			}elseif($page_title_bar_o=='off'){
			$output .= '.content_title_section{display: none;}';
				
				}else{
			$output .= '.content_title_section{display: block;}';
			}*/

			

	echo $output;

?>


</style>
