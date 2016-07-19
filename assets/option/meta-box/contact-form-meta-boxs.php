<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'contact_form_builder_meta_box' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function contact_form_builder_meta_box() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
   
  $contact_form_builder_meta_box = array(
    'id'          => 'contact_form_id',
    'title'       => __( 'Contact Form Builder', 'SimThemes' ),
    'desc'        => '',
    'pages'       => array( 'page', 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      

      array(
        'label'       => __( 'Form Field Section', 'SimThemes' ),
        'id'          => 'form_field_section',
        'type'        => 'tab'
      ),
	  
	  
	  
	  array(
        'id'          => 'form_fields',
        'label'       => __( 'Form Fields', 'SimThemes' ),
        'desc'        => __( 'Pleae add your Form Fields Here', 'SimThemes' ),
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 




		array(
        'id'          => 'required',
        'label'       => __( '', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'yes',
            'label'       => __( 'Required', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
		  
        ),


      ),






		array(
        'id'          => 'select_form_field',
        'label'       => __( 'Select Field', 'SimThemes' ),
        'desc'        => __( '', 'SimThemes' ),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
		'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'text',
            'label'       => __( 'Text', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'textarea',
            'label'       => __( 'Textarea', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'email',
            'label'       => __( 'Email', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'date',
            'label'       => __( 'Date', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'number',
            'label'       => __( 'Number', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'telephone_number',
            'label'       => __( 'Telephone Number', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'dropdown',
            'label'       => __( 'Dropdown', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'checkbox',
            'label'       => __( 'Check Boxes', 'SimThemes' ),
            'src'         => ''
          ),
          array(
            'value'       => 'radio',
            'label'       => __( 'Radio Buttons', 'SimThemes' ),
            'src'         => ''
          ),
		  
          array(
            'value'       => 'captcha',
            'label'       => __( 'Captcha', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
          array(
            'value'       => 'file',
            'label'       => __( 'File Upload', 'SimThemes' ),
            'src'         => ''
          ),
		  
		  
        ),
		


      ),




		



      array(
        'id'          => 'class',
        'label'       => __( 'Class', 'SimThemes' ),
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'option_types',
      ),






      array(
        'id'          => 'choice',
        'label'       => __( 'Choice', 'SimThemes' ),
        'desc'        => '* One choice per line. (Choice is only use for Drop down, Check Box and Redio Button.)',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'option_types',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'operator'    => 'and'
      ),











        ),

      ),
	  
      array(
        'label'       => __( 'Form Settings', 'SimThemes' ),
        'id'          => 'form_settings',
        'type'        => 'tab'
      ),
	  
	  
      array(
        'id'          => 'to_email',
        'label'       => __( 'To', 'SimThemes' ),
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'option_types',
      ),


      array(
        'id'          => 'from_email',
        'label'       => __( 'From', 'SimThemes' ),
        'desc'        => 'Please use shortcode according to your name field,(Exm: [your name]) according to your form field',
        'type'        => 'text',
        'section'     => 'option_types',
      ),


      array(
        'id'          => 'from_subject',
        'label'       => __( 'From Subject', 'SimThemes' ),
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'option_types',
      ),



      array(
        'id'          => 'from_attachment',
        'label'       => __( 'From attachments', 'SimThemes' ),
        'desc'        => '',
        'type'        => 'text',
        'section'     => 'option_types',
      ),


	
      array(
        'id'          => 'from_attachment_type',
        'label'       => __( 'From attachments type', 'SimThemes' ),
        'desc'        => 'Please use Comma between multiple attachment.  Attachment type example here. png,jpg,gif,doc,pdf,rtf,  ',
        'type'        => 'text',
        'section'     => 'option_types',
      ),



      array(
        'id'          => 'massage_body',
        'label'       => __( 'From Massage body', 'SimThemes' ),
        'desc'        => '',
        'type'        => 'textarea',
        'section'     => 'option_types',
		 'rows'        => '4',
      ),

	
	  
	  

    ),
	
		
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
  	global $wpdb, $post;
  	$meta_values = get_post_meta( $_GET['post'], '_wp_page_template', true);
  	if( $meta_values =='page-full-width.php'){
  	  ot_register_meta_box( $contact_form_builder_meta_box );
	}

}




