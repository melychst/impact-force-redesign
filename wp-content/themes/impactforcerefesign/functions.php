<?php

define( 'TEMPLATE_DIRECTORY_URI', get_theme_file_uri() );
define( 'TEMPLATE_DIRECTORY_PATH', dirname(__FILE__) );

define( 'HOME_URL', home_url('/') );

include( TEMPLATE_DIRECTORY_PATH . '/inc/functions.php' );
include( TEMPLATE_DIRECTORY_PATH . '/inc/wp.php' );
include( TEMPLATE_DIRECTORY_PATH . '/inc/init.php' );
