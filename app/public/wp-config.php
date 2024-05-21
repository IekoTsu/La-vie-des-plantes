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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '4MXHa|2bFu_yNY#j7hSM``Z`(a+E9nWLo&3Hz/)e|yWaY&}K(_;JR~bSc4:+gB#d' );
define( 'SECURE_AUTH_KEY',   'kd*A[eFp7X0Yjs!7PRm3tZ^3ThytrpmRV@/1F@B~|_{Ui]mWRs9&$R.9+,E>P[7z' );
define( 'LOGGED_IN_KEY',     '0(Nws&9I7rpS{o>+q7|i`Lr[k::z+q7nVm(MUD(QSYq_*dIdl^v :rH*_ f$~pl5' );
define( 'NONCE_KEY',         'GS5|YRZm=4(5g?)@^{{p$t >Q[sP%qyW;=Ym`uUU<99H`iu)_S.TMRHx,x*C>(=_' );
define( 'AUTH_SALT',         'pB^6{K5Bc[m#vRLwxf<iOaf!GtDe^| myrY .ZRh(AGgIdA3GnKy]]-Id/utp&2_' );
define( 'SECURE_AUTH_SALT',  'h.>[AF/)O>a.VT`,.(R_&a%.+;~X=LVOkYk,ksz#7QIQ^Yeu;iI2Z1^+PliQOljj' );
define( 'LOGGED_IN_SALT',    'K`g]~sye(RoPh}t(LMG(w+{em|~9@bz;]$W{C4Yeo;4xcVW{^]zsV4oIg>fhIJ5~' );
define( 'NONCE_SALT',        'F,IxcgGIa |zm1|6)uB&sowTFf4I?cZ%*vP!lZQzj[H2?b@Ke9,QEH$-icebHB6@' );
define( 'WP_CACHE_KEY_SALT', 'tL,9tkKLZ7!/45yK6:p`Yh`;i#IM~c3M{7AP,c$7A<CWf`;UC2joa#~Iykw@6!P9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
