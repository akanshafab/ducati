<?php
function ducati_themename_custom_logo_setup() {
	 $defaults = array(
	 'height'      => 100,
	 'width'       => 400,
	 'flex-height' => true,
	 'flex-width'  => true,
	 'header-text' => array( 'site-title', 'site-description' ),
	'unlink-homepage-logo' => true, 
	 );
	 add_theme_support( 'custom-logo', $defaults );
	 add_theme_support('title-tag');
	 add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'ducati_themename_custom_logo_setup' );



	function ducati_menus(){
		$locations=array(
			'primary'=>'menu on header',
			'footer' =>'menu on footer'
		);
		register_nav_menus($locations);
	}
	add_action('init','ducati_menus');

	function ducati_register_style(){
	  $version=wp_get_theme()->get('Version');
	  wp_enqueue_style( 'ducati-style', get_theme_file_uri()."/style.css", array('ducati-bootstrapcdn','ducati-fontawsomecdn'), $version, 'all' );
	  wp_enqueue_style( 'ducati-bootstrapcdn', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array(), '4.5.2', 'all' );
	  wp_enqueue_style( 'ducati-fontawsomecdn', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all' );
	}
	add_action( 'wp_enqueue_scripts', 'ducati_register_style' );

	function ducati_register_scripts(){
	  $version=wp_get_theme()->get('Version');
	  wp_enqueue_script( 'ducati-jQuery', "https://code.jquery.com/jquery-3.5.1.min.js", array(), '3.5.1', true );
	  wp_enqueue_script( 'ducati-bootstrapcdn', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), '4.5.2', true );
	  wp_enqueue_script( 'ducati-uhm8ljm', get_theme_file_uri()."/assets/js/uhm8ljm.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-Calculator', get_theme_file_uri()."/assets/js/Calculator.min.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-ducati', get_theme_file_uri()."/assets/js/ducati.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-ducati.addons', get_theme_file_uri()."/assets/js/ducati.addons.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-Finalorg', get_theme_file_uri()."/assets/js/3_3_3.Finalorg.ajax4jsf.javascript.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-desktopAjax', get_theme_file_uri()."/assets/js/desktopAjax.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-functions', get_theme_file_uri()."/assets/js/functions.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-main', get_theme_file_uri()."/assets/js/main.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-NetworkTracking', get_theme_file_uri()."/assets/js/NetworkTracking.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-picklist4', get_theme_file_uri()."/assets/js/picklist4.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-stub', get_theme_file_uri()."/assets/js/stub.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-VFRemote', get_theme_file_uri()."/assets/js/VFRemote.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-VFState', get_theme_file_uri()."/assets/js/VFState.js", array(), $version, true );
	  wp_enqueue_script( 'ducati-widgets', get_theme_file_uri()."/assets/js/widgets.js", array(), $version, true );
	 // wp_enqueue_script( 'ducati-en_US', get_theme_file_uri()."/assets/js/en_US.js", array(), $version, true );
	 // wp_enqueue_script( 'ducati-dealerlocator', get_theme_file_uri()."/assets/js/dealerlocator.js", array(), $version, true );
	}
	add_action( 'wp_enqueue_scripts', 'ducati_register_scripts' );
?>