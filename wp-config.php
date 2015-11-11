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
define('DB_NAME', 'slav');

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
define('AUTH_KEY',         'ha&QBh#C)ey5X!p-FkPh^QI_bI3C!AC>1-DNFP]&V@ZE,7~#2g%w 9g5-IV1pXGF');
define('SECURE_AUTH_KEY',  'tWi/|CKu h0(IMXFK1R]QEPt8+ra5-;nN5,-hEg==@Szm+rs7}|}8hz+9E[S){@0');
define('LOGGED_IN_KEY',    'F0Z)ShHpWZEacAjAY,vgs29U/tA=h-+$mSpAl/cWHB];#Abo>*]/^+q0LT{<d$[H');
define('NONCE_KEY',        'rR%|)c,F/,{Z@93i*c&w6Q8+uLr6q3MIDe;[@x<B47sS7HrwYkv0+w2X+t#DE`:m');
define('AUTH_SALT',        '_2nIz{r7G[x*c?A9<]V$2+l|dslYhtgI#+rT@NHR4~6>t#hGN`+Z)uP(#]Dp^G6o');
define('SECURE_AUTH_SALT', '*2~9t|i*(?u{]{([y Cg<j?gOtCp{SYEAkA9T?xo/tnE3&KpSwZT1.3 rP(GjRW(');
define('LOGGED_IN_SALT',   'U/E,q-{HI].=kWuj&V.MymF5L&~e!lx|:WAf`Hp..M<#W-g,[g6iS2Aj-=.8)^Ar');
define('NONCE_SALT',       '_9t+^2])f+jp6||Zsw]h$~loGsFE~{h5vZ*u+gS[yGz@JK#b=!Nz#wUeT})UI_9X');

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
