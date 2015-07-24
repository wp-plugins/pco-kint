<?php
/**
 * Pco Kint
 *
 * @package Pco Kint
 * @author  Patrick Hesselberg
 *
 * Plugin Name:       Pco Kint
 * Plugin URI:        https://github.com/Peytz-WordPress/pco-kint
 * Description:       Kint debugger for WordPress - a powerful and modern PHP debugging tool.
 * Version:           0.4
 * Author:            Peytz & Co (Patrick Hesselberg)
 * Author URI:        http://peytz.dk/medarbejdere/
 * GitHub Plugin URI: https://github.com/Peytz-WordPress/pco-kint
 */

// Do not access this file directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Check version as autoloading is used here
if ( version_compare( '5.3.2', PHP_VERSION, '<=' ) ) {
	// Autoload
	require( plugin_dir_path( __FILE__ ) . '/vendor/autoload.php' );
} else {
	// Plugin is activated but nothing is loaded

	/**
	 * Output PHP error message.
	 */
	function pco_kint_php_error_admin_notice() {
		echo '<div class="error">';
		echo '<p>Unfortunately, <a href="' . admin_url( 'plugins.php#pco-kint' ) . '">Pco Kint</a> can not run on PHP versions older than 5.3.2 Read more information about <a href="http://www.wpupdatephp.com/update/" target="_blank">how you can update</a>.</p>';
		echo '</div>';
	}
	add_action( 'admin_notices', 'pco_kint_php_error_admin_notice' );
}
