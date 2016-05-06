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
define('DB_NAME', 'andrestr_wp633');

/** MySQL database username */
define('DB_USER', 'andrestr_wp633');

/** MySQL database password */
define('DB_PASSWORD', 'bSi5s8@P3]');

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
define('AUTH_KEY',         'nsghyrjqjwhhyp132xv8xemxnszxlgpygfl0iuat8dhssahxbag4o3ahq9rxwezo');
define('SECURE_AUTH_KEY',  'sogvlnvf4rmkncw78gnb4fmsyaxgyxqa5edl1qiachyluhdk3rxw81ws0v3jinvq');
define('LOGGED_IN_KEY',    'l4iasxtlc12te4kp2u8gydmjtz0wikvud7mjdchr1colriky33eddj3xwgdpefl5');
define('NONCE_KEY',        'fejnjbe27oe6hauo4af32fzdqhc5k0gzergqhfauwauig5tjr2rtfgspzqlggrsp');
define('AUTH_SALT',        'n4rofe6ejqutegpdjz5pqkensowvikfarbjncs5vdftloceorgzu138os0xkqrx5');
define('SECURE_AUTH_SALT', '9cyjip4ngy2jtxseh5oo0ot4vo9omvmcffuu7mknxykixbo26ijixtsnnyafi71z');
define('LOGGED_IN_SALT',   'vl06rphl6dafsvlhbisfklf6efdukenwbgigjwrpfgqzrnocam5bfdmiwcmh1ts0');
define('NONCE_SALT',       'nkdrojrb6jogq4hfth4hxbityg4lerctbihwnmn0vcpxdptj1inzmxcylgjiozup');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'crealog_';

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
