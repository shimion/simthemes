<?php $Project_Description =  ot_get_option('Project_Description'); ?>
                                        <header>
                                            <div class="page-header"><h4 class="single-title" itemprop="headline"><?php echo $Project_Description; ?></h4></div>
                                        </header> 
                                        <!-- end article header -->
                                    
                                        <section class="post_content clearfix" itemprop="articleBody">
                                            <?php the_content(); ?>
                                        </section> 
                                        <!-- end article section -->
