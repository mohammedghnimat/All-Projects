<?php

$connection = mysqli_connect("localhost", "root", "", "school");
$response = array();

if ($connection) {
    $sql = "SELECT * FROM exam"; // Corrected SQL query
    $result = mysqli_query($connection, $sql);

    if ($result) {
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            // echo '<pre>';
            // print_r($row);
            // echo '</pre>';
            $response[$i]['ExamID'] = $row['ExamID'];
            $response[$i]['subject_id'] = $row['subject_id'];
            $response[$i]['date'] = $row['date'];
            $response[$i]['score'] = $row['score'];
            $i++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} else {
    echo "Database connection failed";
}
?>