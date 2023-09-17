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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'ej0]0swtrb0n6T&:hV`KrwcL1vj]^C,wV+:+{Vv(m3F0TrrV_Sb{z}Q WX0@;3XD' );
define( 'SECURE_AUTH_KEY',  '?:ux:yKE+YV4F+*(JUN<(RAyC3c1)0K6e{jMU}%;nUa#_N:6d_Z#jR sMM?Uzw9]' );
define( 'LOGGED_IN_KEY',    'o>q$toG:b~Ib6Z.6<YqWQm7{>ATbh+`f#ulwV~0OM+`PEU7i2skTfdtj|uB`Fxz=' );
define( 'NONCE_KEY',        '%?{7[gS~&nciM 1q8Iro!uD3?3;#xbEd(p7#OR<L6 }[N@Py&jkkD`zHim$s-!FE' );
define( 'AUTH_SALT',        'z9]qA7o7{hrFBdlXh 7s&<(FDP(xQv;nQTfU=hLD+NehX}$}:1bqB|S<#~zD8BG)' );
define( 'SECURE_AUTH_SALT', 'V;2qa8y(M!JZfUu#2KdrmnjIq5;oE=3z:0u`2xp5m!sc<R bf,>wnyTsuI%Lzd}5' );
define( 'LOGGED_IN_SALT',   'kUB+p;9rn{g[cM1lWAt@&4C*xp9%=>nuR{cs:!F>cq/Bq{}PS7:n3t3`H~>R80|-' );
define( 'NONCE_SALT',       '==ntlm6:vbn_PZkUDc5d9(#!l[M#U`,R&kCOb96aI:U|CKO/qCi;}:wh-:PM0M!1' );

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
