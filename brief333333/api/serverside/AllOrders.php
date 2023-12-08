<?php
@include("incloude.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");
$sql = "SELECT * FROM orders";
            $result = $conn->query($sql);
            if (!$result) {
               die("Invalid Query: " . mysqli_connect_error());
            }

            if ($result->num_rows > 0) {
                $columns = array();
                while ($row = $result->fetch_assoc()) {
                    $columns[] = $row['Field'];
                }
                
                echo json_encode($result, JSON_PRETTY_PRINT);
            } else {
                echo json_encode(array('message'=> 'there is no records founds'));
            }            
            ?>