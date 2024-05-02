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
/** The name of the database for WordPress wordpress_local*/
define( 'DB_NAME', 'wordpress_local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'test' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'WYV0@T$g<pqA9%9ZN4*KeY*0|}rzs1O-_S_niQuBC&V(U9p(`+ >`>:gZ)Q!<JGh' );
define( 'SECURE_AUTH_KEY',  '5p):3L)08NfF<&&l^Q4=GC`4c5va<Dx5whUopVIDVr-?_fA`Zl+pu#h3SRE3pl?9' );
define( 'LOGGED_IN_KEY',    'z^v|nnq_]$OpBLyG&*HGM@(tpdSuviB[wSX@e{Cb_M$]xABk3.;>gL!c(6?,]~bU' );
define( 'NONCE_KEY',        'zP>0R*yD,;)*WQlqmu5{_`6c|mQM :)`mxw^=SiR@AUNUK<Oum>ou*C)mllIhn{@' );
define( 'AUTH_SALT',        '}l}zk/9_,xP{G+x1Ck.B5)|6h;oSXMQ0yxwV d !U8FXU|@Ff&nc[ 2Y5f]Yq.M?' );
define( 'SECURE_AUTH_SALT', 'Or+*b@KC=?k?Fb}vM8BeB{g5SI9[OOPz9w~wKm~UxV0F~~q4<Ir8daZL2>=I^kU6' );
define( 'LOGGED_IN_SALT',   'E46Az?.)y>024Z&>VQ)%ElE17|,O/TUn$Oriu`Xlj/qb@g<dag+~;ex}#C2EC<w8' );
define( 'NONCE_SALT',       'eoOct.;_AF%aAjcyP^we>`EbLg|xLy{kB?(gTCofa&Mm^+zb$kVBz?<6^fh)q32e' );

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
