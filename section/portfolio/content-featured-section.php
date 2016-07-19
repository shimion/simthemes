<?php if (class_exists('ST_Portfolio')) {$ST_Portfolio = new ST_Portfolio();} ?>
					<?php $portfolio_layout =  ot_get_option('portfolio_layout'); ?>
                           <?php if(!empty($portfolio_layout)){ ?>
							   <?php if($portfolio_layout=='half'){ 
								$ST_Portfolio->featured_section(array('id'=>$post->ID, 'width'=>700, 'height'=>800));							   
							   }else{
								$ST_Portfolio->featured_section(array('id'=>$post->ID, 'width'=>1140, 'height'=>500));							   
								 
				}
			}
                ?>