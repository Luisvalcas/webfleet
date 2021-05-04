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
define( 'DB_NAME', 'webfleet' );

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
define( 'AUTH_KEY',         'muZOP%tvK+L<Y6nDq!Il-UI<OEBERjQt1-Q9Kz/RdytC3QeL0?>;*4u[-e}3#WZG' );
define( 'SECURE_AUTH_KEY',  'd/*WAmm3*V WF<4EjwMH.jBgL~5VN+n9cjh.k:DDmy&bUy~}-r:&3c n;Peo<,nI' );
define( 'LOGGED_IN_KEY',    '!G8#/H-V$kg%&L|+=+GJ27;Z[1KQ%D,i{hKY{~;(5O(r0Ag@?kG>k!LS7*b,wFkO' );
define( 'NONCE_KEY',        'u4s;{!.-ll-Hv*6fo[7ifysz!p^ _E??y!%**kq?nV5v5h!8?XnL-Ss .Q[C~f86' );
define( 'AUTH_SALT',        '47-d)6 yTlF3PdfA)@j#0PS?IvC>1(HD3H#$A|^8wRu{eqUWS.pWLb,]9]A6M}6-' );
define( 'SECURE_AUTH_SALT', 'JzJ*Lav8{94f[ pL._lyN$+UAB{_l0D`ExOol4sJ05-GA 3K>!jH0aFIshn3w}(I' );
define( 'LOGGED_IN_SALT',   '.NKd^HzcRb_WuxyTO H)?Z7ipxt1hF-Xf@l4)uC)GEgO*2_exi$4n50Y:Tp=ics!' );
define( 'NONCE_SALT',       '& (HJ+iAPLDTYYVud:LWkF-*06vdznR^x9V~TrBg)>8lz_*U6)1|EP7@{Za_k_|h' );

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
