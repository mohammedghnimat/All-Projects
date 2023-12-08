<?php

$conn = mysqli_connect('localhost','root','','video');
if($conn){
    echo 'connection successfully';
}else{
    echo 'conncetion failed';
}
?>