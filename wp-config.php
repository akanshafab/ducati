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
define( 'DB_NAME', 'ducati' );

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
define( 'AUTH_KEY',         'X?~$ s)PHl]`NFb^>H@Sd`V3XbiT,-$to!>I_jB;f,p3s~Xv&*qGb@0@I~S1{]tG' );
define( 'SECURE_AUTH_KEY',  '3t4SOig}wd1VO h;>?&XsL]j50!KrY:g+Tl1>.?F<0}9V}$l83l:z1W;K/6YwRT9' );
define( 'LOGGED_IN_KEY',    ']W^k-DJaoI4hVX<EN,!U1$pHi df>hXCqI>g4.0V1boqZXqPWr+!TlU#<wCQk$6>' );
define( 'NONCE_KEY',        'L?&T&NH7xw2/P#TF-Q 1U:{-CtB}wyF&I@Q/!`cKf9e@(U 2#{(m4w?VCw;~vmH~' );
define( 'AUTH_SALT',        'l[B;~HiwH]~qj}>g[AKW%(-7<YZ=% ^iuMc%1m$i~`Ug?zU7`Ja,h+Oz9dFVe|0X' );
define( 'SECURE_AUTH_SALT', 'X/DKQJJ!Sy+.5yW5Nj<WJTzq5.iI-} 2.:)3r)x,5KzlWiTN_}gP5WJq;h-o(:&.' );
define( 'LOGGED_IN_SALT',   '_]gr#&@LWn,INKQ| 5p,<P3bSZZ+=+V)twA$u=7fqH0:64aB.(ZlsOQ,vo[+hSh$' );
define( 'NONCE_SALT',       'Q>?C-V.WM,$;g@_SA(_W.7e9C_$uJVZ&.C n>xgT`A}<$!3;Wz#!GtC(h;&C>:/l' );

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
