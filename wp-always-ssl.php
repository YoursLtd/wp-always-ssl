<?php
/*
Plugin Name: WP Always SSL
Plugin URI: https://github.com/YoursLtd/wp-always-ssl
Author: JointByte - Aidan McArthur
Author URI: http://yoursltd.com
Version: 1.0
Text Domain: wp-always-ssl
*/

if (!defined('ABSPATH')) exit;

function wp_always_ssl_init() {
	force_ssl_admin(true);
}

add_action('init', 'wp_always_ssl_init');
add_action('admin_init', 'wp_always_ssl_init');