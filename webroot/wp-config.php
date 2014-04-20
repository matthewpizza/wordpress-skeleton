<?php

/**
 * WordPress config
 */

// Require server config
if ( file_exists(dirname(__DIR__) . '/config/wp-config.php') ) {
	require_once(dirname(__DIR__) . '/config/wp-config.php');
}

// Disable WP_Cron
define('DISABLE_WP_CRON', true);

// Disable Updates and Plugin Installation
// @see http://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/
define('DISALLOW_FILE_MODS', true);

// TODO: Force SSL
// define('FORCE_SSL_LOGIN', true);
// define('FORCE_SSL_ADMIN', true);

// Define wp-content location
define('WP_CONTENT_DIR', __DIR__ . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content');

// Define WordPress install path
if ( ! defined('ABSPATH') ) {
	define('ABSPATH', dirname(__FILE__) . '/wp/');
}

// Sets up WordPress vars and included files.
require_once(ABSPATH . 'wp-settings.php');