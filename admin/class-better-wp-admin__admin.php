<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Better_WP_Admin
 * @subpackage Better_WP_Admin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Better_WP_Admin
 * @subpackage Better_WP_Admin/admin
 * @author     Your Name <email@example.com>
 */
class Better_WP_Admin_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $better_wp_admin    The ID of this plugin.
	 */
	private $better_wp_admin;

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
	 * @param      string    $better_wp_admin       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $better_wp_admin, $version ) {

		$this->better_wp_admin = $better_wp_admin;
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
		 * defined in Better_WP_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Better_WP_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->better_wp_admin, plugin_dir_url( __FILE__ ) . 'css/better-wp-admin__admin.css', array(), $this->version, 'all' );

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
		 * defined in Better_WP_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Better_WP_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->better_wp_admin, plugin_dir_url( __FILE__ ) . 'js/better-wp-admin__admin.js', array( 'jquery' ), $this->version, false );

	}

}
