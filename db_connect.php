
<?php
// db_connect.php
$host = 'localhost';
$db = 'online_shop';
$user = 'root'; // Your MySQL username
$password = ''; // Your MySQL password

// Create a connection
$conn = new mysqli($host, $user, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
