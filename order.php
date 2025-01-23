
<?php
include 'db_connect.php';

$item_id = $_POST['item_id'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$email = $_POST['email'];

// Insert order into the database
$sql = "INSERT INTO orders (item_id, quantity, name, email) VALUES ('$item_id', '$quantity', '$name', '$email')";

if ($conn->query($sql) === TRUE) {
    header("Location: success.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
