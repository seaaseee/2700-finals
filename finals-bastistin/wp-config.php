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
define( 'DB_NAME', 'finals-bastistin' );

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
define( 'AUTH_KEY',         'og=0[sT>)UmJg;GEHLeBSZM[I<6_M@m.XYb_3jE^{>&jO6}Xmyr[l$Pa=ct<8s^8' );
define( 'SECURE_AUTH_KEY',  'fIGu_A$AHU%thL,b:E+kC7#_q#w~J#*10epg;yW{wrEFpz;1r<FY+[?|lq5,*G7{' );
define( 'LOGGED_IN_KEY',    'Z(ihW^ld+r778UVBFgBl1,Ao3[E6zvUt#_]i[OhimE[GJE5 Xq[[UjAlXP$U@7+<' );
define( 'NONCE_KEY',        'm|G8VGg/|KdP{<AZKNkCs(C=kh8/Ass[hn[9$z]OI$ksVy}5vxP3E:W|(.&Bm%EH' );
define( 'AUTH_SALT',        'X/PQ!!d@~6~gf9,veb=<,^Z7VJqN9!?NWs|;);>8h,;t|Pfw_l(4Jave^3h1:S&Q' );
define( 'SECURE_AUTH_SALT', '.oBU0:8ej+@Ak^4)8*9sI]nB*,&9~,{_F.-,6:k;w2%3UySx%6{sX,b6Qo2LB[WT' );
define( 'LOGGED_IN_SALT',   '{VsId/~)w1oWquMHE.`^ek%q{,NMU:yX)up-G?n$vhmR5P%Pz0K_RP~6V(~J*Nw9' );
define( 'NONCE_SALT',       'kOwGYS?l7yop)ibHqP|gY.66/b04H<a++k5C,{F.0/?h39~N.mGp,j/olD@SYl^3' );

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
