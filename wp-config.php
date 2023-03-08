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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'main' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q!C!gESZg!<u. T%+1: E]fE`0pA~E&x*dX|5[Fp w1`;#R02,YtNZ0/[W;>N rP' );
define( 'SECURE_AUTH_KEY',  '$`Pp4.g^I3:Iy$9Dh1b* wz5[Iz1qW}0EvVZq7TL4|tm({;^5IfDo@/)TR>O>+j8' );
define( 'LOGGED_IN_KEY',    '5~egqpY) kCbDp6r}!{-fmt!F!!|wO{^:AGn;FBv4%VOa?3DMa2<RlMMO4KuN51G' );
define( 'NONCE_KEY',        ',jSi`z26ur^c|6=R|X3Du*C@;<w/#ySXj.CLL/oTdkxb^.%~pb=YU-1OYISz1p~D' );
define( 'AUTH_SALT',        '`hbTNU%3)_!V9|vN_?G{cY}{COPLgg1SJvaYLQIdn=UdHe@!9:.XC15k-or( lw ' );
define( 'SECURE_AUTH_SALT', '.6::TFxpOT<8.h2Mg0fgxLv<pmfBoJ=+Bv^Ie{uGMd_F!]d1~2wU|p(bcMke$+ye' );
define( 'LOGGED_IN_SALT',   'w< Th@s+h~>Wnybv-/z.F,/]~cASIjTMttuCCB|T^[r!5F]#c2{)Kd<,T~Nx0aX4' );
define( 'NONCE_SALT',       '{.4LB;-3W*#el#qS,tl4fUG`a-irEJW;tfh!JO:x!~BnX!|p#k7SE[iSH/m$*MKB' );

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
