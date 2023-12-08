<?php
       include 'connect.php';
       $response=array();
       $sql = "SELECT * FROM subject";
       $result = mysqli_query($connection,$sql);
       if($result){
          $i=0;
          while($row=mysqli_fetch_assoc($result)){
            $response[$i]['name']=$row['name'];
            $response[$i]['Description']=$row['Description'];
          }
          echo json_encode($response, JSON_PRETTY_PRINT);
       }
       if(!$connection){
        echo "connection failed";
       }else{
        echo "connection sucessfully";
       }
?>