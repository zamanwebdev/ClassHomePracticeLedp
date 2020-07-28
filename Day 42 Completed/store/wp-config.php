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
define( 'DB_NAME', 'day42' );

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
define( 'AUTH_KEY',         'HH9JT5)1`oW%Ii2E1ri*y>NLf6nND/h)wyKSL^vm1Lp{D6w:.t.`(wYW8.]bZ`s0' );
define( 'SECURE_AUTH_KEY',  'PYi5c$aS* FT?ubs21a/B+:#9^Te^L)9wW3SXSX9MdV1k,gXb& TX`quKd[j}wJ{' );
define( 'LOGGED_IN_KEY',    'k0!:LOzO.pN:.>R8Ss[ !>D~V|>p_@7U;n 3(Ujg)%SNzhCK0,wGKq}m:&rv=/}>' );
define( 'NONCE_KEY',        'BYTZ(j@&&lXV~je<*MH@|N;vv|GWXN7iSPn7@X;Y#Ui/i{J*u%4{am(UdkE5_QX3' );
define( 'AUTH_SALT',        '*2lsOVP(hFKWZx:34pqei&`sP(m<?LJ@E(8.0&T$Sz]vo)RU5H {Ns]JWpX4&B}e' );
define( 'SECURE_AUTH_SALT', 'Isw2}[B+ua{=u<nR)%8,vocgl4QZVQHj65X0Gyhg*cY10u t,p$H;StGU]s?&Jo&' );
define( 'LOGGED_IN_SALT',   'o8ZOE60>I~.6b~CaO*zC8|7Hb8[=R!za&Z`^}wzOkNfC2kF2XsuM?9=3>%p[$$.Q' );
define( 'NONCE_SALT',       '$*Mv{@!.oyn9[$Z~fraJ$a$_iHvi fh,?*1:|G+mL~W%yTQui#*ohGo>/P&]M;xi' );

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
