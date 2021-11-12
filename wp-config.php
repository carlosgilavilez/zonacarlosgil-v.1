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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '#xRly8G&4$]C?]V;qhpe+8nQ]6e@6&9X|6oXID;]Mu)lZHTyVOoqW*oH@T*ePc37' );
define( 'SECURE_AUTH_KEY',  '0AwBJV:z@2K]2Slg8/^2([7=[$K;qj0GEG%wkH4m%1]X9^yD@a,m8m}oQDLh/;z3' );
define( 'LOGGED_IN_KEY',    'W23SkG}#&`^<&]uj|l:N_36/A}lHh`bo8hy{ @4TWiTxAZBKfaCwDZl>9T>t#(?(' );
define( 'NONCE_KEY',        'dxC7=5:J&^jAfl}!y[iPhbp`$`{w[Ld,Ymf13}o$5XOG}b6Fi;Cs&!RDr$=%$$;U' );
define( 'AUTH_SALT',        'oioj5su:A^6%dwdu#_=L-CiF?A/&lunF0~E/P3M[JZmtMujycDdGh$kF!lp2C8c(' );
define( 'SECURE_AUTH_SALT', 'R!Z%qIBrv{gY&i&3JWt@ 1][C(9<k@K;7YR}$L$=+_y6P/Wg515B|>h^|3?mgZFS' );
define( 'LOGGED_IN_SALT',   '8Hp5qZ#zU?Z?}E+fJA(vGI_r[weS=pT9ab$6=;_Y N%sEiSfsl$vv)L[%WUmU3Id' );
define( 'NONCE_SALT',       'C!c,wAk+@HzN$8!|~kt~x*P0!PDS=proxb41LYI9BjAX5eE%?tEwPZA]a%_^H!+1' );

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
