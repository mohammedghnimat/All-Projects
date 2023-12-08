<?php
      include "connect.php";
      $response=array();
      $sql = "SELECT * FROM teacher";
      $result = mysqli_query($connection,$sql);

      if($result){
        $i=0;
        while($row=mysqli_fetch_assoc($result)){
            $response[$i]['Teacher_Id']=$row['Teacher_Id'];
            $response[$i]['name']=$row['name'];
            $response[$i]['contact']=$row['contact'];
            $response[$i]['subject_id']=$row['subject_id'];
            $i++;
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
      }else{
        echo json_encode(array("message"=>"failed"));
      }


?>