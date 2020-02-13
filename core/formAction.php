<?php
require( './functions/store.php' );
require( './functions/session.php' );

$name;
$password;

if( $_SERVER['REQUEST_METHOD'] === 'POST' )
{
    if( isset( $_POST[ 'create' ] ) )
    {
        $name = $_POST[ 'user_name' ];
        $password = $_POST[ 'user_password' ];

        $name = htmlspecialchars( $name );
        $password = htmlspecialchars( $password );

        $data = new Store();

        $data->create( $name, $password );
    }

    if( isset( $_POST[ 'login' ] ) )
    {
        $name = $_POST[ 'name' ];
        $password = $_POST[ 'password' ];

        $data = new Store();
        $session = Session::getInstance();

        $id = $data->login( $name, $password );

        if( $id )
        {
            try
            {
                $session->__set( 'id', $id );
            }
            catch( Exception $e )
            {
                echo $e->getMessage();

                die();
            }
        }
        else
        {
            echo 'FALSE';
        }
    }
}
