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
define( 'DB_NAME', 'wp-blog-2019' );

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
define( 'AUTH_KEY',         'h{MUZcDS8kkea,~V+}PMSOW`-D]+MZD%sWp:1)EOaT%Cs+lLPX7U}~asTlwAI}qN' );
define( 'SECURE_AUTH_KEY',  'F-Derq;LF(l=q2LO<A8{GCf`_EI+ki.3OjChl#(q6Hd=FH%;Ld0CT.Y3Ur<@(tTD' );
define( 'LOGGED_IN_KEY',    'JlMA<sDZ%pV9OPM&4_YF<uS@S*I[lF}gmn=~E%t,.UIw*RzC#@+<#1/v?lxkzLB:' );
define( 'NONCE_KEY',        'lv]{@0/[d=~>kK>13W|Ur_H k/et?T@u|;`OMVPFl%Il=NFc#,lCtu#GNe8hZ>]-' );
define( 'AUTH_SALT',        'd2vnt[,oy=q+>:4.{y<u{?bcVxi aa`y=aWw]Lp>t4/GOQ+rhXF%r[a!cGmrap_I' );
define( 'SECURE_AUTH_SALT', 'VV)rA16d0rZ!~xCu[H<4DKv7MPy8z_|pj{^UCz6,!&1S3B#.;JJi ;@,p^Jrl?Nf' );
define( 'LOGGED_IN_SALT',   'Ilyj)_[aSTl6)1bm@xw_0o0y`t;W,Z1Ewo[=9g)7#<e CYFMgqwPX[,X eP7e-B{' );
define( 'NONCE_SALT',       'moBwST89E$P3(3Xq`j~M-wW<w)Ikb&F:Nj$zh8g!2xox5PI=wgvNLkd,2_<fJu~Q' );

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
