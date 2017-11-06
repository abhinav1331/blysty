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
define('DB_NAME', 'blysty');

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
define('AUTH_KEY',         ']o8?8@}LEYy<w&cmJ:_b_,Z:IK.A8.o(#!JTEN3b.aG+-(wGWmneM.,XPV$>(pAh');
define('SECURE_AUTH_KEY',  '7#rbX6~@Z{8=2BJ[y43adKRJxdZQD[?N ,SJW;76Q[CC_&@lWG]1J:pjdG;oYY&I');
define('LOGGED_IN_KEY',    'A4-KNO@Q?+Q_A*#8j[)u<Hzs!}/Jt_h$bHt/4}8?WR_SAeYGDo<5v330e,d,z+ar');
define('NONCE_KEY',        'qXuib^c*oZ^`z=;Pz5M?T2eegVLj6: Q!}Z24K15UN{jE#Pc-uj/{8V5{%SFIix8');
define('AUTH_SALT',        '{#]X|2GyY &WscH:q{{POU+Ra]HeFf3SdVRKBe{$D,CV8_w}Q`dnyI1a2FJv}s)_');
define('SECURE_AUTH_SALT', '<yq:K?w+DRT%kW$~(sUag%Z2IyB/QoR<DitiHdwATB!:_N+/>d=W}C-4}Oa{Y-7j');
define('LOGGED_IN_SALT',   'OucND&@dXpD#6rqb!+X`k2Zy/f-m9^.-N[$@~ BW!0kAh6BykOz}@*2%SglY)2yb');
define('NONCE_SALT',       ':]lp5}NNsnhzAB R~:uP@(DJ-<i2gr:Gn$Un?aeU/X%+wX (Bwv(;Q_GA9@p!0O.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
