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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'G3bm7UV/M([-_1|W8W~Wfb6%QuGD`#P!7=g5qIUA*Yh0;4t3a?~Au-Lw%?FmNt-7' );
define( 'SECURE_AUTH_KEY',  'XJ5xc?YAu4}fi&k&/4)3yUaZE^~e!e1|3CBv%SJxR8}nnO%%Y_to8$ Y3A{:MR`M' );
define( 'LOGGED_IN_KEY',    'But{V$G`4@zxrDo2Z:{3$ LYzq*+LZTr9ZTnz)dqRP,,Kj%[P]$o{XTKEl=PKEb/' );
define( 'NONCE_KEY',        'h* MF[ySYL$/6ClI;||e7c+JOi9TC*90Y5c2,v%K_5N<B6g##PH:$eVY^QTL_W+K' );
define( 'AUTH_SALT',        '5W#x:UJ`.M9$<-A0Z; x=1RHb8Jq^P-GPvSLa|K&Vbu(t,0=@vZP/[JRP~SmCNdF' );
define( 'SECURE_AUTH_SALT', 'u|vL;br9@rNpiOsM:,,E,6Y6LJ;G?C/07hijnTdOL(&@i{RQR<_hwglJjA4XIFpS' );
define( 'LOGGED_IN_SALT',   'diry[e{<@%.3ZF]Evs8v^?gLvl@OOTy.yN-ZWW<Eg;Uhw7apO%7:gN)M{<]E()wm' );
define( 'NONCE_SALT',       ']g J@H@f[Kcd{Ru;z[6#_w>`+8 j-*v@D>w-K9~bQ;VsypSvpS%H43V1e)cje-dL' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
