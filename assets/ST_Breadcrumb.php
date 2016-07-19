<?php
if(!function_exists('ST_Breadcrumb')):
function ST_Breadcrumb() {
		global $post;
		echo '<ol class="breadcrumb">';

		 if ( !is_front_page() ) {
		echo '<li><a href="';
		echo home_url();
		echo '">'.__('Home', 'Avada');
		echo "</a></li>";
		}

		$params['link_none'] = '';
		$separator = '';

		if (is_category() && !is_singular('portfolio')) {
			$category = get_the_category();
			$ID = $category[0]->cat_ID;
			echo is_wp_error( $cat_parents = get_category_parents($ID, TRUE, '', FALSE ) ) ? '' : '<li>'.$cat_parents.'</li>';
		}

		if(is_singular('portfolio')) {
			echo get_the_term_list($post->ID, 'categories-portfolio', '<li>', '&nbsp;/&nbsp;&nbsp;', '</li>');
			echo '<li>'.get_the_title().'</li>';
		}

		if(is_singular('event')) {
			$terms = get_the_term_list($post->ID, 'event-categories', '<li>', '&nbsp;/&nbsp;&nbsp;', '</li>');
			if( ! is_wp_error( $terms ) ) {
				echo get_the_term_list($post->ID, 'event-categories', '<li>', '&nbsp;/&nbsp;&nbsp;', '</li>');
			}
			echo '<li>'.get_the_title().'</li>';
		}

		if (is_tax()) {
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			echo '<li>'.$term->name.'</li>';
		}

		if(is_home()) { echo '<li>'.$smof_data['blog_title'].'</li>'; }
		if(is_page() && !is_front_page()) {
			$parents = array();
			$parent_id = $post->post_parent;
			while ( $parent_id ) :
				$page = get_page( $parent_id );
				if ( $params["link_none"] )
					$parents[]  = get_the_title( $page->ID );
				else
					$parents[]  = '<li><a href="' . get_permalink( $page->ID ) . '" title="' . get_the_title( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a></li>' . $separator;
				$parent_id  = $page->post_parent;
			endwhile;
			$parents = array_reverse( $parents );
			echo join( '', $parents );
			echo '<li>'.get_the_title().'</li>';
		}
		
		if(is_single() && !is_singular('portfolio')  && ! is_singular('tribe_events') && !is_singular('event') && !is_singular('wpfc_sermon')) {
			$categories_1 = get_the_category($post->ID);
			if($categories_1):
				foreach($categories_1 as $cat_1):
					$cat_1_ids[] = $cat_1->term_id;
				endforeach;
				$cat_1_line = implode(',', $cat_1_ids);
			endif;
			if( $cat_1_line ) {
				$categories = get_categories(array(
					'include' => $cat_1_line,
					'orderby' => 'id'
				));
				if ( $categories ) :
					foreach ( $categories as $cat ) :
						$cats[] = '<li><a href="' . get_category_link( $cat->term_id ) . '" title="' . $cat->name . '">' . $cat->name . '</a></li>';
					endforeach;
					echo join( '', $cats );
				endif;
			}
			echo '<li>'.get_the_title().'</li>';
		}
		if( is_tag() ){ echo '<li>'."Tag: ".single_tag_title('',FALSE).'</li>'; }
		if( is_search() ){ echo '<li>'.__("Search", 'Avada').'</li>'; }
		if( is_year() ){ echo '<li>'.get_the_time('Y').'</li>'; }
		

		echo "</ol>";
}
endif;
