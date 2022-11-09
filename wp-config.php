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
define( 'DB_NAME', 'kreatindo' );

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
define( 'AUTH_KEY',         'W2LkQ`%PA)Nc,HApXB,E;b].hj:s4t3`LW:*G8Y=uX%]o-:pY~mh&eTIRI[v2iQc' );
define( 'SECURE_AUTH_KEY',  'e])KKg@{`C~+%[p4[7UtTy=aKC>gapMfmG_ECRNdW-,tX7>L[+v<wz*/,Y=g2Z6b' );
define( 'LOGGED_IN_KEY',    '7mL l]H$.Fu^.&lJv|fqP-)R;[Ef+stDpUC-[pOe;i[Tv*Z+3ik/-C2(<oe y)? ' );
define( 'NONCE_KEY',        '7>6&/{*|oO*w_Axwud$OZVYA046;~5Y0)D=&Tr%9yG7JY+M;e?SDXxb]75A5uv?%' );
define( 'AUTH_SALT',        ']q5YXvu@w#[9$%H/>8FVG[H<S NsrSiE%PZRM,Q^65/5<_80eIPfGa3N{@GA]ip@' );
define( 'SECURE_AUTH_SALT', 'GE^wSN0V^Gr3k,<tio$j<Bt4mY!*#0],QAU*LCi!m$TG{{+2x^ehHc.SvCnpP}W}' );
define( 'LOGGED_IN_SALT',   'C9I*eTK9t<qO[^i!2!w4JUA)_|uQ(^K6R?S#[jru2.P@~DX$|;`{0s9k{A|~;Jjh' );
define( 'NONCE_SALT',       'Zgi },4*LTpE-|tw}o5[V9TfAB f`|okp0-PRZ}^]miAv4/~0vzjC8y$h9%AE|h[' );

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
