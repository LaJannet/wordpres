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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresseng' );

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
define( 'AUTH_KEY',         '%X2eupmz.}HWr/X*i;P2MfamT]HSb!^X**X;J5Lx0hPiKV<g.A4-MIebTM7Ny&pp' );
define( 'SECURE_AUTH_KEY',  'TlV_QGga4zDd2nJM?G_X,*k)0v,+6:*?1OPAdMZgjmm?2,#WC9I^l3M?B`8nH[u`' );
define( 'LOGGED_IN_KEY',    'F.W7E?!p{(;.n/,5kwUG+>qkpa|_s%^|YX{^t$T~enS#-DQ78bnxImHVYHUC%{II' );
define( 'NONCE_KEY',        'w@b(~WP#]O6-M5B>:81Z|i_x.WS=3gkch@/l(wpaOnp.8Y}LN`fLtwi+hE(pj7fZ' );
define( 'AUTH_SALT',        '#wR^^%CX6W9V:Ni*59/AKf?XR6*RSIWl7<Bs)-^j5tHJ}d|+`h`<51ECEvX?JqUO' );
define( 'SECURE_AUTH_SALT', '5#3f~S]ksIUW#r2=^0KF5~H:xua<<+NK.X.yDF;%5}!7@DkNB:kwEt@F ]]2.IzQ' );
define( 'LOGGED_IN_SALT',   ']/.RO%pqWOwyspKb0;=r}s^!{u7]PffF #8% UhkG.o7w(7oY%<YA()7wV[Rv;5w' );
define( 'NONCE_SALT',       '~QpM88e>e,uwA]!qa|&0mQsFZMj6R.eQpla1QEq>tF3hUO@|[B9_)>U_l.JSR!4r' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
