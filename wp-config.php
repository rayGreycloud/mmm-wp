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
define('DB_NAME', 'mmm');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'sd}heRLNz8LMf4mW&[LZPV$fZu3PI6.1W>Cof!J}@>ZNj]:gtF1yTIdC:oC/P&%@');
define('SECURE_AUTH_KEY',  'K~/LG%@OGXY3.`97BtHv3fLME0z-b2Z5;+=80L?au1yoOA*O^4nJpZoqL[$RHKUb');
define('LOGGED_IN_KEY',    'Ui #~(8`jnW!XuBGtgyY2o|0(4sKeP/oI%gmr/<feqvtuR@2$Sn/hHyDuEW@iPw2');
define('NONCE_KEY',        'sWB`b-M.b|LKpFEzWsS}_R:/*0[NKrAaY,ma&8SoG( 66KM7pC2b.&%M6.lqg]4Z');
define('AUTH_SALT',        '52jdRfUU0 g%$DNrMZx?wC%zA@8:(>gN#)N0,H%o42wV!G$u-/a%;,%RV|EuxQ,x');
define('SECURE_AUTH_SALT', '0^_TO9CQc.{1$5Dz,24Ua7WKOl}KCt@K;wr!*04e.9{=9$vb$KSuzF&-!^hv;2`Z');
define('LOGGED_IN_SALT',   'i.9/(Th3?n}>VLRjU`cPC9H[bpzc5_{GW!}zutD8]0 EFGb%/C{}qu2ZCH-#EzBJ');
define('NONCE_SALT',       '9z8$*WbGSQT}$|6Ck}!]d~_?qi,$5#0mQ~cH!DJxU~03bD-o gK/R;5UWkzTP)}X');

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
