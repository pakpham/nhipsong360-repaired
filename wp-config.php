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
define('DB_NAME', 'blognhipsong360');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5h+8zelhg6z3H((&[L11u|{y,GHP%XfPO6Uc^ph!l-4NZED6,?[Qq.aYm2rcm.%N');
define('SECURE_AUTH_KEY',  'ECLTy0|F>>&)qlcmNi$r&sB3Z%>0|ryqJ[oL+=HoV4=4y{PR.i?bKc.-V&UzVtqv');
define('LOGGED_IN_KEY',    '@oyaY9kVv9ChK[bgdOICJGHRx&zlMWPyq_Q>4*yE#*ldLbZ*]CD3]hzL{Kzp[w)>');
define('NONCE_KEY',        'H<#;!5(@Vrqy)Hj9%av1)<8WQe_d;hGL@hVlj}0a>xyaNX+Rz`^gt^AF&Ylts]d|');
define('AUTH_SALT',        'XX<b@~2KzkD)vm!>$m<B?$b*[:knJ&2MQgj<Mw[;y@?|wOCo*`7_Br]%>|lJbI,?');
define('SECURE_AUTH_SALT', 'FIJ6Pt4W.:v)QG)i%S*Sy~sDteM0t4{)3%UkF5#&[[aS`k/Zu-_ZmY?7<?WpQM<Y');
define('LOGGED_IN_SALT',   'ruBCW8uX#3G_2(lrB]hlV}2Arecp7~4X@l8yvAO }i`<g`?in{5j7xi$Xv0;jDRq');
define('NONCE_SALT',       'czEU$s00bZGv#0c2>5dP$GX^X!1@Ar%HdGX7`i2$(ukiAA-Sg3D0~8(_EN|m0d>9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
