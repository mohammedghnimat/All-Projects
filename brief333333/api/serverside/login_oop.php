<?php
session_start();

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "ecommerce";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function login($username, $password) {
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $this->conn->prepare($query);
        // $stmt->bind_param("ss", $username, $password);
        $stmt->execute([$username, $password]);

        // $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }

    public function close() {
        $this->conn->close();
    }
}

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function authenticate() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = json_decode(file_get_contents('php://input'), true);
            if ($data && isset($data["username"]) && isset($data["password"])) {
                $username = $data["username"];
                $password = $data["password"];
                $result = $this->db->login($username, $password);
                if ($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    $this->initializeSession($user);
                } else {
                    $this->sendErrorResponse('Invalid username and password');
                }
            } else {
                $this->sendErrorResponse('Invalid JSON data');
            }
        }
    }

    private function initializeSession($user) {
        if($user['role_id'] == '1'){
            $_SESSION['admin_name'] = $user['username'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];
            header('location:admin.php');
        } else {
            $_SESSION['user_name'] = $user['username'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['user_id'] = $user['id'];

            header('location:user.php');
        }
    }

    private function sendErrorResponse($message) {
        $response = array('error' => $message);
        header("Content-Type: application/json");
        echo json_encode($response);
    }

    public function __destruct() {
        $this->db->close();
    }
}

$user = new User();
$user->authenticate();
?>
