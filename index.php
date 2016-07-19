<?php 
$ST_core = new ST_core(); get_header(); 
$blog_sidebar =  ot_get_option('blog_sidebar');
$blog_layout =  ot_get_option('blog_layout');
$Display_Custom_Background = ot_get_option('Display_Custom_Background');
if(!empty($Display_Custom_Background) && $Display_Custom_Background=='off'){
	$row = 'row';
	}


if($blog_sidebar=='no_sidebar'){
	$column = 'col-sm-12';
	}else{
	$column = 'col-sm-9';
		}


if($blog_layout=='two_column'){
	$lay_col = 'col-sm-6';
	}elseif($blog_layout=='three_column'){
	$lay_col = 'col-sm-4';
	}elseif($blog_layout=='four_column'){
	$lay_col = 'col-sm-3';
	}elseif($blog_layout=='two_column_grid'){
	$lay_col = 'col-sm-6 item';
	$masonry = 'masonry-container';
	}elseif($blog_layout=='three_column_grid'){
	$lay_col = 'col-sm-4 item';
	$masonry = 'masonry-container';
	}elseif($blog_layout=='four_column_grid'){
	$lay_col = 'col-sm-3 item';
	$masonry = 'masonry-container';
		}



		
?>
    <section class="main-content-section blog-multiple">
        <div class="container">
			<div id="content" class="clearfix <?php echo $row; ?>">
				<?php if($blog_sidebar=="left_sidebar") {get_sidebar('blog'); } // sidebar 1 ?>
				
                
                <?php 
				if($blog_layout=="time_line"){
				get_template_part( 'section/content', 'blog-timeline' );
				}else{
				get_template_part( 'section/content', 'blog-basic' );
				}
				 ?>

                
                
                <!-- end #main -->
    
				<?php if($blog_sidebar=="right_sidebar") {get_sidebar('blog'); } // sidebar 1 ?>
    
			</div> <!-- end #content -->
        </div>  <!-- end container -->
    </section>    
<?php get_footer(); ?>