<?php
      // include "connect.php";
      // $response=array();

      // $json_data = file_get_contents('php://input');
      // $data = json_decode($json_data,true);
      // $subject_id=$data['subject_id'];
      // $sql = "SELECT * FROM subject WHERE subject_id=$subject_id";
      // $result = mysqli_query($connection,$sql);

      // if($result){
      //   $i=0;
      //   while($row=mysqli_fetch_assoc($result)){
      //       $response[$i]['subject_id']=$row['subject_id'];
      //       $response[$i]['name']=$row['name'];
      //       $response[$i]['Description']=$row['Description'];
      //       $i++;
      //   }
      //   echo json_encode($response,JSON_PRETTY_PRINT);
      // }else{
      //   echo json_encode(array("message"=>"no data"));
      // }

      // if(!$connection){
      //   echo "connection failed";
      // }else{
      //   echo "connection sucessfully";
      // }

include 'connect.php';
$respose=array();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $subject_id=(int) $_GET['subject_id'];
    if($connection){
    $sql = "SELECT * from subject WHERE subject_id={$subject_id}";
    try {
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                // echo "<pre>";
                // print_r($row);
                // echo "<pre>";
                $respose['subject_id'] = trim($row['subject_id']);
                $respose['name'] = trim($row['name']);
                $respose['Description'] = trim($row['Description']);
            }
            echo json_encode($respose,JSON_PRETTY_PRINT);
        }
        catch (mysqli_sql_exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }  


    }else{
        echo "Data Base connection failed";
    }
}

?>