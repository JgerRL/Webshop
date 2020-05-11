<?php

class Database {

    // Private variables, hidden for other classes that are not children or parents of this class
    private $host = '192.168.1.136';
    private $database = 'webshop';
    private $username = 'webshop';
    private $password = 'ThomasEnJosZijnKleineKinderen123';

    public $connection;

    /**
     * Connection method used by most classes to initiate a PDO SQL connection object
     * @return PDO
     */
    public function connect()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }  catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->connection;
    }

}
