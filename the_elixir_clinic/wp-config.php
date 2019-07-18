<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elixir_clinic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AIpseJ7RUD*-ch3[@z^ ELC`p0l1u]4/@Z?*GvY)[^zf>*e]PDsKn?Kp?LiqTOE5' );
define( 'SECURE_AUTH_KEY',  ']UqYIRT/fv!3 =P?4~Xt )|vUAB7EI}R6Jx0 .fZ{n27-tK8O K:w^g&~ye/2;u@' );
define( 'LOGGED_IN_KEY',    'l9a;y$hR>Vkm)YmZlk:ldoD +=XX?xOcpS3ct4W;za..A>|<F6f(MbAkYz:TL,,2' );
define( 'NONCE_KEY',        'Dm0y``d|e[}%:lR{hkR9|8%yU,Dm/6r{Q*/v8y6OViS=NP{Y2D!bn)OB!aZNU1>l' );
define( 'AUTH_SALT',        'IQ|/B4?cp!l];e76I;>6<d$J-G/>s`v9Al04B:<RLYp;}v xVx@V).v.9DkQi_s$' );
define( 'SECURE_AUTH_SALT', 'U_|z_Nhx~xrm;?u[z%1clUp5,++rR@<jeqx|eF%c4e.^kzNec_*x^JlY[2H`rz2e' );
define( 'LOGGED_IN_SALT',   '[l(ZXf2)hpiOxe:?HOIpRP!}[3h6tCN}J;FtV;}@w-=S W+K&/t3aIxNs!m4WX#l' );
define( 'NONCE_SALT',       '~xOCe)Yr#pUrfuGMbAP]Q&$C!%jnRlm~#Be!)9qR(V_by3)]V@|m*wl+hb2>(.F!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
