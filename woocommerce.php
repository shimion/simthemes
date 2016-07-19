<?php 
$ST_core = new ST_core(); get_header(); 
//$woo_layout =  ot_get_option('woo_layout');
global $lay_col;
if(empty($Display_Custom_Background)){
$Display_Custom_Background = ot_get_option('Display_Custom_Background');
	}

if(!empty($Display_Custom_Background) && $Display_Custom_Background=='on'){
	$row = '';
	}else{
	$row = 'row';
	}


if(is_shop()){
		$woo_sidebar =  ot_get_option('woo_sidebar');
		if($woo_sidebar=='no_sidebar'){
			$column = 'col-sm-12';
			}else{
			$column = 'col-sm-9';
				}
}elseif(is_product_category() || is_product_tag()){
		$woo_sidebar =  ot_get_option('woo_archive_sidebar');
		if($woo_sidebar=='no_sidebar'){
			$column = 'col-sm-12';
			}else{
			$column = 'col-sm-9';
				}
}elseif(is_product()){
		$woo_sidebar =  ot_get_option('woo_ind_sidebar');
		if($woo_sidebar=='no_sidebar'){
			$column = 'col-sm-12';
			}else{
			$column = 'col-sm-9';
				}
}else{
			$column = 'col-sm-12';
	
	}

if($woo_layout=='two_column'){
	$lay_col = 'col-sm-6';
	}elseif($woo_layout=='three_column'){
	$lay_col = 'col-sm-4';
	}elseif($woo_layout=='four_column'){
	$lay_col = 'col-sm-3';
	}elseif($woo_layout=='two_column_grid'){
	$lay_col = 'col-sm-6 item';
	$masonry = 'masonry-container';
	}elseif($woo_layout=='three_column_grid'){
	$lay_col = 'col-sm-4 item';
	$masonry = 'masonry-container';
	}elseif($woo_layout=='four_column_grid'){
	$lay_col = 'col-sm-3 item';
	$masonry = 'masonry-container';
		}



		
?>
    <section class="main-content-section">
        <div class="container">
			<div id="content" class="clearfix <?php _e($row); ?>">
            
				<?php 
				if(is_shop()){
				$woo_sidebar =  ot_get_option('woo_sidebar');
				if($woo_sidebar=="left_sidebar") {get_sidebar('woo'); } // sidebar 1
				}elseif(is_product_category() || is_product_tag()){
				$woo_sidebar =  ot_get_option('woo_archive_sidebar');
				if($woo_sidebar=="left_sidebar") {get_sidebar('woo'); } // sidebar 1
				}elseif(is_product()){
				$woo_sidebar =  ot_get_option('woo_ind_sidebar');
				if($woo_sidebar=="left_sidebar") {get_sidebar('woo'); } // sidebar 1
				}
				 ?>
				
            <div id="main" class="<?php echo $column; ?> clearfix" role="main">
					<div class="clearfix <?php echo $masonry; ?>">
                
					<?php woocommerce_content(); ?>
					</div>
            </div>
                
                
                <!-- end #main -->
    
				<?php 
				if(is_shop()){
				$woo_sidebar =  ot_get_option('woo_sidebar');
				if($woo_sidebar=="right_sidebar") {get_sidebar('woo'); } // sidebar 1
				}elseif(is_product_category() || is_product_tag()){
				$woo_sidebar =  ot_get_option('woo_archive_sidebar');
				if($woo_sidebar=="right_sidebar") {get_sidebar('woo'); } // sidebar 1
				}elseif(is_product()){
				$woo_sidebar =  ot_get_option('woo_ind_sidebar');
				if($woo_sidebar=="right_sidebar") {get_sidebar('woo'); } // sidebar 1
				}
				 ?>
    
			</div> <!-- end #content -->
        </div>  <!-- end container -->
    </section>    
<?php get_footer(); ?>