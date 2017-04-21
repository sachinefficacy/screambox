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
define('DB_NAME', 'blogscreambox_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'as#*vRZTT]uzTq4CrjM@A:Nm4#ub7sYr%1oDeHgE`V,W{|wuxev]k%@D5~LC}9O=');
define('SECURE_AUTH_KEY',  '-O{6@SGPUKx3y 2$~D->i81|_p:I<CcGU_dpen7RXWIorW_;[fHx[;cEH~D0na[<');
define('LOGGED_IN_KEY',    ',e*;U[wR6|Pm|GX38.G.Jv,2Ju^Sfx_=wChgytBh~1&MhW<(yfyHgh:voni>n|-n');
define('NONCE_KEY',        'Lr<.Q$@^llJC^=NGW@k .O/<^I6bqG^Nsn0S$JoJR=9e&g6B_D&S=,<_,ew9js>B');
define('AUTH_SALT',        'h]gYSh$$~$;ptEo}<!>2iomkVpq_Yj+:xHLg=<1xfk}x(32=()Ud{IrHJ_({)C}1');
define('SECURE_AUTH_SALT', ']v5F{P5cr PN]999P|Qk ||klj+x?M,KNn}3~zW{Wcy#Br+f6tWuJMoBQ*zo0r,`');
define('LOGGED_IN_SALT',   '|bB9zBec#<v_k/&FEpB0QSGPxBE{K.Y ~1 @/nCr+o[merM4J,>^>gQ0:b/g^ii%');
define('NONCE_SALT',       '/+X,aOUJ9wi#$m{8 hU&[{9zoahuX3[]ELTx%]eIp4Qdj3>)i d1M|@UY,</yJ!<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
