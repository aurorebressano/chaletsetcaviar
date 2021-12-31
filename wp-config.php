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
define('DB_NAME', 'integrattfaurore');

/** MySQL database username */
define('DB_USER', 'integrattfaurore');

/** MySQL database password */
define('DB_PASSWORD', 'Mariamika04');

/** MySQL hostname */
define('DB_HOST', 'integrattfaurore.mysql.db:3306');

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
define('AUTH_KEY',         '84Q4pGvLD+eqNArog9DHqkTZzw6p0WXOYeYp77SUH1CPEPDvIk/I39PA1id6');
define('SECURE_AUTH_KEY',  'Zy6HU+gBZqYQPMK93YDpMyJ+r6+ooDaMKXFaNc4RXoPUTS5lcqqFsUAvC3qO');
define('LOGGED_IN_KEY',    'R0IaggzR/AtcSJnD9v2543bAQDhLlE71/swmj6J7Wq5l9bvlDVB0wHFBt5uA');
define('NONCE_KEY',        'FEMB8MvrD1yIiOQSr8hqUZCgi9+A8FFhao7s6YJq5zN8tbbe3+QHJStdZfzj');
define('AUTH_SALT',        '+4CClvrPlQpWI5+JUw1MBckB3y3f7//baxqr5cqd7jwiRHfUEvHvRnKIAOkM');
define('SECURE_AUTH_SALT', 'Y7dHWEEXumz6qKKJb5+rR6JwNFEJaiLIps0zYoQBjErke3OcsBpnWrFokngX');
define('LOGGED_IN_SALT',   'kTGMjbYxAEF3oFFQKYnCEiz8Rr/dlo+En3QtIx04aW6+ao0KM3+iZgmZX3qr');
define('NONCE_SALT',       'M+lVqa7UXkRFNC81pvhH1nv2nJoLUr+aJfZQHS0ppgsHSjfjK0EJ4/xNENfm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wor8969_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('DISALLOW_FILE_EDIT', true);
define('DISALLOW_FILE_MODS', true);