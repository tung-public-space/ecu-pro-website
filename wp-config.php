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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'UB1oXnb`c[`!+5|ybhBT5we:{ xTbRmgVq-OKWP#K@zv>(O:63}!q=M~F:38Duaf' );
define( 'SECURE_AUTH_KEY',  '?z/-~^5[q>j|1;iz@,m~m]YS->U-i?dU`XAg6aEkL&,FO)Nt&B_h=M>uf5|R=P[[' );
define( 'LOGGED_IN_KEY',    'EE?Ey[<l;oXsk8bi(aFmcO*F,=.O{9?c@-S;[eN:iVc&4iiW}[^5hS+GDEh{n?4k' );
define( 'NONCE_KEY',        'vp^,QezB_M/.&u:+)z|EiYL{2-95[2Ok.{rz` }o9A-ZsellmL^3)we>x+ZFa:#g' );
define( 'AUTH_SALT',        '.i2IByvGd*uY*^ZBd#Gx$M,)/&Q$$I(x3.API/274g qKch`bqbW7XgzN4wd WgF' );
define( 'SECURE_AUTH_SALT', 'F]=2,Z`)dI)&Y%obbm H.^L%si/s*=bd?Qt)J|l!yr4R**d Xl%,5j#zlKyz=WPT' );
define( 'LOGGED_IN_SALT',   'Zn;]Z3Bagh(wZnP+$[;%s_.bng|d71r%YfV|Lm8.AEf_DY&q<XFB:Mz6aCM|t;dp' );
define( 'NONCE_SALT',       '_PbgN02Q{q1?wSn-rCW0[jP|BY=*IC!DrLRD_!;1_Zj*d:sKsH10CV)tV6u 3s~0' );

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
