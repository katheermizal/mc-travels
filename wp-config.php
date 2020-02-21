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
define( 'DB_NAME', 'mc-travels' );

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
define( 'AUTH_KEY',         '1d?B/ p3ng!k,U- F?c*,K:LNT~Ms7&!t3zm*G&dH7~C>n>U&vt^M.+YWZgCuV2A' );
define( 'SECURE_AUTH_KEY',  'puu7.LdvroP Ro,Qrhy3x$$Ns:RFs%}Xs&zP3EO:$e *^>mNawOfDCpdpghxeWlO' );
define( 'LOGGED_IN_KEY',    ')^&MP=4tn*4&ck.ts$`U53<hqg%Uu.ktmnCq6sw_5ek4)kWw@*1Us*HeZS~`5TgO' );
define( 'NONCE_KEY',        'CBwq!aQSymW@%mH8~W8~u1NLia=TNhU`ve}FFgoe1R}+?b9^QIOxq<[T&E,18vM4' );
define( 'AUTH_SALT',        '~5`2lC=pN~C~<LRL^RuBB{k)Nun<fBh#0[Up>lv#g<Z5pu}HM`.Z|^Iz6$[AVQU/' );
define( 'SECURE_AUTH_SALT', '}yv^W/&M|^xSRDwN,wMVa9T:5ecuuo#.8v.&X3-WRzrQ;H~/MlQVD:*_l6./AQQk' );
define( 'LOGGED_IN_SALT',   'Z!c%B@8+y1btXVx{,^,;`WN.;JRm{j!,P>$ne3LY^5DZ{gfjtlKbILESNai*zzIw' );
define( 'NONCE_SALT',       '$3R-SMdK5r-?7~+fv8?`rMfe-:FFQ^K^*wLaKNSDn;-7z7vmP8&_7!<.j5Qw=QB^' );

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
