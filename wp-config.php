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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ehealth' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'g7M)F%dgB)7}bP,Pc%b_RodeAtDU|d~F>[~~@U--xnlJR9+JjxqK*VMA-pt^=j4t' );
define( 'SECURE_AUTH_KEY',  'y1~h4k;x28-U6x0#RM2;SHH#gp V~)pr^>1IzUWRzw15e&MZ/J3Wic%BM^6wEC`X' );
define( 'LOGGED_IN_KEY',    'lkZq.;]}?tfcddA3r+ZUuKwq7S<tMjb 3E4hK%k~em{OGVlDFkA,/rtj.jzgaor.' );
define( 'NONCE_KEY',        'hB5A^<6Z_3^5rk[-,vGZ$[cP!:rz9~:=R/q-YQl5@wXauOs*%f ?>fz4b*N>+&+J' );
define( 'AUTH_SALT',        'mIIxNlT_GMoHm>5{ju OIvRg)$O|ue?S,sd+PaT/JNze,=@G-jH&&?$Gc8Vstl4c' );
define( 'SECURE_AUTH_SALT', 'Ai)Wxk_x])HsdhbH./w*2r?|_7^ M$t`5DPcVq)C];JIiLfq_<dO & tply>%0u%' );
define( 'LOGGED_IN_SALT',   'C5C7sKiM{!Z]}UY@APJWE[/7+.c*S|_bCeN$Z(t( 9C4P&(Y})RUNl|Wu9Hp4e~|' );
define( 'NONCE_SALT',       'd$PnR,6e;o|hDLQb.)tY?hc%Q(p-t[6^_gTE{_qy#Jj@H==H[D4]iVIrE:D2vt3 ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
