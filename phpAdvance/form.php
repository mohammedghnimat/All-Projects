<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="POST">
      <input type="text"  name="email"  />
      <input type="text" name="password"/>
      <input type="submit">
      
    </form>
    <?php

            echo 'The email is' .$_POST["email"];
            echo 'The password is' .$_POST["password"];
    
    ?>
  </body>
</html>
