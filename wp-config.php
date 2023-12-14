<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'mysite' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '4YkwgEmFMb)GJhQd' );

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
define( 'AUTH_KEY',         '^IfQCet*;A^&FO)3W*Be7w:ywTsdLU.BH^(e965zvBlW(|&+roY?*Y+VeL[E5[?7' );
define( 'SECURE_AUTH_KEY',  '![BYL!gGd_>a:[k(W?T8}}SmI.zItlr(c=&a1G]6|An_jzJp;JdVhx~z3H.5+:S:' );
define( 'LOGGED_IN_KEY',    'MO$#n%ZPRjOxa.(XJ|Zw8oB/ `N(^O-:Iw^}|HwxCP,8A|( 7MBv3C5_y2jqf.=O' );
define( 'NONCE_KEY',        '/MzKsX5J)boeCI=< +xDZ%)`ulee6dw27onHa>Em!%fi05[L=X)Gb{*Dh{D~k[=r' );
define( 'AUTH_SALT',        '&]`)aBW^V~.gc+WbZ _e+n{DQ8)HoHx)uyL%iD;flm#585`e*27}v^zS/d0[-}vI' );
define( 'SECURE_AUTH_SALT', 'r?6u,.=o~%0qWn)CxF_2(&W]L225_/~CpEp_E0,Yqf<0Pz5`6KB2FF1k)~j)TQh,' );
define( 'LOGGED_IN_SALT',   'b4j2|$(?gSlBbSY@u[EMcf)lc^3Gf 5?@Fh>l/p<R6MuI(IRVDq)g/FJ5%</+:vY' );
define( 'NONCE_SALT',       ']gB49s&^4UE69O<-)rv(N]r?J&_1E/GcyB+w8DqI]z|eugo;t>04gD(:qZVjqhx<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bts_';

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
