<?php
include 'connect.php';
$respose=array();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id=(int) $_GET['student_Id'];
    if($connection){
    $sql = "SELECT * FROM subject JOIN study ON subject.subject_id=study.subject_Id WHERE study.student_Id=$id";

    $i=0;
    try {
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                // $row = mysqli_fetch_assoc($result);
                // echo "<pre>";
                // print_r($row);
                // echo "<pre>";
                $respose[$i]['student_Id'] = trim($row['student_Id']);
                $respose[$i]['subject_id'] = trim($row['subject_id']);
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