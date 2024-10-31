<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://newexsoft.com
 * @since      1.0.0
 *
 * @package    Nx_Portfolio_Slider
 * @subpackage Nx_Portfolio_Slider/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Nx_Portfolio_Slider
 * @subpackage Nx_Portfolio_Slider/admin
 * @author     NewEx <newexsoft26@gmail.com>
 */
class Nx_Portfolio_Slider_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nx_Portfolio_Slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nx_Portfolio_Slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/nx-portfolio-slider-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Nx_Portfolio_Slider_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Nx_Portfolio_Slider_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/nx-portfolio-slider-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function nx_menu(){
		add_submenu_page(
			'edit.php?post_type=nx_portfolio_slider',
			__( 'Slider Settings', 'nx-portfolio-slider' ),
			__( 'Slider Settings', 'nx-portfolio-slider' ),
			'manage_options',
			'nx_slider_settings',
			array( $this, 'nx_slider_settings_cb'),
		);
	}

	public function nx_slider_settings_cb(){

		require_once plugin_dir_path( __FILE__ ) . '../admin/partials/slider-settings.php';
	}

}
