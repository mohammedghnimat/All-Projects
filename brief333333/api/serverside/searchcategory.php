<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");
include 'include.php';

////////////////////////// Method 'POST'    ///////////////////////////////////////////////
/////////////////////////// recieve 'content' ///////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////
//send this json file 
// //
// {
//     "content":"Clothing"
// }
// //
//////////////////////////////////////////////////////////////////////////

if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $json_data = file_get_contents('php://input');

        $data = json_decode($json_data, true);
        if ($data === null) {
            echo "Invalid JSON data.";
        } else {
            // var_dump($data);
        }

        $SearchContent = $data['content'];

$SearchContent = mysqli_real_escape_string($conn, $SearchContent); // Sanitize the inut

$sql = $sql = "SELECT * FROM categories 
WHERE 
    LOWER(category_name) LIKE LOWER('%$SearchContent%')OR
    LOWER(category_id) LIKE LOWER('%$SearchContent%')
ORDER BY category_id ASC;";
;

$result = $conn->query($sql);
$searchResults = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $searchResults[] = $row;
        
    }
}
header('Content-Type: application/json');

echo json_encode($searchResults);


}else {
    // This is not a POST request
    echo "This endpoint only accepts POST requests.";
}

// $conn->close();
?>