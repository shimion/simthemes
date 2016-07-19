<?php
  

/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'ST_Pages_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in theme-options.php.
 *
 * @return    void
 * @since     2.3.0
 */
 
 
 
function ST_Pages_meta_boxes() {
  
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
  $ST_Pages_meta_boxes = array(
    'id'          => 'SimThemes_meta_box',
    'title'       => __( 'ST Options', 'SimThemes' ),
    'desc'        => '',
    'pages'       => array('page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

    )
  );
  $ST_Pages_meta_boxes = apply_filters( 'ST_Filters_Pages_meta_boxes', $ST_Pages_meta_boxes );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $ST_Pages_meta_boxes );

}

//load metaboxs fields
  require('page-featured-slider.php');
  require('page-title-bar.php');
  require('page-background.php');
  require('page-footer.php');
  require('page-menu.php');
  require('page-heading.php');
  require('page-page.php');
  require('page-width.php');


