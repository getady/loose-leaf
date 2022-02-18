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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~IVken*e/6l})+ISqa<(JZw ?@v6y7qq_l:zY*Rc{kkZlP(>j;*Oy,fSbWh*$=x[' );
define( 'SECURE_AUTH_KEY',  '!Y_i~GM0x5.}z<0u[b`Y2Y$mph )sX,s^*zaixfMUK$<R.^az|H^NF*D@> %iID)' );
define( 'LOGGED_IN_KEY',    '2bh5;,GXkfqs+A[$sok|]/%G}8gdyG?~s&>qkRjv_L#B:ffT8?ro)<Kkio>zOntE' );
define( 'NONCE_KEY',        '3:0:O9C1re>UY$u7[URV8xk6ERLgxxZU{!S<Vu<u[YX+e,m:RQ5*V3;<Y93+8]2&' );
define( 'AUTH_SALT',        'n!^uQ3$p,gmd%;yb3Xin*#!]m)vY1Oo4vqh[qUT[aKUX@,g:A+P0aaqV>^hG&~Mr' );
define( 'SECURE_AUTH_SALT', 'rqw27smRHFR|4,zr{EUFX=`x`L#V<lbkpo2]]m~#cy1HkN}a9`$Qj!_v.yDZ/L^p' );
define( 'LOGGED_IN_SALT',   's(_6Hw,VW)`6Mgd7nCE,}X({DUFdWp3?l`zJXmd+,3^P6EVHa4tHNqw~R#_$;SNy' );
define( 'NONCE_SALT',       'x~NgqA#DU,wKT`3}=a!E~*~PQ$A}|vC?LX$^wT.ti*B0tWDo`v:,8n`?syC=zS4V' );

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
