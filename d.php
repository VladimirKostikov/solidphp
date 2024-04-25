<?php

/**
 * Dependency Inversion Principle
 * High-level modules should not depend on low-level ones. Both kinds of modules must depend on abstractions.
 */

interface ConnectionInterface {
    public function connect();
}

class DbConnection implements ConnectionInterface {
    /**
     * db connection
    */
    public function connect()
    {
        var_dump('MYSQL Connection');
    }
}

class PasswordReminder {

    private $dbConnection;

    public  function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection =  $dbConnection;
    }
}