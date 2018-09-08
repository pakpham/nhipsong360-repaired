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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/opt/bitnami/apps/wordpress/htdocs/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'bitnami_wordpress');
/** MySQL database username */
define('DB_USER', 'bn_wordpress');
/** MySQL database password */
define('DB_PASSWORD', 'b7c75b2d47');
/** MySQL hostname */
define('DB_HOST', 'localhost:3306');
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
define('AUTH_KEY', 'fc9a1d0d95ab00ecc8ca80be2d1d0c27f1e5f2f6590ef460bf104f97b1b307cc');
define('SECURE_AUTH_KEY', '110d0e8b0ff451e5c0de5dc340de7ebc2247c9fe2a617a11c23206d65b86a0b3');
define('LOGGED_IN_KEY', 'ad2d8a7a146e7a8884c90351ca3000c25b53fe6bc011ddde502596c14f4bd346');
define('NONCE_KEY', 'd168e9b56adbc16cd455687ce68e943b2a3ce0330dae41d6c735d6de04cc0dad');
define('AUTH_SALT', '2fee739df599dabb971c4928beb93926cfd56f910a01b7101304321149210650');
define('SECURE_AUTH_SALT', 'afcce561cd633daf8063a4b9e5e39bcbf8241144e1173c13c397ab5e5b331f87');
define('LOGGED_IN_SALT', '23d8efe2a5b69c279f7441a94f39adc19b747b727b6031771fea2970465aa6df');
define('NONCE_SALT', 'c076c9855b5746137ce9fdd122095022defbcd03f26c09d746e57460366dca56');
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
define('FS_METHOD', 'direct');
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','https://example.com');
 *  define('WP_SITEURL','https://example.com');
 *
*/
if ( defined( 'WP_CLI' ) ) {
    $_SERVER['HTTP_HOST'] = 'localhost';
}


//define('WP_SITEURL','https://' . $_SERVER['HTTP_HOST'] . '/');
//define('WP_HOME','https://' . $_SERVER['HTTP_HOST'] . '/');
define('WP_HOME','https://nhipsong360.com'); 
define('WP_SITEURL','https://nhipsong360.com');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');
//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/?page=apps&name=wordpress&section=how-to-re-enable-the-xml-rpc-pingback-feature
if ( !defined( 'WP_CLI' ) ) {
    // remove x-pingback HTTP header
    add_filter('wp_headers', function($headers) {
        unset($headers['X-Pingback']);
        return $headers;
    });
    // disable pingbacks
    add_filter( 'xmlrpc_methods', function( $methods ) {
            unset( $methods['pingback.ping'] );
            return $methods;
    });
    add_filter( 'auto_update_translation', '__return_false' );
}
