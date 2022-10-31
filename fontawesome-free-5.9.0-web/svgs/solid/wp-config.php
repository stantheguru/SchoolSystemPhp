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
define('DB_NAME', 'emall');

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
define('AUTH_KEY',         '&aS)z2~G!DBIGP;i@ ]c<?@~`v/+M8EE+mr6V!dr}<UfLXAsDn&)&/KwHx/2wW4O');
define('SECURE_AUTH_KEY',  'j_$lAmJ_o(xx.Dd$6K0GA/zE_U+oqa6>cH|rBa%a>j.vrgZ2RTUNGAV=92kS@44R');
define('LOGGED_IN_KEY',    'L+Amz~a*4X`wLL?6DWV&/eAN[uG_gQ8,`hf-]u<1_KK@7#VO*jx<&tqR_WF}{$kS');
define('NONCE_KEY',        '{ 7@:_|s9nX>fFBWO.p/FI3G|?LLrJBG7ik4kBm1QBA&K^6V4~}rDD#]PVa^m7u6');
define('AUTH_SALT',        '0&>!o*p}zpP>H3CTSM>.;zYp$yPO6[50ua9!,s1yp6QH}JE3kll>.qW;Q;>O#ouJ');
define('SECURE_AUTH_SALT', 'JlkT}x2a2x*I45an1x/ocyG.p7o&9[F6m+K^&9%D6Cgqyn=[{H^b?]Mmju6Bhf(F');
define('LOGGED_IN_SALT',   'yj|t&]Lgur_5>yTe?ngY4tf3LW}0_}1Y8XT}h4XS[ bZ]G]I896C~!}};[!nScOE');
define('NONCE_SALT',       'y3*PsW0P]*{ksDvPC:-@sOKBTRFgj7QXs5U |k[gZu/`_dk2k=!4COdf+@={rXj2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'guru';

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
