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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/kimcar18/beeline-game.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'beeline_game_com');

/** MySQL database username */
define('DB_USER', 'beelinegamecom');

/** MySQL database password */
define('DB_PASSWORD', 'U!!2FRTM');

/** MySQL hostname */
define('DB_HOST', 'mysql.beeline-game.com');

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
define('AUTH_KEY',         'Era&n$s1q7)m|ebT00:+$"$P#v524ArB9zcIDeKfbz(Vzj(s!@SLNU~|~%Q6H^tK');
define('SECURE_AUTH_KEY',  'R`CI*a017#1NX_NM^p;@XUfXaUyf&4dThQ;P5I~Ct*zv:uAp!zL/!1A!S?O:J|uS');
define('LOGGED_IN_KEY',    '*_c_r?W5M;Ya9qA_5cXIwN%;FwkRu1brY~^r$kuj~?G:7UluN23~mdk(sM$FZpz_');
define('NONCE_KEY',        '3U9qk+9rAF%|JLV^m+&jvLo/hH4Elc0HOWa#|h&2nWe_G/"#gy::HQA8i?_CxNG)');
define('AUTH_SALT',        'sAPah#mlH7ceYo"2Iey`("Ffs#g|DAIdGKIpu)NR*zI|Vat&~n5(~0$Li#ZRaM;8');
define('SECURE_AUTH_SALT', 'fAY18OG`BrX7h+&!N/uSQQeGdX2iKlh&7jb`(y^%jX2MvsIAkU_f4M8AeN7xeKrc');
define('LOGGED_IN_SALT',   'i*D@y?JYfSqRk6($A7/r%o_yFpnsA~BRcWeaZXAIse_bBXdz%8QiTM_guwk26h7Q');
define('NONCE_SALT',       'ydbcUY?fqyhhUbqpmb/)K3d%)"Q58G/w9warFSAk4qt(%blJ!1Jp@L&M/WM1%@VE');
define('WP_MEMORY_LIMIT', '64M');
define (WP_CACHE’, false);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_et2spd_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

