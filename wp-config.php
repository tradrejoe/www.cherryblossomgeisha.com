<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cherryblossomgeisha');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '$n00pL10n');

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
define('AUTH_KEY',         ')0+BhEde(b86[P,EL)>v|L3hQ7[Pgi(B+)TT}OVG:UM!#@B#]_H*!FX;+VS=OUTV');
define('SECURE_AUTH_KEY',  ';4g|]21Z5E3lMZJ9?SEk9>x-w2=fx->TS=ue:l7,+[J+,y@6m;{<p2Dh9YC?Jo,-');
define('LOGGED_IN_KEY',    '(QT=qr>%O7>nd&]Vh&+!MyYmbQ/}@>q<n3J7(q%^]+m0IK4#;)0MrOViC.fpybyE');
define('NONCE_KEY',        '|U*(?()1@D?bQh_3|jl:?d620lCK**:^V*n-e%P:S6e[o]Up.YEz:z&jc[Kmh)&#');
define('AUTH_SALT',        'WVX]W|n9O%TA[0aj8x5S!%<2sKTQH4:t#*x%%o6q^/@n%s2U836+B<#8U2<]+,bT');
define('SECURE_AUTH_SALT', 'T[2*=kDUO}0m`uQ8~?LKl,%f|z[ )e<M_BI++ARg7(+qxar({^Wq!F)>Q+:^8:,5');
define('LOGGED_IN_SALT',   '~->,#77s{Bh|x:M![fmI/BKfGZ!`*0p7|*-m,T4<}Fh[GsJCh:r9~@F`4Dv6FMi.');
define('NONCE_SALT',       '/jgUr{eIrx}PW+8OA#.s-beuQ8rE+5(J=,+Qu_hjvjltNbuf+:L#cxgo:&Ap=V{S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

