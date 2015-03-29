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
define('DB_NAME', 'accelerate');

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
define('AUTH_KEY',         'q]v[9w:~Px3/yg:=>+ RMEl;A>gYD({H T86i=L8b/W==m13,:)2hV_}XF2pfH=$');
define('SECURE_AUTH_KEY',  '$=p_pi$Khz9H4tLO)#V{|[=}MS9dEP|JeKxhNwX|RgO`dIZ:-|MDqX>+1|R~HrjV');
define('LOGGED_IN_KEY',    'SS3~u$^-+8IZ1&8R[>+`-bK^C_C+h$[OlU+F}U:zX>_,*_Y7rK/M+UNt|eQBgW`@');
define('NONCE_KEY',        'Q@7UO[l_IMSx>cjhI#E@4i!73r*SIFv^jZ}.YMN:b)kZPa,+P)&@U+V(+e_w@n,%');
define('AUTH_SALT',        '>Cyx;hqJ5S6~Zou=75P*%m;>2G-DZyn~lF,^ygn`9|FrL{Z?bgh7l`+~$Txe<`-1');
define('SECURE_AUTH_SALT', 'ukE{=PWUtQs> |n`.<an8ES,pJjYy`a!rd;e2l;G6@Ui{KT7+F|p/E!r+dSBitEF');
define('LOGGED_IN_SALT',   '/K%$CaC.Dkbf8!;0x7-OXzYx$yVAf@I#G@H Fg3eJzT$PTO4q3Jn4qjTRX5I[pnc');
define('NONCE_SALT',       'D{O8hp#ENZ>hP$*U8qv/t8oA~zf~!t/Q{^}u4$@Xb7iN;H:XBGBjjJai@63!9VcH');

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
