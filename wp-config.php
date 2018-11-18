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
define('DB_NAME', 'ascendsnz');

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
define('AUTH_KEY',         '0j(t;<5n&9bHzEu>%q*PET}dRXI C}8R4To)}9}<~:G8G8b0Lif1->p-Tvf9wNyt');
define('SECURE_AUTH_KEY',  '[Zfqaue?[JvAf 3&m:psVgu+S*,FO75lO({p}RVBv}n7QitKvLxu~T>un^}fEswu');
define('LOGGED_IN_KEY',    'T2$IF*bqR$>uQ3w~ztr2-Tv{!v`q(z-YMtUA4?$}J~?E@sNPvKFth;P`jjkz]rW[');
define('NONCE_KEY',        '{7UD.dpj0Ix^LS=K<*!<>b*+7]-mr>5,r]=kn/v-`2f+r`n4f7$oR c(yqN3%Y*E');
define('AUTH_SALT',        '#ieqky8{0H0TyhxvWo~C#PYIs7-8lbfU(3(u>0%Q9~$~91-sw5&rV:AB[Z`?_zM4');
define('SECURE_AUTH_SALT', ';=V_UeVLc=:f8bG$yR.@M!CGe#3n%m:&Q F1t*`H,vmwa8sk<ny|+s]km:-,>y^7');
define('LOGGED_IN_SALT',   'oiI5dH>HQ8WWv9e)3QWK?D@3~M~V9~J#|9ECygnbkZ}H<58Fk={}vIen}mjZ-G$i');
define('NONCE_SALT',       '[-vdg4UR)rIm uTej_c .&p1sf,$-^RTL/w6OwhjOb[+-zKt`(8=y1mqn,rf$28$');

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
