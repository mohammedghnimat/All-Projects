<?php
      $dsn = "mysql:host=localhost;dbname=abd";
      $dbusername = "root";
      $dbpassword = "";

      try {
            $pdo = new PDO($dsn,$dbusername,$dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e ) {
              echo "connection Failed: " .$e->getMessage();
      }
?>