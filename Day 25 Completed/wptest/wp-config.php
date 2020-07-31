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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         'i1bRkj]G#{N2R9Rvej-!aIqPz.QbFWNNXiEA4F$08{&=,ky]vIB:tVjQ}9T{U-[4' );
define( 'SECURE_AUTH_KEY',  'Kc}gt.{,Et)1>G|k]x)gif3yG0CxC(S=hj(;(uvAtwit7/Lx{H?W|A..K%h$Wq?$' );
define( 'LOGGED_IN_KEY',    'd.]vT:V<7u|I~wMTmcfs9:=_E?7E,nX#14JawB;[/sfb{keRTVJJRg%F%>pE-C0r' );
define( 'NONCE_KEY',        'riE6%HYJd/*@(zO(<y<0)$P;IA&hs-ui~U%J8 Ioc&{5TQS-(>yp9X;O|N`>:gfB' );
define( 'AUTH_SALT',        '6N&:fQTmJ=70$uMEW/ xn>Mp?8IU;)xJxlO@7tR4srLa!bcMapCg4)]Tm]]Z;:v$' );
define( 'SECURE_AUTH_SALT', '/S,D9t[3E!ZSW/7)uiaIDhH>)&b.M9~ u?([g9Mpnaf&e1`:s^eLo5$;Dem@Lk2=' );
define( 'LOGGED_IN_SALT',   '/74Zn^cIOy-Gc^CGwdVqf-O24Lienx[a/d2y:</K-eRJ^fV&J&G54ZM00~+iT5pn' );
define( 'NONCE_SALT',       '?TW$ZnRI?w0J#Y$uJFBB_%g70Us7E&eTa$c58$_nUXs<O`gaiYgI0VoLwiHIS5mb' );

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
