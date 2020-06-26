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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saajh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '05Rk!V))G<c|0(cvbwfOEvB*_)!If9*E;s-.Fw kTOVD1*WccJ=w/VSR^bLGYl)[' );
define( 'SECURE_AUTH_KEY',  '=C@;;+IZ8^;VDK/jyw-X,;d/6&0(`E$>op+ZcN#rgc$R-`$6/W5Ym_gx^mxI+nft' );
define( 'LOGGED_IN_KEY',    ';vbA<>V<F~jTK54I+D~LO2XRaYRmUav{7~lj!!5*%qz-~#eTT#e$?d@]9Cx)C00R' );
define( 'NONCE_KEY',        'hkZXdagfQK2>BF5EL8Du^F(Up+<woY5E$xA*>aeu3rAj]lP||5.t0[ ]9Qq>L[#M' );
define( 'AUTH_SALT',        'R+6<i@=]=QCPOC*ga@X3)wlpobX0~S(ds`X.6 {u%qF{U[),iQ[ODJ7^jW=iuw>4' );
define( 'SECURE_AUTH_SALT', '`nl-xWCMmQT0}G-t+aL|pJv]hT+u%hxCI:Lzbby(~$??v* @NIFY/XnU,6?:=L-T' );
define( 'LOGGED_IN_SALT',   'F/Xoe+<FOFY6:>f;~rO(=8TD#kT;X~;;RnLUa!dOl2X5h{Bp!r8QoM$w4)GCXHZ,' );
define( 'NONCE_SALT',       '1b~|]4E|G( VlBYP(|}O7QyhD;:6WB%c[xcM0mR;<l~J8#Q6Bi^$qgnwDX@,<h_P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
