<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //

if (file_exists(dirname(__FILE__) . '/local.php')) {
// Local database settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' ); 
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
	
} else {
	// Live database settings
	define( 'DB_NAME', 'globa600_fu77' );
	define( 'DB_USER', 'globa600_fiction' );
	define( 'DB_PASSWORD', 'WPfiction77' );
	define( 'DB_HOST', 'localhost' );
}


define( 'DB_NAME', 'local' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bt/d8BHqQnOTni3lJUdBKyJ+SXOBv7AX7MKrl1ihMHjEXkdFg48AE1IQ+Tuyxq35rRV4GPjvJbNd/Eppwuh9tw==');
define('SECURE_AUTH_KEY',  'mRMaEh+Xs1pSHemBvLyvo6Ukdfc/UHJqEHXb2dQ3fN7CCnfhg/ui+805uNviL7ukL15ij8XMG3jOiIE6xucWiw==');
define('LOGGED_IN_KEY',    'iHbhhgqlZmc7C/gDet7wYP8sRSf21ObJlfyRr4HtmP5fADKzWIdYNo9pC8tTsoDH6zU/Ixx7ixu9JBn0P2cL3A==');
define('NONCE_KEY',        'LZO1M/1kfo+J8uI/ObW9TzUUwqWyT+sGWNVYOi0+xlHziVqXVt1ETH6NZBAtPt1mBvLW9q9emJQ74FRePGTr6g==');
define('AUTH_SALT',        'wii7pijPwb2k6rqDxmBWD0Xwvuv7yuSRXHeUR2WwErMfJufs8fprL4awn4pfGyim9Ww+N8vwBYaX2viVuQ9sWw==');
define('SECURE_AUTH_SALT', 'abjCl1cU2npyMy18gUS0xVqbiZtpzRaQS8axn5kMIKwsCptMspfpvsFyMdagSvrfKcVv9rv0MqHOGee3J1aCNQ==');
define('LOGGED_IN_SALT',   'jUCWie/owoasgiZxvUgGJTfBe+wXOtaFEoV2B+W6EIKDqxP1PRLDiM3Xu34oVJO5Q1oHLQuuA3H3/38hQbN/Sw==');
define('NONCE_SALT',       '8WXaYk+nn4sCgIaRvkkAajZ38cNAv8GkpbXyOTqvZSilAfmxaAKRrdMeU7wiZTx14WYKEHzC+T4Q2vkojXscVw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
