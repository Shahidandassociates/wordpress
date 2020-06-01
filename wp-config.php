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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'UTj;GGAXf+OFEEmFUa2Jp_tr?hhZT^Ws3S7)Zocc8bNk:eZ+L.doT8]wA[C=)hDi' );
define( 'SECURE_AUTH_KEY',  '*1uIXsE&kB nY]@-P:4 ha7!w:04xfF?GjZ=9DGSK*ST!^Cqz#Ss0.Vk2R.=-<D]' );
define( 'LOGGED_IN_KEY',    ')nZkn?v&A-~br^F}L(om_E>?|={:Pk5;iHtqc{{<lowNG8)#JEr{cc~)v7Z2i%vI' );
define( 'NONCE_KEY',        '!tJOv^#iRHN8u@0n12YmF`%mR2@/O fWl/sw_7@?aMkf,}Ne6sn:,5Q}|,^@4wd=' );
define( 'AUTH_SALT',        '0`[ai^E&wDL3`o6(MZ:{*hKqC)~Gm,q.@=NDo5AtE9(dWB?4X n`C>~WbKQ256&A' );
define( 'SECURE_AUTH_SALT', 'z8/]@:S]+v8*FDN$z=k&!se,22-5xZT^|j]KAap[<cl3ZC(/Lp*Nll}M0aE01-^7' );
define( 'LOGGED_IN_SALT',   'c,S,Vj^`ct?p6Jt?R7%Q7F!Fl ZLZiKJSSht$=#0eh)RY3QN5158}wECQmG?u.Y~' );
define( 'NONCE_SALT',       'Ag-4Y))~!wL]lA2O](@vl4x(+qtZsYCe&!viSxk~#rsF95IS<TEbT!JTTk~]L2=J' );

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
