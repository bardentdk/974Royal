<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);


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
define( 'DB_NAME', 'db778993867' );

/** MySQL database username */
define( 'DB_USER', 'dbo778993867' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rgSTpjhmValSYPoMfsHv' );

/** MySQL hostname */
define( 'DB_HOST', 'db778993867.hosting-data.io' );

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
define('AUTH_KEY',         '^%))uU|HQ#.4a~$-C#mtDs`U )f=KwdaZ_L27I>bybS|af&h)=;L4@1YU;e1hd7;');
define('SECURE_AUTH_KEY',  '#NBbS(sh9jum@Zj80{=-|{nBlj+++tmC*`F3}=tFx:Pc:_pA|E~cT; PRINBZ3z$');
define('LOGGED_IN_KEY',    '+ IigeHX5 x;|Dx `+smfoF_2#ltSrwPV:~|ye+4~?^MY9a;$<t-{/)KWEg`&!PH');
define('NONCE_KEY',        'r!d{|e.p(oxB>o#T !-k|)R~m7*h/APf91!g$BD*sp%?P1Xu0Ma,kNa}y-$+DE>:');
define('AUTH_SALT',        '~AgS+&&O[2g7so#>+*F9eiHsc3z8-Mi~@Wp^T39oHUcin4V+{=+-S-jN1+-#3/+i');
define('SECURE_AUTH_SALT', ':kY%cN8ZWpC9n{&xV41/`ZOq!TOyKsbTH+~g/?4[][@.1W-}ybsB%22wulw%r|es');
define('LOGGED_IN_SALT',   '*i|1ggqcq,t}6EVF2H[eZJhY0l7<mn E:8BHv6Jo+RL#Q9[pdX3_Ov9Z7PRi-RXx');
define('NONCE_SALT',       'v_c@<vTG-dC(lMbSbN9ag ^pyk%8 V0:F)lK_,eUN)o]rd aVa^MYVQkoM}R/~3C');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'uyVhUZYr';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
