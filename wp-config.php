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
define( 'DB_NAME', 'sabiauba_wp856' );

/** MySQL database username */
define( 'DB_USER', 'sabiauba_wp856' );

/** MySQL database password */
define( 'DB_PASSWORD', '@SPm0l42p[' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'sfxzd3o0u469nfpktltojetxrygidegxr6plv0n3btigt5dw0adtjid2husfn2mo' );
define( 'SECURE_AUTH_KEY',  '0fceitideui5boczmwqxrd8dwfpmysl2r4zs2xrxrmf0tsirwwegh9aiuinzmd4j' );
define( 'LOGGED_IN_KEY',    'n81oiib5r7wmgrh7krbezpwj1eye8tvipirpz66dnsr0x1csj9bjhrk4rhcfkouy' );
define( 'NONCE_KEY',        'xydov7fl81ck8iwzzjeefbqrju8l9n5ubzgagrzoaalac6onsonqkfegkcexx6y1' );
define( 'AUTH_SALT',        'rovk11lzpej4ch48zvbg6cf2jv4kpinq3urkbxybzp7oxnkfghrsojlj3f5w2jps' );
define( 'SECURE_AUTH_SALT', 'm4npppbuzgdinguiyylpa2pnniqk1qqcipm27erdwzvhznvjqmbthif9ile9kn4e' );
define( 'LOGGED_IN_SALT',   'wfixrrofogptbqdegap54mxyol92tfi5doxrriji7od7h2oq7hhwtm6vcvdl0itc' );
define( 'NONCE_SALT',       'ugz5h57mmenlfpam5wf9ebp9sazuroajifdw26hsxqrggouaj4wumrk2hatbp5hc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_08';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
