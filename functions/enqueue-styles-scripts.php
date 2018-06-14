<?php
	//Enqueue Styles and Scripts
	function bsc_enqueue_styles_scripts() {
		wp_enqueue_style( 'css.css', get_template_directory_uri() . '/css/css.css'); // CSS
		wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css'); // Font Awesome
		


		
		wp_enqueue_script ('jquery'); 
		wp_enqueue_script( 'core.min', get_template_directory_uri() . '/js/core.min.js', $deps, $ver, true);
		wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', $deps, $ver, true);
  
  } 
		
	if (!is_admin()) add_action( 'wp_enqueue_scripts', 'bsc_enqueue_styles_scripts' ); //Load styles and scripts on non-admin screens
?>
