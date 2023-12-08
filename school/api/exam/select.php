<?php

// $connection = mysqli_connect("localhost", "root", "", "school");
// $response = array();
// if ($connection) {
//      $json_data = file_get_contents('php://input');
//      $data = json_decode($json_data, true);
//      $exam_id=$data['ExamID'];
//     $sql = "SELECT * FROM exam WHERE ExamID=$exam_id"; // Corrected SQL query
//     $result = mysqli_query($connection, $sql);

//     if ($result) {
//         $i = 0;
//         while ($row = mysqli_fetch_assoc($result)) {
//             // echo '<pre>';
//             // print_r($row);
//             // echo '</pre>';
//             $response[$i]['ExamID'] = $row['ExamID'];
//             $response[$i]['subject_id'] = $row['subject_id'];
//             $response[$i]['date'] = $row['date'];
//             $response[$i]['score'] = $row['score'];
//             $i++;
//         }
//         echo json_encode($response, JSON_PRETTY_PRINT);
//     }
// } else {
//     echo "Database connection failed";
// }




include 'connect.php';
$respose=array();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $ExamID=(int) $_GET['ExamID'];
    if($connection){
    $sql = "SELECT * from exam WHERE ExamID={$ExamID}";
    try {
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                // echo "<pre>";
                // print_r($row);
                // echo "<pre>";
                $respose['ExamID'] = trim($row['ExamID']);
                $respose['subject_id'] = trim($row['subject_id']);
                $respose['date'] = trim($row['date']);
                $respose['score'] = trim($row['score']);
            }
            echo json_encode($respose,JSON_PRETTY_PRINT);
        }
        catch (mysqli_sql_exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }  


    }else{
        echo "Data Base connection failed";
    }
}
?>