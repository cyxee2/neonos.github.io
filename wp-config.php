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
define( 'REACTIVATE_WP_RESET', true );
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
define( 'AUTH_KEY',          '$:jyi5AHBIH20p&{SxiIqB4zghGm-Rk#(=A?.[vz&>*I:,YpdOAj5M*_pr4nV?Cv' );
define( 'SECURE_AUTH_KEY',   'cLf-d5?2{%DYewMp =$V;g[OkkZy^T#4+HDyls@v=p,XPc!Mzf_f}-gCe}xOvy3q' );
define( 'LOGGED_IN_KEY',     'h.`-X~e($HDtf/C{i5)&K4@435[p{@&Q:*&x={C##T,*8H0Kk,X>7wVT(4bEl#`m' );
define( 'NONCE_KEY',         'wO*Z zu:0;xo396L=wZVb_Bq=GgnG)%^$QDifQ(Oz],8Qr6rL}Le}(=v0GV=xdNd' );
define( 'AUTH_SALT',         'idk`9.d8m))PS)p(YghRUdP`N2>%;WdrKVn<Js,0/H{xW`|z5<R),z#hpZwqi*_n' );
define( 'SECURE_AUTH_SALT',  'pP7Evm_`nqu6UkEGK9$IpLf%NiH,Yf5@>^Se8#5qgy>6s9^utVtHao!gI7+_=.vU' );
define( 'LOGGED_IN_SALT',    'ST$YJYrma}6t*&s!8?1/Hf={yq((N%Um6>Dy>aRmF)@aQik_Ix ),4e9BRjD$ZwH' );
define( 'NONCE_SALT',        'bUH.##cktTnvXyR1q}-jn_|bLH:7/rssCX$SEoH[Tkd+J-<&Sxy0/2&+RTb/--<!' );
define( 'WP_CACHE_KEY_SALT', 'rO7gS59iiO]BzmddV88>]3S/9#%1n@wirf d=T8TIi1V&4w]}4Fzt~^/*?7fUO4.' );


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
