<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'PracticeProject' );

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
define( 'AUTH_KEY',         '|JzEISJxB_o_7e_XW~#39TwB2t!.}uvCy^^! mx%[P2&{rcAN5OM3P`<puR-=t1:' );
define( 'SECURE_AUTH_KEY',  'xDpI7shJr|^k6|rKs*%KnC#60o|~JE(lpvAfz2hzu?(yrV !}{*={o`<FV!+4h<1' );
define( 'LOGGED_IN_KEY',    '5u%zT9`ei*}|EPJn~C.&./O.gGXv8_$#r0t5oEPZr@v<h=t*-aJh3=Oyv?1fLxj?' );
define( 'NONCE_KEY',        'lNbK9^{9ENmeu _5QFPo]~gUK9L.a/=Qj!eBHBO_|TL|r@ce@fI{UxYlexB._r82' );
define( 'AUTH_SALT',        '~!K?-|jU[w#B~2Wo.42G8r3B=2~[Mp9H[1!f~A[,|Pp/1>QQL. iiLWP0h/Sk^Z2' );
define( 'SECURE_AUTH_SALT', ',c1<.a#gN4G`dVK|2]Y.h[TJa%%V#[5,[y-@S:LRB_j;l9u]uW3LY<0AiLB h5M|' );
define( 'LOGGED_IN_SALT',   '3+ZG;Y6r=|5cHSBi&`UH!e!DB.48Qa!T1K#11j`X#;Rxhv;9ahEQaAvu^%|]gfop' );
define( 'NONCE_SALT',       'e;.X-{bp*lY0Y&a$pvFMy)FWHF#F_%&(^PpC#vpx*q#H<rp1oshoh3Au,kk)Oy~4' );

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
