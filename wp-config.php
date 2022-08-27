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
define( 'DB_NAME', 'leophix_db' );

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
define( 'AUTH_KEY',         'QRBfkQB`Q#@vc&6Z(Q#1gU?{q=C.B21VGCc?sT[eq|bCGW.t{[<x=xDyA3)uuImi' );
define( 'SECURE_AUTH_KEY',  'tYPcxV8mD$,D=,FuJr+%SdqjD{O,Sa~rtmzl)0jyfXwjuN%;5zdjw/U7D^G I&},' );
define( 'LOGGED_IN_KEY',    'bV(C7[P2iob<Hx{>b.9^:Pb]x,3%C,KRmrV=rSf[(Y,_);Svdxy^#raMs9x;5;+1' );
define( 'NONCE_KEY',        '^1Xo.jW{5vJetc~ealI=4!kPUb!4@WeeZHr<_/2YjdOna27k|Zw{q+p_h u#uqRd' );
define( 'AUTH_SALT',        'E61Gfs4q_93eO{GqDAK-rrRgl}8NeH#pX<fOIB^T$]u9EbntEmr/V=gX]-`iSYGW' );
define( 'SECURE_AUTH_SALT', 'Ig1CcR>p%z rl 3p,#B!|{r{$N>@.q6Rzw;Kz`*Sb!/#-K-3g:pK~XelDQL0q_04' );
define( 'LOGGED_IN_SALT',   'X[&H{)XPzK3= OL!{;PesIzRIycL*H<q o&D<f>Am|?AUj:&GW6RKUn[,8ea`v&t' );
define( 'NONCE_SALT',       'moil<|fJ,>ehqWpyoR=C/CVuB4{N|&|hLU$mNEeW8otf4>_Z_s0Em0@])XXRiAAF' );

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
