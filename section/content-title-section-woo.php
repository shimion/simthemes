<?php 
 //   $Posts_Categorized 	= ot_get_option('Posts_Categorized');

$woo_Display_Breadcrumbs_Search_Bar =  ot_get_option('woo_Display_Breadcrumbs_Search_Bar');
$woo_Breadcrumbs_or_Search_Box =  ot_get_option('woo_Breadcrumbs_or_Search_Box');
$woo_title = ot_get_option('woo_title');
$woo_text = ot_get_option('woo_text') ;
 ?>

<section class="content_title_section" style="width:100%;">
	<div class="container" >
    	<div class="row" style="height:100%; display:table">
        <div class="<?php if(!empty($woo_Breadcrumbs_or_Search_Box) and $woo_Breadcrumbs_or_Search_Box['0']=='yes'){ echo  apply_filters('apply_filter_title_column_class', 'col-sm-6'); }else{ echo  apply_filters('apply_filter_title_column_class', '');  }  ?>" style="vertical-align:middle; display:table-cell; float:none; ">	
			<?php if (function_exists('is_shop') and is_shop()) { ?>
            <h1><?php echo $woo_title; ?></h1>
			<?php } elseif (function_exists('is_product_category') and is_product_category()) { ?>
            <h1><?php woocommerce_page_title(); ?></h1>
            <?php } ?>
            
            
            
           <?php if(function_exists('is_shop') and is_shop()){?><p style="margin-bottom:0;"><?php echo $woo_text; ?></p> <?php } ?>
        </div>
        <?php if(!empty($woo_Breadcrumbs_or_Search_Box) and $woo_Breadcrumbs_or_Search_Box=='yes'){ ?>
    	<div class="<?php echo  apply_filters('apply_filter_title_column_class', 'col-sm-6'); ?>" style="vertical-align:middle; display:table-cell; float:none; ">	
            <?php 
			if(function_exists('is_woocommerce') and is_woocommerce()){
					if($woo_Display_Breadcrumbs_Search_Bar){
						if($woo_Breadcrumbs_or_Search_Box=='breadcrumbses'){
						if(function_exists('ST_Breadcrumb')) ST_Breadcrumb();
						}elseif($woo_Display_Breadcrumbs_Search_Bar=='search_box'){
						get_template_part( 'section/content', 'search' );	
						}
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
	
	if(function_exists('is_woocommerce') and is_woocommerce()){
	
	$woo_Bar_Height = ot_get_option('woo_Bar_Height');
	if(!empty($woo_Bar_Height)){
		$output .=".content_title_section > .container{ height:".$woo_Bar_Height['0']. $woo_Bar_Height['1'] ."}";
		}
		
		

			$background = ot_get_option('woo_Title_Background');
			if ( !empty( $background ) ) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			
			
			
			}
			$output .= '.content_title_section{background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .';}';
			
			$heading_color_m = ot_get_option('woo_Heading_Color');
			if(!empty($heading_color_m)){
			$output .= '.content_title_section h1{color: '.$heading_color_m.';}';
			}
			$Text_Color = ot_get_option('woo_Text_Color');
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
	
	}
	

?>


</style>
