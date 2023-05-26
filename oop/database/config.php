<?php
class DB_Config
{
    public string $name = "mydb";
    public string $host = "localhost";
    public string $user = "root";
    public string $pass = "";
    public function __construct(string $name, string $host, string $user, string $pass = "")
    {
        $this->name = $name;
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
    }
}
