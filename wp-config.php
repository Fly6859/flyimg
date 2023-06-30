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
define( 'DB_NAME', 'sql8_130_74_138' );

/** Database username */
define( 'DB_USER', 'sql8_130_74_138' );

/** Database password */
define( 'DB_PASSWORD', 'MxCkzXRYYW' );

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
define( 'AUTH_KEY',         '+DjXHI RN[Bn1p=!*y#u8nJS~>TLa)&|}N%L%Rmu,/%HoXXUZYRxfhIY%qPLD)`,' );
define( 'SECURE_AUTH_KEY',  'ni2-4=q V7|Czr/^P=TIiPU)VHF &sKIz b>mNnT.|]^kK ~.KQ61`%D!B%Pu$*)' );
define( 'LOGGED_IN_KEY',    'y0[Ae0*I,HA@Imw<D,6u<ZoCv@*Z/4>epeM}4DB)O/&7-xeg.(61+{zGbydsp?t!' );
define( 'NONCE_KEY',        '(TtC5A+T-638qwMzfa|QMK><k]spNml{4?!8[IFZ<K002~h&*UKC=Ey{&qVe)p h' );
define( 'AUTH_SALT',        'qcjB!rr:;:krp^1]/T%X-e,,%SVmZ&*i&o5Y,K+d=^~GqTK#]+Ma@AbB}n7TNuwU' );
define( 'SECURE_AUTH_SALT', '+4_;@eOw$5pSf5{$.xJA3bH)V Tj8=;-g/8^z^)2k$D6/#}d1C{Ui9z {3)XpF8[' );
define( 'LOGGED_IN_SALT',   'oI,i+.jqZWXS<dV!]hv&0.I$_we$K[>1>_/iojVr9gYb4/Y?i9WQl|3>5At/~C]$' );
define( 'NONCE_SALT',       'Bocdc.}B}-l2A_pYfN:M-G|)5mR!wcEW4g1Uu|*j]?b!U*1TRRC6R1/5c-KsyU:<' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
