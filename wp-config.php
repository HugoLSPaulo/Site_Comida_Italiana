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
define( 'DB_NAME', 'site' );

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
define( 'AUTH_KEY',         'eqv>}NdAF2My_^ymPD/1>w*P`E;lX^!6=9/b/{zdZrIHC(|y)Jz=n;V~cEkU*:y|' );
define( 'SECURE_AUTH_KEY',  'CwCDG(@$3?a#L&u a@ML)ZkUQ6f!=%p hG(<8ntv1IK:~$SK19KDwiD&lxOF~.$%' );
define( 'LOGGED_IN_KEY',    'BgE$q~&Z17vy1C85`_$HdZz%v_7}ga^tv9@|Yt}|Kn5tpQqwH-8@pwe>|T=W,47p' );
define( 'NONCE_KEY',        '7,+ 28zKGjxZ *Z}8BSjMh(91/6<LJy8$u+}@cG |w$c{8A7Gz.`~i$[CG,4uU$X' );
define( 'AUTH_SALT',        'DA5Ku4COY!tB1VP1v@G.Ib7%rI}+!5NJG7^<wlMOp%$DlNODi%SsNrdmZv?*#YI!' );
define( 'SECURE_AUTH_SALT', 'z/GcsPl5:0+X-]5:M,[]5Ekd,WJP_kl#()4$<u:oD8f%Y_@98b,jb!hO-pAOo%$B' );
define( 'LOGGED_IN_SALT',   'Jr|YJDcfoSH~kq.4,toRZJaB*1=OP?@T%YFG136YI4!-q%uEE~e>2Tm|q_A]nwyc' );
define( 'NONCE_SALT',       'za_HgVIt?b$y%16H5aLPmiX}kZ-YkX,aMemdSeX{?zHq~i{mzP7i]DUP%F#L/R7i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hp_';

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
