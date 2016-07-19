				<div class="col-sm-3" role="complementary">
                
                    <div id="sidebar1" >
                    	<?php
						$sidebar_select = ot_get_option('sidebar_archive');
						if(!empty($sidebar_select))
						$sidebar_select = $sidebar_select;
						else
						$sidebar_select = 'sidebar-archive';

						?>
                        <?php if ( is_active_sidebar( $sidebar_select ) ) : ?>
    
                            <?php dynamic_sidebar( $sidebar_select ); ?>
    
                        <?php else : ?>
    
                            <!-- This content shows up if there are no widgets defined in the backend. -->
                            
                            <div class="alert alert-message">
                            
                                <p><?php _e("Please activate some Widgets","SimThemes"); ?>.</p>
                            
                            </div>
    
                        <?php endif; ?>
    
                    </div>
                
                </div>