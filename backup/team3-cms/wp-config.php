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
define('DB_NAME', 'ranjeetk_wp991');

/** MySQL database username */
define('DB_USER', 'ranjeetk_wp991');

/** MySQL database password */
define('DB_PASSWORD', 'w[2S1X9]Cp');

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
define('AUTH_KEY',         'ateohmqlmdppspvdkdas7pu0zl5illljbblltkkf1fpkmj5nwlmljt1vih42vxxv');
define('SECURE_AUTH_KEY',  '5kfumgt3eokborkzhv3widbbjryxpzcwwqga9rxmeipwpvn3lkgmnujv5zh6ikme');
define('LOGGED_IN_KEY',    'fks90fyz5tynwbvszakykwsvbwa3fmpc6qmvt7uxapwtdfbejzs9eu4wbecioetw');
define('NONCE_KEY',        'yyozhtuucq7crcitutrgpssbtmcdm2aidddqiwxb89xj1delbiraraftyim9ekhk');
define('AUTH_SALT',        'nriierg5a4kysjcpbeamex9cz5zbhlfhcbuvy8e7rlneu2yfmfh31xzc8hfrhkwl');
define('SECURE_AUTH_SALT', 'fenm4nskzlijwtxfuy5huujqyrhnatmfeaki3hac59ldbppkys43yrikndlblgoe');
define('LOGGED_IN_SALT',   'tfqqlgxpvh3fpmkmrhtaz5yv0rbhicccs00ij3mae9vuth5cjtrtidokeicba8qv');
define('NONCE_SALT',       'zsis4cfnqfcpj5dzqj2qecp8h8lytmmaw80loayglss5ojuciwl1u8jghzng3vfq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp4n_';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
