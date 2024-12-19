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
define( 'DB_NAME', 'myProject13' );

/** Database username */
define( 'DB_USER', 'project' );

/** Database password */
define( 'DB_PASSWORD', 'project' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'G%HGN^+=3XSWr-Pyfx%;V11+d0A3KP!`{r!wmF/Mt$$-|wy+/|,qK,0l4dnG6r4-');
define('SECURE_AUTH_KEY',  'R-0mZ^:WoBamlmd|s[o* Yx]^@%mSFVef^Hh]!9QKhSdwUy8-!u]w5$cA5|I/43t');
define('LOGGED_IN_KEY',    '_#&bje#`og9A(z5q)(,Or#|* du=9ur(G+(S+oIqgXKX_IXFse+PD-Z)KU,FlXld');
define('NONCE_KEY',        ']D-_e+:a0A6%0rEv+tD?!/y&$1^d9sJxwo%+F*W(b3Ei9sL^9Vlc%z|sv![?`FlP');
define('AUTH_SALT',        'KHm?4--+BV]W@Xxo{Rr+(Y%pOJ&rQeqt/}=VkTt7~Qj^eu+p8}r:+:{Lp!d<6B+!');
define('SECURE_AUTH_SALT', '%RG!HfWDP#U-51|o}|t*#Q}+tbG/(6#.MW(U*@UJD~TvmhSz3@;^T*FK`Rz!``7.');
define('LOGGED_IN_SALT',   '/lTSUoc-L&p3t4O8+VK=~mvl&MO~~|2_KTL`% X#eRFCp:NaH+tfl/Mnx!]Q9:4>');
define('NONCE_SALT',       '[^iUPtpnP]n55hw2V-)5Z):/!fHYz^.q)PmyPLfzXNd4m~Y4R`}~(CW|Des$-pv]');

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
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
