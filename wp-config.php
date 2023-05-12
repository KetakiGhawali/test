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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '7:V>CTun.N!%5i%9V)Y^]!s_]J?cCsJrZQt,0ZL>*rv)~j26K+oO6U3rf5ztdO=t' );
define( 'SECURE_AUTH_KEY',  '?_V8Au&J6j9Mx2-o8q+$)h:dfQQr0c#=cybrkJl@c$zbEFo}r^E>>2.C_91#pT3+' );
define( 'LOGGED_IN_KEY',    'dud~mQN!2s#e5iNy)&6+:C yf~vm-}vV[M&mG#LxrQvSLyLOJ@SdT*{XHqMWJ4XO' );
define( 'NONCE_KEY',        'I{7+:iCTbJI_RVspS=hX:u87OxE@qm%UionTOr&6*.[Aqp3M*1/zD{3ydC]t;v%e' );
define( 'AUTH_SALT',        ')l^p_PGC:U0oqmtAW*RuvCUb!)8vAKn`h/dFM**Sj@Z]0sR[H7XZCBE@E!WH*QoZ' );
define( 'SECURE_AUTH_SALT', ':t4O-@OlKJnFT(Nncw-ju=sdB::O*mUZN6X-s,pK7):Enff=5JVqz:fm]y84xWJ>' );
define( 'LOGGED_IN_SALT',   'k<luuq7W(Dd0S`DmaONGM.F%M5{(*q#WnU2pfm0,-5tKRu=.Oe61R$=vW6h7fGGF' );
define( 'NONCE_SALT',       'R:r;y?%%cvdV~np9|m}%/;e9oLN%(VO=iv=UT_Is{j%.hd z=+DEx!]w8KnJ+..h' );

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
