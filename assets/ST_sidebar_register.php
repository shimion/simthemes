<?php

    register_sidebar(array(
    	'id' => 'header_left_top',
    	'name' => 'Header Top Left Widget',
    	'description' => 'it will work if you select widget option on the Apperiance >> Theme option >> Header Setting >> Header Top Left Section',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));


    register_sidebar(array(
    	'id' => 'header_right_top',
    	'name' => 'Header Top Right Widget',
    	'description' => 'it will work if you select widget option on the Apperiance >> Theme option >> Header Setting >> Header Top Right Section',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));




    register_sidebar(array(
    	'id' => 'header_right',
    	'name' => 'Header Right Widget',
    	'description' => 'it will work if you select widget option on the Apperiance >> Theme option >> Header Setting >> Show Header Right',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));


    register_sidebar(array(
    	'id' => 'sidebar1',
    	'name' => 'Main Sidebar',
    	'description' => 'Used on every page BUT the homepage page template.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));
    


    register_sidebar(array(
    	'id' => 'footer1',
    	'name' => 'Footer Widget 1',
    	'description' => '',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));
    



    register_sidebar(array(
    	'id' => 'footer2',
    	'name' => 'Footer Widget 2',
    	'description' => '',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));
    



    register_sidebar(array(
    	'id' => 'footer3',
    	'name' => 'Footer Widget 3',
    	'description' => '',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));
    



    register_sidebar(array(
    	'id' => 'footer4',
    	'name' => 'Footer Widget 4',
    	'description' => '',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));
    
    register_sidebar(array(
    	'id' => 'sidebar-blog',
    	'name' => 'Blog Sidebar',
    	'description' => 'Only for the Blog page',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));


    register_sidebar(array(
    	'id' => 'sidebar-archive',
    	'name' => 'Archive Sidebar',
    	'description' => 'It will be used for Category/Archive',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));

    register_sidebar(array(
    	'id' => 'sidebar-woo',
    	'name' => 'Woocommerce Sidebar',
    	'description' => 'It will be used on Product sidebar',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));


    register_sidebar(array(
    	'id' => 'portfolio',
    	'name' => 'Portfolio Sidebar',
    	'description' => 'It will be used on individual portfolio.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));



    register_sidebar(array(
    	'id' => 'single',
    	'name' => 'Single Post Sidebar',
    	'description' => 'It will be used on individual post.',
    	'before_widget' => '<div id="%1$s" class="widget %2$s">',
    	'after_widget' => '</div>',
    	'before_title' => '<h2 class="widgettitle">',
    	'after_title' => '</h2>',
    ));
	
	
	
	do_action('sidebar_register_position');
