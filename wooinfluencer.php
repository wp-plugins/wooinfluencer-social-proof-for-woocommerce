<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://shopitpress.com
 * @since             1.0.0
 * @package           WooInfluencer
 *
 * @wordpress-plugin
 * Plugin Name:       WooInfluencer - Social Proof for WooCommerce
 * Plugin URI:        https://shopitpress.com/plugins/woocommerce/wooinfluencer/
 * Description:       Display real time proof of your sales and customers.
 * Version:           1.0.0
 * Author:            ShopitPress <hello@shopitpress.com>
 * Author URI:        https://shopitpress.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Copyright: 		  © 2015 ShopitPress(email: hello@shopitpress.com)
 * Text Domain:       wooinfluencer
 * Domain Path:       /languages
 */

/*
Requires: PHP5, WooCommerce Plugin
Last updated on:  31-07-2015
*/

if ( !defined( 'ABSPATH' ) ) { 
    exit; // Exit if accessed directly
}

define( 'PLUGIN_NAME', 'WooInfluencer - Social Proof for WooCoomerce' );
define( 'PLUGIN_VERSION', '1.0.0' );
define( 'PLUGIN_PURCHASE_URL', 'https://shopitpress.com/plugins/woocommerce/wooinfluencer/' );
define( 'WOOINFLUENCER_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'WOOINFLUENCER_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );
 
/**
 * Check if woocommerce plugin is installed or not
 *
 * @since 1.0.0
 *	 
 * @return bool true/false  Returns true if woocommerce is installed and active
 */ 
if ( in_array( 
	'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) 
{
	
	require_once( WOOINFLUENCER_DIR . 'admin/wooinfluencer-admin.php' );

	//add CSS & JS scripts
	add_action( 'wp_enqueue_scripts', 'wooinfluencer_scripts' );
	function wooinfluencer_scripts() {		
		wp_enqueue_script( 'script-name', plugin_dir_url( __FILE__ ) .  'assets/js/app.js', array(), '1.0.0', true );
		wp_register_style( 'wooinfluencer-style', plugin_dir_url( __FILE__ ) .'assets/css/style.css', array(), '1.0.0');
    wp_enqueue_style( 'wooinfluencer-style' );
	}
	
	// Check if WooInfluencer class exists or not, if exist then load the plugin template page
	if ( ! class_exists( 'WooInfluencer' ) ) {	 

	  load_plugin_textdomain( 'my-plugin', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
		
		/**
		 * Main plugin class.
		 *
		 * @since 1.0.0
		 *
		 * @package WooInfluencer
		 * @author	ShopitPress
		 */
		class WooInfluencer
		{

			public function __construct() {
			
				// called just before the woocommerce template functions are included				
				add_action( 'init', array( &$this, 'template_functions' ), 20 );
			}

			// include template function	
			public function template_functions() {
				include( 'template-functions.php' );
			}
			  
		}//END class WooInfluencer

	}  //END if


	// finally instantiate our plugin class and add it to the set of globals
	$GLOBALS['wooinfluencer'] = new WooInfluencer();
}  //END if