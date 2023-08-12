<?php
/**
 * Plugin Name: Enable Customizer
 * Plugin URI: https://wordpress.org/plugins/enable-customizer/
 * Description: Enable the WordPress Customizer in Block Editor Theme
 * Version: 1.0
 * Author: HeyMehedi
 * Author URI: https://heymehedi.com
 * Text Domain: enable-customizer
 * Domain Path: /languages
 */

add_action( 'customize_register', '__return_true' );
