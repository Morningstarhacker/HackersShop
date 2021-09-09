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
define( 'DB_NAME', 'HackersShop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'uoure3^IrRHx%&EGw^aD?I0?u(X1=,XG-Why?}oB;#H9U{r6Bp{f FP@1C|j_Zz]' );
define( 'SECURE_AUTH_KEY',  'U45,eKZTf0Vky2a%a@(3v*Yp1.42ADjLLKxtqw{.hmo07T2BS3bH@N12fiie$RLc' );
define( 'LOGGED_IN_KEY',    '!Q?E;X?u@:Zb=Hhe~uo8[T^-6/a9$4jGcj2ath@~[cgk,JU<uT7lUtVsw,Yt@-:%' );
define( 'NONCE_KEY',        '9!1&>aUJ/rj5;>iPX}Qlrf^FhZkO5^rl_.1N&pSc%|~9&(zxHuc8=7c?L}ELcYg>' );
define( 'AUTH_SALT',        'zgk-_[Js=69Die%?5D!Q+/RO?Jz:0^mQODWgKjQA=w}}BHrz## <+t2=6/TImfjs' );
define( 'SECURE_AUTH_SALT', '!/eUPiHiFl4?1cL&Y{z#e0jXdVag=ml<c*^r41.~AcUbUaj9<c*Zz<<`0_)gdlNB' );
define( 'LOGGED_IN_SALT',   '+ij$J4MkrVwx2T(PNlfK0<mD6qh,39?z=Q.k#iEQ.x<*j4?<eVZJC=3R+U6:.q`-' );
define( 'NONCE_SALT',       'dLi4CFCh?h1!qO,Fl.i//t0?H,w~|n}]l[hrd1sQ!IL[?R2?+`4%i);vNZv~RbR&' );

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
