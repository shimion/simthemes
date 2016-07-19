<?php
//All Style and Jquery will defined here
class ST_script extends ST_core{
	
	public function __construct(){
	add_action('wp_enqueue_scripts', array( $this, 'ST_regular_styles'), 99);
	add_action('wp_enqueue_scripts', array( $this, 'ST_regular_js'));
	add_action('admin_init', array( $this, 'admin_script'));
	add_action('admin_enqueue_scripts', array( $this, 'ST_admin_script'));
	add_action('init', array($this, 'ajax_init'));
		}


	public function admin_script(){
        wp_register_style( 'ST_admin_css', get_template_directory_uri() . '/assets/css/ST_admin.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'ST_admin_css' );
		
		wp_register_script(  'ST_Admin_Script', 
		  get_template_directory_uri() . '/assets/js/ST_Admin_Script.js', 
		  array('jquery'), 
		  '1.2');
		
		wp_enqueue_script('ST_Admin_Script');
			
		
		}


// enqueue styles
    public function ST_regular_styles() { 
        // This is the compiled css file from LESS - this means you compile the LESS file locally and put it in the appropriate directory if you want to make any changes to the master bootstrap.css.
        wp_register_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'bootstrap' );

        //wp_register_style( 'bootstrapValidator', get_template_directory_uri() . '/assets/css/bootstrapValidator.min.css', array(), '1.0', 'all' );
        //wp_enqueue_style( 'bootstrapValidator' );
		
		
		
		
        wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'font-awesome' );
		
		
        wp_register_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'theme' );

        // For child themes
       wp_register_style( 'ST-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
       wp_enqueue_style( 'ST-style' );
	   


        wp_register_style( 'sequencejs-qubico', get_template_directory_uri() . '/assets/css/sequencejs-qubico.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'sequencejs-qubico' );


       wp_register_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'jquery-ui' );


       wp_register_style( 'colorbox', get_template_directory_uri() . '/assets/css/colorbox.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'colorbox' );



       wp_register_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'animate' );


       wp_register_style( 'owl.carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '0.1', 'all' );
        wp_enqueue_style( 'owl.carousel' );



       wp_register_style( 'ST_custom_style', get_template_directory_uri() . '/assets/css/custom_style.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'ST_custom_style' );




       wp_register_style( 'ST_widget_style', get_template_directory_uri() . '/assets/css/ST_widget_style.css', array(), '0.3', 'all' );
        wp_enqueue_style( 'ST_widget_style' );

       wp_register_style( 'ST_timeline', get_template_directory_uri() . '/assets/css/ST_timeline.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'ST_timeline' );

      wp_register_style( 'ST-Responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0', 'all' );
      wp_enqueue_style( 'ST-Responsive' );



	   
	   
    }

// enqueue javascript
  public function ST_regular_js(){
  
    wp_register_script( 'bootstrap', 
      get_template_directory_uri() . '/assets/js/bootstrap.min.js', 
      array('jquery'), 
      '1.2', true );

  
    wp_register_script( 'holder', 
      get_template_directory_uri() . '/assets/js/holder.js', 
      array('jquery'), 
      '1.2', true );



  
    wp_register_script(  'modernizr', 
      get_template_directory_uri() . '/assets/js/modernizr.full.min.js', 
      array('jquery'), 
      '1.2', false );

    
 
    wp_register_script(  'sequence-min', 
      get_template_directory_uri() . '/assets/js/jquery.sequence-min.js', 
      array('jquery'), 
      '1.2', true);
	  
    wp_register_script(  'fittext', 
      get_template_directory_uri() . '/assets/js/jquery.fittext.js', 
      array('jquery'), 
      '1.2', true );
  


    wp_register_script(  'waypoints.min', 
      get_template_directory_uri() . '/assets/js/waypoints.min.js', 
      array('jquery'), 
      '1.2', true );


	  
    wp_register_script(  'waypoints-sticky', 
      get_template_directory_uri() . '/assets/js/waypoints-sticky.js', 
      array('jquery'), 
      '1.2', true );


	  
	  
    wp_register_script(  'custom', 
      get_template_directory_uri() . '/assets/js/custom.js', 
      array('jquery'), 
      '12', true );
  
    wp_register_script(  'bootstrapValidator', 
      get_template_directory_uri() . '/assets/js/bootstrapValidator.js', 
      array('jquery'), 
      '1.2', true );

    wp_register_script(  'moment', 
      get_template_directory_uri() . '/assets/js/moment.js', 
      array('jquery'), 
      '1.2', true );


  
    wp_register_script(  'bootstrap-datetimepicker', 
      get_template_directory_uri() . '/assets/js/bootstrap-datetimepicker.js', 
      array('jquery'), 
      '1.2', true );
  
    wp_register_script(  'colorbox', 
      get_template_directory_uri() . '/assets/js/jquery.colorbox-min.js', 
      array('jquery'), 
      '1.2', true );
  
    wp_register_script(  'masonry', 
      get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', 
      array('jquery'), 
      '1.2', true );
  
    wp_register_script(  'owl.carousel.min', 
      get_template_directory_uri() . '/assets/js/owl.carousel.min.js', 
      array('jquery'), 
      '0.1', true );
  
    wp_register_script(  'jquery.nicescroll.min', 
      get_template_directory_uri() . '/assets/js/jquery.nicescroll.min.js', 
      array('jquery'), 
      '0.1', true );
	  
	  
	wp_register_script( 'jquery.sticky', 
      get_template_directory_uri() . '/assets/js/jquery.sticky.js', 
      array('jquery'), 
      '1.2', true );
  
  
    wp_enqueue_script('bootstrap');
	wp_enqueue_script('holder');
	wp_enqueue_script('jquery-ui-datepicker');
    wp_enqueue_script('modernizr');
    wp_enqueue_script('fittext');
    wp_enqueue_script('waypoints.min');
    wp_enqueue_script('waypoints-sticky');
    wp_enqueue_script('sequence-min');
    wp_enqueue_script('colorbox');
	wp_enqueue_script('masonry');
	wp_enqueue_script('owl.carousel.min');
	wp_enqueue_script('jquery.nicescroll.min');
	wp_enqueue_script('jquery.sticky');
    wp_enqueue_script('custom');
  }
  


	public function ajax_init(){
		wp_enqueue_script( 'app-js-check', get_template_directory_uri() . '/assets/js/js-check.js', array( 'jquery'));
		wp_localize_script( 'app-js-check', '_appointments_data',
			array(
				'ajax_url' => admin_url('admin-ajax.php'),
				'root_url' => get_template_directory_uri().'appointments/images/'
				)
		);

	}






  
  
  
  //admin css
  public function ST_admin_script(){
	    wp_register_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'font-awesome' );
		


	  }
  


	}
	
	$ST_script = new ST_script();
