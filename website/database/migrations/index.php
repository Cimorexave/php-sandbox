<?php
require "../index.php";
foreach (glob("*.php") as $filename) {
    if ($filename != "index.php") require_once $filename;
    if (isset($_POST["submit"])) {
        foreach ($statements as $statement) {
            $pdo->exec($statement);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="submit" name="submit" value="Apply Migrations">
    </form>
</body>

</html>