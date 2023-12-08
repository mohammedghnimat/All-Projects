<?php
$servername="localhost";
$username="root";
$password="";
$dbname="phpbrief";

$connection = new mysqli($servername,$username,$password,$dbname);
if(!$connection){
    echo "connection failed";
}else{
    echo "connection sucessfully";
}

?>