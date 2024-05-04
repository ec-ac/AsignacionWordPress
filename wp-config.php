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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'misitiobd' );

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
define( 'AUTH_KEY',         '1s7{Lhf=L(~|og.-QoU&wL.u?Pp^gL/[pp$KM!n7<&!5;Ij.8W&g$S}y%`-OMvT0' );
define( 'SECURE_AUTH_KEY',  '#/Yh-&>*q%#@mJSWd*V6T#z[gfC5lGC1#7?woW&sAy0+rO}==KzcAG{f0d$MXi$q' );
define( 'LOGGED_IN_KEY',    'X>vy>I#v^j%#?KL%Z:26 _:}tty<9Qe6%5M<=ou&GSS-kHooL)>|.L6V/PR7G2E`' );
define( 'NONCE_KEY',        '8En0J,Dvu^;$iA~~xI.-<#NfI/E`I@&XM)7b>z@MdK~NjD0)?a<Rz#hSf6hWEjf&' );
define( 'AUTH_SALT',        ')QnMI>/;UFBekQ_H0+fuw{R8M>|b{8(NPf1^CX?*b}|YIs#s4iY.D{t8T*N`Mt}3' );
define( 'SECURE_AUTH_SALT', '^(=VNk4Cfd}27&jhi>x1*O19xG|8E[Q+?_mxPurT 3*&_OE]woNdgt*gs$&ad)@`' );
define( 'LOGGED_IN_SALT',   'u$;l4UPlF|4jT/,Ph55-wxmF~v9amh?j^6%gd9m7nLuIPS.Wo^W]oL13Z|^!:8Z+' );
define( 'NONCE_SALT',       'rJ-pr-=z0aB|k@RldG;cg 0itraE_xwJZ}m2j.(v@ddVGV%RMs/gr+9P#Z{ws}Lz' );

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
