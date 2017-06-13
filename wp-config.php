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
define('DB_NAME', 'wordpress');


/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '115.28.80.138');

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
define('AUTH_KEY',         'd-dejP93h#Gvd)rrxFcu&m@ZEM)^^tM]EDZU)7Xy{Y[9jqnK!DG&#atx,sbSGkXy');
define('SECURE_AUTH_KEY',  'OB,B966$YL}Q5|T#()<vb5?M-8Zu*&[r_q74;z]K)6cwpJdi!o&oV{HUA3!(PPP3');
define('LOGGED_IN_KEY',    'hV1]CJ00AyW_LA0; (4S(`uPg&kJA/lx1(j|{3M{542&?YRH_4ht~=AYWCQ|tGsi');
define('NONCE_KEY',        'W24V>VsL4Hk|Wqm}urmTyHl(C)0fJ?(ztz=7W`dUgML,kW{N{FvM.PF&]TELP-gj');
define('AUTH_SALT',        'o_0f&4>!%ot+Wk=5=}~F{GeCll0C^]*lWIdQQtx+/:_F3y,QUhdxAptm~G8z#I{T');
define('SECURE_AUTH_SALT', 'DuLb#!w_:eX n:}oG##$]`Q3qQv?1!ie+*ml30=#=1t}=VI;e.!<s1 fk*fj&hrk');
define('LOGGED_IN_SALT',   'IPf+vgJBD&&@:(S<#<wOWcz?B6GFgJA@$A,{`+$| Rd=/ce{=YMz~O#nGygiZTBv');
define('NONCE_SALT',       'u@UP=~KfJSK:~UQM7Q#&/a/8v3D.mWi~its yo{Vv .2/Os&(B89<vM*_Oc6OtNm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tbl_';

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

