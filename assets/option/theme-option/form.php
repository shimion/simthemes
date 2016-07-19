<?php
global $child_theme_variable;

$custom_settings['sections'][] = array( 'id' => 'my_form','title' => 'Form Settings');
	
	
	$custom_settings['settings'][] = array(
		'id'          => 'email_to',
        'label'       => __('Your Email Address?', 'wpm_taxdomain' ),
        'desc'        => __('Add your email address where the forms will be submitted.', 'wpm_taxdomain' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'my_form',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);
	
	$custom_settings['settings'][] = array(
		'id'          => 'thank_you',
        'label'       => __('Thank you page URL', 'wpm_taxdomain' ),
        'desc'        => __('Add your thank you page url with "http://" prefix where users will be redirected after a successfull form submission.', 'wpm_taxdomain' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'my_form',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	);