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
define( 'DB_NAME', 'horoscopo180' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '0D+At*S+Un!OW6^8;T+T.Js/6M||&s+ ~x!1buHg`L*gSd8ZiY!h&+^@95mos`uH' );
define( 'SECURE_AUTH_KEY',  'VmiQ{[i!)xyi.EuztXjFUx$Rq4hJ3c&)2;T`2_,6Eqbu}ETy~v1Y++pnyto.G)-z' );
define( 'LOGGED_IN_KEY',    '8/C,ubv}a[r3(]Qi1Ay^vWJyxyz2$7HKw.}F%4* k{K]({46kamEqz>UM$Bc~4nj' );
define( 'NONCE_KEY',        'W<P4YA%#V0D7aQCjTJU6|k#}2%+r<QDub,8e*f~:kq$@fP:p_7[e<.G~i=$&b]s/' );
define( 'AUTH_SALT',        'Yo|f/lpr<O%?Y^[p!oh(,6sG4z@*%sXYl:WydGvV4:}z[EmCiDdvI B(Qt]:{A9<' );
define( 'SECURE_AUTH_SALT', 'Dua,VO%)@?KeW(o8<Oy5BVCjq%k>X3U*`mU_vNCq2:hNU9h (Eual47kD)9jl)&1' );
define( 'LOGGED_IN_SALT',   '-k)6^R]V]=Un`/Dl4Zd-3&?x-`dgAD2>Jl;VX=I,a]BwV@V>i<DA1MWX[YO9zwli' );
define( 'NONCE_SALT',       'oj}<-[6^Glm5v(P._Sgi}Fs>/EmT.Zx]=5i)rlNs5%$=w1X:esaY z7xAziifY3o' );

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
