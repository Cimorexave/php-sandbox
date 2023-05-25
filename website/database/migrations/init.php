<?php

require "../index.php";
if ($pdo) echo "Connection Existing";

$statements = ["CREATE TABLE Users (
    id INT NOT NULL PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
  );"];
