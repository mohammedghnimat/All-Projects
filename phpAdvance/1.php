<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text" name="url" />
      <input type="submit" value="Go" />
    </form>
    <?php
        //    $url = $_POST['url'];
        //    echo $url;
            
        if(isset($_POST['url'])){
            $url = $_POST['url'];
            header("Location: $url");
        }
    ?>
  </body>
</html>
