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
define('DB_NAME', 'wptg');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+AD=1}O{64<XGDez{}{dfG$Dl#fdd3%c.Q$(|7]+<?9vXvwr[8+&5 `ul23(oZSW');
define('SECURE_AUTH_KEY',  'po&4O-An=NIQeI7SlWD4BMlaiF L2GlPnoL+O7{Ezi.vuCsRK-NZpPJ`% ,RtMw>');
define('LOGGED_IN_KEY',    'Mkelp|5*roy~9{Q(H6d;tCx,oEo-4oT#f> N=MF3X*ar#604{<E%>:7TtOl3%|M|');
define('NONCE_KEY',        'lFQC3xkGnt2_pRR+xSS`e~r&J }[>{[|Wj3;4 V[10G/iuDfy9-OS_K+EYOVh|rA');
define('AUTH_SALT',        'B3|$l?|$GY|!jQ0Vw+R-nxdTuS0LDz87D-Y5R:S#NC7o{i@>3HFfxpE`|%}7G @[');
define('SECURE_AUTH_SALT', 'JM%[L?ygvE4QIhD<=g~xwV>}bEz]f3E7ho|@V1);hXT(b#Yruw*anuuU2[PbZV]r');
define('LOGGED_IN_SALT',   ':)A+1qy$/F]%TdD/hm^PPwVVCsHl,+S.Stl5yT)A+BQ:(tXFpb:]bW`w2UM.;~Q{');
define('NONCE_SALT',       'p,6w0)N#rD%?)Wb2t]>RL74(_UaY+7A|:wFqZk|zbO9}>,)U[k`B)i^qeA aZBUA');

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
