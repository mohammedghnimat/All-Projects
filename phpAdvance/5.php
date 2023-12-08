
<?php
session_start();
if(isset($_SESSION['visitor_count'])){
    $_SESSION['visitor_count']++;
}else{
    $_SESSION['visitor_count']=1;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Wlocome to Mohammed </h1>
        <p>The number of visitor is<?php echo $_SESSION['visitor_count'];?></p>
</body>
</html>

