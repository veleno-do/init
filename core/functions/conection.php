<?php

/**
 * MySQL access method.
 */
class Connection
{
    /**
     * Database name.
     */
    const DATABASE_NAME = 'task_manage';

    /**
     * Database root user name.
     */
    const DATABASE_USER_ROOT = 'yuto';

    /**
     * Database read only user name.
     */
    const DATABASE_USER_READ = '';

    /**
     * Database write only user name.
     */
    const DATABASE_USER_WRITE = '';

    /**
     * Database root user password.
     */
    const DATABASE_PASSWORD_ROOT = 'dDXy9qUWw7Gi';

    /**
     * Database read only user password.
     */
    const DATABASE_PASSWORD_READ = '';

    /**
     * Database write only user password.
     */
    const DATABASE_PASSWORD_WRITE = '';

    /**
     * Database host.
     */
    const DATABASE_HOST = 'localhost';


    public function __construct( $type )
    {
        if( $type === 'root' )
        {
            define( PDO_DSN, 'mysql:dbname=' . DATABASE_NAME_ROOT . ';host=' . DATABASE_HOST );
            define( DATABASE_USER, DATABASE_USER_ROOT );
            define( DATABASE_PASSWORD, DATABASE_PASSWORD_ROOT );
        }
        else if( $type === 'read' )
        {
            define( PDO_DSN, 'mysql:dbname=' . DATABASE_NAME_READ . ';host=' . DATABASE_HOST );
            define( DATABASE_USER, DATABASE_USER_READ );
            define( DATABASE_PASSWORD, DATABASE_PASSWORD_READ );
        }
        else if( $type === 'write' )
        {
            define( PDO_DSN, 'mysql:dbname=' . DATABASE_NAME_WRITE . ';host=' . DATABASE_HOST );
            define( DATABASE_USER, DATABASE_USER_WRITE );
            define( DATABASE_PASSWORD, DATABASE_PASSWORD_WRITE );
        }

        try
        {
            $pdo = new PDO
            (
                PDO_DSN,
                DATABASE_USER,
                DATABASE_PASSWORD,
                [
                    PDO::ATTR_PERSISTENT => TRUE,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }
        catch( PDOException $e )
        {
            echo $e->getMessage();

            die();
        }
    }

    public static function __connectionStatus()
    {
        if( $pdo )
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}
