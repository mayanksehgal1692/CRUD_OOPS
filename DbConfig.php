<?php
class DbConfig
{
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = 'harambe';
    private $_database = 'test';

    public $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {

            $this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            print_r($this->connection);
            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this;
    }
}
?>
