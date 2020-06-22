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
define( 'DB_NAME', 'lotfi-firdaouss_db' );

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
define( 'AUTH_KEY',         'b@Tkc!1Hb`Fw27=^b75k WN8o}H99UbezrT-+Ml_[)r7?{#nks;APxjL)B4wd]7<' );
define( 'SECURE_AUTH_KEY',  'ZF?OEe/A^/_rbLqy#9BiM{Cfj{Ub<rHn=5oR`q(P2S,[(ec81218*_f5fI10(auV' );
define( 'LOGGED_IN_KEY',    'IW+-oL^Y_gX^`P%nVSmo:{^<67epc@M4qP2uuOhl|.ix-1GYTL#);EP:s7OkoAHT' );
define( 'NONCE_KEY',        'S@_59[^lL]A770T3gK)L[Su9WC64guqx-y%@K.fw9azM-5bv,j]:GPQ2dc6$rp&P' );
define( 'AUTH_SALT',        'n<W-[kPVlNL!@LBTxR!-nW|J9ZLNxsvzV8bNMefxxY$dZBv{X~ 4f6_eI;hM|2?E' );
define( 'SECURE_AUTH_SALT', 'I29<f7-^Y]y3i(bLT{snQbGwlC1ylT=jLoT}:rd,YyM(uY&zYen-|:lze7D2yKR&' );
define( 'LOGGED_IN_SALT',   '8[9Kf=w_@F;!C~Pt@)cX>IS7-_N~ wn+lNH-AS,VE?P**a@:Zw6jYhDYd1YrYnV)' );
define( 'NONCE_SALT',       'p?{/OAM3It%mTMa%+$$Ig[jd  K>-X1!Qgc2ZVb|AYdw?icGz<ACucI(,,Z_fyjd' );

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
