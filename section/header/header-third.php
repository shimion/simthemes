<?php $ST_core = new ST_core(); global $post,  $fixed;  ?>
<header role="banner" class="main-header header-third <?php if(!empty($fixed)) echo $fixed; ?>">
        	<?php 
			if(get_post_meta(get_the_ID(), 'show_header_top', true)=='on'){
				get_template_part( 'section/header/header', 'top' );    
			}elseif(get_post_meta($post->ID, 'show_header_top', true)=='off'){ 
			
			}elseif(ot_get_option('header_top')=='show'){ 
				get_template_part( 'section/header/header', 'top' );    
			}
			?>
            
			<div class="navbar navbar-default header-height">
				<div class="container">
          
					<div class="navbar-header">
						<?php get_template_part( 'section/header/header', 'logo' ); ?>
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php
                                                $Display_Header_Right =  ot_get_option('Display_Header_Right');
                                                $header_right =  ot_get_option('header_right');
                                                $header_custom_text_right =  ot_get_option('header_custom_text_right');
                                                if(!empty($Display_Header_Right) and $Display_Header_Right=='on' ){
                                                    echo '<div class="header_right">';
                                                        echo '<div class="header_right_inner">';
                                                        if($header_right=='search'){
                                                         get_template_part( 'section/content', 'search' ); 
                                                        }elseif($header_right=='social'){
                                                         _e( ST_core::social_bookmarking(array('size'=>ot_get_option('icon_size'))), 'SimThemes'); 
                                                        }elseif($header_right=='custom_text'){
                                                         _e( '<p>' .$header_custom_text_right. '</p>', 'SimThemes'); 
                                                        }elseif($header_right=='widget_header_right'){
                                                             if ( is_active_sidebar( 'header_right' ) ) : 
                                        
                                                                 dynamic_sidebar( 'header_right' ); 
                                        
                                                             endif; 
                                                        }
                                                        echo '</div>';
                                                    echo '</div>';
                                                }
                        ?>                        

						                        
                        
					</div>













				</div> <!-- end .container -->
			</div>
            
            
            
            
			<div class="navbar navbar-default seperate-menu-section">
				<div class="container">
          
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

					</div>


					<div class="collapse navbar-collapse navbar-responsive-collapse">
                        <?php
							if (is_category()|| is_tag()|| is_author()) {
								$id = NULL;
							}else{
								$id = get_the_ID();
							}	
							$ST_core->ST_menu(array('id' =>$id));
						?>
                        
                        
					</div>










				</div> <!-- end .container -->
			</div> <!-- end .navbar -->
		</header>