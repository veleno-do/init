<?php
require( __DIR__ . '\properties.php' );

class Store{
    private $dbh;

    public function __construct()
    {
        try
        {
            $this->dbh = new PDO
            (
                PDO_DSN,
                DATABASE_USER,
                DATABASE_PASSWORD,
                [
                    PDO::ATTR_PERSISTENT => TRUE,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
            );
        }
        catch( PDOException $e )
        {
            echo $e->getwssage();

            die();
        }
    }

    public function login( $name, $password )
    {
        try
        {
            $query = "SELECT * FROM users WHERE user_name = :name";

            $stmt = $this->dbh->prepare( $query );

            $stmt->execute( array( ':name' => $name ) );

            $result = $stmt->fetch( PDO::FETCH_ASSOC );

            $id = $result[ "user_id" ];
            $name = $result[ "user_name" ];
            $hash = $result[ "user_password" ];
        }
        catch( Exception $e )
        {
            echo $e->getMessage();

            die();
        }
        
        if( password_verify( $password, $hash ) )
        {
            return $id;
        }
        else
        {
            return FALSE;
        }
    }

    public function create( $name, $password )
    {
        try
        {
            $password = password_hash( $password, PASSWORD_DEFAULT );
    
            $query = "INSERT INTO users ( user_name, user_password ) VALUES ( :name, :password )";
    
            $stmt = $this->dbh->prepare( $query );
    
            $stmt->execute( array( ':name' => $name, ':password' => $password ) );
        }
        catch( Exception $e )
        {
            echo $e->getMessage();

            die();
        }
    }
}