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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'A|ds%E4#L:=J_[8ssDK$J8`i~ c2q1q>ncU0nwrgvO*Tvi~0)`[0|!!ezbz.vknD' );
define( 'SECURE_AUTH_KEY',  '0U>X#l!6DOY~1NqonW;tWPUbr2R:a=w|A-U/#Rmq]PKXol_K)v|&o(Td3PSIuh;%' );
define( 'LOGGED_IN_KEY',    'eZ*P*UV1!~u!%#-_0}NSiM:9(etidF+XMU2:;d:FGU(w^u*Wd~!IunO>@?}C?mFP' );
define( 'NONCE_KEY',        'x!RDqh>g+7)>6n_lfFr_>b9i^G@k<_vOt){0Lfy`8QZ8R_`k&m5gHBz<%;CO)SY[' );
define( 'AUTH_SALT',        'EjRlbipsmSr,v]XG*y0)xPe3}f_/$b7x<F>2YY1:!.1ujU;0k0kvzFhA][w3Wws0' );
define( 'SECURE_AUTH_SALT', 'xHH<gqE)4J0ky@=`K[wBU,RrL~eBv_S(?xGo}*%uNX<?]F*OZWol?jcYp7w.fh%~' );
define( 'LOGGED_IN_SALT',   ',D|Rn[j kwh0qPnDyW$T*@tWU%nsVzr@%o~7CG`*6<Mkkfd@eP=5BpxiI4hd1U%7' );
define( 'NONCE_SALT',       '*G{kptt%J03@LvU6.wpm5ID<PiM2dC!.CTql}qnLMy;K_|@rIyvV+7bg(I2xA7ZR' );

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
define('FS_METHOD', 'direct');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_ENVIRONMENT_TYPE', 'local');
define('WILOKE_TEST_USER_ID', 1);
define( 'WILOKE_TEST_USER_KEY', 'dG9pbGEx' );
define( 'WILOKE_TEST_SHOP_ID', 1 );
define( 'WILOKE_TEST_SHOP_NAME', 'vuongtest1.myshopify.com' );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
