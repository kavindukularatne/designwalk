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
define('DB_NAME', 'Archi');

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
define('AUTH_KEY',         'ks<t7oMYQV<7A*:1Ak*:LH3y3+ix>-g/lhx_*RP^P0m}_b5:,!rW-#0-51u{o!,V');
define('SECURE_AUTH_KEY',  'ov%rX^.MQs2H,*6IXOW?^Il,b48[XgLxV]|gB@Tufm-rUCrQM|,f^)]fL^M2NE*1');
define('LOGGED_IN_KEY',    'Ob[O. qW?ylj?e^n3xhlp3Hp%]w.XZcw$uH7s+4cA{Oz4;?l[5S@pJ,g0Td W:2c');
define('NONCE_KEY',        'Q%?d-TXD4kfF|qfp/qh8w_JN&^Re6RQi#_Z%+s:x)]{.K#<jz>G3GD> aX XLzd)');
define('AUTH_SALT',        ')J5:H|QrH@r^S$9<VXFHk]0ZPn6%te@$SC/(c~Cl|B!D>C~wQD:~wk)i$Wo8?WqI');
define('SECURE_AUTH_SALT', '+~+n:hsWP|M?2oJAoXi,4_;<UbzmRR`40mdFoHJIC]K|0BI{O8LNjxC}(XRB}x$X');
define('LOGGED_IN_SALT',   'B<EwdZ%o8oyOIClg_K3V|crT&?dm9[5B@Qj_btN6qQ``^aW9RvXni_z:9<&qB|],');
define('NONCE_SALT',       'HDS_lJupO oG}j6-_-oc5v1}Enw-R5_$!<~_$EjRp#9]3:@_6jk].rfS=7o 2=6s');

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
