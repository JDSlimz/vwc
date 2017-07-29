<?php

function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
	
	register_nav_menus( array( 
		'header' => 'Header menu', 
		'footer' => 'Footer menu' 
	  ) );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

?>
