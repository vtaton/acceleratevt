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
define('AUTH_KEY',         ')aGM~6a<K{`P^2lts1JLbvkk,|C!TiW/p%HF-Aefy8XEzw*^+(N|SxC_ +q9Sm4A');
define('SECURE_AUTH_KEY',  'Vqh~F^O*X:(0D@%h/Y2}bjyyY1cVjRlfUa{N|8}3Qw2*$@:cJe$pE%skOL-#s5|6');
define('LOGGED_IN_KEY',    'UW~h Qq,{U:cq+uP|i~X_cN#!J}Mof[VtA)36.#fl)2T1QJf>6gA2G@;t/-#GNl.');
define('NONCE_KEY',        'bf86^&%YRX&-<Vgy7)8F{T-k.vfzH]+m&0dv3uDwUr;N6nkxbU(|Is`MxIxote.N');
define('AUTH_SALT',        '6er3*lsl}wXs*9OsPR/Jl-v:QGoB5iTAL_/k$}R6]vFcoD66n[N.|8OXqb3TTEkc');
define('SECURE_AUTH_SALT', '#@On>+b+OhmvA&7eh~&Ns?X?!@$DuO)A/QXQeLAF6(Qj2$BaSA<-&$3q4K2n98T1');
define('LOGGED_IN_SALT',   ',uBgeN3Nl8iYM3U1Oa;*(-(PnZMSH+|75/nPU-,.-J`3fRIpXnc^~SFm+JH+w9Kj');
define('NONCE_SALT',       '^|nPec2^f8bt;kXpI_*ed-wmW;{+W.CiOmIcYMn[Z[N1^QMRY0U5A<9az(YgR{zQ');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
