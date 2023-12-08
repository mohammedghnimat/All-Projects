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
        $teacher_id = $data['Teacher_Id'];
        $name = $data['name'];
        $contact = $data['contact'];
        $subject_id = $data['subject_id'];

        if(!empty($data)){
        $sql = "INSERT INTO teacher(Teacher_Id,name,contact,subject_id) VALUES ('$teacher_id','$name', '$contact','$subject_id')";
        $result = $connection->query($sql);
        echo json_encode(array("message"=>"done"));
        }else{
        echo json_encode(array("message"=>"no data"));
        }
}
?>

<!-- {
    "Teacher_Id":"9",
    "name":"yazan",
    "contact":"088889",
    "subject_id":"14"
} -->