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
define('DB_NAME', 'inspiratiedagkinderopvang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'n008n81W');

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
define('AUTH_KEY',         'A(tJe!jg8]b$@mAk^2:vnaN%@bC:Gfb ?vY`,@E3>%;SSQvy+f9]d}+hWO^o#!Vp');
define('SECURE_AUTH_KEY',  'r17~3fMlL;`v7%ANr=sz3BzSnerN1r)_!+;Awfb?~ub0Cwb:g.jTtD#yppQWOR-`');
define('LOGGED_IN_KEY',    'S~%WWAmpP`vZP~Wt,Kn<?ptq[11&)`)F=xi`XFv2e+k JCx?{X$dt4iUBsJr)55t');
define('NONCE_KEY',        '#~]4u+>C5Io#Nq.KYDMj7NL`J$8@A@ra)_PE{47(Grz0e/y/fPzu|MwSa//y]Zi7');
define('AUTH_SALT',        '*tXmnf-o].)?TL@6;toSo_iUQt?C0X)VBx_K1eXH*]D9}$_9ieeX,Z2MC$?:)[Qm');
define('SECURE_AUTH_SALT', 'CS-PpwrM7{b.DM*7S.t^m:2oIdGKX{+kGi8dkKAY=GAcGL,1[YJ%p@{cDf<D01e|');
define('LOGGED_IN_SALT',   'cf&)RZ+baj{x/L%okoab8UZn<hKFOwx:+M*8sbTSgw4!H34}V,u/z;#W$VXE(U+_');
define('NONCE_SALT',       'PiXlCI)V1D[k6~Ya7!+q2-1Fu=om%n$6aK;_S1ErXz?wsx6RcmW@M>05hiRCch%O');

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

