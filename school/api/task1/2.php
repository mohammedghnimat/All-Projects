<?php
include 'connect.php';
$respose=array();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id=(int) $_GET['subject_id'];
    if($connection){
    $sql = "SELECT * FROM student JOIN study ON student.StudentID=study.student_Id WHERE study.subject_Id=$id";

    try {
        $result = mysqli_query($connection, $sql);
        $i=0;
        if (mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
              
                
                // echo "<pre>";
                // print_r($row);
                // echo "<pre>";
                $respose[$i]['subject_Id'] = trim($row['subject_Id']);
                $respose[$i]['student_Id'] = trim($row['student_Id']);
                $i++;
            }
            echo json_encode($respose,JSON_PRETTY_PRINT);
        }
    }catch (mysqli_sql_exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }  


    }
    else{
        echo "Data Base connection failed";
    }
}
?>