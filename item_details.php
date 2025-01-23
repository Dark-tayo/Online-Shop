<?php
include 'db_connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM items WHERE id = $id";
$result = $conn->query($sql);
$item = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $item['name']; ?></title>
</head>
<body>
    <h1><?php echo $item['name']; ?></h1>
    <img src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['name']; ?>">
    <p>Price: $<?php echo $item['price']; ?></p>
    <form action="order.php" method="POST">
        <input type="hidden" name="item_id" value="<?php echo $item['id']; ?>">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" min="1" required>
        <label for="name">Your Name:</label>
        <input type="text" name="name" required>
        <label for="email">Your Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Order Now</button>
    </form>
</body>
</html>
