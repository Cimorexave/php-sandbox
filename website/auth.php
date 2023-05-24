<?php
$username = $_COOKIE["username"];
$password = $_COOKIE["password"];
if (!isset($username) && !isset($password)) {
    header("Location: ./login.php");
}
