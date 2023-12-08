<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">
  
    <input type="text" name="url" >
    <input type="submit" value="GO" >
</form>
 <?php 
//1- make a search engine website that contain URL as input text and button named (GO) if you click on Go
// will redirect you to the written URL


if (isset($_POST['url'])) {
    $url = $_POST['url'];
    header("Location: $url");
}

// question 2



?>
</body>
</html>