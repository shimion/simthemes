<?php 
	$Project_Details =  ot_get_option('Project_Details');
	$skills_needed = get_post_meta($post->ID, 'skills_needed', true);
	$project_url = get_post_meta($post->ID, 'project_url', true);
	$copyright = get_post_meta($post->ID, 'copyright', true);
	$cat = get_the_terms( get_the_ID(), 'categories-portfolio' );
 ?>
 				<div class="portfolio_details">
                                            <header>
                                                <div class="page-header">
                                                    <h4 class="single-title" itemprop="headline"><?php echo $Project_Details; ?></h4>
                                                </div>
                                            </header>
                                            <?php if(!empty($skills_needed)): ?>
                                            <h5><?php echo translate('Skills Needed:',  "SimThemes") ?></h5>
                                            <p><?php echo $skills_needed; ?></p>
                                            <?php endif; ?>
                                            <?php if(!empty($cat)): ?>
                                            <h5><?php echo translate('Categories:',  "SimThemes") ?></h5>
                                            <p>
                                            <?php $i = 0; 	
											foreach($cat as $c){ $i++;
													if($i==1){echo '<a href="'.get_site_url().'/portfolio/'.$c->slug.'">'.$c->name . '</a>';}else{echo ', '. '<a href="'.get_site_url().'/portfolio/'.$c->slug.'">'.$c->name . '</a>';}
													}
											 ?>
                                            </p>
                                            <?php endif; ?>
                                            <?php if(!empty($project_url)): ?>
                                            <h5><?php echo translate('Project URL:',  "SimThemes") ?></h5>
                                            <p><?php echo $project_url ; ?></p>
                                            <?php endif; ?>
			</div>