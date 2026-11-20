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
define( 'AUTH_KEY',          'NBSnSKalk;90&=R^5hHiKlVu6+IFM6/? z}=MmmAQpp<q@GG!EgNOkS%l*`@d:N3' );
define( 'SECURE_AUTH_KEY',   '4R;SZLS$/b69Sdb<o&6UUH&x{j%B{3v(_~z-IS!gRbepD6XX[2?tc}/Y-Is9E{Zr' );
define( 'LOGGED_IN_KEY',     'PZ5gXl~)d!SC;n-5LE`5:-GWeQM+d<iSa|7RO!OR=fMrwH6NsmnIsDQ,^.mm>Vty' );
define( 'NONCE_KEY',         'acc>wiD1]TobZ`4~E#%0( `W6.>0UZy@j1nc~j@m|t^{UiKjf$.{QJKnn,q)jWf<' );
define( 'AUTH_SALT',         'b.m7U<rNH.8]h-dXqD|15d=< (:TYLa84mnCr@+1YS*ca@R8`pt[wPEAb>f|y9qT' );
define( 'SECURE_AUTH_SALT',  '5y]f=kT|o>1V4H>dS;*4TjGN<Fa_/Q1n*TDC?sBuuEQ!9|vpl%76MnWE1xgKER?Y' );
define( 'LOGGED_IN_SALT',    'UClr4% g4|@`w5m55;%E$RsawV!=2:#ZC&)(51];ko~B_r)8  pDA}xiF-Sb{+xI' );
define( 'NONCE_SALT',        'tnTmkO@5(0Gq!_[:h!?=7z|FW`z0M8EYOK hE)l5pN&_>%Ps8t8l_+6QR#}u@R`#' );
define( 'WP_CACHE_KEY_SALT', 'Io@sp/unlOc#M$$(5d?k~R4e0g&z-ASG4w.:oLeo/Qdz.ZyQt~m($oHrk{Y`p!]1' );


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
