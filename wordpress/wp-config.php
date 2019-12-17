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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'eQ@%;=vW(!N%HU>MQyC&:A3_Xb]P6:9D|rx dxGH<3n&}n)nj1_D^%(0Sw$f}<Ye' );
define( 'SECURE_AUTH_KEY',   'V!_Pg,o](esp8Une)YBE0`P%LU|Yml=,AtguZIkq3_nfqfqm^0-@Jsd}y+l(N},(' );
define( 'LOGGED_IN_KEY',     ']>5Uhb}zy3H,}:EO))d1-jKyz.7cRc4H_*X(VG(Wx_OQz/(h{5>Xk~vqy,+/Bxyq' );
define( 'NONCE_KEY',         'w&pXLS.xfq| >~ ]n1:R9|bmY3>-[n~v)f;L?]&DLf/$9$#`0<>^ul,Y#^ZUf5O:' );
define( 'AUTH_SALT',         'Wyo//I4/hs&I_FC@+isHb{ti+N*N<e.6phZGq%aF`A_3cXMm>Nqkw#un.c6XaW K' );
define( 'SECURE_AUTH_SALT',  '<,([?XDgi26+ MVJTbkt`X2 #nb^cBX7hc-|Ne$w5HO =%pZ]UC>pxa0tSBBXB[-' );
define( 'LOGGED_IN_SALT',    'Y[W:*]>9<I^]L]*w,K2MDv)M%$GU$xapW1/DhZl~dRA=#E@wtS]jlDuFDX<u9tl+' );
define( 'NONCE_SALT',        'o59jC1oWa384Svne?O%sygS?G9Gh<R<=MQPa&bRaW$If#3,^kcM{1elc6Oly.T1n' );
define( 'WP_CACHE_KEY_SALT', 'l2uKV3h=(g/`,gqsmqCgPtX]xei#D^!UX[1{MsPUA+hU<(Vb32Y|`&x&+upp$!,b' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
