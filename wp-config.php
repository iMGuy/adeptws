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
define('DB_NAME', 'adeptws');

/** MySQL database username */
define('DB_USER', 'shguy');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'r2kXkijhBUATxmyQkitMtcnONd74BGNYZrmtmWmpVyL9p9wcH9Cd43XNOTM1dgoL');
define('SECURE_AUTH_KEY',  '1E6yRn3ynZ6VSlxMhS0jA9vnol6LKBzjRMMWj85OfUf8Ojvcts5EetZzppLUhjHY');
define('LOGGED_IN_KEY',    '6YQOVYttRhHSMOD3y6zw7Tb9Y44QhTpmtWN8rmYk8RhVP6yO0LOScfz8E18iHL2r');
define('NONCE_KEY',        'TeDo4rIh3OFm2pTY7s6BJrEPc0oqIvcrLrXKl9h9SZ5HtFWbotmtgBHtc9QKy56l');
define('AUTH_SALT',        '1UqwaENiYMX6PaFaAEkqPCKLAV8wcrXwKLdGyxBjfRSJZnUxef4kbY8eHWf9MwTx');
define('SECURE_AUTH_SALT', 'S6b9YJ9KMP9DQmAeSUJAYyTbXYCUMRgLGQWBVnKaLs0vLLoPbPWehUuIisI5BVqw');
define('LOGGED_IN_SALT',   's28Itur1s4ix9LIkrlVWqdr9n4iUPQbKjKCtKGGGWQSJY3F4OZlb7XFj8RxxHI7k');
define('NONCE_SALT',       'vuX8RthMnrT6mSBX42kSTKmtLmTKYAJqn7s5Iupnq57L9cuF2DRnBHscqIQr6m2G');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
