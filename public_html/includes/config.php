<?php

/**
 * config
 * 
 * @package Sngine
 * @author Zamblek
 */

// ** MySQL settings ** //
/** The name of the database */
define('DB_NAME',  getenv('DB_NAME') ? getenv('DB_NAME') : 'rubikcomm_db');

/** MySQL database username */
define('DB_USER',  getenv('DB_USER') ? getenv('DB_USER') : 'rubikcomm_dbuser');

/** MySQL database password */
define('DB_PASSWORD',  getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : '<z{CB:RXA/+&66;gW^NF');

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : '35.198.116.74');

/** MySQL port */
define('DB_PORT', '3306');

// ** System URL ** //
define('SYS_URL', getenv('SYS_HOST') ? getenv('SYS_HOST') : 'http://localhost'); // e.g (http://example.com)

// ** i18n settings ** //
define('DEFAULT_LOCALE', 'en_us');

/**
 * For developers: Sngine debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use debug
 * in their development environments.
 */
define('DEBUGGING', true);


// ** LICENCE ** //
/**
 * A unique key for your licence.
 */
define('LICENCE_KEY', '');
