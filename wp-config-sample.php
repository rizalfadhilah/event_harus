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
define( 'AUTH_KEY',         '_w>M9%lTC~Zfo-B9JW_Y+y7sR.H1;}9fzCCvCe1]%VaizY~m;i=oc+KVk9Me8g|U' );
define( 'SECURE_AUTH_KEY',  'G8|/7Nd[%[0tt~`h}[O?=R=qkR;aBK<QSW7QI4g%.uw}THn53nQRdLFH=rPMP=QZ' );
define( 'LOGGED_IN_KEY',    'HY:6L.*5>j%1_z0Z@eai:1]T&t)9g>qBIeWo<KWyNImhoQ8=_EYaAt-UL%6}a&g>' );
define( 'NONCE_KEY',        '@ccdS8`m |rY1&0)9Krpx,T2$L/X%8@n;f]25&.cSB1_OMz;ZCj8]MeCze}TlJ##' );
define( 'AUTH_SALT',        'lCp]860@.^k73>l]v0%?h9hmkt(-R`I%,Hc1vnGWB?;) #d:#vtj3JR+&{iSnz$L' );
define( 'SECURE_AUTH_SALT', ':XjqEKt{`A34UdUxY`oSR5k?N:[Vo=:I=r?OQ43O+^+ejD$h]uLSo?Fyk}XtSUes' );
define( 'LOGGED_IN_SALT',   ';*RZVY:W magVFKb:-Mb.GwmpsSQ!b,{cc)yWPM|niNCpZB/(qOjJ%dGxksPD{ID' );
define( 'NONCE_SALT',       's=wh#5$>:PgCtlKtbd0@>0iG6&D(<Lwq0#0iIwd@SXD1:,:9<^;+LP?@{2ml!pCV' );

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
