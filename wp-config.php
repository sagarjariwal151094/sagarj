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
define( 'DB_NAME', 'prj_sagarj' );

/** MySQL database username */
define( 'DB_USER', 'prj_sagarj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pIn69juDkk1FyGeO' );

/** MySQL hostname */
define( 'DB_HOST', '172.104.166.158' );

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
define('AUTH_KEY',         'Am9cldHfGIQU1kEYiaZht7lwakS9HSimvtZrM1d+kwjA4xM8Z0Kp1moExUWHRzfRdHcTYROXZPMVEl+9+a+56A==');
define('SECURE_AUTH_KEY',  'HUeN67YhujaQr0Wxy9GcD+1Mu0AIzy5lsJeLB1E85mvjXbaAUBYihZHZdmGLlajsbB+VFf72mvcbj0Vr9iu95A==');
define('LOGGED_IN_KEY',    'mJBInSJBnaQeOo114KKQdw6ujTNxEotUtfTa/QXzuEAPRQoi++dbaP3mT9dSSolmu+Aj3yYwrXIpsqUzMu0YBQ==');
define('NONCE_KEY',        'YdiKhHMUnbzVJP3EnrFC2LnEsOumjH5uzSIXZAEiXuh6lfK9mz/DBORy3yhI021sjEbHYjcwoV97pMA/1GdvJQ==');
define('AUTH_SALT',        'd2Knl7VOpGL+mdhyg+gEsF9XwGSCHZ5GToF6vWX6PgOZZkJH+X5/K61lI6Yhyb2EFb7AwIjsjgNJNb7kf7KAMw==');
define('SECURE_AUTH_SALT', 'gGy+raZGBm9i9VBRXnFgbTARuiYX3k9Yok6CsNwfSpyRLm0smh8QXhEOY88Xgkapqgi5ZemQIyPkTNaBAD2eqQ==');
define('LOGGED_IN_SALT',   'kPIc0fJVqXcVhRq1Um2hXZggFA9DB5kDNEMqdbyK0lhOV3auUQ5d84HywdFmTEjRPqXJZFkdScRwmadHcnUH5g==');
define('NONCE_SALT',       'TbtxdWfH9pk8lXUUDWRBsmp422aTNJWzTS8ZdFmuUoJ/ShVEGTmZk8MFxKz0zgJjycikaJhahxRKqszCPNcS4w==');

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
