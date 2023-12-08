<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

include "./include.php";

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $file_name = $_FILES['file']['name'];
        $temp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        $file_type = $_FILES['file']['type'];

        // Define the destination directory for the video
        $video_destination = 'C:\xampp\htdocs\MasterPiece\TeacherDashboard\video\\' . $file_name;

        // Additional data for insertion
        $coursename = $_POST['coursename'] ?? "";
        $course_pdf = $_FILES['course_pdf']['name'] ?? "";

        if (move_uploaded_file($temp_name, $video_destination)) {
            $sql = "INSERT INTO `courses` (`coursename`, `course_video`, `course_pdf`) VALUES ('$coursename', '$file_name', '$course_pdf')";

            if (mysqli_query($conn, $sql)) {
                $response['success'] = true;
                $response['message'] = "Video uploaded successfully";
            } else {
                $response['error'] = true;
                $response['message'] = "Error inserting data into the database: " . mysqli_error($conn);
            }
        } else {
            $response['error'] = true;
            $response['message'] = "Error moving the video file";
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
