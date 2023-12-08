<?php

// $connection = mysqli_connect("localhost", "root", "", "school");
// $response = array();

// if ($connection) {
//     $sql = "SELECT * FROM student"; // Corrected SQL query
//     $result = mysqli_query($connection, $sql);

//     if ($result) {
//         $i = 0;
//         while ($row = mysqli_fetch_assoc($result)) {
//             // echo '<pre>';
//             // print_r($row);
//             // echo '</pre>';
//             $response[$i]['StudentID'] = $row['StudentID'];
//             $response[$i]['Name'] = $row['Name'];
//             $response[$i]['DateOfBirth'] = $row['DateOfBirth'];
//             $response[$i]['Address'] = $row['Address'];
//             $response[$i]['ContactInformation'] = $row['ContactInformation'];
//             $i++;
//         }
//         echo json_encode($response, JSON_PRETTY_PRINT);
//     }
// } else {
//     echo "Database connection failed";
// }
?>