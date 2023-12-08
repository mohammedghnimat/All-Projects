<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");
include 'include.php';

$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data)) {
    $requiredFields = ['category_name'];
    $allFieldsPresent = true;

    foreach ($requiredFields as $field) {
        if (!isset($data[$field]) || empty($data[$field])) {
            $allFieldsPresent = false;
            break;
        }
    }
    if ($allFieldsPresent) {
        $sql = "INSERT INTO categories (category_name) VALUES ('{$data['category_name']}')";
        if ($conn->query($sql) === TRUE) {
            echo json_encode(array("message" => " record created successfully."));
        } else {
            echo json_encode(array("error" => "Error: " . $conn->error));
        }
    } else {
        echo json_encode(array("error" => "Please provide all required fields."));
    }
} else {
    echo json_encode(array("error" => "No data received."));
}
// $conn->close();
?>

<!-- 
{
    "category_name":"brand5"
} -->