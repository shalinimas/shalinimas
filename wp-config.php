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
define( 'DB_NAME', 'Website' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '|$O`DV#3OZga?445Y75!rS!H)^C>z9o7 bOtKQR8U9uq3[~?>70lyF=EMsD~%X.N' );
define( 'SECURE_AUTH_KEY',  '!fcOefw4gEdgo4H,nGaYy(Co ^?LC@$;[Eh/-%;<K-dGc~q^QTU`/LQ@y,IMuT&T' );
define( 'LOGGED_IN_KEY',    'DsP!<P2I`67/R$ (ybUTu2}f6bv4Q)FsP>o/8#=@m4rJR.f+S0tkX`9.i[CJ8fs{' );
define( 'NONCE_KEY',        'se;R8U)bPdbWR`6qjV3)paWT/m},;B;hQFw5If[4c%~j0ZkhyngN.`R/^),kOE6%' );
define( 'AUTH_SALT',        '+P=iJnW;/{8bZjSoan*ji]$3u=`<tEoXTyfR.$cnAF:-uH_HKCPjm8GV)MwZz30x' );
define( 'SECURE_AUTH_SALT', '^3V1aU0B<uXEAK_bu.T7OLpCvkFKtHwAhA3}5`,gYt(/!kE4}~,Ba_fEH]Q:M{Oo' );
define( 'LOGGED_IN_SALT',   '0o}of1D9hq|=KBs1!UoFh}.>l-}=LAs9gbR2<73>qzYSjh4/w]PE=tG]OwfeJKKE' );
define( 'NONCE_SALT',       'BsXq#KL1AMAM$5 2=ijUz/<N6+`+>MA2$u@0U>7BA Y`nY88B.B~q$_B[ly[1Y)B' );

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
/**28th modified*/

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
