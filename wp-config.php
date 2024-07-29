<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         '(G{^5FEO[(c1-3(}ZUQtAr*;//7/qC32O2V$[n8r>S(W;K`WRieK0,*peaJXDE^S' );
define( 'SECURE_AUTH_KEY',  'I$.ce@{zj,thQJF%Of.N<Q%c,E<![L)t=INyD!pE8Tn|wk/rjR%fw)IW|rpW-}^O' );
define( 'LOGGED_IN_KEY',    '}(,3~0{%OBrQfq*N!@APPB6hL 0-cDgTc>J#cIauH]*q3eXG5oNca/]6,Q#CTNMp' );
define( 'NONCE_KEY',        'LuP!{PkS-_f6nNbU2RqoB=iYflbS<GXe;}=9]iyF1~hWw3*kq}zryXv-+D}~R<a-' );
define( 'AUTH_SALT',        '~pv/#sBG7Gq7/ta2vb}mx/>!CAp8Tb0kY0>Hm4fDr)a:1W/xnE)&q$>:JH,@5U+)' );
define( 'SECURE_AUTH_SALT', 'IXoHUf6]p4d#-?KH9z4n WkChZB9-~XUO!g@bI&fN/jj557#e#9`05B$hv^ZO?T*' );
define( 'LOGGED_IN_SALT',   '2vWt^0TgqKu9fAeFJxj~B_oF!O )l4kl7fuMK?`EczBIbcd/CPO:_1=P]kM>!Z2=' );
define( 'NONCE_SALT',       'IphU^]bh5&uh!h{eWbEkYwaXPwBDpQ.zu]~0*L|j)uq8Ygsscd_%vtSCobz^1-8%' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
