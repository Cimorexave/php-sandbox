<?php

require "./config.php";
require "./connection.php";
class Query
{
    public array $rows;
    public function __construct(array $statements, DB_Connection $connection)
    {
        foreach ($statements as $statement) {
            $result = mysqli_query($connection->connection, $statement);
            $row = mysqli_fetch_assoc($result);
            array_push($this->rows, $row);
        }
    }
}
class Migration
{
    public array $results;
    public function __construct(array $statements, DB_Connection $connection)
    {
        foreach ($statements as $statement) {
            $result = mysqli_query($connection->connection, $statement);
            array_push($this->results, $result);
        }
    }
}
