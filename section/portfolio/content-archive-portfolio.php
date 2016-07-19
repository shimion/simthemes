<?php
if (class_exists('ST_core')) {$ST_core = new ST_core();}
$excerpt_full_content =  ot_get_option('excerpt_full_content');
$excerpt_length =  ot_get_option('excerpt_length');
$portfolio_archive_sidebar =  ot_get_option('portfolio_archive_sidebar');
$portfolio_archive_layout =  ot_get_option('portfolio_archive_layout');
$button_type = ot_get_option('button_type');
if($portfolio_archive_sidebar=='no_sidebar'){
	$column = 'col-sm-12';
	}else{
	$column = 'col-sm-9';
		}


if($portfolio_archive_layout=='two_column'){
	$lay_col = 'col-sm-6';
	}elseif($portfolio_archive_layout=='three_column'){
	$lay_col = 'col-sm-4';
	}elseif($portfolio_archive_layout=='four_column'){
	$lay_col = 'col-sm-3';
	}elseif($portfolio_archive_layout=='two_column_grid'){
	$lay_col = 'col-sm-6 item';
	$masonry = 'masonry-container';
	}elseif($portfolio_archive_layout=='three_column_grid'){
	$lay_col = 'col-sm-4 item';
	$masonry = 'masonry-container';
	}elseif($portfolio_archive_layout=='four_column_grid'){
	$lay_col = 'col-sm-3 item';
	$masonry = 'masonry-container';
		}

?>                 
<div id="main" class="<?php echo $column; ?> clearfix" role="main">
					<div class="row clearfix <?php echo $masonry; ?>">
					<?php $i = 0; if (have_posts())  : while (have_posts()) : the_post(); $i++; ?>
					
					
                    <div id="post-<?php the_ID(); ?>" <?php post_class($lay_col.' clearfix scrollimation fade-up'); ?>>
                    <article  role="article">
						
						<header>
						
							<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
							<?php 
							$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' ); $url = $thumb['0'];
							$url_thumb = aq_resize( $url, 600, 380, true,true,true );
							if($portfolio_archive_layout!='one_column'){
							echo '<img class="img-responsive img-center" src="' . $url_thumb . '" alt="">';
							}else{
							echo '<img class="img-responsive img-center" src="' . $url . '" alt="">';
							}
							 ?>
                             
                             </a>
							
							<div class="page-header"><h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1></div>
							
							<!--<p class="meta"><?php _e("Posted", "SimThemes"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "SimThemes"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "SimThemes"); ?> <?php the_category(', '); ?>.</p>-->
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php if($excerpt_full_content=='Excerpt'): ?>
                            <p>
                            <?php
							_e(wp_trim_words(get_the_content(), $excerpt_length), "SimThemes"); 
							?>
                            </p>
                            <a class="btn btn-default button-color" style="background:<?php echo ot_get_option('blog_button_Color'); ?>" href="<?php the_permalink(); ?>"><?php echo ot_get_option('read_more'); ?></a>
                            <?php
							elseif($excerpt_full_content=='Full Content'):  ?>
                            <p>
                            <?php
							the_content();
							?>
                            </p>
                            <a class="btn btn-default button-color <?php echo $button_type; ?>" style="background:<?php echo ot_get_option('blog_button_Color'); ?>" href="<?php the_permalink(); ?>"><?php echo ot_get_option('read_more'); ?></a>
                            <?php
							endif; 
							?>

						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","SimThemes") . ':</span> ', ' ', ''); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					</div>
					
					<?php 
					//fix linie
					if($portfolio_archive_layout=='two_column'){
						if($i%2==0)
						echo '</div><div class="row clearfix">';
					}elseif($portfolio_archive_layout=='three_column'){
						if($i%3==0)
						echo '</div><div class="row clearfix">';
					}elseif($portfolio_archive_layout=='four_column'){
						if($i%4==0)
						echo '</div><div class="row clearfix">';
					}
					 ?>
					<?php endwhile; ?>	
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