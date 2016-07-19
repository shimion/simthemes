<div class="very_top_bar">
            	<div class="container">
                	<div class="row">
                	<div class="col-sm-6 left-section">
                    	<?php
						//$Display_Header_Top_Left =  ot_get_option('Display_Header_Top_Left');
						$header_top_left =  ot_get_option('header_top_left');
						$header_top_left_text =  ot_get_option('header_top_left_text');
						//if($Display_Header_Top_Left){
								if($header_top_left=='search'){
								 get_template_part( 'section/content', 'search' ); 
								}elseif($header_top_left=='social'){
								 _e( ST_core::social_bookmarking(array('size'=>ot_get_option('icon_size'))), 'SimThemes'); 
								}elseif($header_top_left=='custom_text'){
								 _e( '<p>' .$header_top_left_text. '</p>', 'SimThemes'); 
								}elseif($header_top_left=='widget_header_left_top'){
									 if ( is_active_sidebar( 'header_left_top' ) ) : 
				
										 dynamic_sidebar( 'header_left_top' ); 
				
									 endif; 
								}
					//	}
						 ?>

                    </div>
                	<div class="col-sm-6 right-section">
                         <?php
						//$Display_Header_Top_Right =  ot_get_option('Display_Header_Top_Right');
						$header_top_right =  ot_get_option('header_top_right');
						$header_top_right_text =  ot_get_option('header_top_right_text');
						//if($Display_Header_Top_Right){
								if($header_top_right=='search'){
								 get_template_part( 'section/content', 'search' ); 
								}elseif($header_top_right=='social'){
								 _e( ST_core::social_bookmarking(array('size'=>ot_get_option('icon_size'))), 'SimThemes'); 
								}elseif($header_top_right=='custom_text'){
								 _e( '<p>' .$header_top_right_text. '</p>', 'SimThemes'); 
								}elseif($header_top_right=='widget_header_right_top'){
									 if ( is_active_sidebar( 'header_right_top' ) ) : 
				
										 dynamic_sidebar( 'header_right_top' ); 
				
									 endif; 
								}
					//	}
						 ?>

                    </div>
                    </div>
                </div>
            </div>