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
define( 'DB_NAME', 'icmstp2' );

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
define( 'AUTH_KEY',         'bQ D$6zOJBsO}O5{o-IZUvTb9]>hpeETzc6Jsi<ZSKeR<i!#TVP;lEP=Ho:lZI;w' );
define( 'SECURE_AUTH_KEY',  '0h(Muy%armz,BqE^;SLy:%C^BhEn`FaaL<lZ]:e$em,e0WHQ;.36W<([N![RbP#m' );
define( 'LOGGED_IN_KEY',    'B){CI7Fi&P`!./;OTzjTPsFfC:/y&Mz3JsX=er]u6ivg[A_8Z.yJ0t .<uyqLI:I' );
define( 'NONCE_KEY',        '?s/.+P1 9Yu>.).m,RCtS+Mp)7*TFM(Ru1J2}l]](~&dbVwMqJW[77P|o8J(U5zg' );
define( 'AUTH_SALT',        'Xlp$:fMv~8._#S6k82.=2%YR<a%8>e:6FSE)2U}d:?!L3%Ho);i:Sw9AMxY6&~H>' );
define( 'SECURE_AUTH_SALT', '|,$=2)jhu?XHms&}QH2mQU?AXtl<bG|<Wxeja{oWhsV*o~PTrGN l;=w,Z!j1&/;' );
define( 'LOGGED_IN_SALT',   'YD5W[zxqO>:YH&aTE#Bg4G+U_N2&9OPqLjIgf>Uzn<K$>1X@LUK_Ckpd_cQTD*4$' );
define( 'NONCE_SALT',       'F~jFx$8]w=_puj<+A5 FA{n<gh(p(wPfIdem!oW/H=dh7L~mfmZ0M%bi9Z+e.l1Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
