<?php 
if (class_exists('ST_core')) {$ST_core = new ST_core();}
if (class_exists('ST_Portfolio')) {$ST_Portfolio = new ST_Portfolio();}
 get_header(); 
 global $post;
$portfolio_ind_sidebar =  ot_get_option('portfolio_ind_sidebar');

$blog_layout =  ot_get_option('archive_layout');
$Project_Description = (ot_get_option('Project_Description'))?  ot_get_option('Project_Description') :'Project Description';
if($portfolio_ind_sidebar=='no_sidebar'){
	$column = 'col-sm-12';
	}else{
	$column = 'col-sm-9';
		}		
?>
    <section class="main-content-section">
        <div class="container">
			<div id="content" class="clearfix">
				
				
				<?php if($portfolio_ind_sidebar=="left_sidebar") {get_sidebar('portfolio'); } // sidebar 1 ?>
				
            <div id="main" class="<?php echo $column; ?> clearfix" role="main">
					<div class="row clearfix <?php echo $masonry; ?>">
				
				
                
				  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        
                        <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
                        
								<?php get_template_part( 'section/portfolio/content', 'content' );  ?>                                            
                        		<?php 
								$terms = get_the_terms( $post->ID, 'categories-portfolio');
								if(!empty($terms)){
								$arr_term = array();
								foreach($terms as $term){
									$arr_term[] = $term->term_id;
									}
								}
								//print_r($terms);
								$ST_Portfolio->curser_part(array('id'=>$post->ID, 'terms'=>$arr_term)) ?>
                        
                        </article> <!-- end article -->
                        
                <?php //  if(ot_get_option( 'disable_post_comments' )=='on'){ comments_template( '', true ); }  ?>
                        
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

                </div>
            </div>
                
                
                <!-- end #main -->
    
				<?php if($portfolio_ind_sidebar=="right_sidebar") {get_sidebar('portfolio'); } // sidebar 1 ?>
    
			</div> <!-- end #content -->
        </div>  <!-- end container -->
    </section>
<?php get_footer(); ?>