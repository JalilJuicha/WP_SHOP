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
define( 'DB_NAME', 'wp_shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'M?vbb3yQ*(b<l~=S:kdD(1`SF({.Pu>1be(RRffJ{R[*V({:|zmEv$iWkO77Tq-Q' );
define( 'SECURE_AUTH_KEY',  '(I!t.yOxXM;r~]bQUJ%.|)bV50Sj:C!6x%f2R-C)&EZ|}1GkT*2R5L8CQ=n8nSb$' );
define( 'LOGGED_IN_KEY',    '8_t?!:fnM<uY1NGw9Sp{Pgi Pa}qw|#L{cvbBIYB}/Vp`Z4~vzK_[=`,DZZj^5(y' );
define( 'NONCE_KEY',        'co}y+o@pd}0`/EPO9niPVyzw=J${^/--rG*Zn%in?:N!D4?H.V%Yicr Dzy+fG6P' );
define( 'AUTH_SALT',        'ki_i+]@3vTq).TBfU{+qLhr1(Cu-g hef*S-oW[&m=6xO3;0[9Be1W&ZRb)0SC$*' );
define( 'SECURE_AUTH_SALT', '>or]t7LBWa}:iY7yho<I`sh-r7 T|iM+_AImI0X%-30aQnPj*}zZ7%eqgg!Ei%El' );
define( 'LOGGED_IN_SALT',   '2|HR]Z-Th|Ir[K#D}g.[{%#ovs?YOfG+-%dd1NHN35z:OSy^zYAJXXD~6Gqx/*f?' );
define( 'NONCE_SALT',       'G]t_H>#Q_cjdsJ<%ETS/!AkF32#6D%]9JZUfSy<A?4*Q>TA7i<CYYi.M<82qy9]u' );

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
