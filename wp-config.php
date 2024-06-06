<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'klik' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'nPU+*=s/?L:2jWBwW,a0b[WM,aWP{)F{|2]_NZEo3IS6&_4@ E<~VCC+^6FC@{@r' );
define( 'SECURE_AUTH_KEY',  'nITdVz5*M#^qkN@9PCSTC^k <IDnMZ?%;<xVvLi^<(ow.;7XA#7nU%1qY$Vk%[H.' );
define( 'LOGGED_IN_KEY',    '0/pEP(?pjwS-XwAXw9E]y$byPMXEI7],sKktS(*>uU$m8y6d8|S1i+3PKWF3guO>' );
define( 'NONCE_KEY',        '.L3+>^mKvOFDsZR`ts{n:Hno`&=F7>D{EmV`x}(8-rxkNi sa/~RJ2UD$Ug0FKH ' );
define( 'AUTH_SALT',        ')9b_:!EDo-:~*=@DI,MF{+^Xj(l9u LiC3#geI{bg`/oL5bYd9YH)ofJWK_Pr]Q@' );
define( 'SECURE_AUTH_SALT', 'e2%b(mT^sO(}YX-?(u44> DqgD>)1%n2 4t&=S1/dv=@WC]`yv]_jkJ~%;F~^Oi-' );
define( 'LOGGED_IN_SALT',   'T c`1v$9uzG<g5_*9.ne#3z[0z$qc7wp]o4YzY%0h$_)lc+X+j6Uhw]W_L{Ci[c9' );
define( 'NONCE_SALT',       'Q+R9uwY:zC+HoP&9a.x]/1C$ra:f_md[#K^ OmsU0RMgp+x:M{NwZ09)9~/*a@W+' );

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
