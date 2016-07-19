<?php
if (class_exists('ST_core')) {$ST_core = new ST_core();}
get_header(); 



$excerpt_full_content =  ot_get_option('excerpt_full_content');
$excerpt_length =  ot_get_option('excerpt_length');
$portfolio_archive_sidebar =  ot_get_option('portfolio_archive_sidebar');
$portfolio_archive_layout =  ot_get_option('portfolio_archive_layout');
if($portfolio_archive_sidebar=='no_sidebar'){
	$column = 'col-sm-12';
	}else{
	$column = 'col-sm-9';
		}


if($portfolio_archive_layout=='two_column'){
	$lay_col = 'col-sm-6';
	}elseif($portfolio_archive_layout=='three_column'){
	$lay_col = 'col-sm-4';
	}elseif($portfolio_archive_layout=='four_column'){
	$lay_col = 'col-sm-3';
	}elseif($portfolio_archive_layout=='two_column_grid'){
	$lay_col = 'col-sm-6 item';
	$masonry = 'masonry-container';
	}elseif($portfolio_archive_layout=='three_column_grid'){
	$lay_col = 'col-sm-4 item';
	$masonry = 'masonry-container';
	}elseif($portfolio_archive_layout=='four_column_grid'){
	$lay_col = 'col-sm-3 item';
	$masonry = 'masonry-container';
		}

$Display_Custom_Background = ot_get_option('Display_Custom_Background');
if(!empty($Display_Custom_Background) && $Display_Custom_Background=='off'){
	$row = 'row';
	}

?>                 
    <section class="main-content-section">
        <div class="container">
			<div id="content" class="clearfix <?php echo $row; ?>">
				<?php if($blog_sidebar=="left_sidebar") {get_sidebar('portfolio'); } // sidebar 1 ?>
				
                
                <?php 
				get_template_part( 'section/portfolio/content', 'archive-portfolio' );
				 ?>

                
                
                <!-- end #main -->
    
				<?php if($blog_sidebar=="right_sidebar") {get_sidebar('portfolio'); } // sidebar 1 ?>
    
			</div> <!-- end #content -->
        </div>  <!-- end container -->
    </section>    
<?php get_footer(); ?>