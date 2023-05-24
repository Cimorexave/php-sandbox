<?php
$username = $_COOKIE["usename"];
$password = $_COOKIE["password"];
if (!isset($username) && !isset($password)) {
    header("Location: ./login.php");
}
