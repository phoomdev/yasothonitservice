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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '0bY>H,[Fb!Cv4c^Mk`+Sn^gqseqV:f$]Wk9XX3<Vp9SOh8X#}7tW#%z8MM]<#zg?' );
define( 'SECURE_AUTH_KEY',  'j][iz%5!`C=43#$r}1[H?<-dQuvC}bdw>{g<bj+jf2%gAT@g+N5=@_ 1{pSOMJ|0' );
define( 'LOGGED_IN_KEY',    ']+<i/|Zq|=Z~z)4g`(n%bY|!_mG)Zf:i6aYWbW+?YRY}bB7?Xt]Cf!K=1@csD+,K' );
define( 'NONCE_KEY',        'AWpF /`YG*Cw9WC=>3S >4t,9o` dt8Tz`]rV:I!Rq][@EiMN(M||)Hh7(8-^tB{' );
define( 'AUTH_SALT',        'DX=q79P6WP}4A-J`CZw3Ah3R:qhbEHFgS;iNcbV*7jMe?v=r^qQM,/v{#1sB`.x&' );
define( 'SECURE_AUTH_SALT', '&Xo&6L*Dv l=.AU^c9fF.(TO4nSBJ)UXU)Ole,Xb:r0Ct)w&U$bhV6p=#i@nP_GY' );
define( 'LOGGED_IN_SALT',   ':xgIN04:>-wH}9`#2O|C9}ZAXWT6vRStpz;?|nfJPGneg2A#M&r>>O7M@kkiu9$J' );
define( 'NONCE_SALT',       '4bpkK^&e46nO>C/ekR~xbAE$_:@#qhjMe)LN8*6fSgRfv_p$?>(cgzWcCeCN$,|b' );

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
