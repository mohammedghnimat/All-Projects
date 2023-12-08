<?php

include 'connect.php';

$data = json_decode(file_get_contents('php://input'), true);

// echo '<pre>';
// print_r($data);
// echo '</pre>';
        $StudentID = "";
        $Name = "";
        $DateOfBirth = "";
        $Address = "";
        $ContactInformation = "";
if (!empty($data)) {
    // header("Content-Type: application/json");      
        $StudentID=$data['StudentID'];
        $Name = $data['Name'];
        $DateOfBirth = $data['DateOfBirth'];
        $Address = $data['Address'];
        $ContactInformation = $data['ContactInformation'];

        $sql = "UPDATE  student SET Name='$Name', DateOfBirth='$DateOfBirth',Address ='$Address', ContactInformation='$ContactInformation' WHERE StudentID='$StudentID'";

        if ($connection->query($sql) === TRUE) {
            echo json_encode(array("message" => "Student that has $StudentID record updated successfully."));
        } else {
            echo json_encode(array("error" => "Error: " . $connection->error));
        }
    
} else {
    echo json_encode(array("error" => "No data received in the request."));
}

$connection->close();

?>