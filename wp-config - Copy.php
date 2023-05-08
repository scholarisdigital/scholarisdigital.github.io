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
define( 'DB_NAME', 'epiz_34091505_w331' );

/** Database username */
define( 'DB_USER', '34091505_5' );

/** Database password */
define( 'DB_PASSWORD', '!e8Cp)S173' );

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
define( 'AUTH_KEY',         'd7dw7j757n9hrn8wulw58kbqplw4ifacxsyfl7qu3ym3havt9ncc25iq84g94bzy' );
define( 'SECURE_AUTH_KEY',  '5ikfyvsnbr7ozwxxm7leftwgacxfxplsutvo4guyj8xuqlgnczwpfyvz6fz66dx3' );
define( 'LOGGED_IN_KEY',    '3xu86wppb7nmtgjpx9krd5psndhwmx0djy3xqhmyz1li3pccbnu1a5hduji5lj9g' );
define( 'NONCE_KEY',        'zcq3xdqwktjvz9ioh0ob6lt3cgeyl1apueqc6fycomccxfnpp1cz8zpmdwhhetav' );
define( 'AUTH_SALT',        'i8ckrknlcrdt0x8gw6j4voysad4stmijphkvoyytekdxxg1elunlfmd35fyptzmg' );
define( 'SECURE_AUTH_SALT', 'j1ejeq4kzp7u26tc4gyr7o37pvhquctrecnwrmnrxrzbdnoi4dhqqm3j0xhsxn4v' );
define( 'LOGGED_IN_SALT',   'mzh1r9rwxln7ovsfgqr7a26fynxomftomtn1qyptbpbwadflha2rbrjexlermwja' );
define( 'NONCE_SALT',       'xn0vt8lx7fvub0eew9lzskaf4xciecsvjpnx6klqckiscztgbuarsz25doyftyec' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpj7_';

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
