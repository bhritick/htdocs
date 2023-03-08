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
define( 'DB_NAME', 'mytest' );

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
define( 'AUTH_KEY',         'O0mZJ(/n1)b2DRIkJxXM1B48Gmdqper|/3[g` V<<&:v5i9.`lkG=Tbt,?pi`O)A' );
define( 'SECURE_AUTH_KEY',  '.cTHuI~d`#j[Lb0( BjCZTOB1dN{YAq)k:K{.`oaJDTQ1986{9~~M>Mi 1,7xZa1' );
define( 'LOGGED_IN_KEY',    ')((MqkMe! 5J]A{4%.bJ!S$>`8 PFV ?NYBt]t*])bGZ;gFLLo${wjW?&5q#o]^R' );
define( 'NONCE_KEY',        'i)Uw8Aqh?<b31c2tX(OS<&ZDviA`/Ql|c/MIQysgCo![H6w=QZMRCF1/4aC],/P]' );
define( 'AUTH_SALT',        'QQ;1kpSxz)zjQ/XBF@!O9p3L^]Z=:uY:WG?&p`wu}k|DfcH[2}FhV^;D{)_zo |(' );
define( 'SECURE_AUTH_SALT', '&f(b@LU`o&,c],nD56}wS8F<<aF$>Y}DE8xc~pG5Y~Z$mB<9]&r,+v/Jm(PPC^43' );
define( 'LOGGED_IN_SALT',   's2xR!YcgNVca=o|ye|UP*gIR$^TL)R,b14q3:Y[({s}_N)N~#EX]vCwGZSU-yx[i' );
define( 'NONCE_SALT',       '.J)C!g!T.USpD+;KnxV2O{LJW%$Eq(>nM7*&th|(KWQhG44)uvPRwh<tw!]lZ!?G' );

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
