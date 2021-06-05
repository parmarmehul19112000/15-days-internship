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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '>/?nby]%lP052{>*+z_VqbwEcmjh!PkLH2s8fD!0%!^Z)Cs29<W_aFl-~dUS@$Tw' );
define( 'SECURE_AUTH_KEY',  '%!(>#A9U4ZPKp226x[1>VLJ]_eZp;ygG{J+f-x)pKR{w`p,,(v^-9+p*eQ_ar[lF' );
define( 'LOGGED_IN_KEY',    '@eKERdh<BZJN|%bAi6y#[8@zNNXHtf#C|u7&h4m3m)9#!@8!X .?)Ln?ChjQLS>6' );
define( 'NONCE_KEY',        '.P~Bt)lVDIMEA0Vn0Sv[:i5(C){L933SRK^^;R^{-359/B~!|XgK>Hp-N-}XH>1H' );
define( 'AUTH_SALT',        '[7II.dDqkf| AWF!q5WF8 A~t;x>>9/RW<V12Ft8Hfhe49?r8c}Q-Uv|c|:oS/Zz' );
define( 'SECURE_AUTH_SALT', '1o:Xc)qx8!`80k% %<M8nx;&Vmo&UU]-Z6?T-}}XPu6x).)(!)CdVAA]]lz_>oyn' );
define( 'LOGGED_IN_SALT',   '$cE-Pk%{>{x+hi7AC%YV)_= CF?cL&rl:vJh,diV53kw}lVhvBz)2q.8_:F=oor`' );
define( 'NONCE_SALT',       'R73vR,3cfmaFF7=*Hb=J=<[,/atv27),-#/dD!:!$vZ.4|>PXA.m1TO@yWhAvLh-' );

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
