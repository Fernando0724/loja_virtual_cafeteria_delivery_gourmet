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
define( 'DB_NAME', 'banco1site' );

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
define( 'AUTH_KEY',         '6)DAP1PEByF&o6@m(_qUHr+H_2>1NNs<-:g>48SDHtI$h5}u53WBC*-A;a8QM{zc' );
define( 'SECURE_AUTH_KEY',  '~|i3QjU/y5[I*>;HP|P4y40q.w zpvC(C14McJ2dSXt|(wY~K/b9D9M0+CNu`;p7' );
define( 'LOGGED_IN_KEY',    'x;bA`l./(dY`Me|M>0Y>XB4>Q2l.+B;1ctc,m^>)]}.z^[L_m5MoS}@Zi5N;YK.?' );
define( 'NONCE_KEY',        ' ywNaFJN&VO?-AOEZVC.(3M+-|HvPMV]J]g%.^_(1Z5xt?sJ.$)@Vt%zFy;5KjY@' );
define( 'AUTH_SALT',        ',,{n2WHJ%Wy5:j,1dL2Cy#-Dpd[cx0==)/v{C>r|TdH)?msUCz[;bWfl/,^PMzA8' );
define( 'SECURE_AUTH_SALT', 'M{s-J5NmOE&GCo9b0MwUwA=eU= (F=aVeC2@D,;q8_ad%U]sd;M$Za&0eyDi-z1/' );
define( 'LOGGED_IN_SALT',   '`0U}?E6?0aq2VV+){~ HQo9Ym$TAyp2;jkbGECFi)$6FL0A]y8;lfdSgLezK{:.-' );
define( 'NONCE_SALT',       'HTAchsi$t5G#{,;8-`^z&t;@I@jVF<$cX.-FB{Uqi9d4]_{47Uu4L`fc-mH !2`0' );

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
