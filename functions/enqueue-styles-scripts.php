<?php
	//Enqueue Styles and Scripts
	function bsc_enqueue_styles_scripts() {
		wp_enqueue_style( 'css.css', get_template_directory_uri() . '/css/css.css'); // CSS
		
		wp_enqueue_script ('jquery'); 
		wp_enqueue_script( 'core', get_template_directory_uri() . '/js/core.js', $deps, $ver, true);
		wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', $deps, $ver, true);
  
  } 
		
	if (!is_admin()) add_action( 'wp_enqueue_scripts', 'bsc_enqueue_styles_scripts' ); //Load styles and scripts on non-admin screens
?>
