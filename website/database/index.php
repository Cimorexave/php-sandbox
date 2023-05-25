<?php
require "./config.php";
$dsn = "mysql:host=$db_host;dbname=$db_name;charset=UTF8";

try {
    $pdo = new PDO($dsn, $db_user, $db_password);
    if ($pdo) echo "Successfully connected to the $db_name database!";
} catch (PDOException $error) {
    echo "Failed Connecting to database. <br>" . $error->getMessage();
}
