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
define( 'DB_NAME', 'A2' );

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
define( 'AUTH_KEY',         'xHNzFG4*yQc*wc-[~jczLSl7^_#tQ;wv@3[}!.O*[R1_.@=!4auc@l8g)abF%y:J' );
define( 'SECURE_AUTH_KEY',  'SqcCsHbp2]I!1<1K0CK7L$QHSj-<EW{)k?ic]M9{C8k]J``aAqo??)fUY?&y^Bwz' );
define( 'LOGGED_IN_KEY',    '>1{Z}oV9QmFa.FYHTs8CUHFBs57ooQ$jm_w|8Z`2v^kNE(9+-L;k,Zfo-Yi1|zAa' );
define( 'NONCE_KEY',        'cB8~VdSbo1O=jYPD|L~B#+!ZR9+4@ywKVjn}`xPJI`$MXCwwrOWuDi&vE-I^%7eQ' );
define( 'AUTH_SALT',        '+h`00?NUerQ#kpd4UgwCh/.f2rNJ*:t)&r~ykM?2g&c]Lu?z`iKr$w%tnX#<ncKp' );
define( 'SECURE_AUTH_SALT', 'r1nJz>SbH#q^M9Z+fM=hd>7SzpH$(HVvw)4nY_NmKV1>9.~%BA0T_Xp]C-{MK5kO' );
define( 'LOGGED_IN_SALT',   '_zlOQ:8Ifg/]C0n,TDVIA2RIGZ*UMbwWOHPWRMhf^}QKmjG:$1wo(V876YS%/o3l' );
define( 'NONCE_SALT',       '_2Qu<I.lS3|Vu^7HQbaH+]ZMH..H6aX#z&O*LuF(7QBi9;(EYZBF9[B#ZXh a8sP' );

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
