<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method='POST'>
        <input id="ee"  type="text " name="todo">
        <input type="submit" name="submit">
    </form>


   

    
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $todo = $_POST['todo'];
    echo '<ul>';
    echo '<li>'; echo $todo ;
    echo '</li>';
        echo '</ul>';
}


?>
</body>
</html> 


 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="todo">
        <input type="submit" name="submit" value="Add To-Do">
    </form>

    <?php
    session_start(); 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['todo']) && !empty($_POST['todo'])) {
            $todo = $_POST['todo'];
            if (!isset($_SESSION['todos'])) {
                $_SESSION['todos'] = array();
            }
            array_push($_SESSION['todos'], $todo);

            echo '<ul>';
            foreach ($_SESSION['todos'] as $item) {
                echo '<li>' . $item . '</li>';
            }
            echo '</ul>';
        }
    }
    ?>
</body>
</html> 
