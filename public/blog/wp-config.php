<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'blogadmin');

/** MySQL database password */
define('DB_PASSWORD', 'year2blog');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'o88rI@7BRhf&b6v}$B7QHxOv8Dh:ke#W=H8V|49ge X3:]5yNB}jq[)uH5z3(B+-');
define('SECURE_AUTH_KEY',  '6XM_aASuy&k}YCIZX~?LMTDS F ybN Ik}J6-ekAEJ=_@Y ~V|V+4gWz:CE|S-@`');
define('LOGGED_IN_KEY',    'gy%<9w9xd$Y|LB6j_9s$2r%w:*bHGff;Fa6pkJB*}+ga.YTo24e%==xV[ `VT;`f');
define('NONCE_KEY',        '@WGR1uEQT=b!U.hos~X|~{uF}b)DT$LrE>tNeG1ju#-+w#_P`Ib7mE?T3K: #TY%');
define('AUTH_SALT',        'q1z6OX5n^8R#[^oOWA%n`HFOfCt*vK#]?%P}u@@2^Msm+m3]r,x@16$`k6AO0Uw ');
define('SECURE_AUTH_SALT', 'bCZ{)b>xv>Vtt_+UY{<M^0g{B;g7/)r /MI:`;BDYaW))+THki|.-0~-,#(i~but');
define('LOGGED_IN_SALT',   'j 7grT;>@~Q3zyHr<l#z;RrsgN(z>|Hg]w,`1,q.@J?!W+q:DeSKfH*+{96yAK>x');
define('NONCE_SALT',       'yp;d]-_*+Sih5C.:&0R[Tf^n0pS`1B=WGNdG74?&xXp,jm?+L^65Yk(hO.`(VNl1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
