<?php
      include "connect.php";
     
       $json_data = file_get_contents('php://input');
       $data = json_decode($json_data, true);

      if($_SERVER["REQUEST_METHOD"]=="POST"){
      $name=$data['name'];
      $description=$data['Description'];
      $sql = "INSERT INTO subject(name,Description) VALUES('$name','$description')";
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
//     include "connect.php";

// if($_SERVER["REQUEST_METHOD"]=="POST"){

//         $json_data = file_get_contents('php://input');
//         $data = json_decode($json_data, true);
// // echo '<pre>';
// // print_r($data);
// // echo '</pre>';
//         $name = $data['name'];
//         $description = $data['Description'];
        

//         if(!empty($data)){
//         $sql = "INSERT INTO subject(name,Description) VALUES ('$name','$description')";
//         $result = $connection->query($sql);
//         echo json_encode(array("message"=>"done"));
//         }else{
//         echo json_encode(array("message"=>"no data"));
//         }
// }
?>


<!-- {
    "name":"strength",
    "Description":"strength subject"
} -->