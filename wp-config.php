<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'divi_shirish' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'JJQ45SxCwf,K:feqDwMZ}1Vd CnARO#}Z:~WE+2zx@FsCP2imXj}m04AtJYxvr[^' );
define( 'SECURE_AUTH_KEY',  '=EKzK?dIi<eZ|]*LGQOS=opyn6,JQG4A!1)c!/0V*{ZN6mzU-H48HcUsrq*ZNX2r' );
define( 'LOGGED_IN_KEY',    '$v.]@,O;k)Zzq9fW`gRhHG6tmd^1}MW/U7?3sh%}C;I}AuTvGfSdC-EeD%x]$)Z0' );
define( 'NONCE_KEY',        'z8vTBjmz}{T+Ka?;xhe;Dy)9%[-a6lQ,)*^h]HdpX-( |Ey@Oi wQzF<*i>.h(jM' );
define( 'AUTH_SALT',        '0h%oC78]X#N]R4:5N]JQO??[Agi1fw6lJ:8 jVds~>A3rz`vn}`FMW^oviE&>i=c' );
define( 'SECURE_AUTH_SALT', '?vJx/7r(T:w+;Q/rnt[>Ky@Z_5~v[$ON6&:]8>sKY 2z)aWSj&#^1mIQQk@D71?U' );
define( 'LOGGED_IN_SALT',   '074%`]B7K&0>MXsq27%xCcp}tcco(@OZ 8jW+b}<,UL?&~l7]?%RI|+]!+N<+|oE' );
define( 'NONCE_SALT',       'pc{p>%@qo+(=]/<%|+iXU?R>|}`qX%W ](8F!$PE($cZ(yI{w$UyS*#(*/I(Y=.s' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
