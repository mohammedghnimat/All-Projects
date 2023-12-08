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
        $StudentID= $data['StudentID'];
        $Name = $data['Name'];
        $DateOfBirth = $data['DateOfBirth'];
        $Address = $data['Address'];
        $ContactInformation = $data['ContactInformation'];

        if(!empty($data)){
        $sql = "INSERT INTO student( StudentID ,Name,DateOfBirth,Address,ContactInformation) VALUES ('$StudentID','$Name', '$DateOfBirth', '$Address','$ContactInformation')";
        $result = $connection->query($sql);
        }else{
        echo json_encode(array("message"=>"no data"));
        }
}
?>


