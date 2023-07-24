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
define( 'DB_NAME', 'hello-wordpress' );

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
define( 'AUTH_KEY',         '3EB&F@],saMZRgjwQ^[=LpS3|Br/k:B(zRRD7yLFC)/UdE1*&a.}G,PJ^HSc3$>P' );
define( 'SECURE_AUTH_KEY',  'm9FrT>~fiQ4~CNV]PXm@X~NS>cfm~cR1o%iZ>k]{5-LFGbTc=xwj>|&qW6[_,]hI' );
define( 'LOGGED_IN_KEY',    '|!pEYhFPfg+VyU+@^GU~skGMJXPD)IYJLC/{5/+[n,P}K~)n Fsxcpo~o_?wE]9u' );
define( 'NONCE_KEY',        '(hN%YV)f|YAjRniaT|/JOTM9#{c2IK<sc7cDB1<u=DcGbu9E]80iG>A?O>a+b?3<' );
define( 'AUTH_SALT',        'JG,{}9=0%`]:7KA%(*[r^V8Fs >zO7;/j%#7y_,b3-h?+#01#HM-CHB#PS`tQdSh' );
define( 'SECURE_AUTH_SALT', '&)N1qQUk@C_X8,R]4_.kq2FlU)J!(V&V,=Q7SxL}Nn`XOOTu<{i<&sQJ3|,XM8/Z' );
define( 'LOGGED_IN_SALT',   '?uYh@&t;p`$3?$oMYJ{o}M+~>Sn[%88-k?(N}ex%6Qm#B4>NA0>A.yYGr*C%U!2$' );
define( 'NONCE_SALT',       ')wr?$EhJfctY3^N4_s=PTrdG<a8!YHYBE7T/=8O&W@&*78SJ^c_c{?;2e$2@#,J[' );

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
