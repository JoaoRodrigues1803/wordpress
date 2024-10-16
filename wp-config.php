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
define( 'AUTH_KEY',         'GRcactyfxwEyD9hWUv!)WOaRBoWeg7%[|p~AT:j*=E3IcNhM%)$jA$u2##c5I=(K' );
define( 'SECURE_AUTH_KEY',  'r%Q9/~s7{@O:70JtFc{mJw>skpy.Zz-S#PiBHETuzCz!Y9jwM*PC_o6[(aGW*gDF' );
define( 'LOGGED_IN_KEY',    'LOy<zfoV[Jw069@#(?HoeBAABuQx`NWM`jQ8/;@&]eMba-Y0tkZ9[6]fQvo}A]*6' );
define( 'NONCE_KEY',        'ybmskGFt}&E/iXrT=70:NGI):Etw::Kv_;^1N}YrBjl%%&{wVQsp`?MW9l|o3kqh' );
define( 'AUTH_SALT',        '(Dc+EQKwTI9_^J$8nJ;Nxx|FD&yOrSoW]%yz<A0q@LiyGLeCOth2J/$<IzD2EX#g' );
define( 'SECURE_AUTH_SALT', 'M_aj<WM??tqK]4@?M(eF2)(5jGv=aoHaY)<#t`+8>*jh26Xf.G@OTbk8YE?<)J~)' );
define( 'LOGGED_IN_SALT',   '7uo.51aNNRc:ba@e?NL_38} /UdO/JrD+So3:])&+4bm?7[ZpaC$,r>30a@yU%|7' );
define( 'NONCE_SALT',       '}MM3j 0Fk2Xu5aC0HE_X}0$po7-s&|N!V;AWGY@hKxapQex;.F:c]t)rp09a]6sR' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
