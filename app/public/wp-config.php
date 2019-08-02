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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l2HySH7HKx7+mxW33TODTG4mIpdk6PNMDVYtCyVso83gOBxk4sq87K737knFGPbdQtJUFx/zsUq+F6xeyDdEdQ==');
define('SECURE_AUTH_KEY',  'l26tp0VRhibhfWZXUaMf8hKO6H8snVe2pGfMDUuVpkF48dxr4b26zYtoWAeDKqL3cQ1XwuDRg+8xMpVmR0Pn5Q==');
define('LOGGED_IN_KEY',    '6GL7l4Hmg1hC3Ymv+d9bKoKMgeL9yS65CM0cmFA13Fb6JdHUVX11LDFkhvJPv0JN++r/HBrcUGMngxXjU80SCQ==');
define('NONCE_KEY',        'jwbI36I1M2SBq0FTnb6gm2K06qqf/VlqL1+l7qjWsoDICAaW81piV9hY1oGsRfEsPVqjF5lNbmnR5uNn2IHk0A==');
define('AUTH_SALT',        'mLhwZp5IsLzv6uCBafqU4ftRjFCPPbaNNtqUrx4iPToBc4ZK5ggojgNIjCZlMsQJUOzEcz2yI1ahJv+6gJDpQw==');
define('SECURE_AUTH_SALT', 'cMGXd2a2cf7kHcmOW4HkQUvNICQI99UKQUN0jSTybHCSxOj/MkXhDhjdN2zTxtkyruJQ1ahM7ZXSH/chF16/Jg==');
define('LOGGED_IN_SALT',   'KONpLFlSnW63W9mUyQoooyhwuoMzFlp56J70TCVJ9zgpyyOccPsdSBE0jh3xXuGsKgj6+K3MG5UWNf2T7Jq3jw==');
define('NONCE_SALT',       'iuPlWEktmXd6VhPy+S9uKApcFr37egPa7Ms9SBX4o4b6Ix90YwCK/Ihgi26v1j5rgY2LS28RoRCKr7aEsjuBtQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
