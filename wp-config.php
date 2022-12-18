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
define( 'DB_NAME', 'rest' );

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

define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');


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
define( 'AUTH_KEY',         'CEz01/O9Z3>L3BKxkiyEjWQ$#*L%?6xW,@^b.^<0W?dSgHGj_yf7yMUZyk2B*6_]' );
define( 'SECURE_AUTH_KEY',  '/ID.^/,jfe@heq1%A_WHK s~gjgqhI=WKQb1;_NGX_Nc/-;zb{wDncp%0Z3IyM|Z' );
define( 'LOGGED_IN_KEY',    'q|(b%`|VR[67U[hj~SfIl^?iXbP.a ?z7M0qC.Pn5n~LgW2aqW/RTW_7#Y=/[geK' );
define( 'NONCE_KEY',        'n {U:Ra1HUX)QH~}F2O{SQGdisJ6OMTl~1;E(ip|sWWq;)9i&QsbI(+2k#=H)$P:' );
define( 'AUTH_SALT',        'R`2n}Nb^ba+|V.^Y(w.f_cvB+VJxExcO^j5@S{rvn3R/tSbH$|PFBxid9cAl|`^#' );
define( 'SECURE_AUTH_SALT', 'VN0*gdID|4#A1f2Mb7E/( C|bm]c7s8`|`eoY@j.K&@:lz[g_@TwOvXg FA%Cq3i' );
define( 'LOGGED_IN_SALT',   '.?Q4q}pM*?6}1n6j<v!X*7Exyn>/|,U=X;}hRru06GwNTIb3 }<w1.zc,y1|1>![' );
define( 'NONCE_SALT',       'P/fp7}oJsbdx4m8HgKB^#S!gFb(HMEGZ_NDxCY_0<=_:h3Q[1-}3_Ul8j>?(u.k#' );

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
