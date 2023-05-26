<?php

// Modules
require "./config.php";

// Definitions
class DB_Connection
{
    public mysqli $connection;
    public function __construct(DB_Config $config)
    {
        $this->connection = mysqli_connect($config->host, $config->user, $config->pass, $config->name);
    }
    public function stop()
    {
        mysqli_close($this->connection);
    }
}

$my_config = new DB_Config("mydb", "localhost", "root");
$my_connection = new DB_Connection($my_config);
