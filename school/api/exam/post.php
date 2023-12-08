<?php

$servername="localhost";
$username="root";
$password="";
$dbname="school";

$connection = new mysqli($servername,$username,$password,$dbname);
if($_SERVER["REQUEST_METHOD"]=="POST"){

        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);
// echo '<pre>';
// print_r($data);
// echo '</pre>';
        $subject_id = $data['subject_id'];
        $date = $data['date'];
        $score = $data['score'];

        if(!empty($data)){
        $sql = "INSERT INTO exam(date,subject_id,score) VALUES ('$date','$subject_id', '$score')";
        $result = $connection->query($sql);
        echo json_encode(array("message"=>"done"));
        }else{
        echo json_encode(array("message"=>"no data"));
        }
}
?>

<!-- {
    "date":"2024-01-04",
    "score":"60",
    "subject_id":"2"
} -->
