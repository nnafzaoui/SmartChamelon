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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smartchamelon' );

/** MySQL database username */
define( 'DB_USER', 'smartchamelon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q%fK]Nb5 vTn,YX*xLEAHJ@5uij]wGvMbAiZv&?79Tf0sCULm03u%6idk{;ob79)' );
define( 'SECURE_AUTH_KEY',  'dKzQ`dQW;2sh`*d53+?W:1{rLa#y$:5;ZN|8?$ol1Ln~J3ss`__;`SsO}LCewB8$' );
define( 'LOGGED_IN_KEY',    'ci+d%mc;Fw:(;4C+3+Xucg|,-e)9$cAte]W!zTED`_PQLx!LQo:W`44+?E@*gcJw' );
define( 'NONCE_KEY',        '6r[i4/N}]]1<,-!;5uk5!zc_-RnPR~t8gcbS^mt3!6{&AN4Ou{?#=]NA{%PcxO1A' );
define( 'AUTH_SALT',        'rs#deg6T|RzB%~QHydeJ2-K@FO=aBhn$D!Tfu.@osE1i[1$pgt trH3*FD?^k~q/' );
define( 'SECURE_AUTH_SALT', 'XE ola7 FM;6,&oE(5EQa^vsl*]H.4VM(8vj^Bm~n@`dT%bg{F&4a_MyOf(H@fV}' );
define( 'LOGGED_IN_SALT',   'G.cwbwb,48)d;m*yjU~s}*Fh;,t|O}JMr`GWQ%xQ3*!d@W?zYYnY~+I$d^M,Eg0t' );
define( 'NONCE_SALT',       ')j-^5$[/HZP}-g#5*vp23g;rg?PxXuaBDFfx6@.,gNRUPI~tlm>rImk-RrsF0=$=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsmartchamelon_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
