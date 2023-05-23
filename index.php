<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-sandbox</title>
</head>

<body>
    <?php
    echo "click this button!" . "<br>";
    ?>
    <form action="form.php">
        <button>Submit</button>
        <input type="text" name="yourname">
    </form>

    <style>
        button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px 5px;
            border-radius: 50%;
        }
    </style>
</body>

</html>