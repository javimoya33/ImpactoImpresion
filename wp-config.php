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
define( 'DB_NAME', 'cnhwkgf761' );

/** Database username */
define( 'DB_USER', 'cnhwkgf761' );

/** Database password */
define( 'DB_PASSWORD', 'dgUinPDXhdq6NNKC' );

/** Database hostname */
define( 'DB_HOST', 'cnhwkgf761.mysql.db' );

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
define( 'AUTH_KEY',         'q(>-+@7p?|vBlR[)m_z|k }W}+U`tfH1Gxu]6#g)xh4iIf1DFNh}`lm3=T! fBYG' );
define( 'SECURE_AUTH_KEY',  'y2xiDbSsxC%Uy]jEr#j2(o.`Soul*Y<6x5UJ&wRcwd^/wM^v@l&n*T8{cnEHB^?@' );
define( 'LOGGED_IN_KEY',    'mq:c@;iWqD[N64b9ne]w`v#w~V|YU{/;zr+;}T>%t^8K^6=>y;S|$tk+T :((9$p' );
define( 'NONCE_KEY',        ':=uR==z|8N*9:aTdvILVBv4-/k.^ME?B2oI`e.2]p3eWZfs5:5<DTSi&6,,)+<RG' );
define( 'AUTH_SALT',        '/%qfGBC&I+`vkAw_Lt6W%b3q_s,C~bKEOE)>~LA.rc.1:oxMl#4_CW6Y/m[PwVu2' );
define( 'SECURE_AUTH_SALT', '*8!94$t`/ttenV6bQ.2NoaFRObIc(H1{-s3Mw)],F|my-d@?#Gj(?5WV_H2vF0j6' );
define( 'LOGGED_IN_SALT',   'qJ@w,Q5407`b)#DpIeh `hO<!l?D@(7-kxSVv7BCf[R+QXk 1ZQDozqe:$N+Rz#W' );
define( 'NONCE_SALT',       '|e-VA>I<4}d?H7<E*GCNZU5Eb^C:6qzJGsAJ;@,M1q;q^3=Ahs,{A2-h?<V!w,yM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ii_';

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