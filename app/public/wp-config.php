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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '<tO}zs;G&H@>eVk8N!|1|uGWW/n,?lYY]v5S}|Kw^Gv-K0_cY*3e,(J[K-Kx{%1h' );
define( 'SECURE_AUTH_KEY',   'y~0?9noN061O4bb3$|G*BAo#V{rn/Nfpp9?FY)L;d6nMtW$6R%y|`;KZT8c1TKeE' );
define( 'LOGGED_IN_KEY',     ',8U}-/P_0YmF *fc)s`Qvzg}]s>WnWuZ}y_+s&G<86S3.w&0YFYOfn(L2~tG)C*/' );
define( 'NONCE_KEY',         'CqYfdrt$uDb/|s0FuW)<[|:4R?MzS}S2~t<|uVaQy;bo#s%<6i=|sQo1KgBXh#}Q' );
define( 'AUTH_SALT',         'D6eS]PT3>I_fwGJ<!yiy<PJvBl5d7]Cd><?h|k&$,y~VDB9hIA))[Sr1J2=OP#m~' );
define( 'SECURE_AUTH_SALT',  ')bB{+H9Q3iY^-]YzK(kdzz7cy~GqT1#=}&fuboU+RH+ $-2Ruz$<r9.2LWv)VTHe' );
define( 'LOGGED_IN_SALT',    ') yvh`]CClU!s47H4A%;_j%IM!;ej$H!nw^CXA_D8fu:]q%XtatE*r(ZV3>`A b^' );
define( 'NONCE_SALT',        '}%nmd/?P63l#<i:[$WDpCJh^<uJgC=mfac+oi=kab_x,V:xz_/q|8k6M>L1y>x!P' );
define( 'WP_CACHE_KEY_SALT', '@QsC!7UwJTuRsuJK@+-RH3GhH>DljJ}JVT:oMQSDcJ}M!`z5h%.y?-V/]rr!Y7w7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
