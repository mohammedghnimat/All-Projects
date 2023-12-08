<?php
@include("incloude.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");


$user_id = "user_id"; 


$sql="SELECT username,email,order_id,order_date,total_price FROM orders
        INNER JOIN users ON orders.user_id = users.id
        WHERE users.id = $user_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data for each order
    while ($row = $result->fetch_assoc()) {
        echo "order_id: " . $row["order_id"] . "<br>";
        // Add more fields as needed
    }

echo json_encode($result, JSON_PRETTY_PRINT);
            } else {
                echo json_encode(array('message'=> 'there is no records founds'));
            }    
?>




