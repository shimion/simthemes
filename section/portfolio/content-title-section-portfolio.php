<?php 

$portfolio_Display_Breadcrumbs_Search_Bar =  ot_get_option('portfolio_Display_Breadcrumbs_Search_Bar');
$portfolio_Breadcrumbs_or_Search_Box =  ot_get_option('portfolio_Breadcrumbs_or_Search_Box');
 ?>

<section class="content_title_section" style="width:100%;">
	<div class="container" >
    	<div class="row" style="height:100%; display:table">
        <div class="col-sm-6" style="vertical-align:middle; display:table-cell; float:none; ">	
			<?php if (is_post_type_archive('portfolio')) { ?>
            <h1><?php post_type_archive_title(); ?></h1>
			<?php } elseif (is_tax('categories-portfolio')) { ?>
            <h1><?php single_cat_title(); ?></h1>
            <?php }else{ ?>
            <h1><?php the_title(); ?></h1>
            <?php } ?>
            
        </div>
    	<div class="col-sm-6 " style="vertical-align:middle; display:table-cell; float:none; ">	
            <?php 
					if(!empty($portfolio_Display_Breadcrumbs_Search_Bar)){
						if($portfolio_Breadcrumbs_or_Search_Box=='breadcrumbses'){
						if(function_exists('ST_Breadcrumb')) ST_Breadcrumb();
						}elseif($portfolio_Display_Breadcrumbs_Search_Bar=='search_box'){
						get_template_part( 'section/content', 'search' );	
						}
					}
			
			 ?>
        </div>
        </div>
    </div>
</section>
<style>
	<?php
	

	$portfolio_Bar_Height = ot_get_option('portfolio_Bar_Height');
	if(!empty($portfolio_Bar_Height)){
		$output .=".content_title_section > .container{ height:".$portfolio_Bar_Height['0']. $portfolio_Bar_Height['1'] ."}";
		}
		
		

			$background = ot_get_option('portfolio_Title_Background');
			if ( !empty( $background ) ) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			
			
			
			}
			$output .= '.content_title_section{background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .';}';
			
			$heading_color_m = ot_get_option('portfolio_Heading_Color');
			if(!empty($heading_color_m)){
			$output .= '.content_title_section h1{color: '.$heading_color_m.';}';
			}
			$Text_Color = ot_get_option('portfolio_Text_Color');
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
