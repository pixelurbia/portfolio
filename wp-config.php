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
define('DB_NAME', 'pixelurbia');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1r00mP3*KT%J9O31inJJZ3LlMcpWvDGm9#KTo59QEjtF!z1jFSmoaX&xNgPnckfU');

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
define('AUTH_KEY',         '4NgcW0B{U4cVC!<  L9ecfTtqkX3cI@L(dxr:tj6&~]k~(ul(AbX7.BXA[Fw.%.v');
define('SECURE_AUTH_KEY',  'O?O+cQo}Gw@`=G:ki9R6+=]})#-E_ZO/LbZy!LY(<W:XPM0<:Ll/vpxGevXwTtq=');
define('LOGGED_IN_KEY',    '+8^=]XKDM>n=2]r17qkK:n2kX;A7wgr]4s1M@s~ cnI}*IEI2_&LmltwjO`1asvu');
define('NONCE_KEY',        '>.wr#kKP1$e6pb!IvC#;p_w|ya_Sk|m$TUQ/oi_R>!5y#HX0em@8Y(9<0^~IC{)?');
define('AUTH_SALT',        '![[$PUGh3m3]}JWbYNSm _Y|-*=k2!)nU,a9e5)J]{;^g|.U3JVfrzY>V%jBwVTt');
define('SECURE_AUTH_SALT', 'C/LG6cH*.<UocBylJK_ZFFI&(h4wT0SfP=dS~a$+mG;z&1`>uZ%k1)&Vjv}N8|#I');
define('LOGGED_IN_SALT',   'CZB;DQPqXb-`xqB/3c?x-? >C_XjgP_]}Lb8U7)1kv>v1wm6/+>h)VIr:!h KA0z');
define('NONCE_SALT',       'SHXRy]n~zQV<8OsL}~f]/MNNvkqG6SQcE<q>h?MQ3KE9$w:^n~<4bj&RIb~kyR33');

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
