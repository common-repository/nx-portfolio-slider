<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://newexsoft.com
 * @since             1.0.0
 * @package           Nx_Portfolio_Slider
 *
 * @wordpress-plugin
 * Plugin Name:       NX Portfolio Slider
 * Plugin URI:        https://wordpress.org/plugins/nx-portfolio-slider/
 * Description:       Make portfolio, project slider without any coding knowladge
 * Version:           1.0.0
 * Author:            NewEx
 * Author URI:        https://newexsoft.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nx-portfolio-slider
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'NX_PORTFOLIO_SLIDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nx-portfolio-slider-activator.php
 */
function activate_nx_portfolio_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nx-portfolio-slider-activator.php';
	Nx_Portfolio_Slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nx-portfolio-slider-deactivator.php
 */
function deactivate_nx_portfolio_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nx-portfolio-slider-deactivator.php';
	Nx_Portfolio_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nx_portfolio_slider' );
register_deactivation_hook( __FILE__, 'deactivate_nx_portfolio_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nx-portfolio-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nx_portfolio_slider() {

	$plugin = new Nx_Portfolio_Slider();
	$plugin->run();

}
run_nx_portfolio_slider();
