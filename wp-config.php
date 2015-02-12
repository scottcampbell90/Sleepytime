<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sleepytime');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'S^XmLodZ=8d[TA,bjd*?jF^]6U+Dw$k2-*6+A|-D5}.,5uf*S| Ef;>Ci!@L:cU,');
define('SECURE_AUTH_KEY',  '&qa;-_N83/4XB2 Yft.zb58B2nY`}G/9V-oOl+VttV=vHU%YEgJ>mA.bNWeCRZae');
define('LOGGED_IN_KEY',    '_NUwlPS4A#E0`GhCW^L[1%I-ycb v#|tSfRxv)=c10f-+k[p(R8K^K-V^$Z%Wstv');
define('NONCE_KEY',        'opG2eP}BY@-]qJ6)qV<56)S>T*$(mPRG})I+HDM:]^0ghWxJ|3jSqlWCO7Za&zsi');
define('AUTH_SALT',        'kp<+`L^hHEw+GE`rDB%5oO`sxpD_-e?C2fLIH|h^U%#.;!7T3UU;+Vql{dpIf;o6');
define('SECURE_AUTH_SALT', 'hi.j/t,k#7phfblI#fzJ7pwkj1.G!]NUe(>UPj[|VUr$9w!%~wfMTqX9FvUjM_bw');
define('LOGGED_IN_SALT',   '+O?il@4Ds{)o.U?|hzd+dOY6+%O(p!b,o)6J5<>>B&B0FR3I}r.rgRH[6#yo)+H<');
define('NONCE_SALT',       '[bvRwE[,n1}jrMP5O;P-+w)Ar9u&I![C@amOQ|$v|nZ~u@oh,&-@$d1]pjy#+&:l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
