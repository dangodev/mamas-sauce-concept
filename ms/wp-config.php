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
define('DB_NAME', 'msauce_freshink');

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
define('AUTH_KEY',         '#_(|Y-z.Cyod`l:o]>5 mvQI^RetMv)KbsrZ/ {#t<3$e6&Qzbh UV)b}o)e_m]Y');
define('SECURE_AUTH_KEY',  '?ek4SQ?H6j]`}+LOw1^>E~{2@~3RraX-pC|<gK3kPVR}*<w(.e9c%LeUxy|.!zEs');
define('LOGGED_IN_KEY',    'gzi]y2?id3h4m@#mHMBCrl:r5=7_q9:$#6[xEuEyvj?^W,=R.R|QA|cvuLuG=Y;v');
define('NONCE_KEY',        'g&vJB63tmFjc9^kbz^:*!b>!-d(TOJjG|/l,stS{+s`AU--EUPcq+o2,OY3(8M~*');
define('AUTH_SALT',        'EnI`p9IPaOw$YrR;22!6<Gu%*`Q~:6hL|fNSxu!8=LzVxTz5OaJ.RHPosQN+ ^8|');
define('SECURE_AUTH_SALT', 'abs/tI`.-l `=;D>TrSNefgnP]{QGjD<}1;1jbRy|.R>=t/-ZFSTS}F4Hgyl-B-S');
define('LOGGED_IN_SALT',   'c6j8.0(/q#X<1q|Z)F~_P69(FOxpp+p>C_gBs5/:vX,%iqhv$ C{cN_9o@gdUzTV');
define('NONCE_SALT',       'EZopQ1c~(7vcV=Vy7f$%A~ Yc,,inI9@50SM %qwWwKG?|29gNzf-:/,]DC~wAOt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mswp_';

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
