<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

include "./include.php";


$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file field is set in the request
    if (isset($_FILES['file'])) {
        // Get file details from the $_FILES array
        $file_name = $_FILES['file']['name'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];

        // Debug: Log file details
        error_log("File Name: $file_name");
        error_log("File Type: $file_type");
        error_log("File Size: $file_size");

        // Define the destination path
        $file_destination = "upload/" . $file_name;

        // Check if the file was successfully moved to the destination
        if (move_uploaded_file($temp_name, $file_destination)) {
            // Insert data into the database
            $sql = "INSERT `courses` SET `course_video`='$file_name'";
            //UPDATE `courses` SET `course_video`='$file_name' WHERE courseID = 4;
            if (mysqli_query($conn, $sql)) {
                $response['success'] = true;
                $response['message'] = "Video uploaded successfully";
            } else {
                $response['error'] = true;
                $response['message'] = "Upload video failed";
            }
        } else {
            $response['error'] = true;
            $response['message'] = "Error moving uploaded file";
        }
    } else {
        $response['error'] = true;
        $response['message'] = "No file uploaded";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid request method";
}

echo json_encode($response);

?>
