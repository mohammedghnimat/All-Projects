<?php

include 'connect.php';

$data = json_decode(file_get_contents('php://input'), true);

// echo '<pre>';
// print_r($data);
// echo '</pre>';
        $subject_id = "";
        $date = "";
        $score = "";
        if (!empty($data)) {
    // header("Content-Type: application/json");    \
        $ExamID=$data['ExamID'];  
        $subject_id=$data['subject_id'];
        $date = $data['date'];
        $score = $data['score'];

        $sql = "UPDATE  exam SET subject_id='$subject_id', date='$date',score ='$score' WHERE ExamID='$ExamID'";

        if ($connection->query($sql) === TRUE) {
            echo json_encode(array("message" => "Student that has $ExamID record updated successfully."));
        } else {
            echo json_encode(array("error" => "Error: " . $connection->error));
        }
    
} else {
    echo json_encode(array("error" => "No data received in the request."));
}

$connection->close();

?>