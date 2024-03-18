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
define( 'DB_NAME', 'perfectacting_wp' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', 'db32255289' );
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
define( 'AUTH_KEY',         'o0l8ws82v21szoag10atlvl8nxvixcvg7hxv8xhmy6quqbzhdrkxaybz1pxne95q' );
define( 'SECURE_AUTH_KEY',  'pnjwuicpj24cfwx9bzczmrx4zhabdxnyv2gu3t2jgwteckeh0hnhn0kgifk3ueud' );
define( 'LOGGED_IN_KEY',    '76ppulqr83rxfqsbvkq8fom0g3ld4okcif3jdc443fi4vtpq3styibgeyqfz9jyz' );
define( 'NONCE_KEY',        '1kikfnvln5g7ahnu7cupevx3tr4qnpgjk6yp1xi6hczwuxcrw1y3st9go1mbp5jr' );
define( 'AUTH_SALT',        'zoehwgczztkkllgobfxb112npvrjzlfbkhqc2yjpq3uzldnae4uycm0l5lcsqsfy' );
define( 'SECURE_AUTH_SALT', 'ejzcpop2zyvebffvrjsmqbqwoqybdfwf3wjnbm1cnufwlw1jpjzcz8ufln3pru6j' );
define( 'LOGGED_IN_SALT',   'jnnqrmj7sns6btrv5jds2weesiezg84yyhve3f36erwmseplmpyvfpae2e431vwm' );
define( 'NONCE_SALT',       'xy5dzunynypt8huxf2yj69hx7sobdkujz1obtar1xpuwqldgcvrcoag6dh23hyyw' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'perfc_';
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
define('FS_METHOD','direct');