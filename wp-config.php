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
define( 'DB_NAME', 'sigma' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '4})g ?)45M9623*0rkwn i;-0:`ty1(i[Jsg7oHqaOGwYZ=;}h{21XC*3RoYqxPH' );
define( 'SECURE_AUTH_KEY',  'AyXy.$(V+TVKxPhN-:0*HUy_VE11y_q,{maXOS{g;NYUGbUs#jGVyvsVb,{`,iRL' );
define( 'LOGGED_IN_KEY',    'dLcnKwqUHZJR-Z$M&Ex&ZU&`;NGMS!lYIAN&2G::n<;YY>[8BKK6<vi{y,bc__d&' );
define( 'NONCE_KEY',        '#HU%57LY1BEp<-E&}[^up 2>R[]K|SSub]T,lUbix5s[0=%JG_b.3|j_NZ2N<v8;' );
define( 'AUTH_SALT',        '%(O a>h/[.Y|o]I~n:+LPhP!SxiklB)reVvq^iEH+zgbS$. r:kIi;/ls&v1~^|E' );
define( 'SECURE_AUTH_SALT', 'zHFz^qwf|@}jNX;uX*BXx5bRaU6Kp6PRtu)+K/CowjU6!p3EH]p{nksmo669*P]+' );
define( 'LOGGED_IN_SALT',   '^}rJ3?y{$Dj3M(C-3+owq!*z80D&tB|3m:LI]-m47bhJ=)vz8[qdhWQjfYR]ddF/' );
define( 'NONCE_SALT',       'Iyklj6r3;:Lchp#M1&Q`UQ<i5!2_$K{x]n(Wu$E~KW{S9bL->FFS?{}M.[yh)(K2' );

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
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
