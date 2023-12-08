<?php
      // include "connect.php";
      // $response=array();
      // $json_data = file_get_contents('php://input');
      // $data = json_decode($json_data,true);

      // $Teacher_Id=$data['Teacher_Id'];
      // $sql = "SELECT * FROM teacher WHERE Teacher_Id=$Teacher_Id";
      // $result = mysqli_query($connection,$sql);
      // if($result){
      //   $i=0;
      //   while($row=mysqli_fetch_assoc($result)){
      //       $response[$i]['Teacher_Id']=$row['Teacher_Id'];
      //       $response[$i]['name']=$row['name'];
      //       $response[$i]['contact']=$row['contact'];
      //       $response[$i]['subject_id']=$row['subject_id'];
      //       $i++;
      //   }
      //    echo json_encode($response,JSON_PRETTY_PRINT);
      // }
      // else{
      //   echo json_encode(array("message"=>"failed"));
      // }


     include 'connect.php';
$respose=array();
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    $Teacher_Id=(int) $_GET['Teacher_Id'];
    if($connection){
    $sql = "SELECT * from teacher WHERE Teacher_Id={$Teacher_Id}";
    try {
        $result = mysqli_query($connection, $sql);
        if (mysqli_num_rows($result)>0){
                $row = mysqli_fetch_assoc($result);
                // echo "<pre>";
                // print_r($row);
                // echo "<pre>";
                $respose['Teacher_Id'] = trim($row['Teacher_Id']);
                $respose['name'] = trim($row['name']);
                $respose['contact'] = trim($row['contact']);
                $respose['subject_id'] = trim($row['subject_id']);
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