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
define( 'DB_NAME', 'marathone' );

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
define( 'AUTH_KEY',         'U[T% bdH?Q+:=GCGQ{M7,3bq4r.SpzmyaL0&8o;:&2[T{{H&UI$SunO;7uBVfn{<' );
define( 'SECURE_AUTH_KEY',  '+Y-f)KkU=2z<80N_il*ivi{.d KvR`PE:ha5p 4,eL`xMjIkBrps6bIFSd>)EbOF' );
define( 'LOGGED_IN_KEY',    'EADVzr%Moj8gj`ApRt]@|Rl8&@|w$A8Wi?J-O;W2Y;nil]D(mPZDXw{bKa/Fu-me' );
define( 'NONCE_KEY',        'q?c@8IQ6{-Xs=I*VjHZV(=)lYh+<ZT#>v_SE{@Ks7_GS6Jq2{!pIKoO@Pd7}|eZv' );
define( 'AUTH_SALT',        'U-=A8G,~t=K<23]`nVfZQP@O:cO}Adm?L6KG*ZL^G5R)-YyCp==.$+&RP$x:|-Y.' );
define( 'SECURE_AUTH_SALT', 'AoS:YUC[`8mM|FMZ+<6Nfu;9Q&T;%OyUjo[1)oxzGhS?6kU04m@&!ft=PYyz-QHT' );
define( 'LOGGED_IN_SALT',   'o8~F9VnaSrEY+aqsp1>~a:ElHy]~/-VFy/}}K[>#00P3a0>l%2gJeNOvI;BN1Ixz' );
define( 'NONCE_SALT',       '4nuQ q_m`3x?_5bqn`EVQo1wusr*H_z;+=5P;.65.#%US{AjZN^ 8E0>B]47g{!}' );

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
