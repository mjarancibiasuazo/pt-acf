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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '4_idPkvGl:8Yhq}k5U_|Ote5H(M$2V[jjS$V#*]5{j~{!#$SsEkM+nP)nlIfRk}!' );
define( 'SECURE_AUTH_KEY',  ')2sG@<n[#e~dBd@@aP_uCiM}!88>~a5%pTC@&N(nNIx(0A(E( 6h){>eKlV<0_7a' );
define( 'LOGGED_IN_KEY',    'AoV:RB#)DAJh[I_>e/A6udGcifnbOV7k(+GAEW9|6Bk,jzmR7i@DARE_q,UE9HRg' );
define( 'NONCE_KEY',        'KU$1k&1laXNTXr)|^KiQRLD1KdOi!;sO)c{RJ]=t6Q-|xDTl-10KB{[RTw_kht88' );
define( 'AUTH_SALT',        '|,DBqaUGLsLhEdS&jTKc`h(4EQkBh8e:NdXC9pmqodHOX!Ama.nrJjDkq}$p5+8_' );
define( 'SECURE_AUTH_SALT', 'Ahb2uC,V-j),B}4|AlvOLg~tZTqI@wg8B>yTlT#|T>~%Q3a0jaSALU#Spjr+rboP' );
define( 'LOGGED_IN_SALT',   'GmCFd33wl|&~PF_nFj#[rNLZuYLllJqE4`xIe785/<D!2M-6@8(}NX`c]9]29o+}' );
define( 'NONCE_SALT',       'sM[y0#C3,VB.hZs!-{7AtWd^_ Fen30>lk@>xemp/_#-lidjw6mEke3(VH(Be&Q=' );

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
