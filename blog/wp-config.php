<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'esanchezg_blog' );

/** Database username */
define( 'DB_USER', 'esanchezg' );

/** Database password */
define( 'DB_PASSWORD', 'Jasabu16@Edsabu07#' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(=_Tr]=a^-m3=chK%?|i=>G|Bu@=Mj+/3JKOqN`#R<,9dB1cdWU`GSbFI6up`,~f' );
define( 'SECURE_AUTH_KEY',  't2><=]fACGC+@+q]XP3^pU[+]Yjvl[9*wWLS_OoA(DHkwzY P#:Ql&,7lcx.r&1d' );
define( 'LOGGED_IN_KEY',    'Xme}hv@>T%Cz!)Mil<lnV>[~8AY1=XWR[a`7P3cWY@mf`{iKSWg5:3EWbc!%K;ZX' );
define( 'NONCE_KEY',        'JRVxtO@S#(sd^m;KwwF;]TTP3hDf|M#1Cy{+*??Z[/W#i ^r8:PaE*~&Kd3C>&W/' );
define( 'AUTH_SALT',        'PwLyDZj9@d+B7Hj@4HCs +60iu?44#PX8T:dT#Cc*wkXz]Bj$L=/jGxw Vu>:~>R' );
define( 'SECURE_AUTH_SALT', 'JOh&R;|(c_:iuA]08p>-i:4UkdW8i46L=,35I(.2fuPatEf+Cxf+iiU^(YAmI^~a' );
define( 'LOGGED_IN_SALT',   ',  JkYT!GU&,qE0iTnE `P2n +!I/BoC{UF^8_el]PW|3|a7&0^exBsn)KV0#)!l' );
define( 'NONCE_SALT',       'zB/Om1H}mF$hb?oaP9h3N~li*Y-D 29?KQP`aU$aFd0Ijg5JubDH4pH0_zm4wfOo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
