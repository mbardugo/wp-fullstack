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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mf_site' );

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
define( 'AUTH_KEY',         'kT)%>a1pS%06Rt4DDtnZ7>h;)t`9ZCs :/])(rUDMsO?(jD2}[[R:yjMdq? Dg}Q' );
define( 'SECURE_AUTH_KEY',  'cR$-$l(abi8srV<dg~+g;|`:?}6N#3jSrgX*Pyl9UQjr?E{=W|ZPZ/kuF!2@`u{I' );
define( 'LOGGED_IN_KEY',    '6_L$c6lPlMO8#+.*gh-rzC&G1q1A771$=fb6MK+cE(DO>0 t28TJK,q;>f:u19*n' );
define( 'NONCE_KEY',        ':+]545zQf; @`/q2^SNu<E%x$G>;=g; <E6!2k_eEK.v1vx@XSkD_KHI4x&`-x%S' );
define( 'AUTH_SALT',        '( hYLIsXWO&;c}Ta<Qi=z]@Frq j[Z|K7msC%)YGke(L}L00mOawRFYWbv`*xT,;' );
define( 'SECURE_AUTH_SALT', 't E?;+]/Pk9X[W)taQQ4pD jyt&nj%^[ RP@5iWRBS]R6ie5U_.m }7R>vKI{:C}' );
define( 'LOGGED_IN_SALT',   'mASrXN50te7r#WVwCKe1^v8rS~x-(, HT2<6F*&#,_9`c mjM-WKKMdc`#d3m#Cp' );
define( 'NONCE_SALT',       'f}2z<K%f42}{[R$HDntKg}Pt)o4a//{9CUOlr=D5JLjjKrhbW#vRc]+8Kc!t$>lT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mfs';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
