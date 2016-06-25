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
define('DB_NAME', 'dsec');

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
define('AUTH_KEY',         '-DcPuzT)L9,]:]o_-#At<S8>#4mc@gyDPs<f+K2=8jdzwwNnjv#4W|F5o5R(d*[U');
define('SECURE_AUTH_KEY',  '.~6)MA6Qpd7{e<(m(D7QX.sVm14)EBBigCE12F>?Jlv|_@E&5-dv9ba4&2-;D&0J');
define('LOGGED_IN_KEY',    'h7OoN$6&X*Y>)Vx<sg!mfNcpm{)T(dLM5Qc*Q,dq);-o2)|GbG[.D]};N@f7UQ-h');
define('NONCE_KEY',        '_r)j^b&7Zqy^g%5+b/P&Mjj0{dxalR;{6SlcpMz3xV&>5bfHJ|9d[^KKJXwF|aZ0');
define('AUTH_SALT',        'g3N9dL-/ECY@Ur,+{]b)NHfvv+KUC:<|IZM1pIg`1L0C^8! I2m]%Jr5IhVu=y|]');
define('SECURE_AUTH_SALT', 'E:6W{*+rF|xup#U%c/CW@O,m;X]gKi6+4&s};)3U~oYPI3Gk[/.;l;pVHvj#p{,?');
define('LOGGED_IN_SALT',   '0.??M.MiSu;C<H_SR!D0U}!S3<CUK05#c0+aRIXNhUAlGE~sl|+[[>kB-usW#2$n');
define('NONCE_SALT',       'L6=gCDD{q_r|3Y8jA8+?{L-ajEJJ.fb/CJSYj>j@O6WfKB+BBaI!aPh5j@/-yhkC');

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
