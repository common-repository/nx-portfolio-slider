<?php

/**
 * Fired during plugin activation
 *
 * @link       https://newexsoft.com
 * @since      1.0.0
 *
 * @package    Nx_Portfolio_Slider
 * @subpackage Nx_Portfolio_Slider/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Nx_Portfolio_Slider
 * @subpackage Nx_Portfolio_Slider/includes
 * @author     NewEx <newexsoft26@gmail.com>
 */
class Nx_Portfolio_Slider_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		self::update_option();
	}

	public static function update_option() {
		$date = date("Y-m-d H:i:s");
		update_option( 'nx_portfolio_slider_installation_time', $date );

		update_option( 'nx_slider_loop', 'true' );
		update_option( 'nx_slider_autoplay', 'true' );
        update_option( 'nx_slider_navbar', 'true' );
        update_option( 'nx_slider_autoplay_timeout', '1500' );
		
	}

}
