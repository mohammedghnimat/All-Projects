<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

include 'include.php';
// Assuming you have established a database connection using mysqli

// Retrieve the JSON payload from the request
$jsonPayload = file_get_contents('php://input');
$data = json_decode($jsonPayload, true);

// Retrieve the category and foot size parameters from the JSON data
$category = $data['category'];
$footSize = $data['foot_size'];

// Prepare the SQL query
$query = "SELECT products.name, products.description, products.price FROM products
          INNER JOIN categories ON products.category_id = categories.category_id
          INNER JOIN footsize ON products.product_id = footsize.product_id
          WHERE categories.category_name = ? AND footsize.footsize = ?";

// Prepare the statement
$stmt = $mysqli->prepare($query);

// Execute the query with parameters
$stmt->execute([$category, $footSize]);

// Get the result
$result = $stmt->get_result();

// Fetch the results
$results = $result->fetch_all(MYSQLI_ASSOC);

// Encode the results as JSON
$jsonResponse = json_encode($results);

// Set the response headers
header('Content-Type: application/json');

// Return the JSON response
echo $jsonResponse;

// Close the statement and database connection
$stmt->close();
$mysqli->close();
?>