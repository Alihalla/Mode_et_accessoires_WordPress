<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'projet_cms' );

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
define( 'AUTH_KEY',         'PqVG3WN-umhq@K3ON9jZ&K*3N?7S~+Z_`n-vSn&XrkyZi@8B(Vh[u7Dw//1,!+dx' );
define( 'SECURE_AUTH_KEY',  'k21lE6CEI+*K:8B#+*azt&NYPd$goQ!?0)|{.!, W+ku#(@op;}[&iogsoz^$<Q6' );
define( 'LOGGED_IN_KEY',    'h8}57*0GquU!|Ysl ]-#kt0-mgbzRla>kf%/h51vk62qV8%@.JDc[*Iu[{eXZJ[F' );
define( 'NONCE_KEY',        'nDe6+m8H5ak8NFn{Epp4XLPK])s7=n_iAdK=vj#A r6ViJ8T?TXnf,(njaRA&]d4' );
define( 'AUTH_SALT',        'PbUVZAri@[f){+2;0*lymTe<`G4O#ud<o|~-.S8mcj2Q*8qKEyS!sUX@[qvs3{RG' );
define( 'SECURE_AUTH_SALT', 'x}![7GEZ60+xRLtaB!;EOOm?_vyhT(? BHSSi~X/}vPO+gG|!z=n24[!= A>KN1.' );
define( 'LOGGED_IN_SALT',   'CDe`eJKo FK_RS~,n@@8EuBp`pq?3I6kxNNPEML83|0*TZozSBV^9VmD.}yv;OIf' );
define( 'NONCE_SALT',       'Ox*y.{.XUaR{j.bc)p1.Qcq@M3kJ9=S6-`BW3sTI.*D8ihieLUr:[?!~sH;8le<R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
