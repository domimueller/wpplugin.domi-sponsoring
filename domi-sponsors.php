<?php

/**
* Plugin Name: Sponsoren
* Plugin URI: 
* Description: Funktionalität für Sponsoren. Darstellung im Theme via template-sponsors.php
* Version: 1.0
* Author: Dominique Müller
* Author URI: 
**/







$plugin_url = WP_PLUGIN_DIR . '/' . basename(dirname(__FILE__));

/* include Scripts*/
function domi_sponsors_customcss() {
    wp_enqueue_style( 'sponsorcss',  plugin_dir_url( __FILE__ ) . '/css/sponsors.css' );                      
}
add_action( 'wp_enqueue_scripts', 'domi_sponsors_customcss');


/* INCLUDE FILES */
include $plugin_url . '/includes/customPostType.php';
include $plugin_url . '/includes/advancedCustomFields.php';

?>