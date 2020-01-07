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
define( 'AUTH_KEY',          '[3Af[&yZ3<Z,/x}RC/nb*oqav]TH3Z}.dkO$K}&[iQlkg}l0RzKI?e0UOA)?u}Y:' );
define( 'SECURE_AUTH_KEY',   'p@N,p!4MY-#swWHF,GoA6i[|Esa|[!>L~R8W9<T85K} Q:v(r5^?j@F<G5cRKL=z' );
define( 'LOGGED_IN_KEY',     '*9V-|3u*@Om6V=&L(}IDl_=zkEACA<d+u$,BhIv:2:5a)pn#_sv:/sr),403%*u}' );
define( 'NONCE_KEY',         ')o!C<` g_nfRSoYvGH^-w7*Ix=6-0uN|?#w9f-[:o/#E_]XfQtJt, yBA..@<IR*' );
define( 'AUTH_SALT',         'CTrwoUIRNHzgrfWyn0M2p`m]68wM/!]`*DBpp%Bt6/OJxX@nSK*ne/]{My,3q ij' );
define( 'SECURE_AUTH_SALT',  'Sn|@zx$A3F^Xv8hCC@2ujh[GnP?ligi8r=GbfoI|SlYX<I|!0$>#D7dq7wU;/m/|' );
define( 'LOGGED_IN_SALT',    '#w ^,9*_VV^~b,2tabbb7iyd@kpk>NXQn@G>f~].{tjdtS{7gK@n}1eU4~/J/;cU' );
define( 'NONCE_SALT',        'DMR]L2v[:>cR/t5+ 5e%;vsdM-<1.GG-LQXMiZWUaCZ6Y~}<r1Xx!*8emIDm?TE6' );
define( 'WP_CACHE_KEY_SALT', 'X&dE6JtWk!+zqP!-B1>aAlZ$fr~Xuc%30rKlDmAp[D-=|?=8&}`b81+r]u*Pys#O' );

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
