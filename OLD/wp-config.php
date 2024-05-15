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
define( 'DB_NAME', 'ritventu_xxten' );

/** Database username */
define( 'DB_USER', 'ritventu_xxten' );

/** Database password */
define( 'DB_PASSWORD', 'ritventu_xxten' );

/** Database hostname */
define( 'DB_HOST', '50.87.248.38' );

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
define( 'AUTH_KEY',         'eP= iN{ `ON7@,F<} wGKhUOqSl5@ldcLen Koq?jjt*/19@N6uHp,D_?%sDo]32' );
define( 'SECURE_AUTH_KEY',  '[x~.)7~0x}22`o%R{=;4rxseU9-?/h)Vgf$1ms/|LW_XT%3rB#njlYpLU#P Em?n' );
define( 'LOGGED_IN_KEY',    '?z8 *#+(Wj(j5N*$pAJ-CWU.@`JNB~t`S-:?xBc?k.!U&&0K/$_&I(9=}Z*21i(T' );
define( 'NONCE_KEY',        '+TJc(e6(6olWoy E`mQbM3z1iz)|v9p(ID)H0VbuGQZ/:8vVdZaON<1-f~~FHgZA' );
define( 'AUTH_SALT',        '|m&}lb()XfYH(GCQy%UWYR2Ja(]FyD++U^jHYrn&O6H[E|yp6cst^Ta^d11.=ur8' );
define( 'SECURE_AUTH_SALT', '^,J:Sy*YDAYX]3K8,X0GSZcDBc-~4vpy?P7:,W[:ut4-l`W>Gy8zU-aM}-^w_&&o' );
define( 'LOGGED_IN_SALT',   'xSC^8AWop:mh]p4@QK~#N+ie@)t&LzlN_?|@g{hBMll_kzw D=Te/@HJFF<U6C``' );
define( 'NONCE_SALT',       '>p<*|!5Y&.kBF;xQ%z dma;<ImR(S*vfx3Uz4xRAI `1 >ONu@T`=1D@]m]*%N*`' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_859XvFw';

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
