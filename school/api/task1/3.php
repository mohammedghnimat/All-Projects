<?php
         include "connect.php";
     
       $json_data = file_get_contents('php://input');
       $data = json_decode($json_data, true);

      if($_SERVER["REQUEST_METHOD"]=="POST"){
      $id1=$data['student_Id'];
      $id2=$data['subject_Id'];
      $sql = "INSERT INTO study(student_Id ,subject_Id) VALUES('$id1','$id2')";
      $result=mysqli_query($connection,$sql);
      if($result){
        echo json_encode(array("message"=>"success")); 
      }else{
        echo json_encode(array("message"=>"failed"));
      }
      if(!$connection){
        echo "connection failed";
      }else{
        echo "connection successfully";
      }
    }

?>