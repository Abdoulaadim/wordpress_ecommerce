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
define( 'DB_NAME', 'y-c_wordpress_bref8' );

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
define( 'AUTH_KEY',         'nS143TIv$KH.zP0w<d6V cukZLlJv)&/{z?DqQ1R)I6)+6h(iky#.x<?KEBMG)~d' );
define( 'SECURE_AUTH_KEY',  'hoz5P}tv*FFjdxh^Gb0IvJ=eYWK,og,}nTmsh4rlkycb&jI<.=wLR9G&l1Mp%Xm2' );
define( 'LOGGED_IN_KEY',    '2Lb1l(#vT7]fE+fD<R46bfP}Zj+96,.37WVW;WAkD#Orr/F0cfWR_Cn&H:5]-{@n' );
define( 'NONCE_KEY',        ':BK&L;`DORQS[X`rWY<D$amOa~ytk+cG|[556~-yDNEOmT#&gzv6}HQ=UfTIh5qd' );
define( 'AUTH_SALT',        'Hr,GEykfdMf(8FC{5YPQr--3<$I!k3:og61|ka[GUz?F7|zGr|Jqv)AHBzi*JuZ*' );
define( 'SECURE_AUTH_SALT', '7(4{#R?QyC&a.I0]i_Vf/?F/s4^yXN5b%+8sdm:B+i]IOSa?(iPHMvrH!%,df-pi' );
define( 'LOGGED_IN_SALT',   'DIt_A$wFF3oR(MLi:Fg?P$#L+eIw2GJ/:veg[5Ay02W]K~Hw`BvYd.M0)ETZD@f1' );
define( 'NONCE_SALT',       '=ngl[2d-ZH1<4<Id5xF+eQkWl7[P<-HRek){1<8Gh2O{?cSm:`Oz+!_vO81IUupR' );

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
/* Multisite */
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/bref8_Wordpress_ecomerce/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
