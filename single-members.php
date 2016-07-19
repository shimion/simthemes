<?php get_header();
global $post;

 ?>
    <section class="main-content-section">
		<div class="container">
			
			<div id="content" class="clearfix">
				<div  class="col-sm-5 clearfix">
                	<div class="featured-img">
					<?php 
					$post_image = aq_resize( get_post_meta($post->ID, 'clinet_image', true) , 445, 330, true,true,true );  ?>
                    <img class="img-responsive img-center" src="<?php echo $post_image; ?>" alt="">
                    </div>
                </div>
				<div id="main" class="col-sm-7 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post();
					$designation = get_post_meta($post->ID, 'designation_m', true); 
					$email = get_post_meta($post->ID, 'email_m', true); 
					$twitter = get_post_meta($post->ID, 'twitter', true); 
					$facebook = get_post_meta($post->ID, 'facebook', true); 
					$linkedin = get_post_meta($post->ID, 'linkedin', true); 

					
					 ?>
					
					
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
					
						<section class="post_content clearfix" itemprop="articleBody">
							<div class="page-header" style="display:block">
                            <h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>
                            <?php if(!empty($designation)){ ?><p class="mem_deg"><?php echo $designation; ?></p><?php } ?>
                            </div>
							<div class="member-details">
                                
                                <ul class="member-socials">
                                    <?php if($email): ?><li><a href="mailto:<?php echo $email; ?>" target="_blank"><i class="fa fa-envelope fa-fw"></i></a></li><?php endif; ?>
                                    <?php if($twitter): ?><li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter fa-fw"></i></a></li><?php endif; ?>
                                    <?php if($facebook): ?><li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook fa-fw"></i></a></li><?php endif; ?>
                                    <?php if($linkedin): ?><li><a href="<?php echo $linkedin; ?>" target="_blank"><i class="fa fa-linkedin fa-fw"></i></a></li><?php endif; ?>
                                </ul>
                            </div>
							<?php the_content(); ?>
							
							<?php wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","SimThemes") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","SimThemes"); ?></a>
							<?php } ?>
							
						</footer> <!-- end article footer -->
					
					</article> 
                    
                    
                    <!-- end article -->
					
            <?php  if(ot_get_option( 'disable_post_comments' )=='on'){ comments_template( '', true ); }  ?>
					
					<?php endwhile; ?>			
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "SimThemes"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "SimThemes"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php // get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
        </div>  <!-- end container -->
    </section>    

<?php get_footer(); ?>