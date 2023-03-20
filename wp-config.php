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
define( 'DB_NAME', 'cursoemvideowp' );

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
define( 'AUTH_KEY',         'Tn#H+%geSjO.Nuf4m($RiS?AoPKdb@}+6N`1M8hP>Zb wVQ7AqP1BP6Iw#)#]r?m' );
define( 'SECURE_AUTH_KEY',  'dUBFYujHPtao05GsVC3{d*|Po:<W1{nRDz]Z|p)3ImnKN8+!N@C>(j}2H,6.XArF' );
define( 'LOGGED_IN_KEY',    'fzt}>o#w_pX=%2fr :Y1kPT^(tCWC1aAYlhv;%L0?jD`,:Q$5+*jX(n/4Z+&<V_A' );
define( 'NONCE_KEY',        '&#N:_k0U-l*V oPZASRr;?jjUW:6(C;DuZf d+m~)=>@Z3xU]st^WOmEwIaH|x.Z' );
define( 'AUTH_SALT',        '`20b)&<5t{^-pb`?YaFJ$o=|;*jmu$5Yf~Tcr@yL*m];ou:MGlhnLQ`P _6/3yH(' );
define( 'SECURE_AUTH_SALT', '[X?(d(A }JjBAjoYqK;2;>`J`}h@O*.=xPlajU>gfz_8f/p#NYM!`Hfi?h{r+@7j' );
define( 'LOGGED_IN_SALT',   't{B5m X!(Qw8mqA-1jg#^sy_Lg]pV=b~PUi:h44`4R]6p=2IL#>pw@O4)CaN2{vA' );
define( 'NONCE_SALT',       '(hAHP6xkdN2eu*t~biTtua#G/mUc(>>U_I{BM~o%_Xr>w4V[m2wSxx@:$sSuvnqg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cev_';

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
