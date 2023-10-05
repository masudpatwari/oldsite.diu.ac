<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line
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
define('DB_NAME', 'admin_newmain');
/** MySQL database username */
define('DB_USER', 'admin_newmain');
/** MySQL database password */
define('DB_PASSWORD', 'Diu2009*)(root');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

#define('FORCE_SSL_ADMIN', true);

define('WP_HOME','https://diu.ac/');
define('WP_SITEURL','https://diu.ac/');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6~`J9TL8`.nZ8(s{2)*V$bMi~Y/B_.uvwz0(c@=!&Q*KrGJhg3@.@f@X7tRAy({8');
define('SECURE_AUTH_KEY',  'O 80%EMLA74OAm>Q;z>f14D/?cixGB)^kIdk(/=!sW4SaCEDfZXvT<[lbV#(]%bA');
define('LOGGED_IN_KEY',    '[ZGB7F-q+mC:;8,6Ows(Bs(MnJv)ju3UiTy+YuTF:L[+J+$z<b/VJ$U7 ru3LaM(');
define('NONCE_KEY',        'UbhZoNDG[5jWrZxPr!kUvgwQTq#P&S!K4,)ER5&rmniUU27/;!aH=lKp^h|24LW5');
define('AUTH_SALT',        'ux.%kn?jSqBe3-zA5z{t669{>z}GwJINK&H77,Z2JYudKZ^q59O8G7#O9($4R5~F');
define('SECURE_AUTH_SALT', 'CUF_PM;+N|/s$GmK^?J:8[H*8-HsC(&V_*gnRze0UoAtANCnE;i*EPQqw|Mr_/zd');
define('LOGGED_IN_SALT',   'jbnH )bX1[07Y{!:ot7+X6s.WJL%X6DnP3TBiNA$9!Me{jWikzwadY+pzX4iGmFb');
define('NONCE_SALT',       'z+th~]U2m&pl6z6hL,~?{`T1ex<MX<_O8,=5eMLas9C0595%0N3Lcne!#I#YoQ[S');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_du';
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
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
