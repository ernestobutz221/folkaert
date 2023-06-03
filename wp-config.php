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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'folkaert' );

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
define( 'AUTH_KEY',         '7Q/#t!nR|9N@YmqkFH,iW:>MhRhb0as@YPgW_I00f:u7gs{I1|KPm(,s<XH$bnPd' );
define( 'SECURE_AUTH_KEY',  'sS%UKGV4To-d1?KssZ$X9Js*}ZwH,[79*GW@p]<A:oJ~<~1O:[q^0iN;-w_pkaZ0' );
define( 'LOGGED_IN_KEY',    '!-606kHN5(,AYi7Ys_]uMm{5puVo1_k=hrq.U`_GFp9a@uYYLr=-bJ/*UL23QF>&' );
define( 'NONCE_KEY',        'rZ+7Z hIK+Y(zE#:W96?OXl(omu|5)lS))9-s?_^hD79~,bjA>oM`/aa])6i7;[:' );
define( 'AUTH_SALT',        'z|$KGhEo5qSHh<ZxPr+T/a=p^=Y62u/@$$#_8BOjuh4b@y]2X`k`u@l,K9`*wr+d' );
define( 'SECURE_AUTH_SALT', 'p.wz+U-I595=%!oJ1W$Y;v[7s_61~CjZS_;w*e?@|{0Dx(%4jt|d-4Y2rrGf`MTN' );
define( 'LOGGED_IN_SALT',   'dk/jb$yIH+omf5[z]pT,CR2GuI?=Y=@B[scqEW^$3h#,A#&DR.|UaMm&?[Vlo@?*' );
define( 'NONCE_SALT',       '= q4s/ RSlqs+lc*-?uIG9[s|ra& cl$3|Rt{Ss1*q,/HbB,IdO~Fl-Mej_e_3in' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
