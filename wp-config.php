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
define( 'DB_NAME', 'rajanpusalkar_db' );

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
define( 'AUTH_KEY',         '~lW>ngNyS^c<+0Zr$]6:!lTG:}fSg$<mm#Dm_+o)zsEnx>lBpy*u0D@=^}Ff]V(/' );
define( 'SECURE_AUTH_KEY',  '?&a_2+If@hnHxlY8udtO9Y2k6Qhmdlz*cP4oWvtoN,DO/h#A0p@dSTIb#_{@|=IT' );
define( 'LOGGED_IN_KEY',    'C3@K9,W61m/VHo9#!39UTRA!~bWdGD<Iq?~%hXb4`(&0*=-+z6#;e}k#YvXh0!MF' );
define( 'NONCE_KEY',        '|+OGtR3MZ^}r;ObK7F@erL7p[npS!f).g=[Wp$R7_P-wK?P0oHw)migrjU>}l)ZR' );
define( 'AUTH_SALT',        'kAPZexs`1PJdIb(B7bY~[]0&BLTPC=QLc%r#OF-w!LOW:NZ|%E(Db~XcAvh=D.$y' );
define( 'SECURE_AUTH_SALT', '_cltsNrJ3i<F=xdqv`5uq2^2zr)xh(o${R-X$65^P7< vQuMx;H7vewQ|?6q,^[6' );
define( 'LOGGED_IN_SALT',   'CG0Fq`r=M2=*$A`B@VcUU8]da!<^YUiXdr{YA#%eM7sP83HupG*T}3U1lhqqC5[m' );
define( 'NONCE_SALT',       '-MKz9$}0^&37Aw1zZ1+s&::0*geLv!}b]R.QLFgRQ+0DiB[F7qZ.E<i5GxY#,mYP' );

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
