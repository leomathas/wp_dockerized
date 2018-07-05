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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'db');

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
define('AUTH_KEY',         'rV{^Mkx)JaolWWr5SV{m}[4ZSp6B45z[,S:B$uaFJ%Zi[Qs{ @3]4>mKv]IPyX:m');
define('SECURE_AUTH_KEY',  'Z,ZB~%aUzJP5<?0[|=<5kK(kN62U7j2IhR*zM_J<C<q(|14LPM3~mlhGJnQ&=Tfw');
define('LOGGED_IN_KEY',    'egq@Wb*ws )1vrVUN--jL/y_LJY>um>7J({8Wa.6:K Gp!!$$C|)uHH~GhzY^G-C');
define('NONCE_KEY',        'O }gV.9VWwa~dtx]-[$s3-%]D<jgYZI]^K@5+.md??~W_E%^8Z,VwOq)(GnCjHHI');
define('AUTH_SALT',        'C8*{noJ{u8`Ao5.bBNQX:|8/MZjGx(@JKud3- /3s!Q.uh)6{MwelwWyXzBhB+(~');
define('SECURE_AUTH_SALT', '^rxh-;STJy(fm[+,>Z]G0F4sB)o/k*Ns^&BL,_*l59w%tPcu543Vg3hO^Y#<>17b');
define('LOGGED_IN_SALT',   'Q2Y3`K.sc]#h!C*`w]rCtagdff`:)0:LBJFM?cDyu41H+l-|;]__?Cl+xHvNei>T');
define('NONCE_SALT',       'zG*gW%f@v@.&|LGy#CkR3URg3C4Td1s=mdP3S[P,Q)>vrnV!w9CyMolh0[ m ]|:');

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
