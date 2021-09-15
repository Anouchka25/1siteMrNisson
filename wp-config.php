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
define( 'DB_NAME', '1siteMrNisson' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'imkmRNU9XWqrZ6jes4OGeEv8x5jan4WE5BDwTBa8eQOsQ6P0LjftfaryJjEyBi5s' );
define( 'SECURE_AUTH_KEY',  'kKLmWrK1DXYXb87YObskJlcff20orXNhNTMD86z3Rj0HwT8ONLg6FZJgy1fQkmZi' );
define( 'LOGGED_IN_KEY',    'Nd37Qrp6lasKvdGt519kBjjYYwWdldES5qgsdDwMrl8FHVElXVC0FiCAXVHUHqXP' );
define( 'NONCE_KEY',        'utIlxXXErYGIePUmtEGVuowGQXc5pSaxfmbT6MOm3TJCNijHF2vx39ko6RtvSyCK' );
define( 'AUTH_SALT',        'oyM512qGUnFQkZMB2077pBRoUmUZEYmgjHvWJurNEVZzO38TW5VfOvQGVOBDRK16' );
define( 'SECURE_AUTH_SALT', 'hNvI6q3vj8goGVpd9fYUbVCfMDQjrRShYyDtZgT7hCJXp13YigHuFwGCwl7Y0cZM' );
define( 'LOGGED_IN_SALT',   'pGXWm1p1a7ZHbCTPQBgF8f6W1Z3hRmJ7Vho9oyTnU0DVk7Y19gFxOr3n6kyDWr5v' );
define( 'NONCE_SALT',       'O3uNepmpt1gmCgu4BCxLnqQlJAfsmHBrBoZrmiCKzUe215M8pUtQaCAlRdApUcCS' );

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
