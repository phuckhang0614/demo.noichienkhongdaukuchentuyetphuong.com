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
define( 'DB_NAME', 'noichienkhongdau' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '990614' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3316' );

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
define( 'AUTH_KEY',         'BKgX?],g;wt@@s>Uh)^g|@5U_m3{uVz7XXi$f|O(FFVEm3 e8s<jwzK[wo{dEH%e' );
define( 'SECURE_AUTH_KEY',  '&JS9_SPI^Ahq2TnQSPe6{|5lotJ..1~v&+rhP`cmC17m^sv$ c46mNk2ll62iuxH' );
define( 'LOGGED_IN_KEY',    'VW%Y34u-nifq9@G,xt&5 *{$tQ5kJb>pN9z{L}/L4B8Ot6xh7t,dF6@Tns*}bZ#0' );
define( 'NONCE_KEY',        ')5e|7u5-E=f2EDiLd05DX6p*wXu=0L,&4VN!.bP`[PpI^u/bIjSz2S9/-8$oC|3D' );
define( 'AUTH_SALT',        '}Z0W6=Vk%ny~zfvB+LrakV|.<RYHWC9-X.C<rR-[I^=!4hV<5x$wZ V+E#^w>M)R' );
define( 'SECURE_AUTH_SALT', 'H?!w:485{-Uq1-mU^7<_i,pR0G swZG]Pi1 xE#X3qzRVD$)[jY,b0Z&6},HifHa' );
define( 'LOGGED_IN_SALT',   'K>kN^5e~G-TpvrfiJy6V*j?AUCU2N;#QVrbpn``dykCN0R]_m{=}-3p)BTiEQ!SV' );
define( 'NONCE_SALT',       'e=,$&]ZJDU<|-{HN3L2t)JQf.A[;l7IS#-![Eh6`:I6xaM^]MG}mRRU|)XTcA_)v' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'DUPLICATOR_AUTH_KEY', 'Slr%Zf(iHR].D6V=Z-$l$-tA<80&z3+9+R9l(^g]Z-PzgY<mF3NLbWciA5y;*|5-' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
