<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update Page</title>
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>

<?php
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
} else {
    echo "ID is not set.";
    exit;
}

include 'Config.php';
$result = mysqli_query($con, "SELECT * FROM tblproduct WHERE Id = $id");
if (!$result) {
    echo "Query failed: " . mysqli_error($con);
    exit;
}
$data = mysqli_fetch_array($result);
?>

<form action="update1.php" method="POST" enctype="multipart/form-data" class="admin-form">
    <div class="form-section">
        <h2>Product Update:</h2>
        <div class="form-fields">
            <label for="">Product Name:</label>
            <input type="text" value="<?php echo $data['PName'] ?>" name="Pname" class="form-control" placeholder="Enter Product Name">
        </div>
        <div class="form-fields">
            <label for="">Product Price:</label>
            <input type="text" value="<?php echo $data['PPrice'] ?>" name="Pprice" class="form-control" placeholder="Product Price">
        </div>
        <div class="form-fields">
            <label for="">Add Product Image:</label>
            <input type="file" name="Pimage" class="form-control">
            <img src="<?php echo $data['Pimage'] ?>" alt="">
        </div>
        <div class="form-fields">
            <label for="">Select Product Category:</label>
            <select class="form-select" name="Pages">
                <option value="Home" <?php echo ($data['PCategory'] == 'Home') ? 'selected' : ''; ?>>Home</option>
                <option value="Gold" <?php echo ($data['PCategory'] == 'Gold') ? 'selected' : ''; ?>>Gold</option>
                <option value="Silver" <?php echo ($data['PCategory'] == 'Silver') ? 'selected' : ''; ?>>Silver</option>
                <option value="Pearl" <?php echo ($data['PCategory'] == 'Pearl') ? 'selected' : ''; ?>>Pearl</option>
            </select>
        </div>
        <input type="hidden" name="updateid" value="<?php echo $data['Id'] ?>">
        <button name="update" class="">Update</button>
    </div>
</form>

</body>
</html>
