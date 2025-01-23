<?php
include 'db_connect.php';

// Fetch all items
$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eyitayo Jersey Shop</title>
    <link rel="stylesheet" href="shoops.css?v=1.1">
    <link rel="stylesheet" href="shop.css?v=1.1">
</head>
<body>
    <ul>
        <li><a href="About me.html">About me</a></li>
        <li><a href="project.html">Home</a></li>
        <li><a href="index.php">Shop</a></li>
    </ul>
    <h1>Welcome to the Jersey Shop</h1>
    <div class="items">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="item">
                <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>">
                <h2><?php echo $row['name']; ?></h2>
                <p>Price: $<?php echo $row['price']; ?></p>
                <a href="item_details.php?id=<?php echo $row['id']; ?>">View Details</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
