<footer role="contentinfo">

		<div class="container">

				<div class="row">
			
				<div id="inner-footer" class="clearfix">
		          <div id="widget-footer" class="clearfix row">
		            <?php 
					$footer_widget_column = ot_get_option('footer_widget_column');
					if($footer_widget_column == "Four"){
						echo '<div class="col-sm-3 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) :  endif;  
						echo '</div>';
						echo '<div class="col-sm-3 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) :  endif; 
						echo '</div>';
						echo '<div class="col-sm-3 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) :  endif;
						echo '</div>';
						echo '<div class="col-sm-3 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4') ) : endif; 
						echo '</div>';
					}elseif($footer_widget_column == "Three"){
						echo '<div class="col-sm-4 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) :  endif;  
						echo '</div>';
						echo '<div class="col-sm-4 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) :  endif; 
						echo '</div>';
						echo '<div class="col-sm-4 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) :  endif;
						echo '</div>';

					}elseif($footer_widget_column == "Two"){
						echo '<div class="col-sm-6 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) :  endif;  
						echo '</div>';
						echo '<div class="col-sm-6 col-sm-6">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer2') ) :  endif; 
						echo '</div>';
						
					}elseif($footer_widget_column == "One"){
						echo '<div class="col-sm-12 col-sm-12">';
						if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer1') ) :  endif;  
						echo '</div>';						
						}
					?>
		          </div>
					
					
				
				</div> <!-- end #inner-footer -->

            </div> <!--end row -->
		
		</div> <!-- end #container -->
</footer>
<!-- end footer -->
