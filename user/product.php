
<?php

include "Config.php";

// Get the product ID from the URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch the product details from the database
$sql = "SELECT * FROM tblproduct WHERE Id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if product is found
if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    die("Product not found.");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($product['PName']); ?></title>
</head>
<body>
    <h1><?php echo htmlspecialchars($product['PName']); ?></h1>
    <!-- <p><?php echo htmlspecialchars($product['description']); ?></p> -->
    <p>Price: $<?php echo htmlspecialchars($product['PPrice']); ?></p>
</body>
</html>
