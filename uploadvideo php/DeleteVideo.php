<?php

include "include.php";

header('Content-Type: application/json');

$response = array();

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data['delete'])) {
        $file_name = $data['file']['name'];
        $file_path = "upload/" . $file_name;

        if (file_exists($file_path)) {
         
            if (unlink($file_path)) {
    
                $sql = "DELETE FROM courses WHERE course_video = '$file_name'";

                if (mysqli_query($conn, $sql)) {
                    $response['success'] = true;
                    $response['message'] = "Video deleted successfully";
                } else {
                    $response['error'] = true;
                    $response['message'] = "Error deleting video record from the database";
                }
            } else {
                $response['error'] = true;
                $response['message'] = "Error deleting video file";
            }
        } else {
            $response['error'] = true;
            $response['message'] = "File not found";
        }
    } else {
        $response['error'] = true;
        $response['message'] = "Invalid request format";
    }
} else {
    $response['error'] = true;
    $response['message'] = "Invalid request method";
}

echo json_encode($response);

?>
