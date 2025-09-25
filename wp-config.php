<?php
define( 'WP_CACHE', true );

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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'knkabmojokerto_v2' );

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
define( 'AUTH_KEY',         'n^nHZr&=_ ma<K!m_wO]|krRWNGA@=Kpa:a&Q]@ i3f6iIObs(6KuqVq(o*EGL/Z' );
define( 'SECURE_AUTH_KEY',  'W3u*!nrFF>`CGQL2lY_p1E2ooOOV6Xg1`!KVvo ^)VCxlQk!<-258n j93%{M4iu' );
define( 'LOGGED_IN_KEY',    ';9Pb!wPjEWk#qH4G|S2&V$otMu3|yejJWPxBV)?Tax?n88prw%[kg$Ul%}ZB>J0x' );
define( 'NONCE_KEY',        '!AfL_XczVTEy/c=WQ2kRXiz[)EJrL`,4SJ}>Lzb]0X7.KoBzGbjFA2s[r>VI_&?4' );
define( 'AUTH_SALT',        '@eS[;GB7go2+uL7l)oX%trR`:rfrt/t&}Vj-,gmcQJMkK4J2U*fPF {+n*Gy-JB!' );
define( 'SECURE_AUTH_SALT', ' (cU^JbRo>f3aeLq4-=Za*LK57r?$<nRO<|&8s?$=~X.+,7sQ7`Ooc5-:pu#I9k.' );
define( 'LOGGED_IN_SALT',   'huNaVguMuSCC3WK%[<18}.}}RO[3ttvlGbZ4_V p?Y#N[>~t_#~wR.`|@$#/zb<Z' );
define( 'NONCE_SALT',       '{+x;(D8!iii#6E?&o||B`q0QZ)i<j#k4KEHJA1</pV?_(FTx8APh`F5Oj]XWIztF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
