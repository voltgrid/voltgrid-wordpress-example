<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Use Environment variables if they exist (Volt Grid)
$db_name = (getenv('DB_NAME') ? getenv('DB_NAME') : 'wordpress');
$db_table_prefix = (getenv('DB_TABLE_PREFIX') ? getenv('DB_TABLE_PREFIX') : 'wp_');
$db_user = (getenv('DB_USER') ? getenv('DB_USER') : 'root');
$db_password = (getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : '');
$db_host = (getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost');
$debug = (getenv('DEBUG') ? filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN) : false);

// Salt values
$AUTH_KEY 		  = (getenv('AUTH_KEY') ? getenv('AUTH_KEY') : '');
$SECURE_AUTH_KEY  = (getenv('SECURE_AUTH_KEY') ? getenv('SECURE_AUTH_KEY') : '');
$LOGGED_IN_KEY    = (getenv('LOGGED_IN_KEY') ? getenv('LOGGED_IN_KEY') : '');
$NONCE_KEY        = (getenv('NONCE_KEY') ? getenv('NONCE_KEY') : '');
$AUTH_SALT        = (getenv('AUTH_SALT') ? getenv('AUTH_SALT') : '');
$SECURE_AUTH_SALT = (getenv('SECURE_AUTH_SALT') ? getenv('SECURE_AUTH_SALT') : '');
$LOGGED_IN_SALT   = (getenv('LOGGED_IN_SALT') ? getenv('LOGGED_IN_SALT') : '');
$NONCE_SALT       = (getenv('NONCE_SALT') ? getenv('NONCE_SALT') : '');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $db_name);

/** MySQL database username */
define('DB_USER', $db_user);

/** MySQL database password */
define('DB_PASSWORD', $db_password);

/** MySQL hostname */
define('DB_HOST', $db_host);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         $AUTH_KEY);
define('SECURE_AUTH_KEY',  $SECURE_AUTH_KEY);
define('LOGGED_IN_KEY',    $LOGGED_IN_KEY);
define('NONCE_KEY',        $NONCE_KEY);
define('AUTH_SALT',        $AUTH_SALT);
define('SECURE_AUTH_SALT', $SECURE_AUTH_SALT);
define('LOGGED_IN_SALT',   $LOGGED_IN_SALT);
define('NONCE_SALT',       $NONCE_SALT);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = $db_table_prefix;

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', $debug);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
