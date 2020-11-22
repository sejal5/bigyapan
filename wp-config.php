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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bigyapan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'WGp<k$mP(_H>`v12C42=n@KCdRzS*oI4C=p]mwj}V!2X}}g)Sj<[GvScKGVxbk-x');
define('SECURE_AUTH_KEY',  '/BGe,},RkE`.zo]:(@N]8vsf?:_Is T8m-+Jln<UFx-_}Wm6QD(y}wC[f0qs5fM+');
define('LOGGED_IN_KEY',    'V|Ly.m& ]#JbV*4/ZkFaY4L_4@vD$1I+vn^+t+o}]X=~X_xtUZp6TaPAU(z1) a?');
define('NONCE_KEY',        '0BI9k~jTR{_!2}?F_yLF[<<No@tP?b7|u)U*(chjR><a=3!d&$0JZmcjooR_Dj)+');
define('AUTH_SALT',        'ZM<0A}$,A}nh/O/cG*hoif|7)|zUWE50I]@X:E+!^,Ze:;RcH.e/w|+k?qplC-*0');
define('SECURE_AUTH_SALT', '<|`zCtnQ*^(|c8q|c1YXb}!/Bd4c%SEj?`}CU([}Gm9^tPvvx!.n9uuGKaVY.wDX');
define('LOGGED_IN_SALT',   'NN@|H(F:@*7nj=IR^6 kmRU2oe(3>Hvmb``~.RoSU<Xv..h_vzrHVP hg4-#E.S`');
define('NONCE_SALT',       '5z3hs7u@{|:4FeGl|Q~@_nP}c@6es36=RM6-uhA$Q*OnvIG??r!R[QRW|rb7o~,%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
