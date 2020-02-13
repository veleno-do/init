<?php
require( __DIR__ . '\properties.php' );

class Store{
    public $dbh;

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

    public static function login( $name, $password )
    {
        try
        {
            $query = "SELECT * FROM users WHERE user_name = :name";

            $stmt = self::$dbh->prepare( $query );

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

    public static function generate( $name, $password )
    {
        try
        {
            $id = uniqid( '', TRUE );
            $password = password_hash( $password, PASSWORD_DEFAULT );
    
            $query = "INSERT INTO users ( user_id, user_name, user_password ) VALUES ( :id, :name, :password )";
    
            $stmt = self::$dbh->prepare( $query );
    
            $stmt->execute( array( ':id' => $id, ':name' => $name, ':password' => $password ) );
        }
        catch( Exception $e )
        {
            echo $e->getMessage();

            die();
        }
    }
}