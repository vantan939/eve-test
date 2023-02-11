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
define( 'DB_NAME', 'eve-test' );

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
define( 'AUTH_KEY',         'lhqAF+oZ:1]ua;]zYi0BsO]%}EfOH=}QTAIhd}Q(V`Jx4`zI3Eh6&4ax7v4`,Z{m' );
define( 'SECURE_AUTH_KEY',  '<rA:hWC08|DeuAxNIewR|FdD5?j^0rt/%v|I@c#q=rb[]H<hH s@x{xoH&~pe&m0' );
define( 'LOGGED_IN_KEY',    'k83|xkU1Ha,<DOf*SaIyOx_SAf$b&q*2~aN#9<J_oUO!=llUXO>}Z:nN%]<0m8S[' );
define( 'NONCE_KEY',        'JQHvrbQ54t(-e[RCUDu>Q~>IM[f+,Yg+eOx%N[BAD=qMO{r{I:C_%:<sA$ho$)(p' );
define( 'AUTH_SALT',        'bDutzc3t|R`(-~~G;,Ws9}2tv1D5i0M4NdHAfDaO%4n/>Zn~7Z0>AZkK?. J1|ad' );
define( 'SECURE_AUTH_SALT', '^8]{e9sB2ALqS{{rUZ#d.Dz;rmZGmpV1O`5Iip*{)Mn9CiVpg-jAEto<JUpX,$*_' );
define( 'LOGGED_IN_SALT',   '^vT:XM~_xtCH?EUr#NBlDQk]A&+4.IS_K$~XJD0^.>RZb a}]C}a^!e*0d*>.8}x' );
define( 'NONCE_SALT',       'fjMK!},@ue&pIG5xEy#Hc.S4/$xYNXK|RV5H,pROXG_UYvn:_C(87E.cVT<R$N*P' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nkna_';

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
