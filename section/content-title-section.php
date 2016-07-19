<?php 
$page_title_bar 	= ( get_post_meta(get_the_ID(), 'page_title_bar', true) ) ? get_post_meta(get_the_ID(), 'page_title_bar', true) : ot_get_option('page_title_bar'); 
 $page_title_bar_custom_text 	= ( get_post_meta(get_the_ID(), 'page_title_bar_custom_text', true) ) ? get_post_meta(get_the_ID(), 'page_title_bar_custom_text', true) : 'off';
$Page_Title_Bar_Custom_Subheader_Text = get_post_meta(get_the_ID(), 'Page_Title_Bar_Custom_Subheader_Text', true);
$Display_Breadcrumbs_Search_Bar =  ot_get_option('Display_Breadcrumbs_Search_Bar');
$Breadcrumbs_or_Search_Box =  ot_get_option('Breadcrumbs_or_Search_Box');

 ?>

<?php if($page_title_bar=='on'){ ?>
<section class="content_title_section" style="width:100%;">
	<div class="container" >
    	<div class="row" style="height:100%; display:table">
        <div class="<?php if($Display_Breadcrumbs_Search_Bar['0']=='yes'){ echo  apply_filters('apply_filter_title_column_class', 'col-sm-6'); }else{ echo  apply_filters('apply_filter_title_column_class', '');  }  ?>" style="vertical-align:middle; display:table-cell; float:none; ">	
           <?php if(function_exists("is_product")):  ?>
            <h1 ><?php  if(!is_product()){if($page_title_bar_custom_text== 'off') the_title(); else echo get_post_meta(get_the_ID(), 'Custom_Title_Text', true);}else{ echo ot_get_option('woo_title');} ?></h1>
           <?php if(!is_product()){if(!empty($Page_Title_Bar_Custom_Subheader_Text)) ?> <p style="margin-bottom:0;"><?php echo $Page_Title_Bar_Custom_Subheader_Text;}else{echo ot_get_option('woo_text');} ?></p>
           <?php else: ?>
            <h1 ><?php  if(get_post_meta(get_the_ID(), 'Custom_Title_Text', true)) { echo get_post_meta(get_the_ID(), 'Custom_Title_Text', true);}else{ echo get_the_title();} ?></h1>
           <?php if(!empty($Page_Title_Bar_Custom_Subheader_Text)){ ?> <p style="margin-bottom:0;"><?php echo $Page_Title_Bar_Custom_Subheader_Text;}else{echo ot_get_option('woo_text');} ?></p>
           <?php endif; ?>
           
        </div>
        <?php
			if($Display_Breadcrumbs_Search_Bar){
		?>		
    	<div class="<?php echo  apply_filters('apply_filter_title_column_class', 'col-sm-6'); ?>" style="vertical-align:middle; display:table-cell; float:none; ">	
            <?php 
				if($Breadcrumbs_or_Search_Box=='breadcrumbses'){
				if(function_exists('ST_Breadcrumb')) ST_Breadcrumb();
				}elseif($Breadcrumbs_or_Search_Box=='search_box'){
				get_template_part( 'section/content', 'search' );	
				}
			
			 ?>
        </div>
        <?php
			}
		?>		
        
        </div>
    </div>
</section>
<style>
	<?php
	$Page_Title_Bar_Height 	= get_post_meta(get_the_ID(), 'Page_Title_Bar_Height', true);
	$Page_Title_Bar_Height_option = ot_get_option('Page_Title_Bar_Height');
	if(!empty($Page_Title_Bar_Height)){
		$output .=".content_title_section > .container{ height:".$Page_Title_Bar_Height['0']. $Page_Title_Bar_Height['1'] ."}";
		}else{
		$output .=".content_title_section > .container{ height:".$Page_Title_Bar_Height_option['0'].$Page_Title_Bar_Height_option['1']."}";
		}
	$page_title_bar = get_post_meta($post->ID, 'page_title_bar', true);
	if($page_title_bar ==false){
	$output .= '.page-header{display:none; }';	
		}

			$background = get_post_meta(get_the_ID(), 'title_background_page', true);
			if ( !empty( $background ) ) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			
			
			
			}else{
			$background = ot_get_option('Title_Background');
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
				
			}
			$output .= '.content_title_section{background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .';}';
			
			$heading_color_m = get_post_meta(get_the_ID(), 'heading_color_m', true);
			if(!empty($heading_color_m)){
			$output .= '.content_title_section h1{color: '.$heading_color_m.';}';
			}else{
			$Heading_Color = ot_get_option('Heading_Color');
			$output .= '.content_title_section h1{color: '.$Heading_Color.';}';
			}
			$Text_Color = get_post_meta(get_the_ID(), 'Text_Color', true);
			if(!empty($Text_Color)){
			$output .= '.content_title_section p{color: '.$Text_Color.';}';
			$output .= '.content_title_section ol.breadcrumb, .breadcrumb > li + li:before{color: '.$Text_Color.';}';
			}else{
			$Text_Color = ot_get_option('Text_Color');
			$output .= '.content_title_section p{color: '.$Text_Color.';}';
			$output .= '.content_title_section ol.breadcrumb, .breadcrumb > li + li:before{color: '.$Text_Color.';}';
			}
			

			$page_title_bar_o = ot_get_option('page_title_bar');
			$page_title_bar = get_post_meta(get_the_ID(), 'page_title_bar', true);
			if ( $page_title_bar=='off' ) {
			$output .= '.content_title_section{display: none;}';
			}elseif($page_title_bar_o=='off'){
			$output .= '.content_title_section{display: none;}';
				
				}else{
			$output .= '.content_title_section{display: block;}';
			}

			

	echo $output;

?>


</style>
<?php

}