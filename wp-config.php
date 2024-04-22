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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_wp_site' );

/** Database username */
define( 'DB_USER', 'pmauser' );

/** Database password */
define( 'DB_PASSWORD', 'qJuQzp0bPo' );

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
define( 'AUTH_KEY',         'U~ut2`u;=D&Iyc3TDx i.rKw6|h}E^~8T2lmnmTCE!c]VqDQpI`GYl9n8eICsUZt' );
define( 'SECURE_AUTH_KEY',  'sR|_i($<&cu.OBj6FLOA,+h7aFE{i5~Jez1b3W[o/-mxCf6VYZ=p#z0n</RXOxGJ' );
define( 'LOGGED_IN_KEY',    '6.Kjhxos=]V3%Z)f7|x<9EThg_?C9=Wmyg*e+!`(.k<Lo/F9hVJl4vUIERo!lNl)' );
define( 'NONCE_KEY',        '_ijo~F]:&R!v6&k>>Q;>v-3(Tj|LGe/`6fV!v%KkuY5/f&LD,JMoSo#i?&sa6y.K' );
define( 'AUTH_SALT',        'z|}*z/Y]0f?OQ>FPe`SU;sH{tx1:H=GMCe;/T~d%QFC>G5ergK>%jR*p>Z9b[Y;L' );
define( 'SECURE_AUTH_SALT', '`%m-a#T#G-fp9IanPs&{(DQO_J:A0:^LcVlE=g*:rRq|#Fc#&hUf@.P`_7>;6@Wd' );
define( 'LOGGED_IN_SALT',   '=HE?CIcx1av_ Z4x&63z|WqxHI)XjV5-(O/-+pv|x+J@^Z%wNA0*WRuaH=vZU3.u' );
define( 'NONCE_SALT',       'O.7%?j~i&HTk auO(-S1r,5*O0tICT ?&)*$):6S_D0Td~=w&$T_E-Gu}qQjz2D?' );

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

/* SSL Settings */
define('FORCE_SSL_ADMIN', true);

/* Turn HTTPS 'on' if HTTP_X_FORWARDED_PROTO matches 'https' */
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
