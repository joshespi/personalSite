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
define( 'DB_NAME', 'iamjoshespinoza' );

/** MySQL database username */
define( 'DB_USER', 'iam' );

/** MySQL database password */
define( 'DB_PASSWORD', 'tome9airtight@lashing_forest' );

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
define( 'AUTH_KEY',         '&(<gsLQ$=v2>4gvdzn,@usvi<vp6MS!!j&Hqcd2|b1nq`l,tE5@wb{N~RfYQ@eR/' );
define( 'SECURE_AUTH_KEY',  ';~.v33:<Q$KK(-9SD+0d,$w52k{Q|aX;w,-wRz.Jm=k5Z@pt4IG(StMd.P5bGW`0' );
define( 'LOGGED_IN_KEY',    'U!-Os]dU,.2LH ZJp])z{gu{YY2cuxwah;5>9(z^ufzhT-MSz;TLAI[R{>SU*qz9' );
define( 'NONCE_KEY',        '+d?Jec?=BI6RP|R7Gk!b(u #%%.rEdY<1.Kya^o! YO#Z:ebwYwup[G18oJ4?raM' );
define( 'AUTH_SALT',        ')TFsQ: 7!&G@BLcn gpZv&%Qs<G<,vEcR=_O*i#&;()M;_P2I3zXl|>X8,+AQT)i' );
define( 'SECURE_AUTH_SALT', 'F`,Q(Qng2=NDWDNpB7^&b6`N-T{EMrhp[<IC1!Ko!st`rz~g1i(MT1.QyRWrr!- ' );
define( 'LOGGED_IN_SALT',   'mh(a{uqpnBRv-MBD(T4Ww+0weWkG$=*P)io[D+:EU;eT{z$<#e@_)ChpdS&A-6cl' );
define( 'NONCE_SALT',       'OD/*U0:{?b$aFl,:vK24{4TF~Jp6>BLc!_o;j ?6WywgsF;):lTl^kdy!g2[<~zj' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iam_';

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
