<?php
/**
 * Loads the task management application environment and template.
 * 
 * @package task management
 */

require( __DIR__ . '/core/functions/session.php' );
require( __DIR__ . '/core/functions/template.php' );


if( !isset( $_SESSION[ 'name' ] ) )
{
    header(  'Location: ./core/login.html' );
}
else
{
    
}
