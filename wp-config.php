<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J1 q5KV!i{a)<e(gD(xz0CaLoQtLoKnGJkD4`;?F_t&eTV!pRs8l0Ia#(G&=F%}n' );
define( 'SECURE_AUTH_KEY',  'uSg#|@ i6<;k<2&m^siR]ppXoMxJPlwB3( ?9LIB#Nb~0g/J1L#CZH*Au:q VU]s' );
define( 'LOGGED_IN_KEY',    '#]8ru!0q(ng{NDmxM`x^+?y|C$dAZtlbV:yA&S?WIsEMCOU D6s6]kYbZ%*4MM`z' );
define( 'NONCE_KEY',        '#~t),~nWyGl]HzYkmC6!7CjSAHBXUU(`0P&i;y~R]~o(@= =?YvVuMPy5oxe_7TG' );
define( 'AUTH_SALT',        '}7U^JwRs1Cl9/oi1fF^I#UW8-LFZP9L9nXfU@Iw?0 *B%*;IrH/M?.3e.y&X]!qY' );
define( 'SECURE_AUTH_SALT', ':#|Et/4IV~lu%#PA,rpEdKCW4yZVM~Duq.>].U^ $&<WIJj?c&D8d3txsu,;X@u!' );
define( 'LOGGED_IN_SALT',   '8:gv!.%|-wDnJ$a>.6)rcCDe/O4Z1a^Lw.nhk(?+Plfp)xzxdq(,PnXEf$lXD}:Y' );
define( 'NONCE_SALT',       'GNsH>Y(>r@04GQd,P?ZL~/N|Cxqe52|XCKj=4I{o4v,_49rh!nIAa_&aN<7H/ti~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
