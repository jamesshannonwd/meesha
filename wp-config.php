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
define('DB_NAME', 'mywp');

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
define('AUTH_KEY',         '`SD4r+}|$Hr}63a$h~KWvaUww?#mjcLw4^o&:9vKO5um7@V^Wg[nZXQD(QUIoe9:');
define('SECURE_AUTH_KEY',  'Oy?>u{|a%!%1U*z_IjglTZ*A/ b?W##Z>fNIem~d+[{&%j|5z--UfJFcCnmkc|;(');
define('LOGGED_IN_KEY',    'k{$sR|IjiQ ^l0&d1R9m]+TZnjWY~)Alq-21_#F]0Y)IagF5sn#ZWO6;U%aGN+u#');
define('NONCE_KEY',        'X|vkQ#cB?06)$/B}|rcYpbHSOMX*+0g8C[V?Rn;;v iEB{NF+D*She3|gnX|bW4,');
define('AUTH_SALT',        '_ZYkoMPV37.x9F-$=vmu5qD_[n3Q9u+<=I-+6KTD-?&t3~:OZ)GyH5[*{0Z{ k5}');
define('SECURE_AUTH_SALT', 'GS9Wh;!<->wBvq!Tr]u{4CtS_FnB[pc50GT)sueU+j`HZ5D#pfp^x4MhoT~ 7}(&');
define('LOGGED_IN_SALT',   'MaJh+K!chz|>GT9+v>7X2NSj.pF,/j_%mGS5VQ)xx}nUnwRklL8Z]bri[.P&-!He');
define('NONCE_SALT',       'TY{^},K^E2<ik.7}/*^C+c,-<`)C~DF;O<E/T4~M:s|5fQikaV9uXx$zt=>uyL9,');

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
