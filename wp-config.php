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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'VOp.Vt_4jy+{5{e98~$5Q? H4UT=sKKB!b&@WpmzJAez0;V``,y$YXU>-#jZ/(5m' );
define( 'SECURE_AUTH_KEY',  '(kTfvNI7t@A3ODh8h`IZg_YvQcW~i*NTWf!C,8EC@|nv5`LnXQNuo Oee{DFi{fJ' );
define( 'LOGGED_IN_KEY',    '_uaX9mAMh!k5J]xYcS$sVId.Uky#1LvU|@xWOK#%%,t7,]?W}SoYk-FN+Fiiqbf{' );
define( 'NONCE_KEY',        'hnSNu`Tyiz4WfkB>A?Vbz>3[Baz&)>5{Sc%OTmtNDUZ@[>-&)@6=H}Q?%B>c@F]:' );
define( 'AUTH_SALT',        '|(,]Ni`Yoqg|DcX~Cg[MNh[P;M9SgGP#_xSK-)&cMM6$S%ibO$2>qx?$slaFg&W%' );
define( 'SECURE_AUTH_SALT', '5W6~MoAv;Z/l(sx^A_sHw )a7-9)<Cbq@oJqMUe_HlA.6xw-{Bl`V0 ]9$hojT<?' );
define( 'LOGGED_IN_SALT',   'ST_Eb!*5GOxbfSauE[o`|&]^r,v<Z|/7@qYw5w~6@xfDl=fEhX ,TPo(&c~T$Z?b' );
define( 'NONCE_SALT',       'f:^7%)DJ?<%ZMB$I!P*$*({{6(W%72GsBN5<[$9QEKRGw;@RLiQ<Z>wV_;){Al/&' );

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
