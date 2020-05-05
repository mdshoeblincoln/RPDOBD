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
define( 'DB_NAME', 'rpdobd_db' );

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
define( 'AUTH_KEY',         'wk}W3Lk`d TgtH#JuE<2S8boo{#a7~vG-TEX7KAb9W/X_Zm1IAUT=my3+0#fYcMO' );
define( 'SECURE_AUTH_KEY',  'N2qtU?q|u7[#F9#u_=cO`XbqC,p=`I!]-m$|HH^jm8eCQ/b~3y3$5xK0S8UN?$a!' );
define( 'LOGGED_IN_KEY',    'yu=.98ZSjVytZ`hnVz1E71t-[AaH^Tv~*}6q;R@1jq&vxx{lxRn*<yJ>=ii=:jGr' );
define( 'NONCE_KEY',        '5xNT7*N5KFP[dI/FH 2Mb0t]X;RKw[kU]LWA$:?HF{JQ;7}uFX,|TjxA0J*1?yy-' );
define( 'AUTH_SALT',        '?I?v+Bi7:|fMLkGs(`C.>.1?GR<K?=`9B.auY<}g_T<;>?)&i/rA7yy*plJ+.q@B' );
define( 'SECURE_AUTH_SALT', 'y1]}jwM[KG<^Af0XS.VRW*XS<AS-&G)H=Zibcwz/#o-jwAo1`UNUdw9<-07H]AyS' );
define( 'LOGGED_IN_SALT',   '_#UG/a=FQVga|(]/.aO%>,:[+v0g?^3B }t(8doNHu^rz[^W2K11hc<XM^X}.y?F' );
define( 'NONCE_SALT',       'jLgq;Vi|Y3=Y{}<#Hl_PFvlv_V&{_%ca$#*%VE; DI7d>:=@ |>f5^~:T %PVYw<' );

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
