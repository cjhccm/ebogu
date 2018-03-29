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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kp1xs7ts_wpebogu');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'hajime');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'zqzu5wq7ezuyg1rxd7mchkzns7o3hvimxtzz5r9ctcutbhszi6dtmm0jgsqsmejc');
define('SECURE_AUTH_KEY',  'anwhtrwwrev2qkx7ij3kkq662qa6swrbvuqmcykk7jecdpdfzt8nxpujsvmut4mg');
define('LOGGED_IN_KEY',    'ogcb3o0rubarykbithptlqpmawnoajcblpowauhgq6h6bguqxubieortwkwgthif');
define('NONCE_KEY',        'swyhatjqzbwuomfeenj8vji9hhagl2ju2yscgns4megjrslvfqflk4fgbppxxjiv');
define('AUTH_SALT',        't0iyaztbazrlbsjfpgif7isokoxkg6ojn3yzocu8zptrskm5bc4vvq6xmicormzd');
define('SECURE_AUTH_SALT', 'f5m6eovenhvnoop0xg1hbtke4vibwrxcz64ue1x14ihkuhwmd79r72byu5lsfqip');
define('LOGGED_IN_SALT',   'llhqgvrmbobmfzmw6xeqwsefpu1nmmupfds3vqt3jc3dff6ytbcwq6nk3wtqpqw2');
define('NONCE_SALT',       't9b90pgtts3yepjue3gc2wyp0roxzc2koj2ecwlswpcwb4igka8jutt69xkbk7s6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.e-bogu.pt');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1); /* not the site, but site collection */
define('BLOG_ID_CURRENT_SITE', 2); /* this is the primary site id */

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
