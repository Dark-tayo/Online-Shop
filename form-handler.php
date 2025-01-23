<?php
include 'db.php';

$itemId = $_POST['item-id'];
$quantity = $_POST['quantity'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO orders (item_id, quantity, name, email) VALUES ('$itemId', '$quantity', '$name', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
