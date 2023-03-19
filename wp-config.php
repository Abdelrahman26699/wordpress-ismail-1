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
define( 'DB_NAME', 'wordpress-ismail-1' );

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
define( 'AUTH_KEY',         ']`.95av3CCA7 NG=#%$9>^|)S=>1Bsjm-%s7n0G_q|KpnVuKd+(Em3Ft&%4IM.$C' );
define( 'SECURE_AUTH_KEY',  ':I|]Lhrw{ll3XYE{ZnPxq.?qju,N< l)Ew$@=~y#KkX4e@S*=[sN=u7ssA0SLeW2' );
define( 'LOGGED_IN_KEY',    '/f!BD8/b55DD5bp!z3L*ZAK$-_6>-mGxaZYj-#S%/Eq 1.7k^@ts3O|A1oj7psCD' );
define( 'NONCE_KEY',        ',L;+~enRd@10M@MY=So]xO1AQX].,u)Le-X)v%dOs`Ih9>5t37H<Qd%A(:STw#Nl' );
define( 'AUTH_SALT',        '*N*!xX#!=rjTy%%~=tp2a({n:HJ)KONA2x8dH8?)8(-L+=E7y%=D5Vdys):%1[#?' );
define( 'SECURE_AUTH_SALT', '506re=e Eg8FK#d6H,TTU,#.,HuD+.TML@XYERQYVoHZ+G#Yq9%&ax!TP!J9AtzY' );
define( 'LOGGED_IN_SALT',   'sWRAf0z?k1hle[),g:C@VR#BG ?S/Ni=/vM,;qHBY< 5)[iZB.y.0hE/|kJ$TD(x' );
define( 'NONCE_SALT',       'q+,I*A(3nunmnD6STdeQb`M:VlQQ|7F/N163$hKf8-,xQ9vLM*+`xCHJ({>Na::Q' );

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
