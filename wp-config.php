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
define( 'DB_NAME', '7v' );

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
define( 'AUTH_KEY',         'b9w,a8r.A+DYmK2vJz4nod}VaWt.*W2KH]#Q82_MnfJ^3lmVhlX!O?q#}()Lui g' );
define( 'SECURE_AUTH_KEY',  'L~Q{$G.P<,B<*&sD?o%o :%}c5_KvC%GF1lGTU]1i_ESXw]x:Z,S{ 8vF%.xozc=' );
define( 'LOGGED_IN_KEY',    'GZ-,m@+49Henp5(9mPR>P{x[%N~KM; mi@N<?mmW`JKb`JNVFi$&+:]JSM^VJ&c6' );
define( 'NONCE_KEY',        'ay5<x!#9QKA`[A|at<(UPgmCoF-3Ik^u^p34lBQU0t*0`a%~l`;[Y^!]9|Kkhg$A' );
define( 'AUTH_SALT',        'VB4xbk@H=d;rSa<j+vZ=o&Y*#o;PZvw,Q5XPySzUmWQ3[tK-E+0+Bj53>6|<r<LD' );
define( 'SECURE_AUTH_SALT', 'eE#Vmq2jRUP{3d:44Zxmy;MBzs1ydUl4lh.vx,zu/DjNf}cro30xm<ol &M?DB-a' );
define( 'LOGGED_IN_SALT',   '?ymGSS`,+Il5z8jsnX_nJs[,s0C{LNDY)YAt(B>Cf`/$-L<jq~JU{WWI;_bC~YWm' );
define( 'NONCE_SALT',       'fIbY]N79MizV0ULKw#0>=V>&:xY+}&|XHiBcaFC<wobVz?yW9,%n42+Wq,OJKx+H' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_7v';

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
