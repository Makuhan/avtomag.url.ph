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
define('DB_NAME', 'u450252009_autom');

/** MySQL database username */
define('DB_USER', 'u450252009_admin');

/** MySQL database password */
define('DB_PASSWORD', 'QdMWc5XJGfPg');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.com.ua');

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
define('AUTH_KEY',         'y6g+LK>F1`P#feFby-tO}BXmXM_y?6$dJI8p+`)u%p_Th(/0TJH*P[LJA|K?[s4O');
define('SECURE_AUTH_KEY',  '+Iw#RJASd/2+U?RNTMgz a<N-d|+$EK;B--S Ori>kj-b|Ys0?xng0U jUtKWQQW');
define('LOGGED_IN_KEY',    'N-JgH1Q])s!8+nmK~wlWZNrZzJS+?|gr ez)PNARck]bwN :q!zs8*E5r^__Nx7w');
define('NONCE_KEY',        '7<tu1oz|epVl%0pKr,mrJQ+W&(sXQO?}0)Ft%4XIHQiUu*I*uIIr7dg,A8e&8N0@');
define('AUTH_SALT',        '|xOLOr|ga9xAb|. +|fZe7$I-ejw#};:jJC=[FbA4z*%:X}eYALMO||x+N jvaed');
define('SECURE_AUTH_SALT', '[%MFj}C=G+a+<Ll|DX}rQwOd--{HCEX_BPQd(A+*gJEsN u|]V7g~}{z!DH12I%o');
define('LOGGED_IN_SALT',   '-B4+C|foj/oSwC`5$-G|vlfX {pz)izfU=Jjdgncd8#vAq)I.0*tRu>AwaHfux`[');
define('NONCE_SALT',       ')Hzx%YC@_~^Umr-2;I5.#B[];H%_/qfEcFISx7hqJm-8k0@,8I-G0q`%}+]}Rqv)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_automag';

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
