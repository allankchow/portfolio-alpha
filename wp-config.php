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
define('DB_NAME', 'portfolio-alpha');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'dW-Yo@=it- Z<}2QdmoA2DqZK>gX?oEo8cYhbUdHt-v_?7{^^k<)|,Xn/S/2C^F6');
define('SECURE_AUTH_KEY',  'BM<|bW}gkhOUp$SzPohY^sLfib/+^iLeaW<{ul`f[3?-/v;-_rzx!BUU+@OTQ8qf');
define('LOGGED_IN_KEY',    'CL:.@1)R=1|(TI;5)a.nI>X0}>eYtya+2.NjHMdh6W?Cb<BNp5RjUF19g`<<|Qee');
define('NONCE_KEY',        'i/>I6-=3w[/zM&rnik_B]~{z#:$1qQ2F}->W=(oiQ&kye}[d2v9 o=*@uJFW0q&,');
define('AUTH_SALT',        '[<#vnm0a=2m-&9jh])Fb*djj9YGU`<5_HoRJC;&!L;(X|q,c-.^Xq7m!Dl-* K&u');
define('SECURE_AUTH_SALT', 'c2p>z6H^KV{-DC:t(|;2|_A-e;?pn>lA;=PQx[8Q_+;.x70}FD0hJ.O7dQGFx<Ee');
define('LOGGED_IN_SALT',   'X;3sYyG3,<{x&TBGViw1}}<c+Xvd3J1MoewWK6-D8UF|>;9>Fv/:&Dp/SNQ0g(BK');
define('NONCE_SALT',       'd,`<9~pD]~-6qvqKuc_Z|w}vEc`-Zk+yYSCOQsmYyb?;!&bstVZb}<I^W:{,|%zw');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ac_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
