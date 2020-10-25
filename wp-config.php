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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ekskulmiko' );

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
define( 'AUTH_KEY',         'eWIvLJiXbhl#ia&`G%#e0MqQ6`T=$~0l}JN{Bm~/h#8/BflA&7m-^*S_kp:DuJ1G' );
define( 'SECURE_AUTH_KEY',  '?!.H3G[ko@:)_U1#P&Ko(ay|,MD9mlPM_;(K,e7Sxk7g_ON(T0GQh-9P%$_tspG|' );
define( 'LOGGED_IN_KEY',    'Vq}s!.b_*1cUBYxLF(D#J};J .h#er4.L*2,J2@fJ$,EIVl=`vL5z{2R?/k{Pl*0' );
define( 'NONCE_KEY',        '(YKL>(C+W~Nbz4j$z8y5EF+)w+7>nU+N)iS).c&k7@w@H~OUr1+4_HdhWDrh~:~!' );
define( 'AUTH_SALT',        'N;tQtM#nVh6E}7d?:$HUOXr[=P4pO85rU93<G@g6{sWM|%Y)c@xKx4T%E5nXpn/:' );
define( 'SECURE_AUTH_SALT', '*!j~{6l}EKG@UDI;wvSDz_f33(a]Y3)u9j%ygY~p4*!Oz{NYK;N:d_xf<Cgl]Y&^' );
define( 'LOGGED_IN_SALT',   'T|ATc}w{l*x7dbh.6dEQ48.;U1BGiDe#RAOX>:wOT?T<PX1>eS)jL4F>K/a i}x7' );
define( 'NONCE_SALT',       'v.F}oVwUa1jFu?!ARb{ijNwX;+VJjn!0YVWR7Y9BgZtn-Zp+Y-QD !zqbQMKu8W_' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
