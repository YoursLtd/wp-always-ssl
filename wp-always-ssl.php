<?php
/*
Plugin Name: WP Always SSL
Author: JointByte - Aidan McArthur
Version: 1.0
Text Domain: wp-always-ssl
*/

if (!defined('ABSPATH')) exit;

function wp_always_ssl_init() {
	force_ssl_admin(true);
}

add_action('init', 'wp_always_ssl_init');
add_action('admin_init', 'wp_always_ssl_init');