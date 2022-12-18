<?php
/**
* Plugin Name: Awab Elemantor Widgets
 * Plugin URI: http://mohammed-tarek.top/
 * Description: This Plugin For Elemantor Widgets .
 * Version: 1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * License:           GPL
 * Author: Mohammed Tarek
 * Author URI: http://mohammed-tarek.top/
 * Text domain : awab-ele-widgets
 * Domain Path:       /languages
 * 
 * Elemantor tested up to: 3.5.0
 * Elemantor Pro tested up to: 3.5.0 
 
**/

if (!defined('ABSPATH')) :
    die('You Cant Access This File');

endif;

/**
 * Register  Widget.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */
function register_awab_custom_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/simple-card.php' );
    require_once( __DIR__ . '/widgets/nav-menu.php' );


	$widgets_manager->register( new \Awab_Elemantor_Card_Widgets() );

}
add_action( 'elementor/widgets/register', 'register_awab_custom_widget' );


require plugin_dir_path(__FILE__)  . 'inc/index.php';
