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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'realmundo_db' );

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
define( 'AUTH_KEY',         '1J8gJK%%@3UMPqTWs?eCQJ~=R g4L@k$Z)?a(6.0cKpBuQ{u+~jLbeL_xhuvXj9i' );
define( 'SECURE_AUTH_KEY',  '?$~!Z JjL{B0E]9E`#<~LpdH=FXm#4Z88glENwH:vVd+)B4tx`7/?ytp[W!;~=lb' );
define( 'LOGGED_IN_KEY',    '4j(?W|V>BKK`5B,OZWrN<Et|X5W<d*Eofg`o!tbY>0>_R-!y )`ba+E<A6hxC>!U' );
define( 'NONCE_KEY',        'lI:aCg_LwHPrI[]9-5i0H_i/{Rz=)e$OkrsU3G%X>XkqLpN=4IQAX{*<0l/4P+P%' );
define( 'AUTH_SALT',        '`PD.PU|m)Dk@ZN{s^`) C,4aG(Arb5{^K&$HuMRH%O,-$|PXyVJ2vH4=fQxPnWfu' );
define( 'SECURE_AUTH_SALT', '~yVUdgs-xu55%[s,?!Y%io-R.zS5=,jeAZy;_^A}ZP[Kq`.E2[~_yCO2z6_Kt0s/' );
define( 'LOGGED_IN_SALT',   'n<BdI2zWOdgtKCZ6;xVp#$~D[_%fW!efL@&#/2>hJ{*/%y#_~wvBc<EG!q87J7)#' );
define( 'NONCE_SALT',       'PtI+KL,s)_cGG%m(#57[VMflWeUvp:E0E}]IwKD#&(kc#6m%[1PfX<L=WPd&$c;-' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
