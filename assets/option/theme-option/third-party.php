<?php
add_filter('option_tree_settings_args', 'third_party_intregration', 140);
function third_party_intregration($custom_settings){
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'third_party_intregration','title' => 'Third Party Intregration');
	$custom_settings['settings'][] = array(
	
		'label'       => __('Important Note', 'SimThemes' ),
        'id'          => 'my_textblock',
        'type'        => 'textblock',
        'desc'        => __('Third Party Intregration', 'SimThemes' ),
        'class'       => 'theme_option_notice',
        'section'     => 'third_party_intregration'
		
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'mailchimp_api',
        'label'       => __('Mailchamp API', 'SimThemes' ),
        'desc'        => __('Please provide the Mailchimp API here.' , 'SimThemes' ),
        'type'        => 'text',
        'section'     => 'third_party_intregration',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
		
	
return $custom_settings;

}
