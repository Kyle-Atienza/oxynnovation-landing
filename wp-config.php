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
define( 'DB_NAME', 'oxynnovation' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'kyl3Fr@nc!s' );

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
define('AUTH_KEY',         'rNnmSQC{wyjiJl@x1c<Z%+8/-V]XI[/%EnMovIF.eUc[-**Pln+Zw5Q+g+ 5(el|');
define('SECURE_AUTH_KEY',  '6i?d<V*< QDJZX_Q}nn;Rgjng3ADCK(waBRF|6PQZMOSa1QYQnyp} 8ym6$@aFWG');
define('LOGGED_IN_KEY',    'D^-o2LY#P$J%D,fs?=]>u)DR`{A@*Xwg|k6$xF*|.jBl;WJDD5u5ze1a|jo6+l-4');
define('NONCE_KEY',        'D)Y :tCEt+N#}cZuX#?+6Q%LJM|+km-VUG[t3f;q,^cM5jyg3>GK[:8&_jdB^cC,');
define('AUTH_SALT',        'F4;6NEcgb5NK^1kjtgB{R0c!P1G_O[+J5KO1Nl-~QA;0f-V6*3g (A+`~(LY]Q>-');
define('SECURE_AUTH_SALT', 'n8cTWQB^Y}-li]=-iV(QWNhw1vvT[dR#hA%6wM@@_FEhe{i#>1fAHq*Vd`zdMr;#');
define('LOGGED_IN_SALT',   'v5z5yuQfpZ,T-c3oO:|/n)^#!!h/N7N^2;M5<h+l/HPm3-#aPKDj0;aD/wWoD%/z');
define('NONCE_SALT',       'jfnS aQ1%|1sV(1+G#brn(:jL1{1-Z^jLskIL6dm5#WT6&:O-*r1e6XWR_#9<4kt');

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
