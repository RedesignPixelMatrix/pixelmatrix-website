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
define( 'DB_NAME', 'pms_new' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'im PyMDa.SakdNPP>F?&VNfN,5@]3C1AD[;D9O|%w@L%q)nkdR!k60m);|TXIE(a' );
define( 'SECURE_AUTH_KEY',  '`Fq~}DjN|i/t{gFP|z) BIP6K>%.L&&w|&2+C^RAStYJy^L#rK+7OtiH4`QH93e)' );
define( 'LOGGED_IN_KEY',    'Dua}7kqX*0RAn,/I(VUo7^a-ySe>m`FR31S>-q6z]KBGs6Q{g;yu7QcSgk*}:dC1' );
define( 'NONCE_KEY',        'R=tYBa]F3*}g^pTpymB8cc#ngqc{QDfOqyDWMC-.(rj|^Q`XmL7Ah$WzU$W%ctq/' );
define( 'AUTH_SALT',        'g-2`?8N+:8<hg(c;TFvct-dPZ*6J)jgJ,@Y(/72w;a@?=K[AoR`~;o*n-:vukgW{' );
define( 'SECURE_AUTH_SALT', '<-1rt|8v-?H_OMatf=}=spRj}*%!W}Z:zSQiY]Pb8FSI{odhS!1J@F5Tb~p<BFY,' );
define( 'LOGGED_IN_SALT',   ',% ScI-0}]Iq)&65PrQhtC3Ku@gg!7WYQmhlSb}I;=69nY&6K(,ogn=]g~;85<x/' );
define( 'NONCE_SALT',       'jVX#8eb|&NvpD=Wy@Fs/X!I8`{gLGM~|1Ty%$[wSQ0:eQd=><QZvomeQr+`A*f0a' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pms_';

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
