<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'edex');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'sc`@1i+(.b@[Hk4v1ZgS@uqK]*dy=/9~e2MztqQ1 ,Hfp4&Uc-^g`q`YU;j(+QK6');
define('SECURE_AUTH_KEY',  ') ]8/lz:1:78K38OMnprE-&VMb%lmpVJ(gk6c#3i&m@9+,_:e>ZEuTCi}DJAo.<z');
define('LOGGED_IN_KEY',    '8m0g}<|P]i$w@;76YYX!}]ma&FE@|{rn_?=t(pswOUm`T{EpCOo>Dkf&hg~tXGN[');
define('NONCE_KEY',        '`$tME]2Jz&q@0nS(C=4uQxVLD=<F!|7P7ZuZ}&ccI^2(YvE8$pWX|}W8y/@^G~Ob');
define('AUTH_SALT',        '9}lu[GeIXG;4HkL VyM,zp^@WGJ$oZE |_v|ND$=_5_Qf)N(HH W0a/I{IL!2k0+');
define('SECURE_AUTH_SALT', '>silE5,SjBtG]jkC<[|F}Izi)H`BtTh<],N%m^xtS%(|(>|rk+|(]kF oC,+0A r');
define('LOGGED_IN_SALT',   'enCvi8W&%$eyGw?hV6opqA1vI`<n?mMzW<ko&9=&LoyeT@tKOAn<Aph(t`/I&8#$');
define('NONCE_SALT',       '?A.Qp0zS}]&(eE23p4lil6(mfb=Vo&JElM!@a:D7D%hL2Ic/iT+E;(8 VEiTH~[$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ex_';

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
