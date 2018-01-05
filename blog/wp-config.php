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
define('DB_NAME', 'tomlaefb_theblog');

/** MySQL database username */
define('DB_USER', 'tomlaefb_theblog');

/** MySQL database password */
define('DB_PASSWORD', 'S@8!rt17pb');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7gabqklirpe2njctohzthpnmdpnbpv8yvgsqxcnbzbawkz7lhtw1bwjppm9esawe');
define('SECURE_AUTH_KEY',  'ybjl3efbiehyogzktpgcvlakd2e8ibbhgccvnqyzrnkxggpcjqmhv55k8cnm0pdg');
define('LOGGED_IN_KEY',    'jzqimeyltfwjakylbvut2zciv4ywzozese2oikofpeosjq8oemr23ocnqyp7kdql');
define('NONCE_KEY',        'wfxjfxumkeusnfkauedurqz653lianja1qioehcp1tvoes4vgocgm5artcgezqaf');
define('AUTH_SALT',        'ylpunzxyh0z0cgaibkk2i5bawbevftszig6fyhjtgdjt8ijrmlzulgioauxo5pgi');
define('SECURE_AUTH_SALT', 'cwdkotyo7uhvu9twznf8fsgx6dy6fmivl1eu7u0hgpyo4p8ghdpayklip5xefphu');
define('LOGGED_IN_SALT',   'cncjv9xzl5oqygx6feefyssz0nypfnsd3srjxib6ns2ygrudmyni3hskplow6g4s');
define('NONCE_SALT',       'retmr9pucau8h6howw7hkm6xh91ecpakpz2ry40tbtjvjl8o85vtkrcm7vbv7tvg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpyc_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
