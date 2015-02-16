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
define('DB_NAME', 'lauravecchio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '+#Z=han@V~u<[z,JU6G,a0NXaxWb(NHx/2X0|tg[kx)U+H^/=#+B9{RKWM$~+Svt');
define('SECURE_AUTH_KEY',  'seLvr8YYV($MPrtG(_}f8R;*xB}uV`>?|1i1~APX8thE_04f!o_qBCkW{/oNk{Lk');
define('LOGGED_IN_KEY',    '~f ~|(mrY2XPY6Lb<;GkICGf4_*Mb|HhK;UckBqUm^N-4h^6TfBAnj<Y)LxKVil~');
define('NONCE_KEY',        'YC]>!u;9zbVv]0aeT~=exQ/?|Oa g9Cn*-?_(TXRYmgeJC^,49g`ZMMFfb`_v[,(');
define('AUTH_SALT',        'e*`zN|*|.8Hf{@dr(@ C1^@JrLJQ2%nN:su^t80zDDfQ>0`)eX-kCchSgnEnTMi1');
define('SECURE_AUTH_SALT', '(&Yl~F2k.3t9LcZ>qhu|#-ub!B;J*~<*9>H @glQd%JZ]|N)p+<W^O7 qvDo&{V%');
define('LOGGED_IN_SALT',   '~!h~CfBRRCOQ0t{l]6tL|W}bv_,j:$(NXej5Y:S~^h[.Gj>~E+E+vO=j)=3t?Gvy');
define('NONCE_SALT',       'uP=%=^jTq0S>y/w=b?v7uRq^j.o~X(*m;Gpv,~0|7hBmimal$hA|SR5/%(dk++6C');

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
