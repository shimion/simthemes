<?php
class WPTuts_Log_Export_Admin_Page{
 
    /**
     * The page hook suffix
     */
    public $export='';
    public $import='';
    
 
    public function  __construct(){
        add_action('admin_menu', array($this,'add_submenu'));
        add_action('admin_init', array($this,'maybe_download'));
        add_action('admin_init', array($this,'maybe_upload'));
        add_action('admin_init', array($this,'admin_notices'));
    }
 
   public function add_submenu(){
    add_submenu_page('crellyslider', __('Export','SimThemes'), __('Export','SimThemes'), 'manage_options', 'export', array($this,'display_export') );
    add_submenu_page('crellyslider', __('Import','SimThemes'), __('Import','SimThemes'), 'manage_options', 'emport', array($this,'display_import') );
}






		public function creat_id($formet_date){
			
			$value = date($formet_date);
			return $value;
			}




/*get the table information*/
    public function maybe_download(){

	function slider_table_info($arr, $slider){
		global $wpdb;
		$results = $wpdb->get_results( 'SELECT * FROM ' .$wpdb->prefix . $arr .' WHERE slider_parent = '.$slider.'', OBJECT );
		return $results;
		} 
	function slider_table_info_sliders($arr, $slider){
		global $wpdb;
		$results = $wpdb->get_results( 'SELECT * FROM ' .$wpdb->prefix . $arr .' WHERE id = '.$slider.'', OBJECT );
		return $results;
		} 



		
	function wptuts_export_logs( $sliders ) {
 
    /* Query logs */
	global $wpdb;
    $logs = slider_table_info('crellyslider_slides', $sliders);
    $logs2 = slider_table_info('crellyslider_elements', $sliders);
    $logs3 = slider_table_info_sliders('crellyslider_sliders', $sliders);
 
    /* If there are no logs - abort */
    if( !$logs OR !$logs2 OR ! $logs3)
        return false;
 
    /* Create a file name */
    $sitename = sanitize_key( get_bloginfo( 'name' ) );
    if ( ! empty($sitename) ) $sitename .= '.';
    $filename = $sitename . 'SimThemess.' . date( 'Y-m-d' ) . '.xml';
 
    /* Print header */
    header( 'Content-Description: File Transfer' );
    header( 'Content-Disposition: attachment; filename=' . $filename );
    header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ), true );
 
    /* Print comments */
    echo "<!-- This is a export of the wptuts log table -->\n";
    echo "<!-- (Demonstration purposes only) -->\n";
    echo "<!--  (Optional) Included import steps here... -->\n";
 	
	/* Print logs to file */
	

	echo '<top>';
	echo '<sliders>';
	foreach ( $logs3 as $log ) { ?>
		<item>
			<id><?php echo $log->id; ?></id>
			<name><?php echo $log->name; ?></name>
			<alias><?php echo $log->alias; ?></alias>
			<layout><?php echo $log->layout; ?></layout>
			<responsive><?php echo $log->responsive; ?></responsive>
			<startWidth><?php echo $log->startWidth; ?></startWidth>
			<startHeight><?php echo $log->startHeight; ?></startHeight>
			<automaticSlide><?php echo $log->automaticSlide; ?></automaticSlide>
			<showControls><?php echo $log->showControls; ?></showControls>
			<showNavigation><?php echo $log->showNavigation; ?></showNavigation>
			<enableSwipe><?php echo $log->enableSwipe; ?></enableSwipe>
			<showProgressBar><?php echo $log->showProgressBar; ?></showProgressBar>
			<pauseOnHover><?php echo $log->pauseOnHover; ?></pauseOnHover>
			<callbacks><?php echo $log->callbacks; ?></callbacks>

		</item>
	<?php }
	echo '</sliders>';



	echo '<elements>';
	foreach ( $logs2 as $log ) { ?>
		<item>
			<id><?php echo $log->id; ?></id>
			<activity_date><?php echo $log->activity_date; ?></activity_date>
			<slider_parent><?php echo $log->slider_parent; ?></slider_parent>
			<slide_parent><?php echo $log->slide_parent; ?></slide_parent>
			<position><?php echo $log->position; ?></position>
			<type><?php echo $log->type; ?></type>
			<data_easeIn><?php echo $log->data_easeIn; ?></data_easeIn>
			<data_easeOut><?php echo $log->data_easeOut; ?></data_easeOut>
			<data_ignoreeaseout><?php echo $log->data_ignoreEaseOut; ?></data_ignoreeaseout>
			<data_delay><?php echo $log->data_delay; ?></data_delay>
			<data_time><?php echo $log->data_time; ?></data_time>
			<data_top><?php echo $log->data_top; ?></data_top>
			<data_left><?php echo $log->data_left; ?></data_left>
			<z_index><?php echo $log->z_index; ?></z_index>
			<data_in><?php echo $log->data_in; ?></data_in>
			<data_out><?php echo $log->data_out; ?></data_out>
			<custom_css><?php echo $log->custom_css; ?></custom_css>
			<inner_html><?php echo htmlentities($log->inner_html); ?></inner_html>
			<image_src><?php echo htmlentities($log->image_src); ?></image_src>
			<image_alt><?php echo $log->image_alt; ?></image_alt>
			<link><?php echo $log->link; ?></link>
			<link_new_tab><?php echo $log->link_new_tab; ?></link_new_tab>

		</item>
	<?php }
	echo '</elements>';







	
	
	
	
	echo '<slides>';
	foreach ( $logs as $log ) { ?>
		<item>
			<id><?php echo $log->id; ?></id>
			<activity_date><?php echo $log->activity_date; ?></activity_date>
			<slider_parent><?php echo $log->slider_parent; ?></slider_parent>
			<position><?php echo $log->position; ?></position>
			<background_type_image><?php echo $log->background_type_image; ?></background_type_image>
			<background_type_color><?php echo $log->background_type_color; ?></background_type_color>
			<background_propriety_position_x><?php echo $log->background_propriety_position_x; ?></background_propriety_position_x>
			<background_propriety_position_y><?php echo $log->background_propriety_position_y; ?></background_propriety_position_y>
			<background_repeat><?php echo $log->background_repeat; ?></background_repeat>
			<background_propriety_size><?php echo $log->background_propriety_size; ?></background_propriety_size>
			<data_in><?php echo $log->data_in; ?></data_in>
			<data_out><?php echo $log->data_out; ?></data_out>
			<data_time><?php echo $log->data_time; ?></data_time>
			<data_easeIn><?php echo $log->data_easeIn; ?></data_easeIn>
			<data_easeOut><?php echo $log->data_easeOut; ?></data_easeOut>
			<custom_css><?php echo $log->custom_css; ?></custom_css>
		</item>
	<?php }
	echo '</slides>';
	echo '</top>';
	
	
	
	
	
	
    /* Print the logs */
	
	
/**
 * Wraps the passed string in a XML CDATA tag.
 *
 * @param string $string String to wrap in a XML CDATA tag.
 * @return string
 */
function wptuts_wrap_cdata( $string ) {
    if ( seems_utf8( $string ) == false )
        $string = utf8_encode( $string );
 
    return '<![CDATA[' . str_replace( ']]>', ']]]]><![CDATA[>', $string ) . ']]>';
}	

exit();
	
	
	
}

		
		
		
		
		
		
     /* Listen for form submission */
    if( empty($_POST['action']) || 'export-logs' !== $_POST['action'] )
        return;
 
    /* Check permissions and nonces */
    if( !current_user_can('manage_options') )
        wp_die('');
 
    check_admin_referer( 'wptuts-export-logs','_wplnonce');
 
    /* Trigger download */
    wptuts_export_logs($_POST['slider_name']);
	
	
	//print_r($_POST['slider_name']);
	
}
 



    public function display_export() {
 
    echo '<div class="wrap">';
    screen_icon();
    echo '<h2>' . __( 'Export Sliders', 'SimThemes' ) . '</h2>';
    ?>
 
    <form id="wptuts-export-log-form" method="post" action="">
        
            <label><?php _e( 'Please Select The Slider','SimThemes' ); ?></label>
            <select name="slider_name" style="display:block; width:300px; margin-top:10px;">
            <?php global $wpdb; $results = $wpdb->get_results( 'SELECT * FROM ' .$wpdb->prefix . 'crellyslider_sliders', OBJECT );
			
				foreach($results as $id):
			
			 ?>
            	<option value="<?php echo $id->id; ?>"><?php echo $id->name; ?></option>
                
              <?php endforeach; ?>  
            </select>
            <input type="hidden" name="action" value="export-logs" />
        <?php wp_nonce_field( 'wptuts-export-logs', '_wplnonce' ); ?>
        <?php submit_button( __( 'Download', 'SimThemes' ), 'button' ); ?>
    </form>
	</div> 
    <?php



}



    public function display_import() {
    echo '<div class="wrap">';
    echo '<h2>' . __( 'Import All Sliders', 'SimThemes' ) . '</h2>';
    ?>
 
 
    <form method="post" action="" enctype="multipart/form-data">
        <p>
            <label for="wptuts_import_logs"><?php _e( 'Import an .xml file.', 'SimThemes' ); ?></label>
            <input type="file" id="wptuts_import_logs" name="wptuts_import" />
        </p>
        <input type="hidden" name="action" value="import-logs" />
        <?php wp_nonce_field( 'wptuts-import-logs', '_wplnonce' ); ?>
        <?php submit_button( __( 'Upload Sliders', 'SimThemes' ), 'secondary' ); ?>
    </form>
    </div>
    <?php




}












 
    public function maybe_upload() {
    /* Listen for form submission */
    if ( empty( $_POST['action'] ) || 'import-logs' !== $_POST['action'] )
        return;
 
    /* Check permissions and nonces */
    if ( ! current_user_can( 'manage_options' ) )
        wp_die('');
 
    check_admin_referer( 'wptuts-import-logs', '_wplnonce' );
 
    /* Perform checks on file: */
 
    // Sanity check
    if ( empty( $_FILES["wptuts_import"] ) )
        wp_die( 'No file found' );
 
    $file = $_FILES["wptuts_import"];
 
    // Is it of the expected type?
    if ( $file["type"] != "text/xml" )
        wp_die( sprintf( __( "There was an error importing the logs. File type detected: '%s'. 'text/xml' expected", 'SimThemes' ), $file['type'] ) );
 
    // Impose a limit on the size of the uploaded file. Max 2097152 bytes = 2MB
    if ( $file["size"] > 2097152 ) {
        $size = size_format( $file['size'], 2 );
        wp_die( sprintf( __( 'File size too large (%s). Maximum 2MB', 'import-logs' ), $size ) );
    }
 
    if( $file["error"] > 0 )
        wp_die( sprintf( __( "Error encountered: %d", 'wptuts-import' ), $file["error"] ) );
  
    /* If we've made it this far then we can import the data */
   $imported = $this->import( $file['tmp_name'] );
    $imported = $this->import_elements( $file['tmp_name'] );
    $imported = $this->import_sliders( $file['tmp_name'] );
    /* Everything is complete, now redirect back to the page */
    wp_redirect( add_query_arg( 'imported', $imported ) );
    exit();
}
 
    public function admin_notices() {
 
    // Was an import attempted and are we on the correct admin page?
    if ( ! isset( $_GET['imported'] ) || 'tools_page_wptuts-export' !== get_current_screen()->id )
        return;
 
    $imported = intval( $_GET['imported'] );
 
    if ( 1 == $imported ) {
        printf( '<div class="updated"><p>%s</p></div>', __( '1 log successfully imported', 'wptuts-import' ) );
 
    }
    elseif ( intval( $_GET['imported'] ) ) {
        printf( '<div class="updated"><p>%s</p></div>', sprintf( __( '%d logs successfully imported', 'wptuts-import' ), $imported ) );
    }
    else {
        printf( '<div class="error"><p>%s</p></div>', __( ' No logs were imported', 'wptuts-import' ) );
    }
}
 
    public function import( $file) {
 
 
    // Parse file
    $logs = $this->parse( $file);
 //print_r($logs);
    // No logs found ? - then aborted.
    if  ( ! $logs )
        return 0;
    // Initialises a variable storing the number of logs successfully imported.
    $imported = 0;
 
    // Go through each log
	global $wpdb;
    foreach ( $logs as $log_id => $log ) {
        /*
         * Check if the log already exists:
         * We'll just check the date and the user ID, but we could check other details
         * if we extended our wptuts_get_logs() API
         */
/*        $exists = wptuts_get_logs( array(
            'user_id' => $log['user_id'],
            'since' => mysql2date( 'G', $log['activity_date'], false ),
            'until' => mysql2date( 'G', $log['activity_date'], false ),
        ));
 
        // If it exists, don't import it
        if ( $exists )
            continue;
*/ 
        // Insert the log
		$mn_id = $this->creat_id('his');
       $wpdb->insert($wpdb->prefix .'crellyslider_slides', array(
		'id'=>$log[''],
		'slider_parent'=>$mn_id,
		'position'=>$log['position'],
		'background_type_image'=>$log['background_type_image'],
		'background_type_color'=>$log['background_type_color'],
		'background_propriety_position_x'=>$log['background_propriety_position_x'],
		'background_propriety_position_y'=>$log['background_propriety_position_y'],
		'background_repeat'=>$log['background_repeat'],
		'background_propriety_size'=>$log['background_propriety_size'],
		'data_in'=>$log['data_in'],
		'data_out'=>$log['data_out'],
		'data_time'=>$log['data_time'],
		'data_easeIn'=>$log['data_easeIn'],
		'data_easeOut'=>$log['data_easeOut'],
		'custom_css'=>$log['custom_css'],
		
		)) ;
 
            $imported++;
    }
 
    return $imported;
}
 
 
 
    public function import_elements( $file) {
 
 
    // Parse file
    $logs = $this->parse_element( $file);
 //print_r($logs);
    // No logs found ? - then aborted.
    if  ( ! $logs )
        return 0;
    // Initialises a variable storing the number of logs successfully imported.
    $imported = 0;
 
    // Go through each log
	global $wpdb;
    foreach ( $logs as $log_id => $log ) {
        /*
         * Check if the log already exists:
         * We'll just check the date and the user ID, but we could check other details
         * if we extended our wptuts_get_logs() API
         */
/*        $exists = wptuts_get_logs( array(
            'user_id' => $log['user_id'],
            'since' => mysql2date( 'G', $log['activity_date'], false ),
            'until' => mysql2date( 'G', $log['activity_date'], false ),
        ));
 
        // If it exists, don't import it
        if ( $exists )
            continue;
*/ 
        // Insert the log
		$mn_id = $this->creat_id('his');

       $wpdb->insert($wpdb->prefix .'crellyslider_elements', array(
		'id'=>$log[''],
		'slider_parent'=>$mn_id,
		'slide_parent'=>$log['slide_parent'],
		'position'=>$log['position'],
		'type'=>$log['type'],
		'data_easeIn'=>$log['data_easeIn'],
		'data_easeOut'=>$log['data_easeOut'],
		'data_ignoreEaseOut'=>$log['data_ignoreEaseOut'],
		'data_delay'=>$log['data_delay'],
		'data_time'=>$log['data_time'],
		'data_top'=>$log['data_top'],
		'data_left'=>$log['data_left'],
		'z_index'=>$log['z_index'],
		'data_in'=>$log['data_in'],
		'data_out'=>$log['data_out'],
		'custom_css'=>$log['custom_css'],
		'inner_html'=>$log['inner_html'],
		'image_src'=>$log['image_src'],
		'image_alt'=>$log['image_alt'],
		'link'=>$log['link'],
		'link_new_tab'=>$log['link_new_tab'],
		
		)) ;
 
            $imported++;
    }
 
    return $imported;
}
 
 


//checking alice
	public function alice($alice){
		global $wpdb;
	$results = $wpdb->get_results( 'SELECT * FROM ' .$wpdb->prefix . 'crellyslider_sliders' .' WHERE alias LIKE '.$alice.'', OBJECT );	
	//if(in_array($alice, $results))	{
		$mn_id_alice = $alice . $this->creat_id('s');	
	//}else{
	//	$mn_id_alice = $alice;
	//	}
		
		return $mn_id_alice;
		}
 


//IMport SLiders
    public function import_sliders( $file) {
 
 
    // Parse file
    $logs = $this->parse_sliders( $file);
 //print_r($logs);
    // No logs found ? - then aborted.
    if  ( ! $logs )
        return 0;
    // Initialises a variable storing the number of logs successfully imported.
    $imported = 0;
 
    // Go through each log
	global $wpdb;
    foreach ( $logs as $log_id => $log ) {
        /*
         * Check if the log already exists:
         * We'll just check the date and the user ID, but we could check other details
         * if we extended our wptuts_get_logs() API
         */
/*        $exists = wptuts_get_logs( array(
            'user_id' => $log['user_id'],
            'since' => mysql2date( 'G', $log['activity_date'], false ),
            'until' => mysql2date( 'G', $log['activity_date'], false ),
        ));
 
        // If it exists, don't import it
        if ( $exists )
            continue;
*/ 
        // Insert the log
		$mn_id = $this->creat_id('his');
		//$mn_id_alice = $this->creat_id('s');
       $wpdb->insert($wpdb->prefix .'crellyslider_sliders', array(
		'id'=>$mn_id,
		'name'=>$log['name'],
		'alias'=>$this->alice($log['alias']),
		'layout'=>$log['layout'],
		'responsive'=>$log['responsive'],
		'startWidth'=>$log['startWidth'],
		'startHeight'=>$log['startHeight'],
		'automaticSlide'=>$log['automaticSlide'],
		'showControls'=>$log['showControls'],
		'showNavigation'=>$log['showNavigation'],
		'enableSwipe'=>$log['enableSwipe'],
		'showProgressBar'=>$log['showProgressBar'],
		'pauseOnHover'=>$log['pauseOnHover'],
		'callbacks'=>$log['callbacks'],
		
		)) ;
 
            $imported++;
    }
 
    return $imported;
}
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    public function parse( $file) {
    // Load the xml file
    $xml = simplexml_load_file( $file );
 
    // halt if loading produces an error
    if ( ! $xml )
        return false;
 
    // Initial logs array
    $logs = array();
		foreach ( $xml->xpath( '/top/slides/item' ) as $log_obj ) {
	 
			$log = $log_obj->children();
			$id = (int) $log->id;
	 
			$logs[$id] = array(
				'id' => (int) $log->id,
				'slider_parent' => (string) $log->slider_parent,
				'position' => (string) $log->position,
				'background_type_image' => (string) $log->background_type_image,
				'background_type_color' =>(string)  $log->background_type_color,
				'background_propriety_position_x' =>(string)  $log->background_propriety_position_x,
				'background_propriety_position_y' =>(string)  $log->background_propriety_position_y,
				'background_repeat' =>(string)  $log->background_repeat,
				'background_propriety_size' =>(string)  $log->background_propriety_size,
				'data_in' =>(string)  $log->data_in,
				'data_out' =>(string)  $log->data_out,
				'data_time' =>(string)  $log->data_time,
				'data_easeIn' =>(string)  $log->data_easeIn,
				'data_easeOut' =>(string)  $log->data_easeOut,
				'custom_css' =>(string)  $log->custom_css,
			);
		}
	
 
    return $logs;
}





    public function parse_element( $file) {
    // Load the xml file
    $xml = simplexml_load_file( $file );
 
    // halt if loading produces an error
    if ( ! $xml )
        return false;
 
    // Initial logs array
    $logs = array();
		foreach ( $xml->xpath( '/top/elements/item' ) as $log_obj ) {
	 
			$log = $log_obj->children();
			$id = (int) $log->id;
	 
			$logs[$id] = array(
				'id' => (int) $log->id,
				'activity_date' => (string) $log->activity_date,
				'slider_parent' => (string) $log->slider_parent,
				'slide_parent' => (string) $log->slide_parent,
				'position' =>(string)  $log->position,
				'type' =>(string)  $log->type,
				'data_easeIn' =>(int) $log->data_easeIn,
				'data_easeOut' =>(int)  $log->data_easeOut,
				'data_ignoreEaseOut' =>(string)  $log->data_ignoreEaseOut,
				'data_delay' =>(string)  $log->data_delay,
				'data_time' =>(string)  $log->data_time,
				'data_top' =>(string)  $log->data_top,
				'data_left' =>(string)  $log->data_left,
				'z_index' =>(string)  $log->z_index,
				'data_in' =>(string)  $log->data_in,
				'data_out' =>(string)  $log->data_out,
				'custom_css' =>(string)  $log->custom_css,
				'inner_html' =>(string)  $log->inner_html,
				'image_src' =>(string)  $log->image_src,
				'image_alt' =>(string)  $log->image_alt,
				'link' =>(string)  $log->link,
				'link_new_tab' =>(string)  $log->link_new_tab,
			);
		}
	
 
    return $logs;
}





    public function parse_sliders( $file) {
    // Load the xml file
    $xml = simplexml_load_file( $file );
 
    // halt if loading produces an error
    if ( ! $xml )
        return false;
 
    // Initial logs array
    $logs = array();
		foreach ( $xml->xpath( '/top/sliders/item' ) as $log_obj ) {
	 
			$log = $log_obj->children();
			$id = (int) $log->id;
	 
			$logs[$id] = array(
				'id' => (int) $log->id,
				'name' => (string) $log->name,
				'alias' => (string) $log->alias,
				'layout' => (string) $log->layout,
				'responsive' =>(string)  $log->responsive,
				'startWidth' =>(string)  $log->startWidth,
				'startHeight' =>(string)  $log->startHeight,
				'automaticSlide' =>(string)  $log->automaticSlide,
				'showControls' =>(string)  $log->showControls,
				'showNavigation' =>(string)  $log->showNavigation,
				'enableSwipe' =>(string)  $log->enableSwipe,
				'showProgressBar' =>(string)  $log->showProgressBar,
				'pauseOnHover' =>(string)  $log->pauseOnHover,
				'callbacks' =>(string)  $log->callbacks,
			);
		}
	
 
    return $logs;
}








}
$WPTuts_Log_Export_Admin_Page = new WPTuts_Log_Export_Admin_Page();
