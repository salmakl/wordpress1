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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'R]NwT.ghC&ntjl.q]1f.kxr`zd7GB}kBJ!Yo$Hb~=a[s/9=)#{fhQD;0f=OS3j|Z' );
define( 'SECURE_AUTH_KEY',  'E(aVDyhCV$ou72OP?hqk=Kn(I?EBK,Vqk 1u/9(V8gH|H(D<2XZC^);-D-@aD6>q' );
define( 'LOGGED_IN_KEY',    'y$`?2_>0y?Q)|bP]Pv%3K7r !<`xPF_5ZIp&D;[_aX5h1#5H|q|tSM*CVQvo55kX' );
define( 'NONCE_KEY',        'cma?Ch+; {,$n_;yJ4{7J2-|=J~ZJ-hP!*EWxi2w;zc8N*.A#EpLgW;VN*#ObwJH' );
define( 'AUTH_SALT',        '(rJ^%Def@]i7j,x k-~vC-M}}l|L?EU1R$&@>+^[hC4=bER+W6@x#,*~%=)1uD9l' );
define( 'SECURE_AUTH_SALT', '4D}Qz;zh`RY1].!U6)|m?xhFq:^^,5$}sqj7xh=RS$<zc/l#4oK;J*[{yk^NoGl<' );
define( 'LOGGED_IN_SALT',   'z$<W%VbMW.0sazn22XGtK1j]J|p*Xh;gV+O*ax4f|pE`/w%-J8XU*=Cr.6B3z,|z' );
define( 'NONCE_SALT',       'I)Z>vc5JgTlP3OPq%b8)kCM{uYljoHr]&AgtmYg7@[3B2DDJnDwW{w%(z?@cEL<H' );

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
