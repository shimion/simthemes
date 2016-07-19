<?php $ST_core = new ST_core(); global $post,  $fixed;  ?>
<header role="banner" class="main-header header-first <?php if(!empty($fixed)) echo $fixed; ?>">
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
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<?php get_template_part( 'section/header/header', 'logo' ); ?>
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