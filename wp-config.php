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
define( 'DB_NAME', 'torre301_bauer' );

/** MySQL database username */
define( 'DB_USER', 'torre301_bauer' );

/** MySQL database password */
define( 'DB_PASSWORD', 'qweasdzxc_123' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'F?SwKk?];N@v.ntY)=tGC%-+Z3a=y0v%] M^z=(J(TTii;I!!Urp8}c(qb%cF(#g' );
define( 'SECURE_AUTH_KEY',  '9)b`*rpX%JgqLdGBSI=v2K`T+nlcSu)AIRp }Px:wOtA[Zo]9BS7bJW01[Emh}Sm' );
define( 'LOGGED_IN_KEY',    '>,?PMMBFh[*f>I}%^iB.j/*>c;1~z^t}g$aK!z;L53nB9I%9W5%Bv2U[MyK%[am1' );
define( 'NONCE_KEY',        'I5ZUMYqJ=rP6#_`-W7MKQyfs6:61x(hbKwTNb{*l%`!S<_|IDFzv^x`Hhv#A2bGO' );
define( 'AUTH_SALT',        '6Gu[b3@tZxhwv]!$PJSPM+^ca:8eU|R}OjN8.9nMU@Fg}zO n[h8 ya]!ZV0?@dR' );
define( 'SECURE_AUTH_SALT', 'PZMMB&K_!-Wgf 5Y|,[z#09u;g4^Q`E~}kFXZF~M8wv?ruhNV-4tpAfEDH#+kDL=' );
define( 'LOGGED_IN_SALT',   'KLS,:hQ{?bb[7~mJKe8uy)QXKrd8rPUmw8&j+q,%O,@7=9n>ifJ qJ;5d 6fwo8x' );
define( 'NONCE_SALT',       'sB[C+kU_Q0;[7o<zc:7>^0]X%c%8?b;&AllnaTA;(PKBzD|:%@d{#5DU!s<4 ]/4' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('WP_SITEURL','http://bauer.mihailshabelnik.ru/');
define('WP_HOME','http://bauer.mihailshabelnik.ru/');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
