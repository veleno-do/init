<?php
require( './functions/store.php' );
require( './functions/session.php' );

$name;
$password;

if( $_SERVER['REQUEST_METHOD'] === 'POST' )
{
    if( isset( $_POST[ 'generate' ] ) )
    {
        $name = $_POST[ 'user_name' ];
        $password = $_POST[ 'user_password' ];

        $name = htmlspecialchars( $name );
        $password = htmlspecialchars( $password );

        Store::generate( $name, $password );
    }

    if( isset( $_POST[ 'login' ] ) )
    {
        $name = $_POST[ 'name' ];
        $password = $_POST[ 'password' ];

        $session = Session::getInstance();

        $id = Store::login( $name, $password );

        if( $id )
        {
            try
            {
                $session->id = $id;
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
