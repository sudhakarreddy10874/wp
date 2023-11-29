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
define( 'DB_NAME', 'ksr' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-wordpress.cachjod6cth2.us-east-2.rds.amazonaws.com');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'x~+c/r=i^FnJG%Q?pL&F.;Zy+etXr.6b6@%/OeK>aj&51f3_V9G}uZ&Kh9+d]+?4');
define( 'SECURE_AUTH_KEY',  '#+tNz9KN*nC4ByPPYcW54x&hi234F+2co*ixoog%9_=#Na>rzJtuZ0FEk:vXvdc6');
define( 'LOGGED_IN_KEY',    'gN6+2ds?K%r{x5CG|h-I#{K}v)VxUd8h(*Y 0cLQV|BXt}A5lmUMglm!zcz-<gj<');
define( 'NONCE_KEY',        'jrDhd?-eRc!Je2UQ.[I;-zLF}94;)gl|||*?E,{6`QRgljMU78<V<l5|Nz6>msEA');
define( 'AUTH_SALT',        '1j{zi#;_Sm@&_2ov`ahB:L$)PKg/8.G(vCr}7GsZ%5Zat]?a?l{6$vyN:dVQ2?Jv');
define( 'SECURE_AUTH_SALT', 'lvY}guE9Yi-,R(|V[Bli&hXhn<j)WusptA9dUBV2COh;QUSn7o-)85{GkFRzqWI5');
define( 'LOGGED_IN_SALT',   '$c6FVG L41hKO+SDM~G-bs|@1wZZ}>NEXG$FZ$_:|Iz0%9OYlqm-0Ru[mISP>}3,');
define( 'NONCE_SALT',       'C:)^jar<c^)eR%]!k-P :b%f cur<9bSdirE1fe?ZUc~vLhriGRPvTHg]Z,-v,zR');

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
