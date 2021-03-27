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
define( 'DB_NAME', 'estsb' );

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
define( 'AUTH_KEY',         '4:lV+Kc7M@r{_}V`iJ2Z A;PPhOQRq|gI~%o?*>C`^i@n<43#A:nFV}$W8ufD2wV' );
define( 'SECURE_AUTH_KEY',  '<@g?@8PHreU%2U=L8<$ng^BuuE8ZPsPHxYai<a/ZZ(Wcd?Rav};<PbN0bm2]1KYx' );
define( 'LOGGED_IN_KEY',    '3X_{gRsoQ9-Xc63E]3 y*XRv>YA@eZ9!MjO#s(/fF.LY0koPlewTjwJ%Z?VAY@=.' );
define( 'NONCE_KEY',        '9;{H-.fAM;wT)A%XF6>7]w==uUmeg! 7mb0C$XdHn(nNv,^~,_dRg_LsM&_o9T6+' );
define( 'AUTH_SALT',        'F%dCA;L*v&x)k&H#mkkDbDs%BbKX6>$Lq^By]TpEu6UoZas/E{b|z)!9z<1FlWeM' );
define( 'SECURE_AUTH_SALT', '5AW#tgVn O/bsUFji!|f2eb^%@w/k<NxTHSuf-&!?/T]7/Cd}^h;)5?7:7O_|YG/' );
define( 'LOGGED_IN_SALT',   ',h8UE/%hwVK,,rLnkxlj+vYa#NwWXmy|NaqFafcE3UjJ7@WU7iy.Hy;d/XQ_r!*c' );
define( 'NONCE_SALT',       'U9W{JF@2oJaUAj/j.hVUyXv=nf#BMo5h%_sjy8T#t]u<T:=TZd:lQYYfo*2##B[E' );

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
