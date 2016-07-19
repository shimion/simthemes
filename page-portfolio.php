<?php
/*
Template Name: Portfolio Page Template
*/

if (class_exists('ST_core')) {$ST_core = new ST_core();}
get_header(); 
$excerpt_full_content =  get_post_meta($post->ID, 'excerpt_full_content', true);
$excerpt_length =  get_post_meta($post->ID, 'excerpt_length', true);
$portfolio__sidebar =  get_post_meta($post->ID, 'portfolio__sidebar', true);
$portfolio__layout = get_post_meta($post->ID, 'portfolio__layout', true);
if($portfolio__sidebar=='no_sidebar'){
	$column = 'col-sm-12';
	}else{
	$column = 'col-sm-9';
		}


if($portfolio__layout=='two_column'){
	$lay_col = 'col-sm-6';
	}elseif($portfolio__layout=='three_column'){
	$lay_col = 'col-sm-4';
	}elseif($portfolio__layout=='four_column'){
	$lay_col = 'col-sm-3';
	}elseif($portfolio__layout=='two_column_grid'){
	$lay_col = 'col-sm-6 item';
	$masonry = 'masonry-container';
	}elseif($portfolio__layout=='three_column_grid'){
	$lay_col = 'col-sm-4 item';
	$masonry = 'masonry-container';
	}elseif($portfolio__layout=='four_column_grid'){
	$lay_col = 'col-sm-3 item';
	$masonry = 'masonry-container';
		}
$Display_Custom_Background = get_post_meta($post->ID, 'Display_Custom_Background', true);
if(!empty($Display_Custom_Background) && $Display_Custom_Background=='off'){
	$row = 'row';
	}

?>                 
    <section class="main-content-section">
        <div class="container">
			<div id="content" class="clearfix <?php echo $row; ?>">
				<?php if($portfolio__sidebar=="left_sidebar") {get_sidebar('portfolio'); } // sidebar 1 ?>
				
                
                <?php 
				get_template_part( 'section/portfolio/content', 'page-portfolio' );
				 ?>

                
                
                <!-- end #main -->
    
				<?php if($portfolio__sidebar=="right_sidebar") {get_sidebar('portfolio'); } // sidebar 1 ?>
    
			</div> <!-- end #content -->
        </div>  <!-- end container -->
    </section>    
<?php get_footer(); ?>