<?php

$connection = mysqli_connect("localhost", "root", "", "phpbrief");
$response = array();

if ($connection) {
    $sql = "SELECT * FROM users"; // Corrected SQL query
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
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} else {
    echo "Database connection failed";
}
?>