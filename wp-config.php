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
define( 'DB_NAME', 'galsenactu' );

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
define( 'AUTH_KEY',         '~w<,y(nbmjH8NDtZr~#KA2sbz&p<4KH8[hm7 *c~K/jFn,)q_52yB,/wfZQ4>H2H' );
define( 'SECURE_AUTH_KEY',  'TStZCgEoQx*Xh>e;XU=inXiF8]Lms4 igx7 JEs};|g!%S9Mn#:mniy%.SC;SM }' );
define( 'LOGGED_IN_KEY',    'sUbl Yb~t4J)i}g4B=!W^ynErp%MJFes2WUEO7faO#d|2bY8o7^l<$NixTFFA7OM' );
define( 'NONCE_KEY',        '|<++LY+R>Q@p-8oWpG+9k 0@rBn|pMfj2GCF6pfxiUJ?E2Rskcbi$8Sl@6}$ryo>' );
define( 'AUTH_SALT',        ';-H4/#u,tV+PLa>j4{ypsyS~n4>BJ=D/k#J?6G+L%NqvM*Y9T$g}:A=K8Sw4<ssc' );
define( 'SECURE_AUTH_SALT', '!e(%8#%k]b))%vXFHo~C!G*Mw9$H+Yxusv<0;V1T>/-iL3uT{s>$KV>39GL@VY_u' );
define( 'LOGGED_IN_SALT',   '{7BiJO;`6&N8L|K|.N(]6u#u0Q_54^[@]Q>!wgX{Zl7@7nd#x 29QQXLF~lMLWGP' );
define( 'NONCE_SALT',       ')G;B7pLxVq,|FqETEcT@W,Lj-Pgu_:x|[!AO qT*1dGxZs+)zgs.eBN;6I&+%JA_' );

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
