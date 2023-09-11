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
define( 'DB_NAME', 'chaidotech1' );

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
define( 'AUTH_KEY',         'ij`vVAxS@`6|{B|*B/6>g+Iz^BNg/  n}>4rw4]P[P=K3+!^&x[|3O~#_>6]5d ?' );
define( 'SECURE_AUTH_KEY',  'BV|%, cw@y8-y59wUg8+8*a%Wx),8]7XqL}0]V&T@ hpEY;LH^+Yea+qzEwrPfKM' );
define( 'LOGGED_IN_KEY',    '!e5>Z-MVH[M4.CnOB8p12;Y|f}lW3>WhXH1w0f@}%zV$n4&x{!A=63]<4rObSeC6' );
define( 'NONCE_KEY',        'Yr~}Z(:Z#*?:MTX!$:!z{!tn3JYG[W;/]tSic{1l^*noj5(})y]TD30tXKVl`R*I' );
define( 'AUTH_SALT',        'CFq|v)qba87<KPKW:l*`$.y 6Tup;Xyl3 pA&:j2<M1ko0{#nm4?oR<fm-VgX)LG' );
define( 'SECURE_AUTH_SALT', '-rK+__WeQ:{J)k.Pqp|#>9*7WN9]EF^Gh:KxOvV|YDp3e 6|npp,4O0$15$$f?-0' );
define( 'LOGGED_IN_SALT',   'J8<35i!b6*%UJgxOy<6|UX]m0n-&Sy#p`zB1MbP}!4MSI-}-X~B5h_2@m#JpX?Tg' );
define( 'NONCE_SALT',       'XN?nPL2rK~Z-t[gt[lz|n=..>G->mn~GuU4D%@1p,At^miL32N+/??O5KKU|r;L ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Cha_';

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
