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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scotchbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*8$uGb8Ns3uw7~~5cMv.9aJPl;&Tw@U80F,er?(Xqajv`DP1s^)J?5Bg-U!ym:~&' );
define( 'SECURE_AUTH_KEY',  '`o/&3K[+B;o +6.,ttO@eR<E9Aa8fOBrP~na<a;bIV@=gL&yS`<smOEfkoJUI*2=' );
define( 'LOGGED_IN_KEY',    '~{GKu;bDpAFJnqY:Gq| F7M^n}I>Pr~ut:2+{ :x*(H+nhBIzPJ%DgLL|-+e1V!x' );
define( 'NONCE_KEY',        '}A4%0lOJ>Gu PhkA];aw-OD10AfF~qs?eW|Lbcv:q~UuF`f0[K4kVafc8&<W?lOj' );
define( 'AUTH_SALT',        ']4>Ba<<1#>.g%g_Du,dnTlX] lxN@,u=M$5LS3~|5@/m`/H=Q1G|Ro||8=q5@+Z<' );
define( 'SECURE_AUTH_SALT', 'B~>rEa~N PU1g8:M)9?+!lU/!8}soB32iCIeB#qhz8%},hRge,X>RBF9B6Rs|z?d' );
define( 'LOGGED_IN_SALT',   'yz^ /mO07AYNCy?DtFu+@T<5j;93.MA`R7lo7mrIgJ4P|K9CkM2#EUZ8n]~4I[,5' );
define( 'NONCE_SALT',       'CN|tR9tgnR<$>H/rC^+uVBK!0hZ3*{kZe:ANR~@K9vt/8LyMm26ckoR#HtJ)#olz' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
