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
define( 'DB_NAME', 'static_restaurant_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ' @7rbnvuRQDG1[a8xY%1)^w(Ij>5mO1D GV)XA]/W*QDXw^aQe9,4-w5OES9i3Gc' );
define( 'SECURE_AUTH_KEY',  '8l;9TeV&oaiByzhphToB]9&d|a<t%VBJCHmrt9#l=8IvH:d$S}BTW2oj_E1{=:t2' );
define( 'LOGGED_IN_KEY',    'iN5p0v)`9}3gyZx$XYiJ{xI&}`_1X|)>M]IUt23Er]B^&nsRGFUIA_L+S^ #w Dc' );
define( 'NONCE_KEY',        ':,h~d1l@;@9w3E`N93_-CZUM?&>KRgOOA;w88}cSMD%n6]WYqS_|4yHE Mk9G]4a' );
define( 'AUTH_SALT',        'Sn?FLp(zuu[+y9cla}_u^Y<CQ_#d},3m+t{ZAV`]NhYMb/{Y<cVsN^xD8d;OxKR&' );
define( 'SECURE_AUTH_SALT', '0a_{8N]MtepdZxX80Hfh562Anv0`5+c08$?_D7`V|_Lc c,s]Q/ud>=l!^*OpyA!' );
define( 'LOGGED_IN_SALT',   '1^gnbgM2*`~y/OV@gpv_kKbmA$%6$9Nu JHaR_O+x#NxO?W`N=u[4+E/D:;@Qz4B' );
define( 'NONCE_SALT',       'yjxGb.UizIb#V]fKd^K/I.QMe~_K>n8:[nebEAXUA t-c_},>f0xve=Tat}K&7HD' );

/**#@-*/

/**
 * WordPress database table prefix.
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
