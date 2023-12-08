<?php

$conn= mysqli_connect("localhost","root","","school");
$response=array();


if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $id = (int) $_GET['student_id'];


    if($conn){

        $sql = "SELECT * FROM exam JOIN study ON exam.subject_id = study.subject_Id JOIN student ON student.StudentID = study.student_Id WHERE student.StudentID=$id";
        $result=mysqli_query($conn,$sql);


        if($result){
            header("Content-Type: application/json");
            $i=0;
            while($row=mysqli_fetch_assoc($result)){

                $response[$i]['ExamID']=$row['ExamID'];
                $response[$i]['subject_id']=$row['subject_id'];
                $response[$i]['date']=$row['date'];
                $response[$i]['score']=$row['score'];
                $response[$i]['student_Id']=$row['student_Id'];
                $response[$i]['subject_id']=$row['subject_id'];
                $response[$i]['Name']=$row['Name'];
                $i++;

            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }else{
        echo "Database connection failed";

    }

}
?>