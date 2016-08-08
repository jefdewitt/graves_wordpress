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
define('DB_NAME', 'graves');

/** MySQL database username */
define('DB_USER', 'joncheatham');

/** MySQL database password */
define('DB_PASSWORD', 'NightHawk');

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
define('AUTH_KEY',         '$ I):[GX$,7`XN52P55I*K,<r!g_bq:mS]Q]2 Nck)dJC.HW{}ymfCd!9SUio`Yu');
define('SECURE_AUTH_KEY',  'G&H{tK1*vtL_;3Nr6XlE}&xnv(k8& zo_^{?N?cUJb>qns[(2z8XB79SXC-rGbxG');
define('LOGGED_IN_KEY',    '7JF$y^c.&8992WMvT],({2+FLv?q}/k7[#jk>uNH(h?}LQ[VSdCk}5+,&/B~}agE');
define('NONCE_KEY',        '7L6PAT]Mgv&+/mqyl<q[1kP)P8|+h$:1h.vp,@iP^E:6E;sKt!vclmW&G0[q7we>');
define('AUTH_SALT',        'P4:}RjZ1H^Rxfnnk~m_2SbQpu-ge7m|~v;h~7S}<wl1Z9{^(*Gq*=Y%>#t:bx1&[');
define('SECURE_AUTH_SALT', 'A%_5:x;rz<z~0t VgB= ^L9A|>H/wpZ|&^mT5fOep:`%+~g4qSa~qeP0</L+B+MZ');
define('LOGGED_IN_SALT',   '<!Ie;ax4x{nSqYp]=]]2k?m R~pBu8jE]5F0625hk_#=2W[ASXU(QA8B^%3R_&hd');
define('NONCE_SALT',       'zf R8ev3PSZdR?/9q^I]>wJd!-1)/-Pn)tdnCqT^/49BHp?+CbdpUAQT:ZG,$1f#');

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
