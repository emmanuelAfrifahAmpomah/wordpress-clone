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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'npontuclone' );

/** Database username */
define( 'DB_USER', 'yawafrifah' );

/** Database password */
define( 'DB_PASSWORD', 'LP@B2wlSNBo[pkZO' );

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
define( 'AUTH_KEY',         'eaY],j%Z}dnorvlfV!p_:(mE4N 8Y2DCRyDcwi+Dci)P /J*3nV]woYIDyznG+gY' );
define( 'SECURE_AUTH_KEY',  'D#<Lx7ns@SLc$2l,}$L~5?xs|]fsKC+;9{z@<t86#7N^*YGD4P}`p=){gq*61?<T' );
define( 'LOGGED_IN_KEY',    '==%VYs/3:!**7mygy&KA VN(3DWGGou6~wO|`{$=`7e:hl6rFaZ*2L{UiaJ<PXjK' );
define( 'NONCE_KEY',        'qxnDhceT]!t;%HS@t,u#3#)m=4_fbVt<uW.&n#gN}}uG[9l W>)rMpeX-8p>zFes' );
define( 'AUTH_SALT',        'U^eG$aL9:)`fbxDjf-;Me}j7r!Wt#feObj gYcE|(&)Ec;e2*OJ6>Dr&bK1Qg67#' );
define( 'SECURE_AUTH_SALT', 'CMdx6{_YtyWy }ZV*#UAj6[C2Dy1p#ly9iQw ANRYalX_%4K_o(cz-aNc]U0Em$8' );
define( 'LOGGED_IN_SALT',   '1{6,Ec;K3oUh}Lo_IW-+pHanO= #W+k}6pl`C-zvJzXco3iNv/U$`5zW z=d@NYF' );
define( 'NONCE_SALT',       'S~Sd7,1+i St+ieUco%5L*Hv5HMu%!SNJY=jYbPw-:5d^G1NEP@-4eace&q &UE,' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ea_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
