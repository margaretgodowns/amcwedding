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
define('DB_NAME', 'wp_amcwedding');

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
define('AUTH_KEY',         'l,qoHk}7Y@z4FI68~2`!4_c53zG95u 129I)<Xr9Fu;Nl5`e:4n4I+]CYCtBZ#hk');
define('SECURE_AUTH_KEY',  'E>Tw%ah*6hoUu(/9H[,WD;7ezG(D2EuEIO(n#?7cbL|[:YI%/gT%IhC{Th$M$:=,');
define('LOGGED_IN_KEY',    '`F*)Lyb33JJ`^p`56;vPyET&v>f<`akPv?}|>IL*Qu#F/DY?lH|h[]0&mY8CU>OD');
define('NONCE_KEY',        '@]_ 47;pj9yB(jLR 4/<ebBNO,EEmp.W0gQ<|qqsya{&<?CEOq`eooO~6fC5Y*$h');
define('AUTH_SALT',        '+=*)UhKglPpjZH~[>U1/f})kW|bxJ&M7u]hN[|q=I^<$)qOUp@yuqGW{Y`^IdclR');
define('SECURE_AUTH_SALT', 'tP>&Zw1]c949SNt!#^X)v3IxYDT_P<T69+#>NR%eR3^i`ul-v;>|vGsn]PPowUES');
define('LOGGED_IN_SALT',   'F)Pmatx9?]x#OeDG+7@[P5{{mG-!>:+m/?![c-bWO~ ry!Fs;&= ,bLpbHC0im|+');
define('NONCE_SALT',       '4M$voy&*{ =)%]b4cjEx85>xt6Tnf-U0?ij_G6lyU(}1lpkq:f`kJCX|uqa$wD/G');

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
