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
define( 'DB_NAME', 'breakevendocket_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Techverx@123!!' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'i(aDMQ]>uh>!(/u6Sk(osAkXl<eJ855OWbU$z-J[S(/=<U!V7eLWD48N5_cyA<>/' );
define( 'SECURE_AUTH_KEY',  '/?!J)O0y0b-|lOA-/APVT/:Mnv.|[(GS 15g~iZT58$;*Uun^Gvb;IgN0{4:[gS,' );
define( 'LOGGED_IN_KEY',    '7?-%}e9{n@cb.dAH2LP7BU%3S2WF3WK/[0c0t7pG%BX})iR-.f`F{7;NV{j;iWBm' );
define( 'NONCE_KEY',        '4Z>a*KiOXW[fGh>Pv1w.2h/D^1B8oPl*PD9=]{!Q0-4@_@TfkMw5QMNS TIDn*.}' );
define( 'AUTH_SALT',        ' 8f1cb!VH Gh)ab8`)XtBwv6J:^[X0%JXta68-JLza-IUndBZ1 aZFI`ISC*!#n>' );
define( 'SECURE_AUTH_SALT', '@4oRzs5E4Dek]#UOG*NQ. gBX]}^{S1tA+!zr3=d!x,%X2dV<Gw]5TjN^CIQIgTh' );
define( 'LOGGED_IN_SALT',   '=B_~8S$QJQ?byc[oMD$kl!i]KOXv25?*dmEJM-u~dSTI6:#RF-*is1q<dMOi)y`c' );
define( 'NONCE_SALT',       'QT30P9[Y]&{v[mE.]OJDat]&.o H~PDv/[ 0U@o^ljPEqWJuJM{EFIz)mH]I9`vM' );

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
