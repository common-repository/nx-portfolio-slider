<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://newexsoft.com
 * @since      1.0.0
 *
 * @package    Nx_Portfolio_Slider
 * @subpackage Nx_Portfolio_Slider/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Nx_Portfolio_Slider
 * @subpackage Nx_Portfolio_Slider/includes
 * @author     NewEx <newexsoft26@gmail.com>
 */
class Nx_Portfolio_Slider_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'nx-portfolio-slider',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
