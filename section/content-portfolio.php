<?php
if (class_exists('ST_core')) {$ST_core = new ST_core();}
	$Portfolio_sec_title = get_post_meta($post->ID, 'Portfolio_sec_title', true);
	$Portfolio_sec_text = get_post_meta($post->ID, 'Portfolio_sec_text', true);
	$active_category_filter = get_post_meta($post->ID, 'active_category_filter', true);
	$select_column_Portfolio = $ST_core->layout_setting_front_end(get_the_ID(), 'select_column_Portfolio');
	$ind_Portfolio_number = get_post_meta($post->ID, 'ind_Portfolio_number', true);
	$ind_Portfolio_number_load = get_post_meta($post->ID, 'ind_Portfolio_number_load', true);
	$background = get_post_meta($post->ID, 'por_bg', true);
			if ( !empty( $background ) ) {
			$background_color       = ( $background['background-color'] != '' ) ? $background['background-color'] . ' ' : '';
			$background_image       = ( $background['background-image'] != '' ) ? 'url('.$background['background-image'].') ' : '';
			$background_repeat      = ( $background['background-repeat'] != '' ) ? $background['background-repeat']. ' ' : '';
			$background_positon     = ( $background['background-position'] != '' ) ? $background['background-position']. ' ' : '';
			$background_attachment  = ( $background['background-attachment'] != '' ) ? $background['background-attachment']. ' ' : '';
			$background_size        = ( $background['background-size'] != '' ) ? 'background-size: '. $background['background-size']. ';' : '';
			}
     $html .= '<section id="portfolio" class="gray-bg padding-top-bottom" style="background: '.$background_color.$background_image.$background_repeat.$background_attachment.$background_positon.';'."\n". $background_size .'; ">' . "\n";
		
	$html .=  '		<div class="container">' . "\n";
				
	if($Portfolio_sec_title): 
    $html .=  '<h1 class="section-title" id="move-title">' . $Portfolio_sec_title . '</h1>' . "\n";
	endif;
	if($active_category_filter):
	$html .=  '<p class="section-description">' . $Portfolio_sec_text . '</p>' . "\n";
	endif;

    if($active_category_filter):
    $html .=  '            <!--==== Portfolio Filters ====-->' . "\n";
					
	$html .=  '			<div id="filter-works">' . "\n";
				
	$html .=  '				<ul>' . "\n";
	$html .=  '					<li class="active">' . "\n";
	$html .=  '						<a href="#" data-filter="*">All Categories</a>' . "\n";
	$html .=  '					</li>' . "\n";
                        
                        
    $terms = get_terms('categories-portfolio', $args); if($terms): foreach($terms as $term){
                        
                        
	$html .=  '					<li class="">' . "\n";
	$html .=  '						<a href="#" data-filter=".' .$term->slug . '">' . $term->name . '</a>' . "\n";
	$html .=  '					</li>' . "\n";
                        
                        
                        } 
					endif;
						
						
	$html .=  '				</ul>' . "\n";
					
	$html .=  '			</div>' . "\n";
    $html .=  '            <!--End portfolio filters -->' . "\n";	
                endif;
				
	$html .=  '			<div class="projects-container scrollimation in" data-pass="' . $ind_Portfolio_number . '">' . "\n";
				
	$html .=  '				<div class="row" id="portfolio-container-row">' . "\n";
						
						
						$args =array( 'post_type' => 'portfolio', 'posts_per_page' => $ind_Portfolio_number  );
						 query_posts( $args );
						 
						 while (have_posts()) : the_post();
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $thumb['0'];
						$url = aq_resize( $url, 555, 300, true,true,true );
						 $post_term = get_the_terms( $post->ID, 'categories-portfolio'); 
						//print_r($post_term);
						 if($post_term):
						 $class_por ="";
						 foreach($post_term as $termp){
							 $class_por .= $termp->slug .' ';
							 }
						 endif;
						 	
	$html .=  '					<article class="' .$select_column_Portfolio . ' col-sm-6 project-item ' . $class_por . '">' . "\n";
													
	$html .=  '						<div class="project-thumb">' . "\n";
	$html .=  '							<a href="#" class="main-link">' . "\n";
	$html .=  '								<img class="img-responsive img-center" src="' . $url . '" alt="">' . "\n";
	$html .=  '								<h2 class="project-title">' . get_the_title() . '</h2>' . "\n";
	$html .=  '								<span class="overlay-mask"></span>' . "\n";
	$html .=  '							</a>' . "\n";
	$html .=  '							<a class="enlarge cboxElement" href="' . $url . '" title="' . get_the_title() . '"><i class="fa fa-expand fa-fw"></i></a>' . "\n";
	$html .=  '							<a class="link" href="' . get_permalink() . '"><i class="fa fa-eye fa-fw"></i></a>' . "\n";
	$html .=  '						</div><!-- End Thumbnail -->' . "\n";
							
							
	$html .=  '					</article>' . "\n";
						
						endwhile;

    $html .=  '                </div><!-- End Row -->' . "\n";
					
	$html .=  '			</div><!-- End Projects Container -->' . "\n";
				
	$html .=  '			<p class="text-center"><a id="ajax-load"   class="btn btn-simthemes" href="#portfolio" data-column="' .$select_column_Portfolio . '" data-load="' . $ind_Portfolio_number_load . '"><i class="fa fa-plus-circle"></i>Load More</a>' . "\n";
    $html .=  '            <!--<form action="" method="post">' . "\n";
    $html .=  '            	<input type="hidden" name="pass" value="5" />' . "\n";
    $html .=  '                <input id="ajax-load" type="submit" />' . "\n";
    $html .=                 wp_nonce_field( 'ajax-login-nonce', 'security' ); 
    $html .=  '            </form>-->' . "\n";
                
    $html .=  '            </p>' . "\n";
				
	$html .=  '		</div><!-- End container -->' . "\n";
			
	$html .=  '	</section>' . "\n";
	
	echo apply_filters('filter_portfolio_azax_frontend', $html);
