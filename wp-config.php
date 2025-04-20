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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'PS1 :G{oIb[TQ8Qhv.W~_w3}QzbkNjG+RNbnx%]#,;e1961QM2l;^Cb_sQOd @/4' );
define( 'SECURE_AUTH_KEY',   'EBYzxn46.ZKrU{*7KXO>Jrxn-GE5Eci#_GGnE$+QM|.V]m8`tUi^L)C!?^u8o~.2' );
define( 'LOGGED_IN_KEY',     'e5H_q]M)HHRbK<{aMzg?FpE`@T~TJ*!H?XD8JPy-^px2=}Hw]}$#&-SR/ks]ej2=' );
define( 'NONCE_KEY',         '<JCLDH_BEj.!f=;^_Rn>!u7r1_8Ewk]SRc_1Z4e!3nQBW$4s=.*%56q[E{1xIJ|:' );
define( 'AUTH_SALT',         '2rYf1eY1Pow)yrav#mll`q=oe&=N0AUn8hzE_}ptK3x.Zbhf;5jy-n?u-D9!VMx`' );
define( 'SECURE_AUTH_SALT',  'uw!^*qok9`]2?6_V`G,[[?C[P^56KWWg42R;fz,tA}Ot$35B5k.3>]YT8e{{/m#/' );
define( 'LOGGED_IN_SALT',    '13ns0^@%W_u-$waR$$s<@xRUO2 ,3a+Sc{YZ@[()MDkp+DB7vB%DC $ap)X+=-#H' );
define( 'NONCE_SALT',        'zS7dl%Z2HvX|eqt=d6MK.5*=}t[JMaC_uS-^pomCOa&oY`#bFT>P(k-:pLV<OkQw' );
define( 'WP_CACHE_KEY_SALT', 'Q[zhVomy[)m&v:!XjGr0 6]GKv]/uHb&7)-jyV|DoM|`~&9.*|o(rF[?zFc[+pp?' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
