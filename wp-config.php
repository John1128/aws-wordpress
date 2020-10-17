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
define( 'DB_NAME', 'bitnami_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'bn_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '17507da303' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' ); // localhost

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '1f7e77906726defd8673bf9f8b8b6e967949b41968f7ba8daad2f1d02c8ff5d1' );
define( 'SECURE_AUTH_KEY',  'f9dd7d4a06a5ca74499f1cd4137b4bb65215ac726cdc68ef7ead29328eb5be62' );
define( 'LOGGED_IN_KEY',    '33875a878bc3660b3e26995422e055e1aa4985a0a8fd5fe5871caced6872b3b0' );
define( 'NONCE_KEY',        'c88439e11b898bf8d198316e3ef13a253f76784cda9a295b87b8b46762bdd8ee' );
define( 'AUTH_SALT',        '44cd27ef47f110b5f6ae5e2247f79c913e41a0a6a67cdd330926de2894430e28' );
define( 'SECURE_AUTH_SALT', 'ed5cfa0c2cb4e438bc18772c3ff314555d4557efd8bd05a99c123887455070c9' );
define( 'LOGGED_IN_SALT',   '66622ba290ee3481dc398502a2d478b73e5d62d9d61df383cf4e0c95ecdd8ac3' );
define( 'NONCE_SALT',       'fe8df81485825f19dd20d3ef15a7b3d25817907274e3e2452492ad5a715ba3df' );

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
