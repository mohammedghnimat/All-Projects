<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>admin</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <a class="btn btn-primary" href="create.php" role="button">New user</a><br>
         <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>user-type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
             $conn = mysqli_connect('localhost','root','','user_validation');


             if (!$conn) {
               die("Connection failed: " . mysqli_connect_error());
             }
                $sql = "SELECT * FROM users";
                // execute the query
                $result = $conn->query($sql);
                //  check if the query is executed
                if(!$result){
                    die("Invalid Query: "  . mysqli_connect_error());
                }

                while ($row=$result->fetch_assoc()) {
                    echo "<tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[password]</td>
                    <td>$row[user_type]</td>
                 
                    <td>
                        <a class='btn btn-primary btn-sm m-2' href='edit.php?id=$row[id]'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                    </td>
                </tr>";
                }
                ?>
            </tbody>
         </table>
         <a href="logout.php" class="btn">logout</a>

   </div>

</div>

</body>
</html>