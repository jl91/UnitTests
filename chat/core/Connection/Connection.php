<?php

namespace core\Connection;

class Connection
{
    private $host       = 'mysql:host=localhost;';
    private $user       = 'root';
    private $pass       = null;
    private $dbname     = null;
    private $connection = null;

    public function __construct()
    {
        $config       = (object) parse_ini_file(CONFIG_PATH.DIRECTORY_SEPARATOR.'application.config.ini');
        $this->user   = $config->username;
        $this->pass   = $config->password;
        $this->dbname = $config->dbname;
    }

    public function getConnection()
    {
        try {
            $this->connection = new \PDO($this->host."dbname={$this->dbname};",
                $this->user, $this->pass, array(\PDO::ATTR_ERRMODE));
        } catch (\PDOException $exc) {
            echo $exc->getTraceAsString();
        }

        return $this->connection;
    }

    public function __destruct()
    {
        $this->connection = null;
    }
}