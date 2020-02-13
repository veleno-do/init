<?php
/**
 * Loads the task management application environment and template.
 * 
 * @package task management
 */

require( __DIR__ . '/core/functions/store.php' );
require( __DIR__ . '/core/functions/session.php' );
require( __DIR__ . '/core/functions/template.php' );

$data = new Store();
$session = Session::getInstance();

if( !( $session->__isset( 'id' ) ) )
{
    header(  'Location: ./core/login.html' );
}
else
{
    header( 'Location: http://localhost/MAMP/' );
}
