<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u777713816_Rqu0P' );

/** Database username */
define( 'DB_USER', 'u777713816_dQdK5' );

/** Database password */
define( 'DB_PASSWORD', 'nwrt08P7Zk' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'QBAwA#;6|QXv+ /NNDtNkUv)r.2W@tq6uJh}3*QwaE0ymO7y<{5lI&mn1uf4f?g<' );
define( 'SECURE_AUTH_KEY',   'lV|{*_8s_K!@QhXABasl.=S)ux,)Xu,^UfvKDcG>Mb$7ILWcQr8xL_|A[lKkjZDM' );
define( 'LOGGED_IN_KEY',     '8Y}k20O4qo`Ajup~G!{1/u/o^)WC ,5YT3s!_er9>V#B6a$FqZX4*96%F=Ct%7E}' );
define( 'NONCE_KEY',         'S){YBMIW8cc)FpkQ9skv{47gmBmb/vo.tZQ1teq-|qj`]!$7:#UX9Dmgm7b&,R6r' );
define( 'AUTH_SALT',         'g-WAKAMt2V&RzHoh{RPjcGo]8cgY61QC7]-Fb?i%$[LzB &rlJg`&R`e)Stqy-<O' );
define( 'SECURE_AUTH_SALT',  'I7{&zImtPKSJfG(8MGH3Hmc9)ds,%gDu9?Q*Jhqiu#@2urmjh,Y0w;Kj`KmAlhZf' );
define( 'LOGGED_IN_SALT',    '|J=$1fx4[z5IkA@Qc4S.qy|{@]<`o)hRz6TF>EX,KB?h0|:m4#~-.*f!ym5A)XM8' );
define( 'NONCE_SALT',        'B<2OIFWp)aXnSlSr><N><<Cd%eI`nI3o!tF*&lVlwj!)j9iOT:vQ 2Dpk+8x8x[w' );
define( 'WP_CACHE_KEY_SALT', 'kSsBfh=nFym3N+?LSn;Ga#KZnS-4 !@#TYs5AMEr3|Y5|B*0u?V~_rZ b[WSls+c' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '8cd972073c8e9c3adfde376bd793e7c3' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
