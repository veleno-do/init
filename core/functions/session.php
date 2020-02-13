<?php
/**
 * Use the static method getInstance to get object.
 */

class Session
{
    const SESSION_STARTED = TRUE;
    const SESSION_NOT_STARTED = FALSE;

    // The state of the session
    private $sessionState = self::SESSION_NOT_STARTED;

    // The only instance of the class
    private static $instance;

    private function __construct(){}

    /**
     * Returns the instance of 'Session'.
     * The session is automaticary initiarized if it was not.
     * 
     * @return object
     */
    public static function getInstance()
    {
        if( isset( self::$instance ) )
        {
            self::$instance = new self;
        }
        self::$instance->startSession();

        return self::$instance;
    }

    /**
     * (Re)start the session.
     * 
     * @return bool TRUE if the session has been initiarized, else FALSE.
     */
    public static function startSession()
    {
        if( $this->sessionState == self::SESSION_NOT_STARTED )
        {
            $this->sessionState = session_start();
        }

        return $this->sessionState;
    }

    /**
     * Stores datas in the session.
     * 
     * @param $name Name of session
     * @param $value your data
     * @return void
     */
    public function __set( $name, $value )
    {
        $_SESSION[ $name ] = $value;
    }

    /**
     * Gets datas from the session.
     * 
     * @param $name Name of the datas to get.
     * @return mixed Datas stored of session.
     */
    public function __get( $name )
    {
        if( isset( $_SESSION[ $name ] ) )
        {
            return $_SESSION[ $name ];
        }
    }

    public function __isset( $name )
    {
        return isset( $_SESSION[ $name ] );
    }

    public function destroy()
    {
        if( $this->sessionState == self::SESSION_STARTED )
        {
            $this->sessionState = !session_destroy();
            unset( $_SESSION );

            return $this->sessionState;
        }

        return FALSE;
    }
}