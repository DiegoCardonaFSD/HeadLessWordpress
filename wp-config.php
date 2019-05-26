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
define( 'DB_NAME', 'wpheadlessv1' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         'tLW>:vAoM$XMCK#|GbYxi8fXL:v)$o-2c=4#>^jM4:gmBHU8zG,S3]%9+;5lW%}t' );
define( 'SECURE_AUTH_KEY',  'cQU$f+:jH7y>XjeeE0S`4??,wLU,^u{DI?BBh<,(O _=tyGx9N}9G(KVp|rBX1/R' );
define( 'LOGGED_IN_KEY',    ',.VW,obuL}8ZwiC.wL&5mNW&nPsXL*(nlYwxGh;!@8fz2U+Mj8J[-bDn>1|E[RA5' );
define( 'NONCE_KEY',        'K5[7v{y@@IW<V728;g;]K_[!@L_ytGWZc34{9jfVM)amE((|cHhM[< Gz@#1=~C1' );
define( 'AUTH_SALT',        '|,EXw6PRuy89^|/aHet]J+0;+.D4;uI*~s.#ii?YUVG&4b?2!4,;:!h[!Px[o)?L' );
define( 'SECURE_AUTH_SALT', ']3vD Ca2MV<0)}g&iNIAamLz+x.Z`ot<p]x1aBJ[Uwb,h^$Xv|B_rhAnul-:)^<%' );
define( 'LOGGED_IN_SALT',   'M:_Yv0nJ7uH$7!fCa4]?g [Y99-hs{7TiFMOOVCG<%{fFBrFu_!v1>9]EC^HZ;T.' );
define( 'NONCE_SALT',       '~x]0]utiGYm).W:Ir!QA/u7SD1PjQ&O45Kg39/h1}b@uZ<IS7.0=LO]/,9Rjcf~~' );

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
define('JWT_AUTH_SECRET_KEY', '~x]0]utiGYm).W:Ir!QA/u7SD1PjQ&O45Kg39/h1}b@uZ<IS7.0=LO]/,9Rjcf~~');
define('JWT_AUTH_CORS_ENABLE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
