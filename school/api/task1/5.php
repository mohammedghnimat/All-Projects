<?php
include 'connect.php';
$respose=array();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id=(int) $_GET['subject_id'];
    if($connection){
    $sql = "SELECT * FROM exam JOIN subject ON subject.subject_id=exam.subject_id WHERE subject.subject_id=$id";

    $i=0;
    try {
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                // $row = mysqli_fetch_assoc($result);
                // echo "<pre>";
                // print_r($row);
                // echo "<pre>";
                $respose[$i]['Name'] = trim($row['name']);
                $respose[$i]['ExamID'] = trim($row['ExamID']);
                $respose[$i]['subject_id'] = trim($row['subject_id']);
                $respose[$i]['date'] = trim($row['date']);
                $respose[$i]['score'] = trim($row['score']);
                $i++;
            }
            echo json_encode($respose,JSON_PRETTY_PRINT);
        }
    }catch (mysqli_sql_exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }  


    }else{
        echo "Data Base connection failed";
    }
}
?>