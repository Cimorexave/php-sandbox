<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <div class="field">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName">
        </div>
        <div class="field">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>
    </div>
</body>

</html>
<?php
// foreach ($_POST as $key => $value) {
//     echo "$key => $value <br>";
// }
if (isset($_POST["submit"])) {
    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    if (!empty($_POST["firstName"]) && !empty($_POST["lastName"])) {
        echo "Your full name is $firstname $lastname";
    } else echo "Username or Passowrd are missing.";
}
?>