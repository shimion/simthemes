
<?php

if (class_exists('ST_core')) {$ST_core = new ST_core();}
$excerpt_full_content =  ot_get_option('excerpt_full_content');
$excerpt_length_blog =  ot_get_option('excerpt_length_blog');
$blog_layout =  ot_get_option('archive_layout');
$blog_sidebar =  ot_get_option('archive_sidebar');
  $button_type = ot_get_option('button_type');

if($blog_sidebar=='no_sidebar'){
	$column = 'col-sm-12';
	}else{
	$column = 'col-sm-9';
		}

?>                    <div id="main" class="<?php echo $column; ?> clearfix" role="main">
					<div class="row clearfix">
					<ul class="timeline">
                    <?php  $i = 0; if (have_posts())  : while (have_posts()) : the_post(); $i++;
					
					 ?>
                        <li <?php if($i%2==0) echo 'class="timeline-inverted scrollimation fade-right"'; else echo 'class="scrollimation fade-left"'; ?>>
                            <div class="timeline-badge primary"><i class="fa fa-circle-o-notch"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <?php
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $thumb['0'];
							$url_thumb = aq_resize( $url, 600, 380, true,true,true );
							if($url){
							echo '<img class="img-responsive" src="' . $url_thumb . '" alt="">';
							}

									?>
                                </div>
                                <div class="timeline-body text-justify">
                                    <h2 class="font-light"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" style=" <?php if(!empty($title_size_ind)){echo 'font-size:'.$title_size_ind['0'].$title_size_ind['1'];} ?>; "><?php the_title() ?></a></h2>
                                    <p><?php if($excerpt_full_content=='Excerpt'):_e(wp_trim_words(get_the_content(), $excerpt_length_blog), "SimThemes"); else: the_content(); endif; ?></p>
                                    <a class="btn btn-default button-color <?php echo $button_type; ?>" style="background:<?php echo ot_get_option('blog_button_Color'); ?>" href="<?php the_permalink(); ?>"><?php echo ot_get_option('read_more'); ?></a>
                                </div>
                                <div class="timeline-footer">
                                    <ul class="list-unstyled list-inline blog-info">
                                        <li><i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?></li>
                                        <li><i class="fa fa-comments-o"></i> <a ><?php comments_number(); ?></a></li>
                                    </ul>
                                    <!--<a class="likes" href="#"><i class="fa fa-heart"></i>239</a>-->
                                </div>
                            </div>
                        </li>
                    <?php endwhile;  ?>    
                        
                        
                        
                        
                        
            <li class="clearfix" style="float: none;"></li>
        </ul>
					
					</div>
					<?php   if (method_exists($ST_core,'ST_page_navi')) { // if expirimental feature is active ?>
						
						<?php $ST_core->ST_page_navi(); // use the page navi function ?>

					<?php } else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="row wp-prev-next">
							<ul class="pager">
								<li class="previous"><?php next_posts_link(_e('&laquo; Older Entries', "SimThemes")) ?></li>
								<li class="next"><?php previous_posts_link(_e('Newer Entries &raquo;', "SimThemes")) ?></li>
							</ul>
						</nav>
					<?php } ?>
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "SimThemes"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "SimThemes"); ?></p>
					    </section>
                            <footer>
                
                                <?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","SimThemes") . ':</span> ', ' ', '</p>'); ?>
                                
                                <?php 
                                // only show edit button if user has permission to edit posts
                                if( $user_level > 0 ) { 
                                ?>
                                <a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","SimThemes"); ?></a>
                                <?php } ?>
                                
                            </footer>					
                        </article>
					
					<?php endif; ?>
			
				</div>