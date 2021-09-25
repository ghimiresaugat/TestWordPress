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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'AdA%o[rfeXWCF[V_IN-h^m=o7O-j9zhM`Ip} fm^/O=A=j66y)*YHQ/Ld.lbABNr' );
define( 'SECURE_AUTH_KEY',  'AH%D3i4%O4b,+|]x}SiI>dF;Wy7!Oo]`(~Hxc=<bj4|S|-e7&oTScR)W!=52s%iJ' );
define( 'LOGGED_IN_KEY',    ',%NeTC)V$=yURgI!A3@Ydf#|Z<(%j]ODuQY6W e+|CIL/kMD=53q-34<x/W~CZ}*' );
define( 'NONCE_KEY',        'n;pT/.u(jX9PFe;<D7IXi0whs)Cv@Kcw}$r7Cb((iKjo)#2WSFSV.u7]bk;|bDg{' );
define( 'AUTH_SALT',        '{d^wQ-}N:Hr#W%u(gymSJM]~xy>/5 I9j/k2X$ICv/C(lp8b!/oX(sZ_r$)G{,DV' );
define( 'SECURE_AUTH_SALT', 'Z_SZl@^(5LeBKSL(7hQr.G ;]vfgL/<;xL;GjZW3XhRik[L$[wD dW7 M%;*&r)U' );
define( 'LOGGED_IN_SALT',   'La,6d+zW-0<A8UHpe{W)M_K21:ENi9VsUhBmrd[WEBzGzdSP%[?5$O3DdI#&cI;_' );
define( 'NONCE_SALT',       'V2GFh,MHHiDVl.V2F?oKVqh{jF[jqAX()1aIF>32%WlTr?ix(>fL}:sQ1/MTOqN&' );

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
