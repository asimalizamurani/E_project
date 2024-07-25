
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Update Page</title>
    <link rel="stylesheet" href="product.css">
</head>
<body>

<?php
$id = $_GET['ID'];
// echo $id;

include 'Config.php';
$result = mysqli_query($con, "SELECT * FROM `tblproduct` WHERE Id = $id ");
$data = mysqli_fetch_array($result);

?>

<form action="update.php" method="POST" enctype="multipart/form-data" class="admin-form">
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
        <button name="update" class="">Update</button>
    </div>
</form>

<!-- Php update code  -->
 <?php


if(isset($_POST['update'])) {
 $id = $_POST['id'];
 $product_name = $_POST['Pname'];
 $product_price = $_POST['Pprice'];
 $product_image = $_FILES['Pimage'];
 $image_loc = $_FILES['Pimage']['tmp_name'];
 $image_name = $_FILES['Pimage']['name'];
 $img_des = "Uploadimage/" . $image_name;
 move_uploaded_file($image_loc, "Uploadimage/" . $image_name);
 
 $product_category = $_POST['Pages'];

 include 'Config.php';
 
 mysqli_query($con, "UPDATE `tblproduct` SET `PName`='$product_name',`PPrice`=' $product_price',`Pimage`='$img_des',`PCategory`=' $product_category' WHERE Id = $id");
      header("location: index.php");
   
   }
 ?>

</body>
</html>