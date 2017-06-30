<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'EnnBlogs');

/** MySQL database username */
define('DB_USER', 'mpnaidu26');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '`tq~L6@H<?*S]1wsh`v[gM%~Dv=3`&KraU}HtLWPSS7bptjNg]:)SWLezX>f^c/w');
define('SECURE_AUTH_KEY',  '#R~?/oam]6x,EiqJkMGQ8eL6zk*Qd+r*mK90Cwx)uGLR$2fITJx#-?{XHSatvf&2');
define('LOGGED_IN_KEY',    '=!4Ui?2ypEGhEDsxNg=jN^rE#3CM;K[]*Ue*i$oPt-*AX~:Gws>KotK7{W|x4Nam');
define('NONCE_KEY',        '(vourR>!oS&P}WUSmG%G9g&4!`sA>pemGBhYm;ZIm^{3zN>VpxzDZ:2JhE^DD:4q');
define('AUTH_SALT',        'r223+5vSc#e3$<T6qay%dbHc(.f&=f`3HFGk) ZD/ffXE Z%t(aHl*/3vU&_;@X#');
define('SECURE_AUTH_SALT', '7D%sgb6JS +>^vjg5_X[ [kU0oKOc@j6lLJsuPd%Px=aJ#Q0IjXe23NGw[X1-PGz');
define('LOGGED_IN_SALT',   'ETo(+Gt&(RD6Z=VFUnCe.0qTx`Igbl5#/ce0hdZxnY0jF?zGLBmV,&jAo4evV=:v');
define('NONCE_SALT',       'nTN~E/krqkR3,%XuaQ)OWRzy%b`?Q(b~xM!-VNaqWo7r;y2> 07[_EiIY:Q/b92L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_enn_blogs';

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
