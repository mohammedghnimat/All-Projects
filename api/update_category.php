<?php
include 'include.php';
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents('php://input'), true);

    if (!empty($data['category_id'])) {
        $categoryid = $data['category_id'];

        // Check if the user exists
        $sql = "SELECT * FROM categories WHERE category_id = $categoryid";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $existingData = $result->fetch_assoc();

            $updateFields = array();

            // Loop through all columns in the 'users' table and construct the update query
            foreach ($existingData as $key => $value) {
                if (isset($data[$key]) && $key !== 'category_id') {
                    $updateFields[] = "$key = '" . ($data[$key] !== null ? $data[$key] : $value) . "'";
                }
            }
            if (!empty($updateFields)) {
                $updateQuery = "UPDATE categories SET " . implode(', ', $updateFields) . " WHERE category_id =$categoryid ";

                if ($conn->query($updateQuery) === TRUE) {
                    echo json_encode(array("message" => "category name updated successfully."));
                } else {
                    echo json_encode(array("error" => "Error updating name category: " . $conn->error));
                }
            } else {
                echo json_encode(array("message" => "No fields to update provided."));
            }
        } else {
            echo json_encode(array("error" => "category not found."));
        }
    } else {
        echo json_encode(array("error" => "Please provide the user ID."));
    }
} else {
    echo json_encode(array("error" => "Invalid request method. Please use PUT method."));
}
// $conn->close();
?>


<!-- 
{
    "category_id":"1",
    "category_name":"brand66"
} -->