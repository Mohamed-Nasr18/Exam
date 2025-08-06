<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Na*T4o2I:@5v,$J+a#z~ 3B4VLaw]<r;+?BUT#uX[/:-61-x,|rBAV8c(cM;7!95' );
define( 'SECURE_AUTH_KEY',  'Ai(_N+~|({FIeGO(VzGi_Y?,Rg]WqVX]q:YM1Le;fGuIP;-*w&m|GewiZ<.*3]Ea' );
define( 'LOGGED_IN_KEY',    'wORFQrNo,a8W_PS;8I3Vw&Duo`^8/mUjVS}Vt+:@l=9Q/gOxaH9gc%m2lep#;j@4' );
define( 'NONCE_KEY',        't/vV8ANTn=o~Cj3Ar#azC +$JX<?ow2080e#;;O.HqyD MAW%Tq:#fB>t][>UM:a' );
define( 'AUTH_SALT',        ':AF3lS`gZrCVge#/T[enP31Vs!3wySH;_y0-!zScKkG95]aAKU1kc6QYfe%6uOT?' );
define( 'SECURE_AUTH_SALT', 'u4|v9 EVJ0g0R;g`G&6S152&N5p~6lf+_,~!v?Zk8 $.{yR5(lcPV(ZVuvK{h[]R' );
define( 'LOGGED_IN_SALT',   'l:{v%E*CZTFWX?B19:*dPv(HjD_LxS!=g[H&y;X=Dyl>/#[K !p@0@Q?7P{2r1y=' );
define( 'NONCE_SALT',       'A2WYd#JL<o<(7A{a(z>g[tK<E#h~[Y0AlRa`H+?|RK30vnNK*;#J7/7g=@|>>zEo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
