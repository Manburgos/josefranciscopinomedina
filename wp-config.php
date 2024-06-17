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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ET+5m~@99=]6N`6l*EV:7;~Dtl).IXt5guP$&fKX,gDs%3$neK6Q{ltbO]~h6M]a' );
define( 'SECURE_AUTH_KEY',   'BP)^QwsnieDx{A4X__ayYw$clEm+<_GTe6wCkWMe4G L,MJ<]DpJS8{ iv_hFDF#' );
define( 'LOGGED_IN_KEY',     'K!6YrxhTxm3yVyh$aEmZA)Yv{Ij5c`&3}u8)MWshjbK!-m8Q+=~;QxS%xM$&WQn:' );
define( 'NONCE_KEY',         ';X?Ac9b),K$*!?d{ebzlkO_a~Y1~zX(<T/TUs=(KWV:UWS2Q<0E*4xVRs0q]lt=X' );
define( 'AUTH_SALT',         'K|=bskg tC3Jvk~wm00d}M(i-b*OQcxyjH&&*H(2prfUqH>)FU`?}M4*zq,z4iiq' );
define( 'SECURE_AUTH_SALT',  'oe0~o3dP+`%1`#SV`<39X-N2yYo.AG!D,2~NDne}oE^?G!L(:fCtAW95s6`>(-h|' );
define( 'LOGGED_IN_SALT',    '~pzfC}DwiKX>.V(W6SWIbNV( E}rv.1!$xZg:i&tnjzaR_Ve$//u9QUGpb^>/JBU' );
define( 'NONCE_SALT',        'Ti;w8wb.u-g7@4J#>=<cOnQ_0><8?nvqhP<d5flFhTTm[j/N<j6B}4{(KW]fg_C^' );
define( 'WP_CACHE_KEY_SALT', '@X!!T:n!)%Sc:5?1pf%^ev[=i!xpBnI)]Hqy|{|}CefvU709*@6f7T;2<Z]P~OZ~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
