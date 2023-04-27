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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_34091505_w301' );

/** Database username */
define( 'DB_USER', '34091505_4' );

/** Database password */
define( 'DB_PASSWORD', 'Apqn3S(4-5' );

/** Database hostname */
define( 'DB_HOST', 'sql302.byetcluster.com' );

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
define( 'AUTH_KEY',         'ggsbbjxqlhuzzwoumupu0g61b67sil5lg51vbd3osfnlsvqu6fg1dudsudgcy4mn' );
define( 'SECURE_AUTH_KEY',  'z6qbpwpz2ie5wyb1mp12np62brd0ciyfcgt7tzyorh3qeuzhphj1awniohuhfpon' );
define( 'LOGGED_IN_KEY',    'yyp6j31un27k9saph7saklgaovk0x0n3mexhegkl2a2ounxmb0so4tegflek7u2o' );
define( 'NONCE_KEY',        'eteam3s5c7gaejsniokejiyxdhez7mt6rnyxapfcyjjnqvivgkrfucugkos1qklw' );
define( 'AUTH_SALT',        'uod7vebhd4ejx0ufxjdkmjbx2somi4nqjqgae51y1u3l2x5bubs1bpg37vea8hpv' );
define( 'SECURE_AUTH_SALT', 'qulvmlzvfonqfjqjs23turzwmf0grn7ukglkzu52mopagipukausnjjajodgkatb' );
define( 'LOGGED_IN_SALT',   'lfejcffwuophdyre8phrksrvwveszozkfbpvdzh3usuvnhxzz66yvtngsf8jvttj' );
define( 'NONCE_SALT',       'vza51vpdids7yu2fyhf1yqvslaslhzq5cr18jn0ilvxg6amrvnma5hoybpt8vhjt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpwp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
