<?php

$connection = mysqli_connect("localhost", "root", "", "phpbrief");
$response = array();
$id=$_GET["id"];
if ($connection) {
    $sql = "SELECT * FROM users WHERE id=$id"; // Corrected SQL query
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            // echo '<pre>';
            // print_r($row);
            // echo '</pre>';
            $response[$i]['name'] = $row['name'];
            $response[$i]['	password'] = $row['password'];
            $response[$i]['email'] = $row['email'];
            $i++;
        }
        
    }
} else {
    echo "Database connection failed";
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Profile Template</title>
    <style>
      body {
        font-family: sans-serif;
      }
      .form-control {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
      }
      .btn {
        cursor: pointer;
        background-color: #000;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
      }
      .events-card {
        width: 250px;
        margin: 10px;
        border: 1px solid #ccc;
        padding: 10px;
      }
      .events-card h3 {
        font-size: 16px;
        margin-bottom: 0;
      }
      .events-card p {
        font-size: 14px;
      }
      .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
      }
      .btn {
        cursor: pointer;
        background-color: #000;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
      }
      .events-cards {
        display: flex;
        flex-wrap: wrap;
      }
    </style>
  </head>
  <body>
    <h1>Profile</h1>
    <form action="#">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" class="form-control" />
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" class="form-control" />
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" class="form-control" />
      </div>

      <button type="submit" class="btn">Submit</button>
    </form>

    <div class="events-cards">
      <h3>Upcoming events</h3>

      <div class="events-card">
        <h3>Event 1</h3>
        <p>Description of event 1</p>
      </div>

      <div class="events-card">
        <h3>Event 2</h3>
        <p>Description of event 2</p>
      </div>

      <div class="events-card">
        <h3>Event 3</h3>
        <p>Description of event 3</p>
      </div>
    </div>
  </body>
</html>
