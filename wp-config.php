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
define( 'DB_NAME', 'wordpress_portfolio_db' );

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
define( 'AUTH_KEY',         ';g;dv~ZottV Z_zz,lT5rhs%%fzSkR+X$Xw5uqg|MlX!HLsljnJ[HTK1oAr5ip<-' );
define( 'SECURE_AUTH_KEY',  's/YO.*7~@F^(>`udffM9 pvfz90ss(`HcP[D>Nd<Ip/%CXw:TjRa:QW5&V~]M3wy' );
define( 'LOGGED_IN_KEY',    '0P/}xFsn}lk1lulfH005&B?[s|/C[l,VHKd9@,p[B|@~p)L1^B,z=CRF3IzQ_mR9' );
define( 'NONCE_KEY',        'K11H.-00DX@Q-mri,-DE9*L#_A `g#neCV;|.6TIdHY,1VYrSm~e7[zi~`7nOH>g' );
define( 'AUTH_SALT',        '!4~?6:$V[_4lq5Z-^4CywJwI]YDcE k3!A4z6<#RP}i@C^h>adOdX<u+uX+_E;9j' );
define( 'SECURE_AUTH_SALT', '_a#eTS=g?hsse-/!{H0`SPA-~j`BPKC=<iJ#X9T6v|t 5j}WM&>?Bp~0]KCACLY:' );
define( 'LOGGED_IN_SALT',   '9}RlTbhG$t.4JFZBQM03~7ft89A&ilu2f-DcnaB*7)zGZ@s*rFx QK{p4qHJ^.i`' );
define( 'NONCE_SALT',       ']}I.BE4z%;<e^amq8MR1::pA8JJkHi9<U!6[.VIGs]U6yW!{e(yC< Y:mpg=`dj0' );

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
