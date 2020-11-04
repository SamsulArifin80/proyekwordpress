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
define( 'DB_NAME', 'jongkoding' );

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
define( 'AUTH_KEY',         'P&N_q[VHJSGBld6i+L*m]7qRNSGKC/N`(GM=8}t^-m9O{Z$zZYPn2D$-c_/t`JEQ' );
define( 'SECURE_AUTH_KEY',  'L;bGNU$)_f2%lfXab%DG{1+_?;VtX@t`}X!VPi<RWHg3v,$27r8>1JThF@GV346?' );
define( 'LOGGED_IN_KEY',    '+z@R$LmaAG?@SPj5M~yjy&DVVS,vf- x?@r!~n.}TqRAic348E-.^ngOE3EJ Z}x' );
define( 'NONCE_KEY',        'JOnHd<Im!l!Em7Y82pL[~t18+f13iUvS~c]nQk:;3OM7vRxsA__<Xy,]~jjoIO5Y' );
define( 'AUTH_SALT',        '.pl)>[3WOH>!UX|;wC=oPPmm)u[`SN[?+I#O/Mj%UK3FG3T:Na%niALI3=?2}8IB' );
define( 'SECURE_AUTH_SALT', '<-!M*Wno}dB]t@^BS|Oj<56)(  ?3L>rJ;/NaVo2&31,=Rcrmv0GsYIRWxPdnYg]' );
define( 'LOGGED_IN_SALT',   '2.n,&$_9h1nI_>V5{|P?D]j =v(9e[zO_rF#ANCILL1nX%94CnGTT]WT=*ptp9lX' );
define( 'NONCE_SALT',       'FKEx!}qauta>/TDBTqQ4UiZafTn7.)n){!2T?L=xOuW2D=<N##h?dEUa<].C 6Q&' );

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
