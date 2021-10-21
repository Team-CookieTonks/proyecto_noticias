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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'cyN{L.n.r)mgLLv$HNi3y~,0qvNx(>5av+Ll)U{)@CE`u>,jC:,%0#H$oD4Hz)lx' );
define( 'SECURE_AUTH_KEY',  'sTjLl9A5^~S(z>Jl~>v:8-|R{#.Z2k9gY;[m40gbn3{5t|n84FQ!ZSZy%>Py3hAe' );
define( 'LOGGED_IN_KEY',    'JEa_q[D1XWRBe`4b1pr#Xz}$K:KY*$_f w.j,0+Rn]FU #87-Hq3 <>k^7JSa*88' );
define( 'NONCE_KEY',        'S<14:ES9sehwt(sWRN51E]<9&5XvYFVwENEDO&;H$K&lI/TS|&9uMsts i8#o+>`' );
define( 'AUTH_SALT',        'l 2@1g[t/4_dbhOBl7=du1[S-N7ie,D?7#^;LPVxaey.1IB}hEwi.<jx+Zb#v9fm' );
define( 'SECURE_AUTH_SALT', 'ga3q6s#YQ&l&5%PKcA_3o/g{1lf((xa:w/ETH^khJ)HDFC@J#`NrcH^)N_1/RVTr' );
define( 'LOGGED_IN_SALT',   'KfA~u#G6_lgs%vwy(K_<ptnW)<A* ze}jl`9Y6bm.ph13&O^=cnFcTJmk}uA[Bws' );
define( 'NONCE_SALT',       '5IkLh)Gbrc}Xz91YRouL,+#;e1s<wp;ocBC/#E)QQhgnK;-k{B&gcIU~Q,)t`GbF' );

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
