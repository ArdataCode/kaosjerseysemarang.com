<?php
define( 'WP_CACHE', true ); 
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'websit19_kaosjersey');
/** MySQL database username */
define('DB_USER', 'websit19_Kaosjrsey');
/** MySQL database password */
define('DB_PASSWORD', 'Ardata2024!');
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('WPLANG', '');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));

define('AUTH_KEY',         'W9r;d=(T@(E5!D_R81;7Cbm`z-EqT]2=Np7m|G;6-!&l^:TG}~(~>wn[}_})0Ijn');
define('SECURE_AUTH_KEY',  's>X0FHriQEEt3Z],%>Ax?=`X1pf(1|Sl{HV!EndwN*67g.Q|,ZD1IC>X$pGQXzjS');
define('LOGGED_IN_KEY',    'dD@q>*Z;j:`rye1df>|vU!ZafN[ap3P^V.TVz#oj|cjW]4HQ$&6~+(5x&#(2T<.j');
define('NONCE_KEY',        ']mU+;N4;p2[,-k.W$jl?A|pZbLg]6;%Z>]&PDIte=.pUi:(Mwz[}#xH~o%c FQ$8');
define('AUTH_SALT',        'Sc7]kBsR1jl(._JkIC4t|;^?oSgQ^ZLxykC;BZ+}fz@Vw*m5<NrG)-NXLf+vvm09');
define('SECURE_AUTH_SALT', 'P8%9ffGY::U:=S~J|h|6+ -nhv=Q/;V8;N|o[}#!G??a|?TZoYzI+z!/|oVx8.EV');
define('LOGGED_IN_SALT',   'bj+)qYh&`osT8QTHfd:|8VQ7a.d=c?T[$kSG$C$x@N{vgtByf-M1;SRHJwc@1l_E');
define('NONCE_SALT',       '}w-H>A+/#3#XlJs5Hn^M[-O1X<=pHWKTKORxf?.&XbLOzO1?zG4Lp2DKU.CXdP$M');
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'DUPLICATOR_AUTH_KEY', 'o$WaOX5mJ9U?&)U,g?n{+C-&Od@IGW>Cfs(Qe&7.YcS3Or&u/;,52[HlHDJGzgk#' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');