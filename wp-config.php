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
define( 'DB_NAME', 'eyepax_test' );

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
define( 'AUTH_KEY',         '@d/_?!p=zxZcO/-HV=PLpbt&@G Y4*qL`wBQTo?h_|1vNSK~89UjbZKVER0.s0|3' );
define( 'SECURE_AUTH_KEY',  '9n36bMC,3jv{}`g#he;C^tNr6m;/Ln;foFKE980Q+@OxTx,Mz{wZe^7L#.-fa*!>' );
define( 'LOGGED_IN_KEY',    't,2.85Gd>|C#i*54Wn08VsmE&/b;%zV3,9wD@FXSk1/db]ttkv;5[&U-X6Iuz_ok' );
define( 'NONCE_KEY',        ':BM%bM/1jQDR<QP!+W`BIh,m+`Wq0n?eS1NLpx]0>D@alPa0&WY7<#6qMBs g0{`' );
define( 'AUTH_SALT',        'O4@tcqrVSA+s|FYC;$q?$ML2*J9z%]Vj):}=;q[W=.<t{/M=-9Ps?eFBk]b(m*bG' );
define( 'SECURE_AUTH_SALT', '.!m>T#~ZyEAA~7`/3Pq6#WJp `kflhoE(9U7O19^$cC2:V*v,rX ~xzS9RFd/c{ ' );
define( 'LOGGED_IN_SALT',   '#7F4W<kcJxCbZ-griI&!SETz|Al%hwoaMNN_QKl[Eyx`Y7?@%&g&D $2e#Ke&[5*' );
define( 'NONCE_SALT',       'G*b-1.8!%JUv_V~y`9.8,O&,FF~gWGOKun?s[V$}6|2Fi7y]IdnPi|(rnc-fMNAW' );

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
