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
define( 'DB_NAME', 'test-sonia' );

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
define( 'AUTH_KEY',         '|eK[SB~PK^pH+f]p24#NgIER;Di~,{(7Tza24[=MmSpy-pk%9<@G]`+AD]a(>3|J' );
define( 'SECURE_AUTH_KEY',  'ar*:tb4FR3(LA>i<^W4o;6b,>W&F3oTha[VVwWv9<Ty_H_x{OKMKq5#z~})&/@lf' );
define( 'LOGGED_IN_KEY',    'Dm0#Ohf1cTmGR u)j{,WoCKoepM7*O/brlIX%a *}I}mV!b*d&Gp L{M3,Rp<HEk' );
define( 'NONCE_KEY',        '{VdTRM7GU#Q:*A.yyfv.s|=6?$A+AX1.1@oH6AVO!`}PenU, 58zk{BDDx`0feho' );
define( 'AUTH_SALT',        ')+SdLyK/p!$5V=VxM@_9y|5_G6%=kHXOu k6`U=4=MwCcRRQdAi[(LC>Fb!H$L.a' );
define( 'SECURE_AUTH_SALT', ',QobD{#|uyj-=TG6xBv{]9=|G:CBPsjG7*Nz@ LtH)sD]( $1B$o2CyivwUob*Ec' );
define( 'LOGGED_IN_SALT',   ',`V-B5<Y!y^qOvoMvL8U1HtkH%3Bzxq_gk @>LP=tR&:6-T47,uP-J1 ,}YOKy`q' );
define( 'NONCE_SALT',       'Z-m|{]WW7<;g}!u2n(<m$@*!9_M^dl^rTik}o[2PGcYxQoY]~`[&_OTAw1;W}8zo' );

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
