<?php
class DB_Config
{
    public string $name;
    public string $host;
    public string $user;
    public string $pass;
    public function __construct(string $name, string $host, string $user, string $pass = "")
    {
        $this->name = $name;
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
    }
}
