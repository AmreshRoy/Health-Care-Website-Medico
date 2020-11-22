<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hoy1bVXeW7tySWKBOf7AaeIY3dmBUvkpGmlkmt3xk0vtdOzoj4gbeUIweHAFIPNm7Zpsc8FRQwXhUOJLNdE2GA==');
define('SECURE_AUTH_KEY',  'C8fgSMF76e2cL1r3KbEReOxg2udQVz9OG65ps4G0a4X/cWF+8f+pN3S7GvieBhj95WjpGFMVPK5Q/jknqJF6Jg==');
define('LOGGED_IN_KEY',    'oHJt5IfDm2JvujRO1zioIN4WwX1DpXBi7A3tkFCZBgKNztT6qUTLmAbdd7d3601FEqk8Qqw8zyXoJOgEUrbetg==');
define('NONCE_KEY',        'K3KgpQX/w1diRqKgP5j9hyqD2eDeCvTG7LDYp80NSjL3x9GbxFyjgEW8GRjjjLfgQUbtkoCPd/jw4qemIw7Kpw==');
define('AUTH_SALT',        '962k3n+qmSfHPsUne1YRc0vbkQR3ugq0S9dLlQawMG+X8tDJ7KfpMvaZgZ4wt64gOo/qSy3Okxejy8Yv0bb/3Q==');
define('SECURE_AUTH_SALT', 'EVIUoGyZvhndfhrv7ueRB58RwR5dqCrG3zTJ0ac9m6dGj833zMuUiCsXtyZ/m6qlz1KPbF04i6/OeFQWc7SShQ==');
define('LOGGED_IN_SALT',   '0QpA4rZIF/d3Ze5BrrV3sQP2sBej4suUnN7mLlQKjNTL2EIz1Ui2ebXw6Y3z+I5W6rT9RDbSS+W8DbGQ4LQnyQ==');
define('NONCE_SALT',       'myS//MnCq6kR604e50SPZrTJtXBoHswaOpB20JwU679ZHE99+Hb9NthaIj+dExKivDq57swegnF3t8NKzew/Ew==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
