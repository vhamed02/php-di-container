<?php

class Database
{
    private $host;
    private $username;
    private $password;
    private $dbname;

    /**
     * @param $host
     * @param $username
     * @param $password
     * @param $dbname
     */
    public function __construct($host, $username, $password, $dbname)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }
}