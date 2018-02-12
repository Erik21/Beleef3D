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
define('DB_NAME', 'beleef3dn');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'nu.:ZwO;zt8|3w/rZ7>)[`b<Z%efi4g<^-I[(9Y$.05`T$0yb;sO?5{}vEKTVcH6');
define('SECURE_AUTH_KEY',  '>sV8-h%P-q4CZgcJjS<${NWI!s`P<j>IgUv|i7NAX,r6EQ~%Q[<;i6D]=4}nEcz9');
define('LOGGED_IN_KEY',    '$8;O9L+Ws(JV1.t.{{^k75zE&n1$EL-AcAX{itpz]RA~1{WoSk.QLWl2+Z@U%gyh');
define('NONCE_KEY',        'G!7SSX1;[MG*PSMw29SI9[R|xij)OG?(-nGmSES %zjmR^=(U6H87h--AF|RyvQ;');
define('AUTH_SALT',        'Ct~s%=O^y!cE|q$WP$-(Kw|Si0Pzqi]4/^.9u:UDIQ~/IQ#GXHR6;bY59E=I6upg');
define('SECURE_AUTH_SALT', 'P^N5Om#UWqYm8f.A+K1%?7-}^miY.lr=L:jTw-mXI_-hbhj*{_,tgriYOSE{]jx*');
define('LOGGED_IN_SALT',   'H-uaahP]1$<R/3z/`96-DQg(WdF)l07{%kME?EDMsaIN?~eibpW$m}W=b,$eA1ga');
define('NONCE_SALT',       'F&.2opL~JkLJu)^{`qq3NVl>`9]^[<tyXC*O%S1Z0b-#[?7Y|(fzFKl&Ur-@Af<M');

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
