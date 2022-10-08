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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baithuchanh' );

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
define( 'AUTH_KEY',         '>H@o/UeoxyCXVHs]tg2#XFxbn_IQIC-VY003IGAY]MJmh YpH BU+UMM;e=KEY/+' );
define( 'SECURE_AUTH_KEY',  'SXto^G L_20]^P$x(N]1[.n!6j.qpIGuZQ_SdKb8XwtH ,li&Yc~_+LhsZ,KZ~uE' );
define( 'LOGGED_IN_KEY',    'XLN{+:lmU|U;cy<nW,2CV3Lyvgn**=1uVox`n?[Ggo@5biqwU(,D=Z<}IP~kwex8' );
define( 'NONCE_KEY',        '~G#6y [ajx8-n9|cj&LIYRIeLOr]%]4mN:!./7SEGO)B%ON|R]^JMztP_T0:|nJ<' );
define( 'AUTH_SALT',        'E*7QeuGR6u+WW_{`D~_<#+-G74Y_3m9Fn8k9alSC[c+ufb{2g$!.:AF>)US%^1C|' );
define( 'SECURE_AUTH_SALT', 'f[rku*;O(>_xyb-{-AU6oOv,,j/by5N:3+0|rLG~1bLM=LTQmO|Sc=^NF ;u~|9d' );
define( 'LOGGED_IN_SALT',   'D$,0pd8IC3X[tL#_Y9/ZV25S%*w.g?]VF6(DS~(t,)vBF9!Jq9C>[6V*}MIdx)D9' );
define( 'NONCE_SALT',       'K#u^y(]g>;~93%1uONONW!ZLpkb)jXt:j&b[Jyejv646+V&GL;Ygen,N`R{.a-}Z' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
