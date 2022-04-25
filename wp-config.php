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
define( 'DB_NAME', 'ac_consultora' );

/** Database username */
define( 'DB_USER', 'ac_admin' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         ')dE>J^y:tLj4[(tR$(:bDAZ{BB+jb)@sfOTMiG!/,x4fD95s@4D>d<V?mo^RnitJ' );
define( 'SECURE_AUTH_KEY',  'Q-&JuXuHz^ifqQZ66c#w:YOwN<uE,Lr}*UtE7/rdldm gD{J3G/ {Bf=D;E>j05W' );
define( 'LOGGED_IN_KEY',    '-D}K;:MJ4GQvnd%-Sj]5oem5f7kR%^i,PS~m#~*D~[38%Nfd=a^7t4,i)ih~hd3T' );
define( 'NONCE_KEY',        '!pP72.n3j9AXr%c6$`*p_Wg,Q7o+a#G~pRB7d1+=axkGq67*_F roCEN)|W}a3h!' );
define( 'AUTH_SALT',        '5XwC/(/<DZKN[G<T}fog#u@(+Ly x#0.ZmH{=~<wWlT.VAVC@a +`N+dY.M4=cn{' );
define( 'SECURE_AUTH_SALT', '*d}&oZ>iJh6qeHu:f:&QDzVak~gFnMu7*v^LPT# 9jl{vvKfy$$wHZ]SL<Zg vu.' );
define( 'LOGGED_IN_SALT',   'Go.@JY3YYp]>Dl6F~/QyI /:Y2|c`3|DI|~G_M]s/KY<d,%] si[.!lh[1&rN,w}' );
define( 'NONCE_SALT',       'w,|@/B(DVgOx#n~BRgh>YLui5j[OrK<:)K)1GZ8E;?*~r~*00/P$3itDim&Md.bZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ac_';

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
