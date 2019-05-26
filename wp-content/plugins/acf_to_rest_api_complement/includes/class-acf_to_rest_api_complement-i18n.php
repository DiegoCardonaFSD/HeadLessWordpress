<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       thedeveloper.com
 * @since      1.0.0
 *
 * @package    Acf_to_rest_api_complement
 * @subpackage Acf_to_rest_api_complement/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Acf_to_rest_api_complement
 * @subpackage Acf_to_rest_api_complement/includes
 * @author     Diego Cardona <diego0123@gmail.com>
 */
class Acf_to_rest_api_complement_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'acf_to_rest_api_complement',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
