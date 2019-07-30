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
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', 'utf8mb4_unicode_ci');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{8Gsd0-0x!Cpvm?@&wx!@+uUh=m%!GR:uy?685dBo+0nhs``]@c>-?@W^Tp<jZJW');
define('SECURE_AUTH_KEY',  'lUC8Dv?)d.l$A*bd1N(fY<6wu5?ZbPx7(S0XIUcM82R&27WB_rccX!3biL$SvS&A');
define('LOGGED_IN_KEY',    ')gUM_$>asA7-PL2RP,>`.Qwy=H@n=y<!sC)H98.f*Q2KqX(^`Z^DoJIWp #bt^Je');
define('NONCE_KEY',        'O8uT4?o|u[fS5~ /L$!:t-H]6&ieQ 6yj{&*tPAhb|^dC5PQ%Tcw+kjh5PZ`7gXV');
define('AUTH_SALT',        '%geB<@NVygSEO}Y9=Lznoh40@^(|v#06.dRy? (x7r8X1~)@:ZJI<un,}ywzF&b|');
define('SECURE_AUTH_SALT', '[_O2,)^bG&y)[7wQ/S7hC.w2Jgm{7:K!ObSWPpF+8_k$ lo6_mXe&tS3Lp%0!mo}');
define('LOGGED_IN_SALT',   '8qqpw1G}i`<hkFI9PT8rZR_g{YR7s%rO;G)XUXh.ZQ?WcFDa)rkp];3M{_H8Yt{O');
define('NONCE_SALT',       '2G:*_0x+5u#~9X75K<zaSrR&[?cdmW=fr=7n6:5-@LqI[{]_/fT[QrTYAl?W9,ZV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

@ini_set('log_errors','On'); // habilitar o deshabilitar el registro de errores php (utiliza 'On' u 'Off')
@ini_set('display_errors','Off'); // activar o desactivar la exhibición pública de los errores (utiliza 'On' u 'Off')
@ini_set('error_log','/var/www/html/tigoconectados/wp-content/php-errors.log'); // ruta del archivo de log del servidor con permisos de escritura

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
