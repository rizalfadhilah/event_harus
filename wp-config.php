<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'event2' );

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
define( 'AUTH_KEY',         ')8-b!t@vVDw[_T/XO]3z.9tJe52P%Hlkj%fqcD&*8rKdX/4%8aq!,~x@uOi{YEk[' );
define( 'SECURE_AUTH_KEY',  '>,I hl7=}:ap##5&2^!Ep|Z=]e/:C]e`=G9K`JmtP@-+tIlS&cPD/UuBeH)zAvVC' );
define( 'LOGGED_IN_KEY',    'cPgb)En/kE{|Zg:om?hLCulHR&vp_fuRGMN{uadUIV<xOWEgZTCr>_EoS]3e]eAO' );
define( 'NONCE_KEY',        'Zp^t{9hpPVyo:A9]XI^DA{7~BKiS%;l@qN:@+<BP{4S4Z3*nuVm>t)e;z@u1)lBj' );
define( 'AUTH_SALT',        '7s@(.3RdW?j7scRQl6:M0F@+=_HV@)b+|zN/Bqf}UA#J8&o0$ktf[aEjA;n/Q:;j' );
define( 'SECURE_AUTH_SALT', '2Y#tc8<K5xL,TNw^h:t+x?QjdV@biGe6]i<^$KXxQw*577&)4]+7;}s}oUS8Z)N{' );
define( 'LOGGED_IN_SALT',   '[E#)R~SZ0U-km_bk5t*?.J^098f0nxS 45*deEcufDnh+O#rP@x1rzjuHG=n[Uiv' );
define( 'NONCE_SALT',       'a$ *^Z[)60zW^V<_k1mSJVZCI[?rLJ~O9!UjDRJYFlUuJne9GPN/g&fSLmH]wfL2' );

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
