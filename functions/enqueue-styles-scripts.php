<?php
	//Enqueue Styles and Scripts
	function bsc_enqueue_styles_scripts() {
  
  } 
		
	if (!is_admin()) add_action( 'wp_enqueue_scripts', 'bsc_enqueue_styles_scripts' ); //Load styles and scripts on non-admin screens
?>
