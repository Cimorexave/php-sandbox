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
    <form action="index.php" method="post">
        <div>
            <label for="task">your task</label>
            <input type="text" id="task" name="task">
        </div>
        <input type="submit" name="create" value="Create New Tasl">
    </form>
    <style>
        button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2px 5px;
            border-radius: 1rem;
        }

        div {
            display: flex;
            gap: 1rem;
        }
    </style>
</body>

</html>

<?php

if (isset($_POST["create"])) {
    $my_tasks = array();
    array_push($my_tasks, $_POST["task"]);
}


foreach ($my_tasks as $task) {
    echo "task";
}
?>