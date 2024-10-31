<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://newexsoft.com
 * @since      1.0.0
 *
 * @package    Nx_Portfolio_Slider
 * @subpackage Nx_Portfolio_Slider/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Nx_Portfolio_Slider
 * @subpackage Nx_Portfolio_Slider/public
 * @author     NewEx <newexsoft26@gmail.com>
 */
class Nx_Portfolio_Slider_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style(  $this->plugin_name . '_nx-google-fonts', '//fonts.googleapis.com/css2?family=Syne:wght@700;800&display=swap', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_nx-bootstrap.min', plugin_dir_url( __FILE__ ) . 'css/nx-bootstrap.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_nx-owl.carousel.min', plugin_dir_url( __FILE__ ) . 'css/nx-owl.carousel.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_nx-portfolio-slider-custom', plugin_dir_url( __FILE__ ) . 'css/nx-portfolio-slider-custom.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name . '_nx-portfolio-slider-public', plugin_dir_url( __FILE__ ) . 'css/nx-portfolio-slider-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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
		wp_enqueue_script('jquery');
		wp_enqueue_script( $this->plugin_name . '_nx-bootstrap.min', plugin_dir_url( __FILE__ ) . 'js/nx-bootstrap.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_nx-owl.carousel.min', plugin_dir_url( __FILE__ ) . 'js/nx-owl.carousel.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name . '_nx-portfolio-slider-public', plugin_dir_url( __FILE__ ) . 'js/nx-portfolio-slider-public.js', array( 'jquery' ), $this->version, false );

	}

}
