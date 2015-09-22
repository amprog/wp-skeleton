<?php

$wordpress_url = 'http://site.org';
$table_prefix = 'wp_';

define( 'WP_HOME',                  $wordpress_url );
define( 'WP_SITEURL',               $wordpress_url );
define( 'WP_CONTENT_DIR',           dirname(__FILE__) . '/content' );
define( 'WP_CONTENT_URL',           $wordpress_url . '/content' );

define( 'DB_NAME',                  'site' );
define( 'DB_USER',                  'user' );
define( 'DB_PASSWORD',              'password' );
define( 'DB_HOST',                  'localhost:/var/run/mysqld/mysqld.sock' );

define( 'DB_CHARSET',               'utf8' );
define( 'DB_COLLATE',               '' );

define( 'DISALLOW_FILE_EDIT',       true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );





include 'wp-salt.php';




    define( 'WP_CACHE',                 true );



    define( 'WP_DEBUG',                 false );
    define( 'WP_DEBUG_DISPLAY',         false );
    define( 'WP_DEBUG_LOG',             false );


define( 'WPLANG',                       '' );

if (!defined('ABSPATH')) {
    define( 'ABSPATH',                  dirname(__FILE__) . '/wp/');
}

require_once(ABSPATH . 'wp-settings.php');

