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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word_db' );

/** Database username */
define( 'DB_USER', 'younes' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          ',{%QH<<$xnNM K[adku[G=i_~fyU2|OO/o@rZ3rle0yp%?x<VvfN_</tDvxoB0A ' );
define( 'SECURE_AUTH_KEY',   '(uxq5$atJGJ9eIz#(ecV4RI3grX{{=NC7]%M5O/u1p%CW*Rgf.qMSDYkJ ?{|}zd' );
define( 'LOGGED_IN_KEY',     'xb&)KO>Rr9jnB^yI60mY$D,N5`:Y[}CIKjNyPYKP#-]PX$&Z:^2b0}5LUzOSn -7' );
define( 'NONCE_KEY',         'jY_WjD`G=~!6@x/3ziCQMI(s57k&8qe3,R8RRJHz@`%<V)d%jY: D0x~N)t`=4UI' );
define( 'AUTH_SALT',         '@^GkBzTr;% {MfLwE?v/5u=~JdT)L(d4e)d`!uS4P<AMSg{]{5}p@4s_pU$fu^l}' );
define( 'SECURE_AUTH_SALT',  'm VX<rtW;pbIJr1e&n{I0+kYuR~*;@zeC7% %Y9$xu=-y]Xqswpg5ln1~[Lz8uYz' );
define( 'LOGGED_IN_SALT',    'J40N {>bX:~k8C7_Q4#k<H*m_#;ZJ$G^v>^<ZMv96&&nZNO~SXEsUw1Qu;[KTB9C' );
define( 'NONCE_SALT',        '/ta=-P,zgR7U8 Tf6wU>q` / `z4$zPZ<<{opZO $O8@9Hz]FQx55Upbe1KQgr[Q' );
define( 'WP_CACHE_KEY_SALT', '`ijTb]Q7gA9C|Rs$fzhUr|3J ZT18hDXxvwJmp~k^9^l-}yS@;9hU?Q@]-Xc$d{O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
