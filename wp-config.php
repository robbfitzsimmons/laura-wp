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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '*(ID5dv-[8@-f`;0kX|dQfm`/xo<4hjE%.b+ftet@@U^bygFf~)XI#*9q_24wG4 ');
define('SECURE_AUTH_KEY',  '6?0%-5^j-HE}vT;?S45%UY+Jk7XS9ZKes&e`ziuiU<ND;`1d:c|Ik[0WFStkBsE/');
define('LOGGED_IN_KEY',    '~w|VW&sH,%b;KlO(o<|nXIzCSt%}yo=1]xYU5Qfr9Sj}I9Yw>P@/RM=!;P=b53@z');
define('NONCE_KEY',        'qk<$)2-xb8P1*UZ+mVb-9y}z?ySzD|lRUT^k%45KBSm+z)ZBiaNAQ>-Xmo]2IvH|');
define('AUTH_SALT',        '2+tfYWz}d=|c|T#cLP%A4E9qL%|]pZm7FmsGjN  <qrcA~og-8<mtWmBNu}Y(MOC');
define('SECURE_AUTH_SALT', 'LJ>nZ)f-9B+~hnS{CZ!m|NWDj|Icn<&`Q_R!=c!?O}q_),5qtn!<oOLq|?*9$>GY');
define('LOGGED_IN_SALT',   '18T?E96u!UN}GU1eCfij~%B(dpH*9IR2/Y+rV0b>^E$u=JaMx!{^U%6T9do0pfvM');
define('NONCE_SALT',       'yd?=6vn(hQP6MkX^|J?}$UyJG|mQ}3AiS)!L``w |Q]BO3%+]Av&-Q||onvU7+eV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
