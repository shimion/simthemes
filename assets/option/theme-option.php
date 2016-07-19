<?php
global $child_theme_variable;
if ( class_exists( 'OT_Loader' ) && defined( 'OT_PLUGIN_MODE' ) && OT_PLUGIN_MODE == true ){
	add_filter( 'ot_show_options_ui', '__return_false' ); 
	add_filter( 'ot_show_new_layout', '__return_false' );
	add_filter( 'ot_show_settings_export', '__return_true' );
	add_filter( 'ot_show_docs', '__return_false' );
	
	add_filter( 'ot_use_theme_options', '__return_true' );
	add_filter( 'ot_meta_boxes', '__return_true' );



	if (is_admin() && isset($_GET['activated'])){
	wp_redirect(admin_url("themes.php?page=ot-theme-options"));
	}


/**
 * OptionTree in Theme Mode
 */
# require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );


//all individual metabox arrays
include_once( ST_Asset.'option/meta-box-array/section-image-slider.php' );
include_once( ST_Asset.'option/meta-box-array/call-to-action.php' );
include_once( ST_Asset.'option/meta-box-array/section-service.php' );
include_once( ST_Asset.'option/meta-box-array/section-featured.php' );
include_once( ST_Asset.'option/meta-box-array/section-team.php' );
include_once( ST_Asset.'option/meta-box-array/section-portfolio.php' );


//metabox
include_once( ST_Asset.'option/meta-box/slider-meta-boxes.php' );
include_once( ST_Asset.'option/meta-box/pages.php' );
include_once( ST_Asset.'option/meta-box/post.php' );
//include_once( ST_Asset.'option/meta-box/contact-form-meta-boxs.php' );
//include_once( ST_Asset.'option/meta-box/home-page-meta-box.php' );

//theme option







add_action( 'admin_init', 'digita_ot_theme_options', 1 );
function digita_ot_theme_options() {
	global $child_theme_variable;
  $saved_settings = get_option( 'option_tree_settings', array() );
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array(),
    'settings' => array()
  );

  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );

  if ( $saved_settings !== $custom_settings ) { update_option( 'option_tree_settings', $custom_settings );  }
}


 
  require('theme-option/general.php');
  require('theme-option/site_width.php');
  require('theme-option/background.php');
  require('theme-option/typhography.php');
  require('theme-option/header.php');  
  require('theme-option/menu.php');  
  require('theme-option/sticky-header.php'); 
  require('theme-option/page_setting_title_bar.php');  
  require('theme-option/page_setting.php');  
  require('theme-option/social.php');
  require('theme-option/blog.php');
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
	  require('theme-option/woo.php');
}
  require('theme-option/portfolio.php');
  require('theme-option/translation.php');
  require('theme-option/footer.php');
  require('theme-option/additional-setting.php');
  require('theme-option/loader-option.php');
  require('theme-option/third-party.php');

  
  
}


// adding a new menu item for export and import options
function register_my_custom_menu_page(){
	add_menu_page( 'Export/Import', 'Export/Import', 'read', 'admin.php?page=ot-settings', '');
}
add_action( 'admin_menu', 'register_my_custom_menu_page' );

/* Redirect To Theme Options Page on Activation */	
//if (is_admin() && isset($_GET['activated'])){ wp_redirect(admin_url("themes.php?page=ot-theme-options")); }



/* Display a notice that can be dismissed */
add_action('admin_notices', 'first_admin_notice');
function first_admin_notice() {
	global $current_user ;
	global $pagenow;
	$theme_data = wp_get_theme();
        $user_id = $current_user->ID;
        /* Check that the user hasn't already clicked to ignore the message */
	if ( ! get_user_meta($user_id, 'example_ignore_notice') ) {
        echo '<div class="updated"><p>'; 
        printf(__('<div style="margin-bottom:10px;"> Thanks For installing <span style="color:#F00; font-weight:bold;">'.$theme_data['Name'].'</span> WordPress Theme. It appears you installed this theme for the first time on this site. Please Visit Your <a href="themes.php?page=ot-theme-options">Theme Options here</a>  and click on the <span style="color:#F00; font-weight:bold;">"Save Changes"</span> button before you do anything else. | <a href="%1$s">Hide Notice</a></div>'), '?first_admin_notice_ignore=0');
        echo "</p></div>";
	}
}

add_action('admin_init', 'first_admin_notice_ignore');
function first_admin_notice_ignore() {
	global $current_user;
        $user_id = $current_user->ID;
        /* If user clicks to ignore the notice, add that to their user meta */
        if ( isset($_GET['first_admin_notice_ignore']) && '0' == $_GET['first_admin_notice_ignore'] ) {
             add_user_meta($user_id, 'example_ignore_notice', 'true', true);
	}
}






// adding a adming menue for the theme option
function wpm_admin_bar_item() {global $wp_admin_bar;
$wp_admin_bar->add_menu(array( 'id' => 'wp-admin-bar-new-item','title' => __('Theme Option', 'wpm_taxdomain'),'href' => admin_url("themes.php?page=ot-theme-options")));}
add_action('wp_before_admin_bar_render', 'wpm_admin_bar_item');



//remove unwanted  fields from  typrography
function un_wanted_field_typrography(){
	$arr = array( 
          'font-family', 
          'font-style', 
          'font-variant', 
          'font-weight', 
          'letter-spacing', 
          'text-decoration', 
          'text-transform' 
        );
		
		return $arr;
	
	}
	
	add_filter('ot_recognized_typography_fields', 'un_wanted_field_typrography');