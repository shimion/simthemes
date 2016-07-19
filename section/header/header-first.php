<?php $ST_core = new ST_core(); global $post, $fixed;  ?>
<header role="banner" class="main-header header-first <?php if(!empty($fixed)) echo $fixed; ?>">
            
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
						<?php // wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
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