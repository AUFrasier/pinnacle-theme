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
define( 'DB_NAME', 'audevsit_pinnacle' );

/** MySQL database username */
define( 'DB_USER', 'audevsit_pinnacle_root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gr,ryn=Og!id' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'CAJ1N)zY`M1>.dPq$yHc!Aa!k2DN;Af%w~Ba@z!:Xp>47;($?;HEDnC5)3;W`ibt' );
define( 'SECURE_AUTH_KEY',   '+a}G3}9hg ;VY_J(]r hza{FZ0Hy0,^2@2vW{VH A=}qOdZyJ&OPJ)UXwQRjB)a*' );
define( 'LOGGED_IN_KEY',     ')J(H~Zu<tFyr&$ajv5 !N~U2`yMkJU2q)VHyR(QW1&z+jr:6CuUfln^Eu0< l){`' );
define( 'NONCE_KEY',         'C8sMP|#L4=Yk}rO,($w*8/[8Fvn{A-h=hzsaG<RreTDFW[J^zY#%lKu}D?/7L0zN' );
define( 'AUTH_SALT',         '~t63>FxB_#G& 1WYE7]M6hjFM/m|X4$wF$qCDAh0s?Kj%:iezjX)=r^%9%qWe!OP' );
define( 'SECURE_AUTH_SALT',  'kZxX[e!tq5v|yfPW[[>Hyn#&Cd+QQ)IE2_~2 5H ;Z|^JoFoW}zf[8f%@scIvrgP' );
define( 'LOGGED_IN_SALT',    'n%vQH$8;ROA#M[(u[87aQuqj<U&494;g@ix vSdAdu6{8L>3^:QD=<F-wwI2rRLD' );
define( 'NONCE_SALT',        'Y-A{x#<+SrqLI0$%pm<5ai{/m/W7h(45Zb6]0o.VI{5nI)[}Ap6ZE[VVkE3hP]Rw' );
define( 'WP_CACHE_KEY_SALT', '{660|A]W^MFKP0IFME1exu-uLY]),|Rh&5v9-x+p/uQOW1:m%BRS_]|`qB{?G%{r' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', false );
define( 'SCRIPT_DEBUG', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
