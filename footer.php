<?php 
do_action('before_footer'); 
$Display_footer_widget_area = get_post_meta($post->ID, 'Display_footer_widget_area', true); 

if(!empty($Display_footer_widget_area) and $Display_footer_widget_area=='on'){  
	get_template_part( 'section/content', 'footer' );
}elseif(!empty($Display_footer_widget_area) and $Display_footer_widget_area=='off'){
}else{
$Display_footer_widget_area = ot_get_option('footer_widget_disable');	
if(!empty($Display_footer_widget_area) and $Display_footer_widget_area == 'on'){
	get_template_part( 'section/content', 'footer' );
	}
}


 ?>

<?php
do_action('before_footer_bottom'); 
$footer_bottom_disable = ot_get_option('footer_bottom_disable');	
if($footer_bottom_disable=='on'){
?>
<section class="footer-bottom">
    <div class="container">
         
    	<div class="row">
            <div class="row">
                  <div class="col-sm-6"><p><?php _e( ST_core::option_condition(ot_get_option('copy_right'), '© 2014 SimThemes.  All rights reserved.'), 'SimThemes'); ?></p></div>
                  <div class="col-sm-6">
                  <?php
                                   
					if(ot_get_option('footer_menu_or_social_icon')=='menu'){			   
					wp_nav_menu( 
                                       array( 
                                            'menu' => 'footer_links', /* menu name */
                                           'menu_class' => 'nav footer',
                                           'theme_location' => 'footer_links', /* where in the theme it's assigned */
                                            'container' => 'false', /* container class */
                                            //'fallback_cb' => 'wp_bootstrap_main_nav_fallback', /* menu fallback */
                                            // 'depth' => '2',  suppress lower levels for now 
                                            //'walker' => new ST_menu_walker()
                                       )
                                   );


					}elseif(ot_get_option('footer_menu_or_social_icon')=='social'){
                   _e( ST_core::social_bookmarking(array('size'=>ot_get_option('icon_size'))), 'SimThemes'); 
					}else{
                   _e( 'You can edit this section via Theme option >> Footer setting >> Footer Menu or Social Buttons', 'SimThemes'); 
					}
				   ?>
                </div>
            </div>
    	</div>
    </div>

</section>
<?php } ?>
				
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
	<?php do_action('end_body'); ?>			
		<?php wp_footer(); // js scripts areserted using this function ?>
	</body>

</html>