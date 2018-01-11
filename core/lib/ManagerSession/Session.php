<?php namespace core\lib\ManagerSession;

/*
* Gestiona las sessiones de los usuarios
**/
class Session
{

   
    private $sessionState;
    const SESSION_STARTED=true;

    public function startSession()
    {
        if (! $this->sessionState == self::SESSION_STARTED) {
                $this->sessionState = session_start();
        }

        return $this->sessionState;
    }

    public function addValue(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
    * Obtiene un arrreglo de la superGlobal Session
    */
    public function getValue($key)
    {
        if ($this->issetValue($key)) {
            return $_SESSION[$key];
        }
        return false;
    }

    public function removeValue(string $key)
    {
        if ($this->issetValue($key)) {
            unset($_SESSION[$key]);
        }
    }

    public function issetValue($value):bool
    {
        return isset($_SESSION[$value])?true:false;
    }

    /**
    * Destroys the current session.
    *
    *@return    bool    TRUE is session has been deleted, else FALSE.
    **/
    public function destroy():bool
    {
       
            $this->sessionState = !session_destroy();
            unset($_SESSION);
           
            return !$this->sessionState;
    }
}
