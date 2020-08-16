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
define( 'AUTH_KEY',         'l&*0eyM>!B]{RbgYv$!rtnnrG,nxZ}jp`&}Cz<|uag`}sO=j=Hs,t?*0V!Q9X-o_' );
define( 'SECURE_AUTH_KEY',  '6{}:$TVq=+jMve)KS}VVl=~JK{};ynC#rWAT=fx/][G>0NnQBB,g93Y&4)rB{$1B' );
define( 'LOGGED_IN_KEY',    ',<,91/b.2v&2UIEh#Wjvkl |`76Z6k1YFY?2ZUPqn*JLULENnh!crmhGLhb?iL`;' );
define( 'NONCE_KEY',        '>3x-~v%vQ@]Lsn,uR8@=a`k2TQd^bo>ng6 _}*`Rerz}[FM_xUVxHu8`CvUi>`(q' );
define( 'AUTH_SALT',        'pB=ro`SMcng=Ph2-A</F/C:n,iyD1]jgxo?W>9dH+[AQ.ebo-+}@Kt2Q>uVS$?|W' );
define( 'SECURE_AUTH_SALT', '.K,,w&G]-X1508+o@5>of)YZ7qbCfD6;&>t`ULykDjp9pKD4eBXkd7Mad!1i=NJ+' );
define( 'LOGGED_IN_SALT',   '5JLml`N{,3Xq_tD/Ntk.u@P=qaU` jv}8O6?jUM(hi(@n0Qr@Ncvs.~lx`xL@F=O' );
define( 'NONCE_SALT',       'Ok,x[}`#X&v5&D}A<n,j@J:4b3E5Nj(fq7LbC y@ZQxSr#w[L&2/WCPgg?nY2&+c' );

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
