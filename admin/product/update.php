
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update Page</title>
    <link rel="stylesheet" href="product.css">
</head>
<style>
    .form-fields img {
    width: 100px;
    height: 80px;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
</style>
<body>

<?php

include('Config.php');

// For checking purpose start here
// include('Config.php');

$id = isset($_GET['Id']) ? $_GET['Id'] : '';

// Ensure the ID is a valid integer
if (!is_numeric($id) || $id <= 0) {
    die("Invalid product ID.");
}

// For checking purpose end here

// $id = isset($_GET['id']) ? $_GET['id'] : '';
// echo $id;

// $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE Id = $id");
// $data = mysqli_fetch_array($Record);

// $Record = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE Id = $id");

// if ($Record) { // Check if query execution was successful
//     $data = mysqli_fetch_array($Record);
//     if ($data) { // Check if data is not null

// Third way of doing this
$stmt = mysqli_prepare($con, "SELECT * FROM `tblproduct` WHERE Id = ?"); // Prepare statement
mysqli_stmt_bind_param($stmt, "i", $id); // Bind parameter (i for integer)
mysqli_stmt_execute($stmt); // Execute prepared statement
$result = mysqli_stmt_get_result($stmt); // Get result
$data = mysqli_fetch_array($result); // Fetch data
mysqli_stmt_close($stmt); // Close prepared statement (important for resource management)

?>

<form action="update.php" method="POST" enctype="multipart/form-data" id="admin-form">
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
            <option value="Home">Home</option>
            <option value="Gold">Gold</option>
            <option value="Silver">Silver</option>
            <option value="Pearl">Pearl</option>
        </select>
        </div>
        <input type="hidden" name="id" value="<?php echo $data['Id'] ?>">
        <button name="update" class="form-control">Update</button>
    </div>
</form>

<!-- Php update code  -->
 <?php

include('Config.php');

// } else {
//     // Handle case where query returns no data (e.g., display an error message)
//     echo "Error: Product not found.";
// }
// } else {
// // Handle case where query fails (already implemented in your code)
// }


if(isset($_POST['update'])) {
 $id = $_POST['Id'];
 $product_name = $_POST['Pname'];
 $product_price = $_POST['Pprice'];
 $product_image = $_FILES['Pimage'];
 $image_loc = $_FILES['Pimage']['tmp_name'];
 $image_name = $_FILES['Pimage']['name'];
 $img_des = "Uploadimage/".$image_name;
 
 $product_category = $_POST['Pages'];

    mysqli_query($con, "UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`='$product_price',
    `Pimage`='$img_des',`PCategory`='$product_category' WHERE Id = $id");
    header("location: index.php");
   }
 ?>

</body>
</html>