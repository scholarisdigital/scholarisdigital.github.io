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
define( 'DB_NAME', 'scholarisdigital-localdb' );

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
define( 'AUTH_KEY',         ')oF+_rzTV&hOX|CUR<G26c)h%y5:3G&blS|[hZ>([&%8LQ[ua{ER~!{yB>J,EJ P' );
define( 'SECURE_AUTH_KEY',  ']N@/6SnTRI:f^w11m.C*,ghPerF9VhWMo|XFl +X7AW|EyVr9gs*lV$`+>;,EAq5' );
define( 'LOGGED_IN_KEY',    '`N2-K!g5FgYD|Gc>PE&+7_=0>j1KHp?$4Z*P:]z#?ZhJVM[J3%yN)JC1>w Sgvsq' );
define( 'NONCE_KEY',        'Tap^rN9>1uGg_]{6ZW299_2|U!b+&-4*x,9l3h.)XFa>qMx?[]!l1Uq1?@BtK&;:' );
define( 'AUTH_SALT',        '!v%y*s L`}],]7JZ:O7SBH7!:oj.3[5HXvcx=<CYoVvJFMs@vY@,.(Ckp2yHRv>)' );
define( 'SECURE_AUTH_SALT', 'zt[/;R7=>;j0G%q 6:&:Nm/Iy{orMc]~*%,&~w(QJLv0pMD_wNlGvK[{O#W2J040' );
define( 'LOGGED_IN_SALT',   '$p5b]H,1M[J_lzYudFH)7YOq)iF1cYi}ah5v*s6p,=-_d`fX*GX`yWE1PD{I;EK8' );
define( 'NONCE_SALT',       '?=]c;:6Qx{PKS#2`(S<a3Z[nzcA0&%:IYb*`x_:#a20$#IB:uQZW_rn`>oW#nw7.' );

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
