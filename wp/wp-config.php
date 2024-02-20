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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'user' );

/** Database hostname */
define( 'DB_HOST', 'basedatos' );

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
define( 'AUTH_KEY',         '/1mUf?R&1,stc&aW0>a_R*ZU-3/{^I2_.`3+/&^5W%acx49xncW$2-U,jRR)1EF^' );
define( 'SECURE_AUTH_KEY',  'c-tcGyPyIX1TtWRm7,MXEPaQN)$&?3u7j`0<(*+[K@j83x1l@wFl+qfYLvM| %K1' );
define( 'LOGGED_IN_KEY',    '*>=|1@gUigSz4M+`cFW i=G& y!ranYfrohL@:+{kY[3sj@g^B(?Ni-<(v=Ih<9`' );
define( 'NONCE_KEY',        '6,GwfJ#CB:kF-iY/!A.Qs(~!EFOo3JSssdWUvMe!6){NT*q)S|cgrU.cHS ,cbNp' );
define( 'AUTH_SALT',        'q%ghN7(IzD1 =HyF)8b:1QY?O-vn#_jpM4SkD@o2;5hr5Ry]*[vmJ6+~F%T>CVQS' );
define( 'SECURE_AUTH_SALT', '^c@d6roA,K>Ie1`WPmJPG<ot#`lR,[3*4rO=.7p$uaXSAr~6F`~?Ws+W]vCi8}OP' );
define( 'LOGGED_IN_SALT',   'iPRF.Cy.qR<-P5SPAN2[Xm8X0%td)^I[wFbSrruO?MJuz|RviECMwzhXgdYq~bss' );
define( 'NONCE_SALT',       'pqqZDD=HG@CLRi#2,kT]@C99xg)2l&(ed#cyaqkelue%^)!y97=Ob8M5$Q<6iVWh' );

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
