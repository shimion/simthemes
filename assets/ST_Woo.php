<?php

wp_dequeue_script('wc-add-to-cart');
wp_enqueue_script( 'wc-add-to-cart',get_template_directory_uri() . '/assets/js/add-to-cart.js' , array( 'jquery' ), false, true );
add_theme_support( 'woocommerce' );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
add_action('woocommerce_before_main_content', 'my_content_wrapper_start', 10);
function my_content_wrapper_start() {
echo '<section id="primary">';
}

remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_after_main_content', 'my_content_wrapper_end', 10);
function my_content_wrapper_end() {
echo '</section>';
}


function nimber_show_per_row(){
		if(function_exists("ot_get_option")){
			if(is_shop()){
			$woo_layout =  ot_get_option('woo_layout');
			}elseif(is_product_category() || is_product_tag()){
			$woo_layout =  ot_get_option('woo_archive_layout');
			}else{
			$woo_layout =  4;
				}
		
		return $woo_layout;
		
		}
	}
	
add_action('loop_shop_columns', 'nimber_show_per_row');	


function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
		if(function_exists("ot_get_option")){
	$woo_related_product_column =  ot_get_option('woo_related_product_column');
	$woo_related_product_number =  ot_get_option('woo_related_product_number');
	if(!empty($woo_related_product_number)){
	$args['posts_per_page'] = $woo_related_product_number; // 4 related products
	}else{
	$args['posts_per_page'] = 3; // 4 related products
	}
	if(!empty($woo_related_product_column)){
	$args['columns'] = $woo_related_product_column; // arranged in 2 columns
	}else{
	$args['columns'] = 3; // arranged in 3 columns
		}
	return $args;
	
		}
	}

function woo_buttons_class(){
	global $product, $woocommerce;
	if($product->is_purchasable() && $product->is_in_stock()){
	$tooltip ="Add to cart";
	$icon = '<i class="fa fa-cart-plus"></i>';
	}else{
	$tooltip ="Sold Out";
	$icon = '<i class="fa fa-cart-arrow-down"></i>';
		}
	//global $woocommerce;
//foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) {

  $button_type = ot_get_option('button_type');
  	$output .= '';
	$output .=  sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s"  class="%s product_type_%s %s"><div data-toggle="tooltip" data-placement="top" title="'.$tooltip.'" class="btn btn-primary btn-lg st_woo_button st_loader">'.$icon.'</div></a>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		$product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : 'st_out_of_stock',
		esc_attr( $product->product_type ),
		esc_attr( $button_type ),
		esc_html( $product->add_to_cart_text() )
	);
	$output .= '';
	
	return apply_filters('ST_filter_woo_button', $output);
	}

add_filter('woocommerce_loop_add_to_cart_link', 'woo_buttons_class');


add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment_t', 10);
 
//Woo Menu Add to chart
function woocommerce_header_add_to_cart_fragment_t( $fragments ) {

                global $woocommerce; 
				$cart_url = $woocommerce->cart->get_cart_url();
				$checkout_url = $woocommerce->cart->get_checkout_url();
				$currency = get_woocommerce_currency_symbol( $currency );
				$empty_text = __('Your cart is currently empty', 'SimThemes');
                ob_start(); 
				$items = $woocommerce->cart->get_cart();
                ?>

				<ul class="dropdown-menu st_cart_menu cart-contents">
                <?php
			if(!empty($items)){
				foreach($items as $item => $values) {
					$_product = $values['data']->post;
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($_product->ID), 'large' ); $url = $thumb['0'];
					$url = aq_resize( $url, 36, 36, true,true,true );		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
				?>
                	<li><a href=" <?php echo $_product->guid; ?> "><img src="<?php echo $url; ?>" /> <div class="st-menu-cart-item-details"><span class="st-menu-cart-item-title"><?php echo $_product->post_title; ?></span><span class="st-menu-cart-item-quantity"><?php echo $values['quantity']; ?> x </span><span class="amount"><?php echo $currency . $values['line_total']; ?></span></div></a></li>
                    
                   <?php } ?> 
                 <?php }else{ ?> 
                	<li><a><?php echo $empty_text; ?></a></li>
                 <?php } ?> 
                	<li><a href="<?php echo $cart_url; ?>" class="st-menu-cart-link"><i class="fa fa-shopping-cart"></i> <?php _e('View Cart'); ?></a><a  class="st-menu-cart-checkout-link" href="<?php echo $checkout_url; ?>"><i class="fa fa-check-square-o"></i> <?php _e('Checkout'); ?></a></li>
                 
                 
                </ul>
                <?php 
                $fragments['.cart-contents'] = ob_get_clean();

                return $fragments; 

}

    /* WISHLIST BUTTON
    ================================================== */
    if ( ! function_exists( 'st_wishlist_button' ) ) {
        function st_wishlist_button($extra_class = "") {

            global $product, $yith_wcwl;
			 $button_type = ot_get_option('button_type');
            if ( class_exists( 'YITH_WCWL_UI' ) ) {
                $product_type = $product->product_type;
              	$tooltip      = __("Add to wishlist", "SimThemes");

				//Check Wishlist version
				if ( version_compare( get_option('yith_wcwl_version'), "2.0" ) >= 0 ) {
					$url = YITH_WCWL()->get_wishlist_url('');
	        		$default_wishlists = is_user_logged_in() ? YITH_WCWL()->get_wishlists( array( 'is_default' => true ) ) : false;

					if ( ! empty( $default_wishlists ) ) {
		        		$default_wishlist = $default_wishlists[0]['ID'];
	        		}
	        		else {
		        		$default_wishlist = false;
	        		}

					$exists = YITH_WCWL()->is_product_in_wishlist( $product->id , $default_wishlist);
				}
				else {
					$url = $yith_wcwl->get_wishlist_url('');
					$exists = $yith_wcwl->is_product_in_wishlist( $product->id );
				}

				if ( $exists ) {
					$tooltip  = __("View wishlist", "SimThemes");
				}

                $classes =  'class="add_to_wishlist btn btn-primary btn-lg st_woo_button product_type_simple"';

                $html = '<div class="yith-wcwl-add-to-wishlist '.$extra_class.'" data-toggle="tooltip" data-placement="top" title="'.$tooltip.'">';
                $html .= '<div class="yith-wcwl-add-button';  // the class attribute is closed in the next row

                $html .= $exists ? ' hide" style="display:none;"' : ' show"';
				$html .= '><a href="' . htmlspecialchars( $yith_wcwl->get_addtowishlist_url() ) . '"  data-ajaxurl="' . admin_url( 'admin-ajax.php' ). '" data-product-id="' . $product->id . '" data-product-type="' . $product_type . '" ' . $classes . ' >';

                $html .= apply_filters('st_add_to_wishlist_icon', '<i class="fa fa-heart"></i>');
                $html .= '</a></div>';

                $html .= '<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;" ><a href="' . $url . '" class="btn btn-primary btn-lg st_woo_button product_type_simple '.esc_attr( $button_type ).'">';
                $html .= apply_filters('st_added_to_wishlist_icon', '<i class="fa fa-check"></i>');
                $html .= '</a></div>';
                $html .= '<div class="yith-wcwl-wishlistexistsbrowse ' . ( $exists ? 'show' : 'hide' ) . '" style="display:' . ( $exists ? 'block' : 'none' ) . '"><a href="' . $url . '" class="btn btn-primary btn-lg st_woo_button '.esc_attr( $button_type ).' product_type_simple" >';
                $html .= apply_filters('st_added_to_wishlist_icon', '<i class="fa fa-check"></i>');
                $html .= '</a></div>';
                $html .= '<div style="clear:both"></div><div class="yith-wcwl-wishlistaddresponse"></div>';

                $html .= '</div>';

                return $html;
            }
        }

       // add_action( 'woocommerce_after_add_to_cart_button', 'st_wishlist_button', 10 );
    }


function __st_wishlist_button_output(){
	echo st_wishlist_button();
	}



 /* WISHLIST PRODUCT HTML
    ================================================== */
    if ( ! function_exists( 'st_get_wishlist_product' ) ) {
        function st_get_wishlist_product($product_id) {
        	 global $yith_wcwl;
			 $wishlist_output = "";
             $product_obj = get_product( $product_id );
             $wishlist_icon = apply_filters( 'st_view_wishlist_icon', '<i class="ss-star"></i>' );
             if ( $product_obj !== false && $product_obj->exists() ) {
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($product_obj->id), 'large' ); $url = $thumb['0'];
					$url = aq_resize( $url, 36, 36, true,true,true );		// Uncomment the line below to hide nav menu cart item when there are no items in the cart
					$wishlist_output .= '<li class="remove_product_id_'.$product_obj->id.'"">';
					$wishlist_output .= '<a href="' . esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $values['prod_id'] ) ) ) . '"><img src="'.$url.'"> <div class="st_wishlist_menu-item-details  ><span class="st_wishlist_menu-item-title">' . apply_filters( 'woocommerce_in_cartproduct_obj_title', $product_obj->get_title(), $product_obj ) . '</span><span class="amount">' . apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_obj->get_price() ), $values, '' ) .'</span></div></a>';
					
					$wishlist_output .= '</li>';
                        }
			return $wishlist_output;
			}
	}



	//removing countdown pm wishlist
	function remove_count_down_cart_item(){

            global $wpdb, $yith_wcwl, $woocommerce;

            if ( ! $yith_wcwl || ! $woocommerce ) {
                return;
            }

            $wishlist_output = "";

            if ( is_user_logged_in() ) {
                $user_id = get_current_user_id();
            }

            $count = array();

            if ( is_user_logged_in() ) {
 $count = $wpdb->get_results( $wpdb->prepare( 'SELECT COUNT(*) as `cnt` FROM `' . YITH_WCWL_TABLE . '` WHERE `user_id` = %d', $user_id ), ARRAY_A );
                $count = $count[0]['cnt'];
            } else{
                $count= count(yith_getcookie( 'yith_wcwl_products') );
;
            }
			/*if(empty($count)and $count==NULL and $count<=0){
				$count = 0; 
			}else{
				$count = $count - 1;
			}
*/
           	$count = '<span class="st_count">'.$count.'</span>';
	
            die( json_encode( array("count" => $count)));
           
		
		}				

		add_action( 'wp_ajax_remove_count_down_cart_item', 'remove_count_down_cart_item' );
	    add_action( 'wp_ajax_nopriv_remove_count_down_cart_item', 'remove_count_down_cart_item' );





	function count_wishlist(){
            global $wpdb, $yith_wcwl, $woocommerce;

            if ( ! $yith_wcwl || ! $woocommerce ) {
                return;
            }

            $wishlist_output = "";

            if ( is_user_logged_in() ) {
                $user_id = get_current_user_id();
            }

            $count = array();

            if ( is_user_logged_in() ) {
                $count = $wpdb->get_results(  $wpdb->prepare( "SELECT * FROM `" . YITH_WCWL_TABLE . "` WHERE `user_id` = %s" . $limit_sql, $user_id ), ARRAY_A );
                $count = count($count) + 1;
            } else{
                $count= count(yith_getcookie( 'yith_wcwl_products') ) + 1;
;
            }

			return 	$count;		
			
			
		}



	
	 /* WISHLIST UPDATE
    ================================================== */
    if ( ! function_exists( 'st_add_to_wishlist' ) ) {
        function st_add_to_wishlist() {

        	if ( ! empty( $_REQUEST['product_id'] ) ) {
                $product_id = $_REQUEST['product_id'];
            }

           	$wishlist_itens = st_get_wishlist_product($product_id);
           	$count = '<span class="st_count">'.count_wishlist().'</span>';
	
            die( json_encode( array("data"=>$wishlist_itens, "count" => $count)));
           

		}
		add_action( 'wp_ajax_st_add_to_wishlist', 'st_add_to_wishlist' );
	    add_action( 'wp_ajax_nopriv_st_add_to_wishlist', 'st_add_to_wishlist' );
	}
	



/* WISHLIST DROPDOWN
    ================================================== */
    if ( ! function_exists( 'st_get_wishlist' ) ) {
        function st_get_wishlist() {

            global $wpdb, $yith_wcwl, $woocommerce;

            if ( ! $yith_wcwl || ! $woocommerce ) {
                return;
            }

            $wishlist_output = "";

            if ( is_user_logged_in() ) {
                $user_id = get_current_user_id();
            }

            $wishlist_icon = apply_filters( 'st_view_wishlist_icon', '<i class="ss-star"></i>' );

            $count = array();

            if ( is_user_logged_in() ) {
                $count = $wpdb->get_results( $wpdb->prepare( 'SELECT COUNT(*) as `cnt` FROM `' . YITH_WCWL_TABLE . '` WHERE `user_id` = %d', $user_id ), ARRAY_A );
                $count = $count[0]['cnt'];
            } else{
                $count[0]['cnt'] = count(yith_getcookie( 'yith_wcwl_products') );
                $count           = $count[0]['cnt'];
            }

            if ( is_array( $count ) ) {
                $count = 0;
            }

/*            if ( st_theme_opts_name() == "st_atelier_options" ) {
				$wishlist_output .= '<li class="parent wishlist-item"><a class="wishlist-link" href="' . $yith_wcwl->get_wishlist_url() . '" title="' . __( "View your wishlist", "swiftframework" ) . '"><span class="menu-item-title">' . __( "Wishlist", "swiftframework" ) . '</span> ' . apply_filters( 'st_wishlist_menu_icon', '<i class="ss-star"></i>' ) . '<span class="count">' . $count . '</span><span class="star"></span></a>';
            } else {
*/	            $wishlist_output .= '<li class="dropdown menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children icon-menu-wishlist"><a class="wishlist-link" href="' . $yith_wcwl->get_wishlist_url('') . '" title="' . __( "View your wishlist", "swiftframework" ) . '">' . apply_filters( 'st_wishlist_menu_icon', '<i class="fa fa-building-o"></i>' ) . '</a>';
           /* }*/
		   
		   
            $wishlist_output .= '<span class="st_count">' . $count . '</span>';
            $wishlist_output .= '<ul class="dropdown-menu st_wishlist_menu">';

            $current_page = 1;
            $limit_sql    = '';
            $count_limit  = 0;

            if ( is_user_logged_in() ) {
                $wishlist = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM `" . YITH_WCWL_TABLE . "` WHERE `user_id` = %s" . $limit_sql, $user_id ), ARRAY_A );
            } else{
                $wishlist = yith_getcookie( 'yith_wcwl_products');
            } 

            $wishlist_output .= do_action( 'yith_wcwl_before_wishlist' );
            if ( count( $wishlist ) > 0 ) :

                foreach ( $wishlist as $values ) :
						//echo $values;
				
                        if ( ! is_user_logged_in() ) {
                            if ( isset( $values['add-to-wishlist'] ) && is_numeric( $values['add-to-wishlist'] ) ) {
                                $values['prod_id'] = $values['add-to-wishlist'];
                                $values['ID']      = $values['add-to-wishlist'];
                            } else {
                                $values['prod_id'] = $values['prod_id'];
                                $values['ID']      = $values['prod_id'];
                            }
                        }
						
						$product_obj = get_product( $values['prod_id'] );
				
					$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($product_obj->id), 'large' ); $url = $thumb['0'];
					$url = aq_resize( $url, 36, 36, true,true,true );		// Uncomment the line below to hide nav menu cart item when there are no items in the cart

					$wishlist_output .= '<li class="remove_product_id_'.$product_obj->id.'"">';
					$wishlist_output .= '<a href="' . esc_url( get_permalink( apply_filters( 'woocommerce_in_cart_product', $values['prod_id'] ) ) ) . '"><img src="'.$url.'"> <div class="st_wishlist_menu-item-details"><span class="st_wishlist_menu-item-title">' . apply_filters( 'woocommerce_in_cartproduct_obj_title', $product_obj->get_title(), $product_obj ) . '</span><span class="amount">' . apply_filters( 'woocommerce_cart_item_price_html', woocommerce_price( $product_obj->get_price() ), $values, '' ) .'</span></div></a>';
					
					$wishlist_output .= '</li>';
					
					
					
					

                        $count_limit ++;

                endforeach;

            else :
                $wishlist_output .= '<li><div class="wishlist-empty">' . __( 'Your wishlist is empty.', 'swiftframework' ) . '</div></li>';
            endif;


            do_action( 'yith_wcwl_after_wishlist' );

            $wishlist_output .= '</ul>';
            $wishlist_output .= '</li>';

            return $wishlist_output;
        }
    }
	
function St_wishlist_cookies(){
	return yith_getcookie( 'yith_wcwl_products');

	}	
	
function ST_add_compare_link( $product_id = false, $args = array() ) {
            extract( $args );
            if ( ! $product_id ) {
                global $product, $yith_woocompare;
                $product_id = isset( $product->id ) && $product->exists() ? $product->id : 0;
            }
            // return if product doesn't exist
            if ( empty( $product_id ) || apply_filters( 'st_yith_woocompare_remove_compare_link_by_cat', false, $product_id ) )
	            return;
            $is_button = ! isset( $button_or_link ) || ! $button_or_link ? get_option( 'yith_woocompare_is_button' ) : $button_or_link;
            if ( ! isset( $button_text ) || $button_text == 'default' ) {
                $button_text = apply_filters( 'st_compare_text_icon','<i class="fa fa-exchange"></i>');
            }
            printf( '<a href="%s" class="%s" data-product_id="%d" data-toggle="tooltip" data-placement="top" title="" data-original-title="Compare">%s</a>',$yith_woocompare->obj->add_product_url( $product_id ), 'btn btn-primary btn-lg st_woo_button compare', $product_id, $button_text );
        }
		
function ST_add_quick_view_button() {
			global $product, $yith_woocompare;
			$label = apply_filters( 'st_quick_view_text_icon','<i class="fa fa-eye-slash"></i>');
			echo '<a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick view" class="btn btn-primary btn-lg st_woo_button yith-wcqv-button" data-product_id="' . $product->id . '">' . $label . '</a>';
		}	

add_action('init','__st_load_woo_buttons');		
function __st_load_woo_buttons(){
	if(function_exists("ot_get_option")){
		if(ot_get_option('show_quick_button_product')=='on'){
			add_action( 'woocommerce_after_shop_loop_item', 'ST_add_quick_view_button', 12);
		}
		if(ot_get_option('show_compare_button_product')=='on'){
			add_action( 'woocommerce_after_shop_loop_item', 'ST_add_compare_link', 11);
		}
		if(ot_get_option('show_wishlist_button_product')=='on'){
			add_action( 'woocommerce_after_shop_loop_item', '__st_wishlist_button_output', 10);
		}
		if(ot_get_option('show_wishlist_button_ind_product')=='on'){
				add_action( 'woocommerce_single_product_summary', '__st_wishlist_button_output', 30);
		}
		if(ot_get_option('show_compare_button_ind_product')=='on'){
				add_action( 'woocommerce_single_product_summary', 'ST_add_compare_link', 30);
		}
		if(ot_get_option('show_quick_button_ind_product')=='on'){
				add_action( 'woocommerce_single_product_summary', 'ST_add_quick_view_button', 30);
		}
	}
}

//remove default wishlist button individual product 
add_filter('yith_wcwl_positions','__st_yith_wcwl_positions');
function __st_yith_wcwl_positions(){
	$array = array(
               // 'add-to-cart' => array( 'hook' => 'woocommerce_single_product_summary', 'priority' => 31 ),
                'thumbnails'  => array( 'hook' => 'woocommerce_product_thumbnails', 'priority' => 21 ),
                'summary'     => array( 'hook' => 'woocommerce_after_single_product_summary', 'priority' => 11 )
            ) ;
			
		return $array;	

	}
	