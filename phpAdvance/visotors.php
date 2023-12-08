<?php

session_start();

if (isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count']++;
} else {
    $_SESSION['visitor_count'] = 1;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>
<body>
    <h1>Welcome to our website!</h1>
    <p>You are visitor number <?php echo $_SESSION['visitor_count']; ?></p>
</body>
<?php echo $_SESSION['visitor_count']; ?>
</html>
<!-- refresh counter -->