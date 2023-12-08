<?php
$connection = mysqli_connect('localhost','root','','school');
if($_SERVER["REQUEST_METHOD"]=="DELETE"){
header("Content-Type: application/json"); 
$data = json_decode(file_get_contents('php://input'), true);

// Check if $data is null
if ($data === null) {
    echo 'Invalid JSON input.';
    exit();
}

$StudentID=$_GET['StudentID'];
$sql = "DELETE FROM student WHERE StudentID='$StudentID' ";
$result = mysqli_query($connection, $sql);
if($result==true){
    echo "connection sucessfully";
}else{
     echo "connection failed";
}
}
?>