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
define( 'DB_NAME', 'labb1-fredrik' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'iO8Ir!brZ~sq @StTaSJ97RS1b+(N/t7Aq>wC(p<0TI&}UCPcUPuuAqd9EBk[;)T' );
define( 'SECURE_AUTH_KEY',  'kA(,So{]N-opg`@Cf/=F8*-nxLyAjp 561}<$hgr<0^zM;&(cSX1.dVfq)_wnfPm' );
define( 'LOGGED_IN_KEY',    'Y4~UB/lwQQ]D%~zpzE2^[+m*h`]dz@Z*QX^&$*jJ&fBPV1x9Sz9}:!_}]7B_*1SA' );
define( 'NONCE_KEY',        '/FagHsF,Q)5]68}:|S-qwe3>R*ks4C(H!5bWb[QasBLc4J>l6E:r#[&@w=(*&yZK' );
define( 'AUTH_SALT',        'D#0mxp5<{yHUI[e&{jB=)%j`?Y`k8GB6Eid2 4/92w(KA%6h6}SaIDu}%D3ZH<x)' );
define( 'SECURE_AUTH_SALT', 'ID[i_ENU}#$wg=I!m5JJC+V/Gk-0z*Vlqh R&bNx.DLMa iv0A~U&bk3]]`iqc0 ' );
define( 'LOGGED_IN_SALT',   '?DBzHk=J~VZ%gq1,0Y*N$%{Rp[+~CS8Y^4ZmaUK3RlU#z6Q2a/vPv%GM9`cbdF,V' );
define( 'NONCE_SALT',       '<UiLEsMX0D~iBy]A[_GXJubNQCDaO^K$V-k]h;U@!NmDY.8PXn%tC1wQXpe<8KX|' );

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
